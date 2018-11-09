<?php


### Konfiguration ###

# Bitte passen Sie die folgenden Werte an, bevor Sie das Script benutzen!

# An welche Adresse sollen die Mails gesendet werden?
$mailto = 'debug@fusbfg.de';
# $bccmail = 'mail@tfranz.de';

$nospam = TRUE;
$error = '';
$spamcheck = '';
$respondpage = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (!empty($_POST['submitted']['contact_me_by_fax_only']) && (bool) $_POST['submitted']['contact_me_by_fax_only'] == TRUE) {
    $nospam = FALSE;
    $error .= '&error=spam';
}

if (empty($_POST['submitted']['name'])) {
  $name = "";
} else {
  $name = sanitize_input($_POST['submitted']['name']);
}

if (empty($_POST['submitted']['email'])) {
  $email = "";
} else {
  $email = sanitize_input($_POST['submitted']['email']);
  // Remove all illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  // Validate e-mail
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email = '';
      $error .= '&error=email';
  }
}

if (empty($_POST['submitted']['message'])) {
  $message = "";
} else {
  $message = sanitize_input($_POST['submitted']['message']);
  $spamcheck = simplespam($message);
  if ($spamcheck) {
    $message = '';
    $error .= '&error=spam';
  }
}


# Welche Adresse soll als Absender angegeben werden?
# (Manche Hoster lassen diese Angabe vor dem Versenden der Mail ueberschreiben)
$mailfrom = $name.'<'.$email.'>';



# Welchen Betreff sollen die Mails erhalten?
$betreff    = 'BETREFF EINTRAGEN';

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=utf-8";
$headers[] = "From: {$mailfrom}";
/*$headers[] = "Bcc: {$bccmail}";
$headers[] = "Subject: {$betreff}";*/
$headers[] = "X-Mailer: PHP/".phpversion();

$header = implode("\r\n",$headers);



### Ende Konfiguration ###

if($nospam && $_POST['submitted'] && $name && $email && $message) {

  $nachricht = "Name: $name
E-Mail: $email

$message

Ja, ich habe die Datenschutzerklärung zur Kenntnis genommen und bin damit einverstanden, dass meine Angaben zweckgebunden zur Beantwortung meiner Anfrage erhoben und verarbeitet werden. Die Einwilligung kann ich jederzeit widerrufen.
";

  $nachricht = wordwrap($nachricht, 85);

  mail($mailto, $betreff, $nachricht, $header) or die($string['form-techerror']);

  $respondpage .= '/danke.php?success=true';
  header("Location: $respondpage");
  exit;
} else {
  $respondpage .= '/danke.php?success=false'.$error;
  header("Location: $respondpage");
  exit;
}



function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function simplespam($text) {
  $contains_cyrillic = (bool) preg_match('/[\p{Cyrillic}]/u', $text);
  $contains_chinese = (bool) preg_match('/[\p{Han}]/u', $text);

  if ($contains_cyrillic || $contains_chinese) {
   return TRUE;
  }

  if (preg_match('#(\.il|\.in|\.ir|\.net|\.io|\.info|\.ru)#i', $text)) {
    return TRUE;
  }

  $stopwords = array('guaranteed','pharmacy','customer','prices','discreet','purchase','shipping','4U','Claims you are a winner','For instant access','Accept credit cards','Claims you registered with Some Kind of Partner','For just $ (some amt)','Act now! Don’t hesitate!','Click below','Free access','Additional income','Click here link','Free cell phone','Addresses on CD','Click to remove','Free consultation','All natural','Click to remove mailto','Free DVD','Amazing','Compare rates','Free grant money','Apply Online','Compete for your business','Free hosting','As seen on','Confidentially on all orders','Free installation','Auto email removal','Congratulations','Free investment','Avoid bankruptcy','Consolidate debt and credit','Free leads','Be amazed','Copy accurately','Free membership','Be your own boss','Copy DVDs','Free money','Being a member','Credit bureaus','Free offer','Big bucks','Credit card offers','Free preview','Bill 1618','Cures baldness','Free priority mail','Billing address','Dear email','Free quote','Billion dollars','Dear friend','Free sample','Brand new pager','Dear somebody','Free trial','Bulk email','Different reply to','Free website','Buy direct','Dig up dirt on friends','Full refund','Buying judgments','Direct email','Get It Now','Cable converter','Direct marketing','Get paid','Call free','Discusses search engine listings','Get started now','Call now','Do it today','Gift certificate','Calling creditors','Don’t delete','Great offer','Can’t live without','Drastically reduced','Guarantee','Cancel at any time','Earn per week','Have you been turned down?','Cannot be combined with any other offer','Easy terms','Hidden assets','Cash bonus','Eliminate bad credit','Home employment','Cashcashcash','Email harvest','Human growth hormone','Casino','Email marketing','If only it were that easy','Cell phone cancer scam','Expect to earn','In accordance with laws','Cents on the dollar','Fantastic deal','Increase sales','Check or money order','Fast Viagra delivery','Increase traffic','Claims not to be selling anything','Financial freedom','Insurance','Claims to be in accordance with some spam law','Find out anything','Investment decision','Claims to be legal','For free','effective','Join millions of Americans','No questions asked','Reverses aging','Laser printer','No selling','Risk free','Limited time only','No strings attached','Round the world','Long distance phone offer','Not intended','S 1618','Lose weight spam','Off shore','Safeguard notice','Lower interest rates','Offer expires','Satisfaction guaranteed','Lower monthly payment','Offers coupon','Save $','Lowest price','Offers extra cash','Save big money','Luxury car','Offers free (often stolen) passwords','Save up to','Mail in order form','Once in lifetime','Score with babes','Marketing solutions','One hundred percent free','Section 301','Mass email','One hundred percent guaranteed','See for yourself','Meet singles','One time mailing','Sent in compliance','Member stuff','Online biz opportunity','Serious cash','Message contains disclaimer','Online pharmacy','Serious only','MLM','Only $','Shopping spree','Money back','Opportunity','Sign up free today','Money making','Opt in','Social security number','Month trial offer','Order now','Special promotion','More Internet traffic','Order status','Stainless steel','Mortgage rates','Orders shipped by priority mail','Stock alert','Multi level marketing','Outstanding values','Stock disclaimer statement','Name brand','Pennies a day','Stock pick','New customers only','People just leave money laying around','Stop snoring','New domain extensions','Please read','Strong buy','Nigerian','Potential earnings','Stuff on sale','No age restrictions','Print form signature','Subject to credit','No catch','Print out and fax','Supplies are limited','No claim forms','Produced and sent out','Take action now','No cost','Profits','Talks about hidden charges','No credit check','Promise you …!','Talks about prizes','No disappointment','Pure profit','Tells you it’s an ad','No experience','Real thing','Terms and conditions','No fees','Refinance home','The best rates','No gimmick','Removal instructions','The following form','No inventory','Remove in quotes','They keep your money — no refund!','No investment','Remove subject','They’re just giving it away','No medical exams','Removes wrinkles','This isn’t junk','No middleman','Reply remove subject','This isn’t spam','No obligation','Requires initial investment','University diplomas','No purchase necessary','Reserves the right','Unlimited','Unsecured credit/debt','We honor all','Will not believe your eyes','Urgent','Weekend getaway','Winner','US dollars','What are you waiting for?','Winning','Vacation offers','While supplies last','Work at home','Viagra and other drugs','While you sleep','You have been selected','Wants credit card','Who really wins?','Your income','We hate spam','Why pay more?','Make money','Cialis','Viagra','kjop','transexual','shimale','movie','url','http','https');

  foreach($stopwords as $word) {
    if (strpos($text,$word) !== false) {
        return TRUE;
        break;
    }
  }

  return FALSE;

}




