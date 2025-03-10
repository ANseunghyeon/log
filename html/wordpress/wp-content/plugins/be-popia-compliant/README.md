# be-popia-compliant
=== Be POPIA Compliant ===
Contributors: bepopiacompliant
Tags: POPI, POPIA, POPI Act, BePOPIACompliant, Be POPIA Compliant, Be POPI Compliant, Manage, Consent, Manage Consent, Be, Be POPIA, Be POPI, POPIA Plugin, POPIA WordPress Plugin, POPIA WP Plugin, WP POPIA, WooCommerce, WooCommerse
Requires at least: 5.4
Tested up to: 6.3
Requires PHP: 7.3
Stable tag: 1.2.0
License: License: GPLv2 or later

The only POPIA Compliance plugin that is NOT JUST a Cookie Banner! For any site that operates in South Africa. *Get your site compliant in as little as 15 minutes (only by using PRO).

== Description ==
The only POPIA Compliance plugin that is NOT JUST a Cookie Banner! 
Use Be POPIA Compliant and ensure your website is 100% POPIA Compliant in as little as 15 minutes with PRO.
We also provide a checklist with all the conditions as per the Protection of Personal Information Act, Act 4 of 2013. If you'd rather read up by yourself, please visit https://bepopiacompliant.co.za/popia/act/index.php for the full legislation. Using our PRO Be POPIA Compliant Plugin, you will already be able to receive consent process data requests and data deletion requests automatically, without any need to intervene! 

* Fun Fact: There is not a single mention about cookie banners in the POPIA Act, and yet many website owners think that is all they require to be POPIA Compliant.

NOTE: INSTALLING THIS PLUGIN ALONE DOES NOT MAKE YOUR SITE POPIA COMPLIANT. COOKIES, IS REQUIRED BY GDPR, BUT NOT POPIA SINCE THERE IS MUCH MORE TO BE CONSIDERED. YOU NEED TO ENSURE YOU HAVE COMPLETED EVERY STEP IN THE POPIA CHECKLIST. YES, WE KNOW... IT IS GOING TO TAKE SOME TIME TO GET ALL OF THAT IN ORDER. AND THEN YOU STILL HAVE TO PROCESS DATA REQUESTS MANUALLY. THAT IS EXACTLY WHY WE OFFER THE PRO VERSION SO THAT YOUR SITE IS COMPLETELY POPIA COMPLIANT IN AS LITTLE AS 15 MINUTES, WITH MINIMAL TO NO FURTHER ACTION FROM YOU IN FUTURE.

== 3rd Party and External Services ==
For our plugin to work on your site, we rely on our server to communicate with your plugin. This 3rd party service together with the circumstances under which we make calls are documented herein:

We make calls to our server, using our plugin from your WordPress website. This enables us to perform data requests on your behalf, as well as to send you notifications, and to do certain checks so you get the best we have to offer. For your security we have codded the calls in such a manner, to only allow transmission between sites that contain our plugin and our server with a specific URL only. Each call is signed with your API Key and therefore no unauthorised calls can be made to our server, and no calls are ever made to the Be POPIA Plugin on your site. We add a single cronjob via our plugin to run data requests every hour.

Link to service: https://bepopiacompliant.co.za/
Link to service Privacy Policy: https://bepopiacompliant.co.za/#/privacy/80

Below is a list of calls we make together with a description of what is being transmitted and for what reason:

https://py.bepopiacompliant.co.za/api/newusercreated
- each time a user registers on your website, we collect your domain name, user ID and email address and send it to our database to log an entry so that we can collect further data that you store about that user in the case of a data request.

https://py.bepopiacompliant.co.za/api/plugindetailscheck/“server_name”
- we collect your domain name to check if your domain is registered with us to use our plugin.

https://py.bepopiacompliant.co.za/api/plugindetails/$id 
- to indicate whether our plugin is active, inactive or deleted from your website.

https://py.bepopiacompliant.co.za/api/plugindetails/
- to indicate when our plugin is installed on your website.

https://py.bepopiacompliant.co.za/api/domain/"server_name"
- to get data from our database to indicate that you completed the PRO steps and save it to your database.

https://py.bepopiacompliant.co.za/api/getmessage/
- to show you any notifications about POPIA updates in your admin panel, that we might need to share.

https://py.bepopiacompliant.co.za/api/plugindetailscheck/“server_name”
- to show a message if we disapprove of the use of our plugin on your website, especially if we determine that you do not comply with POPIA using the free version, but claims that you are compliant. Misuse of our plugin may result in a suspension after which a thorough inspection will be required to determine whether your plugin should be reinstated. 

These inspections shall be billed at R500 per inspection request before the inspection is initiated. If we have found after any inspection request that your plugin is still not used correctly, we will provide you with a report of all fixes that are required. After fixing those problems, you shall be required to submit a follow-up inspection request and again pay an R500 inspection fee before we do the inspection. When we are satisfied that all the requirements are met and that your site is POPIA Compliant, we shall reinstate your plugin.

Alternatively, you can sign up for the PRO version of BE POPIA Compliant in order to wave the inspection and reactivation costs.

https://py.bepopiacompliant.co.za/api/domainapicheck/$company_key
- to validate your entered key for using the PRO Version of Be POPIA Compliant in our database to ensure you are registered with us as a Pro Member.

https://py.bepopiacompliant.co.za/api/domain/check_expiry/"server_name"
- to check whether your PRO Membership is up to date and paid in full.

== Installation ==
Install from WordPress Library

Log in to the admin panel of your WordPress website, click on "plugins", then again at the top left on "Add New".
Now type "POPIA" into the search bar and wait for the plugins to filter. Note that at the date of recording, none of the other plugins provides any bonified solution to POPIA, even though stating it. They merely provide cookie consent options that are only a small portion of the POPI Act requirements and are already included in our plugin, should you choose to use it. Now click on "Install Now" on the BE POPIA COmpliant Plugin. After installation, activate the plugin. Thereafter you will find the heading "POPIA Compliance" in the left-hand menu under "Dashboard".

Install From Website
The link on our website will take you to our official Plugin Page on WordPress.
Alternatively, you can go straight there by visiting: https://wordpress.org/plugins/be-popia-compliant/

Click on the download button to download the latest official zipped file of our plugin. Now log in to the admin panel of your WordPress website, click on "plugins", then again at the top left on "Add New". Thereafter click on "Upload Plugin" and select or drag and drop the file you just downloaded.
After installation, activate the plugin. Thereafter you will find the heading "POPIA Compliance" in the left-hand menu under "Dashboard".

== Frequently Asked Questions ==
Q1: What is a cookie anyway? 
A1: A cookie is a digital record, (text files with small pieces of data), stored on your computer, or better, in your browser. This is used to track, personalise and save information about each user's session. Any data can be stored and retrieved from a cookie. It is up to the developer of the site or system what goes in there. Cookies let websites remember you, your website logins, shopping carts and much more information. But they can also be a treasure trove of your private information for criminals to spy on.
This being said, having a Cookie notice or giving consent to having cookies stored in your browser, is but one small segment of the many regulations to be implemented to Be POPIA compliant.

Q2: What is POPIA?
A2: POPIA stands for the Protection of Personal Information Act, Act No. 4 of 2013 or POPI Act. This law has been with us for a while but took effect on July 1, 2020, and enforcement began on July 1, 2021. Due to technical difficulties, small business owners have got until February 1 2022 to get their act together. At this stage, it is still uncertain how strict the authorities will act on those that are not POPIA compliant. The provisions for penalties on the other hand is no mystery, and actually quite alarming!

Q3: Is there a difference between POPI and POPIA?
A3: Yes and no. POPI is the act or rather action of Protecting Personal information. This implies that all the policies, procedures, processes and practices in the organisation relating to personal information, are in fact doing POPI. POPIA is merely the name of the law.
In summary, to comply with POPIA, you need to implement a POPI programme.

Q4: What is POPI act compliance?
A4: Generally, compliance means adhering to a rule, such as a policy, standard, specification, or law. This means to be POPIA compliant you need to follow all the rules and regulations as set out in the POPI Act as well as the code of conduct regarding POPIA.

Q5: Should I be Compliant?
A5: According to the POPI Act, if you have a filing system, on paper or digital, localised or scattered containing personal information about ten (10) or more people, you need to be compliant. It is only if you have received an express exemption from the government, that you need not comply.

Q6: I am running a small online business on the side as a sole proprietor can I be prosecuted?
A6: Yes, unfortunately, you are directly liable and may be fined or may end up in prison or both. We suggest you register a company to protect yourself from any unforeseen judgements. You will still be held liable, but there is a small barrier between owners of a company and the company, since the company if registered is seen as a juristic person.

Q7: What happens if we don't comply with POPIA?
A7: There are significant consequences for non-compliance, including up to R10 million rands in fines or up to 10 years in prison, or both.

Q8: What is considered personal information?
A8: Personal information is any information about an identifiable living, natural person or a juristic person including but not limited to race, gender, sex, sexual orientation, marital status, nationality, age, physical or mental health, disability, language, education, any data relating to medical, financial or employment records, ID number, email address, physical or postal address, location info, phone numbers, blood type or biometric data, personal opinions or references, private or confidential correspondence or even views or opinions of another person about you.

Q9: What is a data subject?
A9: Any person, a living natural person, or a juristic person, that's data is being processed.

Q10: What is generally considered a breach of POPIA? 
A10: The following is the common breaches:
- Loss of personal information due to inadequate security safeguards
- Collecting personal information without having obtained the necessary consent
- Sending personal information to people who are not supposed to have it
- Breach of security safeguards (network with personal information is hacked)
- Not complying with an enforcement notice issued by the Information Regulator
- Processing special personal information without there being a necessity

Q11: I am a visitor to the site, should I be somehow compliant? 
A11: No, the POPI Act is there for your safety. The regulations imposed by POPIA, all act as safeguards so that each user's info gets looked after and is not recklessly being utilised in such a manner that your information may fall into the hands of unauthorised persons. Therefore, it is in your interest to insist on signing a consent form, so you can manage your consent by limiting the data being collected and disseminated.

Q12: How do I register my information officer with the regulator?
A12: A responsible party should register their information officer and deputy information officer if relevant on the Information Regulator Registration Portal.

Q13: Can one person be the information officer for multiple entities?
A13: Yes, one person can be the information officer of multiple entities. And for now, as long as the deputy information officer is also the same for the same multiple entities, you can manage all those entities from one account on the Be POPIA Compliant platform. If however there are a different data officer or deputy data officer in one of your organisations, we suggest creating a new account for those entities. As for the Information Regulator Portal, it is not currently supported to be the data officer for multiple entities.

Q14: I am running a small business by myself, do I need a deputy information officer?
A14: No, by default the head or CEO of an entity is deemed the data officer. If however there is too much work and it is decided that a deputy officer takes over the duties from such head, a deputy officer may be appointed. Note however that the head of the entity remains liable for the actions of the deputy information officer.

Q15: If my entity is found guilty of an offence, who will pay the fine, or go to jail? 
A15: This is rather a complex matter since it depends on the entity type. If you are a sole proprietor, you are automatically held responsible. In the event of a partnership for instance all partners may be held liable. If a deputy information officer was appointed according to Annexure C of the guidance notes, still, the default information officer or head of entity shall be liable. So if you are the CEO or Managing Director, consider yourself warned. The aforementioned is typically the case, but if it can be proved that a certain employee, for instance, stole and sold personal information, that employee shall be punished for the offence.

Q16: Does it not make sense that the Chief Information Officer or CTO, from IT, be also appointed as the Information Officer?
A16: It is best not to since they are largely concerned with the technology aspect of operations. Many other people in the organisation could lead to an offence being committed. In such a case, it would mostly be unfair towards the CTO since they do not likely communicate with anyone in sales or otherwise. It is probably best to assign someone in HR or appoint a new person altogether.

Q17: Can we outsource this duty of the data officer to someone else? 
A17: This is not recommended, since they might not have a full understanding of your entire process flow in your organisation. And since ultimately the head of the institution shall still bear the responsibility, do you want to take that chance?

Q18: I was appointed as the information officer, is there some sort of guide? 
A18: The information regulator published a guideline that you can download.

Q19: Are there any other laws that are linked to POPIA?
A19: Yes, the following laws have an impact on POPIA:
- Consumer Protection Act, or (CPA)
- National Credit Act, or (NCA)
- Regulation of Interception of Communications Act, also known as (RICA)
- Promotion of Access to Information Act, or (PAIA)
- Electronic Communication Act
- Cybercrime Bill, and
- Your Constitutional Right to Privacy as defined in the Bill of Rights

Q20: Who can use Be POPIA Compliant?
A20: If you have a website, that collects any data such as customer emails, telephone numbers or addresses, you will have to comply. Any person operating a hobby or a fully-fledged business with more than ten (10) customers needs to comply. If you have a WordPress website, we currently offer an easy to use a plugin for WordPress users. We also offer integration options for custom-developed systems and Apps. If your solution is not a WordPress solution, we shall need to establish through a consultation how your current program works, and how POPIA influences your business flow. From there we will be able to provide you with a detailed report on what changes, your development team need to get into place together with the endpoints that data need to be sent to, and collected from.


== Screenshots ==
1. Be POPIA Compliant (BPC) | Dashboard - This gives you a brief overview of the BPC plugin.
2. Be POPIA Compliant (BPC) | Checklist - Complete all these instructions and tick them as you complete them.
3. Be POPIA Compliant (BPC) | Cookie Settings - Customize your Cookie Notice Banner to match your brand.

== Changelog ==
= 1.2.0 =
    * We made changes so that PRO Features are completely segregated from the Free Version of the plugin.

_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ 

= 1.1.11 =
* All WooCommerce Privacy Policies is now being overwritten by BPC in PRO


= 1.1.10 =
* Fixed error not detecting ID Number on Checkout 


= 1.1.9 =
* Changed Consent related calls to call from manage Consent, rather than from Be POPIA Compliant.


= 1.1.8 =
* Added support to PRO version for data processing via ARForms - PayFast Addon Plugin.
* Data deletion via PRO Version can now be delayed for any predefined period as per requirements of superseding laws and regulations such as FICA and more.
* Tested compatibility with WordPress 6.


= 1.1.7 =
* Fixed a bug where cookie settings tab was not displaying settings.
    

= 1.1.6 =
* Added settings (now Banner & Cookie Settings) for PRO version to customize the POPIA Compliant Banner for a more elegant look.
* Fixed blank space at bottom of the page in some instances.
* Fixed a vulnerability that exposed email addresses when a specific link was followed.


= 1.1.5 =
* Added functionality to capture ID Number and passing it over to Consent form for autofill.
* Added functionality to only request consent on checkout, if consent has not yet been provided.


= 1.1.4 =
* Refactored Reports


= 1.1.3 =
* Fixed unclosed '(' on line 1762...

= 1.1.2 =
* Fixed wrong location of closing bracket.
* Added ID Validation on WordPress Registration.


= 1.1.1 =
* Fixed wrong version number.


= 1.1.0 =
* Added the following functionality:
*   For free plugin users: 
    *  To be able to add their user preferences to each user.
    *  To upload consent forms and then save the generated link for each user in the user settings.
    *  To also add the Identification Number.
    *  Also the Type of Identification used and the Country of Issue if this is not a South African ID Number.
*   For PRO Be POPIA Plugin users:
    *  To display all the above details in the users' table. (This is all managed automatically by the PRO Be POPIA Compliant Plugin).
    *  Programmatically handle Data Requests.
    *  Authenticate users, then send data to authenticated users (with no action by you).
    *  Programmatically handle Data Deletion Requests.
    *  Authenticate users, then Redact all personal data for that authenticated user in your database (with no action by you).
    *  Added basic support for WooCommerce - to request consent when registering, or on checkout.

_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ 

= 1.0.17 =
* Fixed - Free banner disappears when registering on BPC Website without company info.


= 1.0.16 =
* Fixed Calculation proplem on Checklist.


= 1.0.15 =
* Added Hidden Version number for easier debugging.


= 1.0.14 =
* Fixed file not found in some instances


= 1.0.13 =
* Tested compatibility for WordPress 5.9.
* Added Links to Main Plugin Menu for ease of navigation.


= 1.0.12 =
* Fix - Error in pinging API.
* Fix - Can’t activate plugin: Fatal Error
* Fix - Simplified API Call to improve performance


= 1.0.1 =
* Added functionality on PRO for emails to be sent for collecting consent once a user registers on your site (Ensure you ask for email as usernames)


= 1.0.0 =
* Initial Be POPIA Compliant Plugin