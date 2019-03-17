# 1mbsite PHP

*This is a PHP library for communicating with [1mbsite's API](https://gist.github.com/DaltonWebDev/739ddb6bb17004f72bca8f74fc874bfd). The first step is including 1mbsite.php in your script like so:*

```
include("1mbsite.php");
```

*Log in to your account by [clicking here](https://account.1mb.site). Click the "API" button in your account settings to view your API key.*

## Examples

### Verify your API key
```
verifyKey("your username", "your api key");
```
*This function returns true on success. Otherwise an error string which you can find more info about in [API documentation](https://gist.github.com/DaltonWebDev/739ddb6bb17004f72bca8f74fc874bfd).*

### Deploy to your site
```
deploy("your username", "your api key", "index.html", "<h1>Hello, World!</h1>");
```
*This function returns true on success. Otherwise an error string which you can find more info about in [API documentation](https://gist.github.com/DaltonWebDev/739ddb6bb17004f72bca8f74fc874bfd).*

### View your site
```
viewSite("site name", "resource");
```
*This function returns the content of resource on success. Otherwise an error string which you can find more info about in [API documentation](https://gist.github.com/DaltonWebDev/739ddb6bb17004f72bca8f74fc874bfd).*
