var WaJsVariable = {};
WaJsVariable.form_post_url="wa_php/comp/{{waId}}/form_post.php";
WaJsVariable.search_index_filename="wa_js/waSearchIndex_{{lang}}.js";
var WaPageContext = {};
var WaContext = {};
var WaTranslator = {};
var WaIdContext = 10043382;
WaTranslator.tr = function(key) 
{ 
    return (this.messages[key]!=undefined)?this.messages[key]:key;
}; 
WaTranslator.messages={
"Feature no available in preview":"Feature not available in preview mode",
"Untitled page":"Untitled page",
"Form:Firstname field":"Firstname",
"Form:Lastname field":"Lastname",
"Form:My choices":"My choices",
"Form:Sample choice value":"Choice",
"label button Send form":"Send",
"This field is mandatory":"Mandatory field",
"Form successfully sent !":"Form successfully sent !",
"Recaptcha not validated !":"reCaptcha verification failed !",
"Search placeholder":"Search",
"%1 result found !":"%1 result found",
};

//Selectors
var waImageGalleryClassSelector = "wa-image-gallery-tobind";
var waImageGalleryNoIndicatior = "wa-image-gallery-no-thumbs";
var waImageGalleryIdLinkSelectorPattern = "wa-gal-link";
var waCarouselIdLinkSelectorPattern = "wa-compcarousel-link";
var waCarouselIdSelectorPattern = "wa-compcarousel";
