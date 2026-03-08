#!/bin/bash

# Load configuration
if [ -f .env.deploy ]; then
    export $(cat .env.deploy | grep -v '#' | xargs)
else
    echo "Error: .env.deploy file not found. Please create one from .env.deploy.example"
    exit 1
fi

echo "🚀 Starting deployment process..."

# 1. Build project
echo "📦 Building assets..."
npm run build

echo "🧹 installing production dependencies..."
composer install --no-dev --optimize-autoloader

# 2. Create Zip
echo "🤐 Zipping files..."
rm -f deploy.zip
zip -r deploy.zip . -x "node_modules/*" ".git/*" ".idea/*" ".vscode/*" "storage/framework/cache/*" "storage/logs/*" "tests/*" "deploy.sh" ".env.deploy" "zip.sh" ".junie/*" ".github/*" "infrastructure_real_estate_service_page/*"

# 3. Upload files
echo "cloud_upload Uploading to FTP..."

# Upload unzip script first
curl -T unzip_remote.php -u "$FTP_USER:$FTP_PASS" "ftp://$FTP_HOST/$FTP_REMOTE_PATH/unzip_remote.php"

# Upload zip file
curl -T deploy.zip -u "$FTP_USER:$FTP_PASS" "ftp://$FTP_HOST/$FTP_REMOTE_PATH/deploy.zip"

# 4. Trigger Unzip
echo "🔓 Triggering remote unzip..."
UNZIP_URL="$SITE_URL/unzip_remote.php?secret=$DEPLOY_SECRET"
RESPONSE=$(curl -s "$UNZIP_URL")

echo "Server response: $RESPONSE"

# 5. Cleanup
echo "🧹 Cleaning up..."
rm deploy.zip
# Re-install dev dependencies for local development
# echo "🧹 Re-installing composer dependencies..."
# composer install
# echo "🧹 Re-installing node dependencies..."
# npm install
# echo "🚀 Artisan optimize..."
# php artisan optimize
# echo "🧹 Artisan storage link..."
# php artisan storage:link

echo "✅ Deployment complete!"
