Here's a simple example of how to use Google Tag Manager (GTM) to add Google Analytics tracking to a website.

Example Scenario:
You want to enable Google Analytics (GA) on every page of your website to track user visits, but you don't want to manually embed the GA tracking code into each page's HTML.

# Step 1: Create a GTM Account and Set Up a Container
1、Go to Google Tag Manager and log in.  
2、Click "Create Account," fill in the account name, and select your country/region.  
3、Create a container: Enter a name for your container (usually your website's domain name) and choose "Web" as the target platform.  
4、Click "Create" and accept the terms of service.
# Step 2: Install the GTM Container Code
1、After creating the container, GTM will generate a code snippet. Copy and paste this code into every page of your website, usually within the <head> tag.  
```
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXX');</script>
<!-- End Google Tag Manager -->
```
# Step 3: Add the Google Analytics Tag
1、In the GTM interface, select your container and click on "Tags" in the left-hand menu, then click "New" to create a new tag.  
2、Choose the tag type: In the "Tag Configuration" section, click to select a tag type and choose "Google Analytics: Universal Analytics."  
3、Set the tracking type: Select "Page View" as the track type, meaning the tag will fire whenever a page loads.  
4、Configure the GA Tracking ID: In the "Google Analytics Settings," select "New Variable," and enter your Google Analytics "Tracking ID" (formatted like UA-12345678-1).
Click "Save" to save the tag configuration.
# Step 4: Set Up a Trigger
1、On the same tag configuration page, find the "Triggering" section and click the "+" icon to add a trigger.  
2、Choose "Page View" as the trigger type and select "All Pages" so that the GA tag will fire on every page view.  
3、Save the trigger.  
# Step 5: Debug and Preview
1、In the GTM interface, click "Preview" in the top right corner to enter debugging mode.  
2、In debug mode, open your website in the browser and check if the tag is firing correctly. GTM will show all the tags that have loaded on the current page and whether they have fired successfully.
# Step 6: Publish the Container
1、Once everything is working correctly, go back to GTM, click "Submit," add a version name or description, and then click "Publish."  
2、Your Google Analytics tag is now live on your website and will track user visits according to the triggers you set.  
# Summary of Code:
1、GTM Container Code: Inserted into the <head> section of every page.  
2、Google Analytics Tag: Configured through the GTM interface, no manual embedding needed.  
3、Trigger: Set to fire on all page views to ensure GA tracks every visit.  

> This example shows how to use GTM to easily deploy and manage Google Analytics tracking code, eliminating the need to manually edit website code.