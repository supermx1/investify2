import { toast } from "svelte-sonner";
import dayjs from 'dayjs';
import relativeTime from 'dayjs/plugin/relativeTime';

export const formatCurrency = (amount: number) => {
    return new Intl.NumberFormat('en-GB', {
        style: 'currency',
        currency: 'GBP',
        maximumFractionDigits: 0,
    }).format(amount);
};

export const formatNumber = (num: number) => {
    return new Intl.NumberFormat('en-GB').format(num);
};


export function addArrayItem(array: any[], item: any) {
    array.push(item);
}

export function removeArrayItem(array: any[], index: number) {
    array = array.filter((_, i) => i !== index);
    return array;
}

export function copy(text: string, message?: string) {
    navigator.clipboard.writeText(text);
    toast.info(message || 'Copied to clipboard');
}

export function formatDateExt(dt: string) {
    const date = new Date(dt);
    return date.toLocaleDateString('en-GB', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        hour12: false
    });
}

export function formatDateDay(dt: string) {
    const date = new Date(dt);
    return date.toLocaleString('default', {
        year: 'numeric',
        month: 'short',
        day: 'numeric'
    });
}

// Extend dayjs with the relativeTime plugin
dayjs.extend(relativeTime);
export function timeAgo(date: string | Date | null) {
    if (!date) return '';
    return dayjs(date).fromNow();
}

export function linkTransform(link: any) {
    // Handle YouTube links
    let videoId = link.split('v=')[1];
    if (!videoId) {
        videoId = link.split('youtu.be/')[1];
    }
    if (videoId) {
        return `https://www.youtube.com/embed/${videoId}`;
    }

    // Handle Vimeo links
    const vimeoRegex = /(?:vimeo\.com\/)(\d+)/;
    const vimeoMatch = link.match(vimeoRegex);
    if (vimeoMatch) {
        return `https://player.vimeo.com/video/${vimeoMatch[1]}`;
    }

    return link;
}

export function validateLink(link: string) {
    // Basic URL validation
    try {
        new URL(link);
    } catch {
        return false;
    }

    // Check if it's YouTube or Vimeo
    const youtubeRegex =
        /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/;
    const vimeoRegex = /(?:vimeo\.com\/)(\d+)/;

    return youtubeRegex.test(link) || vimeoRegex.test(link);
}

// Currency exchange rate cache to avoid excessive API calls
let exchangeRateCache: { rate: number; timestamp: number } | null = null;
const EXCHANGE_RATE_CACHE_DURATION = 3600000; // 1 hour cache (exchange rates don't change that frequently)

/**
 * Convert GBP amount to USD using Exchange Rate API
 * @param gbpAmount - Amount in GBP to convert
 * @returns Promise with the converted USD amount or null if conversion fails
 */
export async function convertGBPToUSD(gbpAmount: number): Promise<number | null> {
    try {
        const now = Date.now();

        // Check cache first
        if (exchangeRateCache && now - exchangeRateCache.timestamp < EXCHANGE_RATE_CACHE_DURATION) {
            return gbpAmount * exchangeRateCache.rate;
        }

        // Fetch from Exchange Rate API (free tier, no API key required)
        // Guys pay for this if you want to use it sha
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/GBP');

        if (!response.ok) {
            throw new Error('Failed to fetch exchange rate');
        }

        const data = await response.json();
        const rate = data.rates?.USD;

        if (!rate) {
            throw new Error('USD exchange rate not available');
        }

        // Cache the rate
        exchangeRateCache = {
            rate: rate,
            timestamp: now,
        };

        return gbpAmount * rate;
    } catch (error) {
        console.error('Error converting GBP to USD:', error);
        return null;
    }
}

// Crypto price cache to avoid excessive API calls
const cryptoPriceCache: { [key: string]: { price: number; timestamp: number } } = {};
const CACHE_DURATION = 60000; // 1 minute cache

/**
 * Convert USD amount to cryptocurrency amount using CoinGecko API
 * @param usdAmount - Amount in USD to convert
 * @param cryptoSymbol - Cryptocurrency symbol (e.g., 'Bitcoin', 'Ethereum', 'USDT')
 * @returns Promise with the converted crypto amount or null if conversion fails
 */
export async function convertUSDToCrypto(
    usdAmount: number,
    cryptoSymbol: string
): Promise<{ amount: number; symbol: string; formattedAmount: string } | null> {
    try {
        // Map common crypto names to CoinGecko IDs
        const cryptoIdMap: { [key: string]: { id: string; symbol: string } } = {
            bitcoin: { id: 'bitcoin', symbol: 'BTC' },
            btc: { id: 'bitcoin', symbol: 'BTC' },
            ethereum: { id: 'ethereum', symbol: 'ETH' },
            eth: { id: 'ethereum', symbol: 'ETH' },
            usdt: { id: 'tether', symbol: 'USDT' },
            tether: { id: 'tether', symbol: 'USDT' },
            usdc: { id: 'usd-coin', symbol: 'USDC' },
            bnb: { id: 'binancecoin', symbol: 'BNB' },
            binancecoin: { id: 'binancecoin', symbol: 'BNB' },
            solana: { id: 'solana', symbol: 'SOL' },
            sol: { id: 'solana', symbol: 'SOL' },
            cardano: { id: 'cardano', symbol: 'ADA' },
            ada: { id: 'cardano', symbol: 'ADA' },
            xrp: { id: 'ripple', symbol: 'XRP' },
            ripple: { id: 'ripple', symbol: 'XRP' },
            dogecoin: { id: 'dogecoin', symbol: 'DOGE' },
            doge: { id: 'dogecoin', symbol: 'DOGE' },
            polkadot: { id: 'polkadot', symbol: 'DOT' },
            dot: { id: 'polkadot', symbol: 'DOT' },
            litecoin: { id: 'litecoin', symbol: 'LTC' },
            ltc: { id: 'litecoin', symbol: 'LTC' },
        };

        const normalizedSymbol = cryptoSymbol.toLowerCase();
        const cryptoInfo = cryptoIdMap[normalizedSymbol];

        if (!cryptoInfo) {
            console.error(`Unsupported cryptocurrency: ${cryptoSymbol}`);
            return null;
        }

        const cacheKey = cryptoInfo.id;
        const now = Date.now();

        // Check cache first
        if (cryptoPriceCache[cacheKey] && now - cryptoPriceCache[cacheKey].timestamp < CACHE_DURATION) {
            const cachedPrice = cryptoPriceCache[cacheKey].price;
            const cryptoAmount = usdAmount / cachedPrice;
            return {
                amount: cryptoAmount,
                symbol: cryptoInfo.symbol,
                formattedAmount: formatCryptoAmount(cryptoAmount, cryptoInfo.symbol),
            };
        }

        // Fetch from CoinGecko API
        const response = await fetch(
            `https://api.coingecko.com/api/v3/simple/price?ids=${cryptoInfo.id}&vs_currencies=usd`
        );

        if (!response.ok) {
            throw new Error('Failed to fetch crypto price');
        }

        const data = await response.json();
        const priceInUSD = data[cryptoInfo.id]?.usd;

        if (!priceInUSD) {
            throw new Error('Price data not available');
        }

        // Cache the price
        cryptoPriceCache[cacheKey] = {
            price: priceInUSD,
            timestamp: now,
        };

        const cryptoAmount = usdAmount / priceInUSD;

        return {
            amount: cryptoAmount,
            symbol: cryptoInfo.symbol,
            formattedAmount: formatCryptoAmount(cryptoAmount, cryptoInfo.symbol),
        };
    } catch (error) {
        console.error('Error converting USD to crypto:', error);
        return null;
    }
}

/**
 * Format crypto amount with appropriate decimal places
 */
function formatCryptoAmount(amount: number, symbol: string): string {
    // For stablecoins, use 2 decimal places
    if (['USDT', 'USDC'].includes(symbol)) {
        return amount.toFixed(2);
    }

    // For Bitcoin, use up to 8 decimal places
    if (symbol === 'BTC') {
        return amount.toFixed(8);
    }

    // For Ethereum and most others, use up to 6 decimal places
    if (['ETH', 'BNB', 'SOL'].includes(symbol)) {
        return amount.toFixed(6);
    }

    // Default to 4 decimal places
    return amount.toFixed(4);
}

/**
 * Convert GBP amount directly to cryptocurrency (GBP → USD → Crypto)
 * @param gbpAmount - Amount in GBP to convert
 * @param cryptoSymbol - Cryptocurrency symbol (e.g., 'Bitcoin', 'Ethereum', 'USDT')
 * @returns Promise with the converted crypto amount or null if conversion fails
 */
export async function convertGBPToCrypto(
    gbpAmount: number,
    cryptoSymbol: string
): Promise<{ amount: number; symbol: string; formattedAmount: string; usdAmount: number } | null> {
    try {
        // First convert GBP to USD
        const usdAmount = await convertGBPToUSD(gbpAmount);

        if (usdAmount === null) {
            console.error('Failed to convert GBP to USD');
            return null;
        }

        // Then convert USD to crypto
        const cryptoResult = await convertUSDToCrypto(usdAmount, cryptoSymbol);

        if (cryptoResult === null) {
            console.error('Failed to convert USD to crypto');
            return null;
        }

        return {
            ...cryptoResult,
            usdAmount, // Include the intermediate USD amount for reference
        };
    } catch (error) {
        console.error('Error converting GBP to crypto:', error);
        return null;
    }
}