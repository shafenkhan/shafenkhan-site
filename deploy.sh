#!/bin/bash

# 🚀 Deploy shafenkhan.com v2.0.0
# Usage: ./deploy.sh [staging|production]

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Configuration
SITE_NAME="shafenkhan.com"
VERSION=$(cat version.json | grep '"version"' | cut -d '"' -f 4)
ENVIRONMENT=${1:-production}

echo -e "${GREEN}🚀 Deploying $SITE_NAME v$VERSION to $ENVIRONMENT${NC}"
echo "==========================================================="

# Check environment
if [ "$ENVIRONMENT" != "production" ] && [ "$ENVIRONMENT" != "staging" ]; then
    echo -e "${RED}❌ Error: Invalid environment. Use 'staging' or 'production'${NC}"
    exit 1
fi

# Update version.json with deployment timestamp
echo -e "${YELLOW}📝 Updating deployment metadata...${NC}"
TIMESTAMP=$(date -u +"%Y-%m-%dT%H:%M:%SZ")
sed -i.bak "s/\"lastDeployed\": null/\"lastDeployed\": \"$TIMESTAMP\"/" version.json
rm version.json.bak

# Create deployment directory
echo -e "${YELLOW}📦 Preparing deployment package...${NC}"
DEPLOY_DIR="deploy-$VERSION-$(date +%Y%m%d-%H%M%S)"
mkdir -p $DEPLOY_DIR

# Copy all files
cp -r assets blog contact labs projects real-estate $DEPLOY_DIR/
cp index.php robots.txt sitemap.xml CHANGELOG.md version.json $DEPLOY_DIR/

# Create deployment info file
cat > $DEPLOY_DIR/DEPLOYMENT_INFO.txt << EOF
Deployment Information
======================
Site: $SITE_NAME
Version: $VERSION
Environment: $ENVIRONMENT
Date: $TIMESTAMP
Files: $(find $DEPLOY_DIR -type f | wc -l)

Checklist:
[ ] Upload all files to hosting
[ ] Verify TREC compliance displays
[ ] Test contact forms
[ ] Check calculator links
[ ] Verify mobile responsiveness
[ ] Test blog navigation
[ ] Confirm SSL certificate
EOF

echo -e "${GREEN}✅ Deployment package ready: $DEPLOY_DIR${NC}"
echo ""
echo -e "${YELLOW}📋 Next Steps:${NC}"
echo "1. Upload $DEPLOY_DIR contents to your hosting:"

if [ "$ENVIRONMENT" == "production" ]; then
    echo "   - FTP to shafenkhan.com/public_html/"
    echo "   - Or use cPanel File Manager"
    echo "   - Or rsync: rsync -avz $DEPLOY_DIR/ user@shafenkhan.com:~/public_html/"
else
    echo "   - Upload to staging.shafenkhan.com"
fi

echo ""
echo "2. Verify deployment:"
echo "   - Visit: https://$SITE_NAME"
echo "   - Check version at: https://$SITE_NAME/version.json"
echo "   - Review changelog: https://$SITE_NAME/CHANGELOG.md"
echo ""
echo "3. Update DNS if needed:"
echo "   - A Record: @ -> Your server IP"
echo "   - CNAME: www -> $SITE_NAME"
echo ""
echo -e "${GREEN}🎉 Deployment package created successfully!${NC}"
echo ""
echo "📊 Version $VERSION includes:"
cat version.json | grep -A 5 '"added"'

# Option to auto-deploy with rsync (if configured)
if [ -f .deploy-config ]; then
    source .deploy-config
    echo ""
    echo -e "${YELLOW}🔄 Auto-deploy available. Deploy now? (y/n)${NC}"
    read -r response
    if [[ "$response" == "y" ]]; then
        echo -e "${YELLOW}⬆️ Uploading to $ENVIRONMENT...${NC}"
        rsync -avz --delete $DEPLOY_DIR/ $DEPLOY_USER@$DEPLOY_HOST:$DEPLOY_PATH/
        echo -e "${GREEN}✅ Deployment complete!${NC}"
        echo "🌐 Visit: https://$SITE_NAME"
    fi
fi