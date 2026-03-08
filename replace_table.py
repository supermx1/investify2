import sys

with open('resources/js/pages/user/MyWallets.svelte', 'r') as f:
    lines = f.readlines()

new_content = """        <div class="grid gap-4 mt-2">
            {#each wallets as wallet (wallet.id)}
                {@const crypto = $SUPPORT_CRYPTOS.find((c) => c.symbol === wallet.cryptocurrency)}
                {@const cryptoName = crypto?.name || wallet.cryptocurrency}
                {@const hasReceived = Number(wallet.received) > 0}
                
                <div class="group flex flex-col sm:flex-row sm:items-center justify-between p-5 bg-card rounded-xl border shadow-sm hover:shadow-md transition-all gap-4">
                    <!-- Left: Wallet Details -->
                    <div class="flex items-center gap-4 min-w-0">
                        <!-- Crypto Icon/Badge -->
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary font-bold text-lg">
                            {wallet.cryptocurrency.substring(0, 3)}
                        </div>

                        <!-- Info -->
                        <div class="min-w-0">
                            <h3 class="font-semibold text-foreground text-base truncate">{wallet.name}</h3>
                            <div class="flex items-center gap-2 text-sm text-muted-foreground mt-0.5">
                                <span class="font-medium text-foreground">{cryptoName}</span>
                                <span class="text-border dark:text-zinc-700">•</span>
                                <!-- Truncated address -->
                                <span class="font-mono text-xs truncate max-w-[120px] sm:max-w-[200px] lg:max-w-[300px]" title={wallet.address}>
                                    {wallet.address}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Stats & Actions -->
                    <div class="flex items-center justify-between sm:justify-end gap-6 border-t sm:border-t-0 pt-4 sm:pt-0 mt-2 sm:mt-0">
                        <!-- Received Stats -->
                        <div class="text-left sm:text-right">
                            <p class="text-xs text-muted-foreground mb-1">Total Received</p>
                            <p class="font-semibold text-sm {hasReceived ? 'text-green-600 dark:text-green-400' : 'text-foreground'}">
                                {formatCurrency(Number(wallet.received))}
                            </p>
                        </div>

                        <!-- Actions -->
                        <div class="flex items-center gap-2">
                            <Button variant="outline" size="sm" class="h-10 w-10 p-0 text-muted-foreground hover:text-primary transition-colors" onclick={() => handleEdit(wallet)}>
                                <Pencil class="size-4" />
                                <span class="sr-only">Edit</span>
                            </Button>
                            <Button variant="outline" size="sm" class="h-10 w-10 p-0 text-muted-foreground hover:text-destructive hover:border-destructive/30 hover:bg-destructive/10 transition-colors" onclick={() => handleDelete(wallet.id)}>
                                <Trash2Icon class="size-4" />
                                <span class="sr-only">Delete</span>
                            </Button>
                        </div>
                    </div>
                </div>
            {:else}
                <div class="flex flex-col items-center justify-center py-16 px-4 text-center bg-card rounded-xl border border-dashed shadow-sm">
                    <div class="h-12 w-12 rounded-full bg-muted flex items-center justify-center mb-4">
                        <Plus class="h-6 w-6 text-muted-foreground" />
                    </div>
                    <h3 class="text-lg font-semibold text-foreground">No wallets found</h3>
                    <p class="text-muted-foreground mt-1 max-w-sm mx-auto text-sm">You haven't added any wallets yet. Create one to get started.</p>
                    <Button variant="outline" class="mt-6 gap-2" onclick={openCreateDialog}>
                        <Plus class="size-4" />
                        Create your first wallet
                    </Button>
                </div>
            {/each}
        </div>
"""

# replace lines 183 to 229 (0-indexed indices 183 to 230)
lines[183:230] = [new_content]

with open('resources/js/pages/user/MyWallets.svelte', 'w') as f:
    f.writelines(lines)
