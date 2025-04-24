<?php
error_reporting(E_ALL);

// start country block code
// Get user IP address
// $ip = $_SERVER['REMOTE_ADDR'];
// // Using the API to get information about this IP
// $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
// // City
// $city = $details->geoplugin_city;
// // Using geoplugin to get the continent for this IP
// $continent = $details->geoplugin_continentCode;
// // And for the country
// $country = $details->geoplugin_countryCode;
// // Blocked countries
// $blocked_countries = array("PK", "IN", "CN", "NGA");
// // Check if the country is in the blocked list
// if (in_array($country, $blocked_countries)) {
//     header("Location: https://hancockpublishers.com/country-block.php");
//     exit;D
// }
// end country block code

// $functions = basename($_SERVER['PHP_SELF']); 

$baseUrl = "https://hoisolution.com/exhibit-network";
$functions = basename($_SERVER['PHP_SELF']); // Get just the filename

switch ($functions) {
    case "index.php";
        $title_name = "Your Stress-Free Trade Show Team | Exhibit Network";
        $description = "Exhibit Network is in business to make your trade show experience as seamless, stress-free, and delightful as possible";
       
       
        break;
    case "about.php";
        $title_name = "Make Your Trade Show Booth Stand Out | Exhibit Network";
        $description = "Exhibit Network provides highly professional, custom trade show solutions tailored for brands seeking to maximize visibility and impact at any budget.";
       
        break;
    case "houston.php";
        $title_name = "Trade Show Services in Houston, TX | Exhibit Network";
        $description = "Exhibit Network serves clients worldwide at Houston-area trade show venues, including the George R. Brown Convention Center, NRG Center, and others. ";
        $form_heading1 = "Contact Us";
        $form_heading2 = "Pitch Your Book Idea";
        $url = $baseUrl . "thank-you";
        $indexfollow = "index, follow";
        $keywordwords = "Thank You";
        break;
    case "las-vegas.php";
        $title_name = "Trade Show Services in Las Vegas, NV | Exhibit Network";
        $description = "Exhibit Network serves clients worldwide at Nevada-based trade show venues, including the Las Vegas Convention Center, the Venetian, Mandalay Bay, and more.";
        // $form_heading1 = "Contact Us";
        // $form_heading2 = "Pitch Your Book Idea";
        // $indexfollow = "index, follow";
        // $url = $baseUrl . "services";
        // $keywordwords = "Hancock Publisher Services";
        break;
    case "chicago.php";
        $title_name = "Trade Show Services in Chicago, IL | Exhibit Network";
        $description = "Exhibit Network serves clients worldwide at Chicago-area trade show venues, including the McCormick Place Convention Center and others. ";
      
        break;
    case "orlando.php";
        $title_name = "Trade Show Services in Orlando, FL | Exhibit Network";
        $description = " Exhibit Network serves clients worldwide at Orlando-area trade show venues, including the Orange County Convention Center and others. ";
      
        break;
    case "who-we-serve.php";
        $title_name = "Serving Trade Show Exhibitors | Exhibit Network";
        $description = "Are you a corporate exhibitor, event manager, marketing or sales director, product developer, or company owner seeking the optimal trade show presence? Exhibit Network is here to help.";
     
        break;
    case "what-we-do.php";
        $title_name = "Full Turnkey Trade Show Services | Exhibit Network";
        $description = "Exhibit Network offers complete, turnkey solutions for all aspects of your exhibit, from pre-show to post-show, including on-premise trade show services. ";
     
        break;
    case "gallery.php";
        $title_name = "Gallery of Trade Show Designs | Exhibit Network";
        $description = "Explore the Exhibit Network gallery of trade show and exhibit installations for design inspiration and ideas to bring your brand to life. ";
        
        break;
    case "exhibits.php";
        $title_name = "Your Trade Show Exhibit Options | Exhibit Network";
        $description = "Exhibit Network specializes in creating large, custom-built trade show exhibits for lead generation, new product launches, and customer engagement.";
       
        break;
    case "resources.php";
        $title_name = "Learn About the Trade Show Industry | Exhibit Network";
        $description = "Want to learn more about the trade show industry? Exhibit Network offers a vast collection of blogs and case studies to support your educational journey. ";
        
        break;
    case "contact-us.php";
        $title_name = "Contact Us | Exhibit Network Trade Show Support";
        $description = "Reach out to Exhibit Network for stress-free, turnkey trade show services, custom exhibit design and production, interactive elements, 3D renderings, and more.";

        break;
    case "need-a-booth.php";
        $title_name = "Custom Trade Show Booth Design | Exhibit Network ";
        $description = "Looking for a new trade show booth? Here’s a quick way for the team at the Exhibit Network to learn more about you and how we can best serve you.";
      
        break;
    case "faqs.php";
        $title_name = "FAQs | Your Trade Show Experience | Exhibit Network";
        $description = "Get answers to all your trade show questions in one place or connect with the Exhibit Network team if you have a specific request that we can assist with";
        
        break;
    case "customer-storage-terms-conditions.php";
        $title_name = "Booth Storage Terms and Conditions | Exhibit Network ";
        $description = "Storing your trade show booth? Find the details about Exhibit Network’s storage terms and conditions all in one place for easy reference and clarity. ";
       
        break;
    case "healthcare.php";
        $title_name = "Serving Healthcare Trade Show Clients | Exhibit Network";
        $description = "Need a custom trade show booth for your healthcare, medical, or pharmaceutical trade shows? Exhibit Network offers turnkey solutions for your exhibit.";
      
        break;
    case "food-and-beverage-tradeshows.php";
        $title_name = "Restaurant | Food | Beverage Exhibitors | Exhibit Network ";
        $description = "Need a turnkey exhibit for your food and beverage, food science, or restaurant trade shows? Exhibit Network offers a seamless, stress-free, delightful experience.";
      
        break;
    case "energy-oil-and-gas-tradeshows.php";
        $title_name = "Energy, Oil, and Gas Trade Shows  | Exhibit Network";
        $description = ": Need a custom exhibit for your energy, oil, or gas trade shows? Exhibit Network offers comprehensive solutions to amplify your brand's impact.";
     
        break;
    case "technology-tradeshows.php";
        $title_name = "Technology and Electronics Trade Shows | Exhibit Network";
        $description = "Need a high-impact custom exhibit for your technology or electronics trade show? Exhibit Network offers large, branded solutions to maximize event visibility. ";
       
        break;
    case "manufacturing-tradeshows.php";
        $title_name = "Manufacturing | Industrial Trade Shows | Exhibit Network";
        $description = "Need a highly professional, well-branded booth to showcase your new products at a manufacturing or industrial trade show? Exhibit Network has you covered. ";
       
        break;
    case "sporting-goods-tradeshows.php";
        $title_name = "Serving Sporting Goods Trade Shows | Exhibit Network";
        $description = "Need a branded booth with a custom-designed display case for your sporting goods? Exhibit Network designs and builds beautiful retail trade show floors.";
        $form_heading1 = "";
       
        break;
    case "logistics-tradeshows.php";
        $title_name = "Serving Logistics Trade Show Clients | Exhibit Network";
        $description = "Need a trade show booth for your shipping, logistics, supply chain, or trucking trade shows? Exhibit Network offers custom exhibits that elevate your brand.";
       
        break;
    case "construction-tradeshows.php";
        $title_name = "Serving Construction Trade Shows | Exhibit Network ";
        $description = "Showcasing your products at CONEXPO, World of Concrete, the Utility Expo, or a construction trade show? Exhibit Network provides turnkey trade show services. ";
       
        break;
    case "chemical-tradeshows.php";
        $title_name = "Chemicals and Coatings Trade Shows | Exhibit Network";
        $description = "Unveiling a groundbreaking innovation at a chemical or coatings trade show? Exhibit Network provides custom, branded solutions for your booth to stand out. ";
       
        break;
        case "404.php";
        $title_name = "404";
        $description = "404 ";
       
        break;
  
}


// $chatbutton = 'javascript:$zopim.livechat.window.show()';


// start body google tag manager 
// $bodyGoogleTag = '

// ';
// end body google tag manager 