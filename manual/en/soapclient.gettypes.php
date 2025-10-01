<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SoapClient::__getTypes - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/soapclient.gettypes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/soapclient.gettypes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.gettypes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.soapclient.php">
 <link rel="prev" href="https://www.php.net/manual/en/soapclient.getlastresponseheaders.php">
 <link rel="next" href="https://www.php.net/manual/en/soapclient.setcookie.php">

 <link rel="alternate" href="https://www.php.net/manual/en/soapclient.gettypes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/soapclient.gettypes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/soapclient.gettypes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/soapclient.gettypes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/soapclient.gettypes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/soapclient.gettypes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/soapclient.gettypes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/soapclient.gettypes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/soapclient.gettypes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/soapclient.gettypes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/soapclient.gettypes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns a list of SOAP types" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SoapClient::__getTypes - Manual" />
<meta name="twitter:description" content="Returns a list of SOAP types" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SoapClient::__getTypes - Manual" />
<meta itemprop="description" content="Returns a list of SOAP types" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns a list of SOAP types" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="soapclient.setcookie.php">
          SoapClient::__setCookie &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="soapclient.getlastresponseheaders.php">
          &laquo; SoapClient::__getLastResponseHeaders        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.webservice.php'>Web Services</a></li>      <li><a href='book.soap.php'>SOAP</a></li>      <li><a href='class.soapclient.php'>SoapClient</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/soapclient.gettypes.php' selected="selected">English</option>
            <option value='de/soapclient.gettypes.php'>German</option>
            <option value='es/soapclient.gettypes.php'>Spanish</option>
            <option value='fr/soapclient.gettypes.php'>French</option>
            <option value='it/soapclient.gettypes.php'>Italian</option>
            <option value='ja/soapclient.gettypes.php'>Japanese</option>
            <option value='pt_BR/soapclient.gettypes.php'>Brazilian Portuguese</option>
            <option value='ru/soapclient.gettypes.php'>Russian</option>
            <option value='tr/soapclient.gettypes.php'>Turkish</option>
            <option value='uk/soapclient.gettypes.php'>Ukrainian</option>
            <option value='zh/soapclient.gettypes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="soapclient.gettypes" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SoapClient::__getTypes</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SoapClient::__getTypes</span> &mdash; <span class="dc-title">Returns a list of SOAP types</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-soapclient.gettypes-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SoapClient::__getTypes</strong></span>(): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span></div>

  <p class="para rdfs-comment">
   Returns an array of types described in the WSDL for the Web service.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">This function only works in WSDL mode.</p></p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-soapclient.gettypes-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-soapclient.gettypes-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of SOAP types, detailing all structures and types.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-soapclient.gettypes-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5706">
    <p><strong>Example #1 <span class="function"><strong>SoapClient::__getTypes()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SoapClient</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://soap.amazon.com/schemas3/AmazonWebServices.wsdl'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">__getTypes</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(88) {
  [0]=&gt;
  string(30) &quot;ProductLine ProductLineArray[]&quot;
  [1]=&gt;
  string(85) &quot;struct ProductLine {
 string Mode;
 string RelevanceRank;
 ProductInfo ProductInfo;
}&quot;
  [2]=&gt;
  string(105) &quot;struct ProductInfo {
 string TotalResults;
 string TotalPages;
 string ListName;
 DetailsArray Details;
}&quot;
...
  [85]=&gt;
  string(32) &quot;ShortSummary ShortSummaryArray[]&quot;
  [86]=&gt;
  string(121) &quot;struct GetTransactionDetailsRequest {
 string tag;
 string devtag;
 string key;
 OrderIdArray OrderIds;
 string locale;
}&quot;
  [87]=&gt;
  string(75) &quot;struct GetTransactionDetailsResponse {
 ShortSummaryArray ShortSummaries;
}&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-soapclient.gettypes-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="soapclient.construct.php" class="methodname" rel="rdfs-seeAlso">SoapClient::__construct()</a> - SoapClient constructor</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/soap/soapclient/gettypes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsoapclient.gettypes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=soapclient.gettypes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.gettypes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115423">  <div class="votes">
    <div id="Vu115423">
    <a href="/manual/vote-note.php?id=115423&amp;page=soapclient.gettypes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115423">
    <a href="/manual/vote-note.php?id=115423&amp;page=soapclient.gettypes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115423" title="72% like this...">
    22
    </div>
  </div>
  <a href="#115423" class="name">
  <strong class="user"><em>felipe dot cwb at hotmail dot com</em></strong></a><a class="genanchor" href="#115423"> &para;</a><div class="date" title="2014-07-21 06:50"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115423">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// to see formated types<br /><br /></span><span class="default">$soap </span><span class="keyword">= new </span><span class="default">SoapClient</span><span class="keyword">(</span><span class="string">'<a href="http://domain.com/ws.php?WSDL" rel="nofollow" target="_blank">http://domain.com/ws.php?WSDL</a>'</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;h2&gt;Types:&lt;/h2&gt;'</span><span class="keyword">;<br /></span><span class="default">$types </span><span class="keyword">= </span><span class="default">$soap</span><span class="keyword">-&gt;</span><span class="default">__getTypes</span><span class="keyword">();<br />foreach (</span><span class="default">$types </span><span class="keyword">as </span><span class="default">$type</span><span class="keyword">) {<br />    </span><span class="default">$type </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(<br />        array(</span><span class="string">'/(\w+) ([a-zA-Z0-9]+)/'</span><span class="keyword">, </span><span class="string">'/\n /'</span><span class="keyword">),<br />        array(</span><span class="string">'&lt;font color="green"&gt;${1}&lt;/font&gt; &lt;font color="blue"&gt;${2}&lt;/font&gt;'</span><span class="keyword">, </span><span class="string">"\n\t"</span><span class="keyword">),<br />        </span><span class="default">$type<br />    </span><span class="keyword">);<br />    echo </span><span class="default">$type</span><span class="keyword">;<br />    echo </span><span class="string">"\n\n"</span><span class="keyword">;<br />}<br />echo </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128061">  <div class="votes">
    <div id="Vu128061">
    <a href="/manual/vote-note.php?id=128061&amp;page=soapclient.gettypes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128061">
    <a href="/manual/vote-note.php?id=128061&amp;page=soapclient.gettypes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128061" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128061" class="name">
  <strong class="user"><em>Serge Liatko</em></strong></a><a class="genanchor" href="#128061"> &para;</a><div class="date" title="2022-12-28 05:40"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128061">
<div class="phpcode"><code><span class="html">Here is the fixed version of my previous code (@moderators , please delete my previous note )<br /><br />Returns a more comprehensive array of SOAP Client types as an array<br /><br /><span class="default">&lt;?PHP<br /></span><span class="comment">/**<br /> * @param \SoapClient $soap<br /> *<br /> * @return array The WSDL types data as an array.<br /> */<br /></span><span class="keyword">function </span><span class="default">read_wsdl_types</span><span class="keyword">( </span><span class="default">SoapClient $soap </span><span class="keyword">): array {<br />    </span><span class="default">$wsdl_types </span><span class="keyword">= </span><span class="default">$soap</span><span class="keyword">-&gt;</span><span class="default">__getTypes</span><span class="keyword">();<br />    </span><span class="default">$lookup     </span><span class="keyword">= array();<br />    </span><span class="default">$regexes    </span><span class="keyword">= array(<br />        </span><span class="string">'atomic' </span><span class="keyword">=&gt; </span><span class="string">'/^([\w_]+)\s([\w_]+)$/mi'</span><span class="keyword">,<br />        </span><span class="string">'list'   </span><span class="keyword">=&gt; </span><span class="string">'/^([\w_]+)\s([\w_]+)[ {]+([\w_]+)[ }]+$/mi'</span><span class="keyword">,<br />        </span><span class="string">'struct' </span><span class="keyword">=&gt; </span><span class="string">'/([\w_]+)\s([\w_]+)[\s{]?([\w_]+)*[\s;}]?/mi'</span><span class="keyword">,<br />    );<br />    foreach ( </span><span class="default">array_reverse</span><span class="keyword">( </span><span class="default">$wsdl_types </span><span class="keyword">) as </span><span class="default">$wsdl_type </span><span class="keyword">) {<br />        </span><span class="default">$matches </span><span class="keyword">= array();<br />        foreach ( </span><span class="default">$regexes </span><span class="keyword">as </span><span class="default">$type </span><span class="keyword">=&gt; </span><span class="default">$regex </span><span class="keyword">) {<br />            if ( </span><span class="default">preg_match_all</span><span class="keyword">( </span><span class="default">$regex</span><span class="keyword">, </span><span class="default">$wsdl_type</span><span class="keyword">, </span><span class="default">$matches </span><span class="keyword">) ) {<br />                break;<br />            }<br />        }<br />        if ( !empty( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] ) &amp;&amp; !empty( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] ) ) {<br />            switch ( </span><span class="default">$type </span><span class="keyword">) {<br />                case </span><span class="string">'atomic'</span><span class="keyword">:<br />                    </span><span class="default">$name            </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] );<br />                    </span><span class="default">$data_type       </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );<br />                    </span><span class="default">$lookup</span><span class="keyword">[ </span><span class="default">$name </span><span class="keyword">] = array(<br />                        </span><span class="string">'name'      </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">,<br />                        </span><span class="string">'type'      </span><span class="keyword">=&gt; </span><span class="default">$type</span><span class="keyword">,<br />                        </span><span class="string">'data_type' </span><span class="keyword">=&gt; </span><span class="default">$data_type</span><span class="keyword">,<br />                        </span><span class="string">'items'     </span><span class="keyword">=&gt; array(),<br />                    );<br />                    break;<br />                case </span><span class="string">'list'</span><span class="keyword">:<br />                    </span><span class="default">$name            </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] );<br />                    </span><span class="default">$type            </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );<br />                    </span><span class="default">$items           </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] );<br />                    </span><span class="default">$lookup</span><span class="keyword">[ </span><span class="default">$name </span><span class="keyword">] = array(<br />                        </span><span class="string">'name'      </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">,<br />                        </span><span class="string">'type'      </span><span class="keyword">=&gt; </span><span class="default">$type</span><span class="keyword">,<br />                        </span><span class="string">'data_type' </span><span class="keyword">=&gt; </span><span class="default">$items</span><span class="keyword">,<br />                        </span><span class="string">'items'     </span><span class="keyword">=&gt; array(<br />                            array(<br />                                </span><span class="string">'name'      </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />                                </span><span class="string">'data_type' </span><span class="keyword">=&gt; </span><span class="default">$items</span><span class="keyword">,<br />                            ),<br />                        ),<br />                    );<br />                    break;<br />                case </span><span class="string">'struct'</span><span class="keyword">:<br />                    </span><span class="default">$name  </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] );<br />                    </span><span class="default">$type  </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] );<br />                    </span><span class="default">$items </span><span class="keyword">= array();<br />                    foreach ( </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$item_name </span><span class="keyword">) {<br />                        </span><span class="default">$items</span><span class="keyword">[ </span><span class="default">$key </span><span class="keyword">] = array(<br />                            </span><span class="string">'name'      </span><span class="keyword">=&gt; </span><span class="default">$item_name</span><span class="keyword">,<br />                            </span><span class="string">'data_type' </span><span class="keyword">=&gt; </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][ </span><span class="default">$key </span><span class="keyword">],<br />                        );<br />                    }<br />                    </span><span class="default">$lookup</span><span class="keyword">[ </span><span class="default">$name </span><span class="keyword">] = array(<br />                        </span><span class="string">'name'      </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">,<br />                        </span><span class="string">'type'      </span><span class="keyword">=&gt; </span><span class="default">$type</span><span class="keyword">,<br />                        </span><span class="string">'data_type' </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">,<br />                        </span><span class="string">'items'     </span><span class="keyword">=&gt; </span><span class="default">$items</span><span class="keyword">,<br />                    );<br />                    break;<br />            }<br />        }<br /><br />    }<br /><br />    </span><span class="default">array_walk</span><span class="keyword">( </span><span class="default">$lookup</span><span class="keyword">, function ( &amp;</span><span class="default">$type</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$data </span><span class="keyword">) {<br />        if ( !empty( </span><span class="default">$type</span><span class="keyword">[</span><span class="string">'items'</span><span class="keyword">] ) ) {<br />            </span><span class="default">array_walk</span><span class="keyword">( </span><span class="default">$type</span><span class="keyword">[</span><span class="string">'items'</span><span class="keyword">], function ( &amp;</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$data </span><span class="keyword">) {<br />                if ( !empty( </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'data_type'</span><span class="keyword">] ) ) {<br />                    </span><span class="default">$old_data_type     </span><span class="keyword">= </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'data_type'</span><span class="keyword">];<br />                    </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">]      = </span><span class="default">$data</span><span class="keyword">[ </span><span class="default">$old_data_type </span><span class="keyword">][</span><span class="string">'type'</span><span class="keyword">] ?? </span><span class="string">'atomic'</span><span class="keyword">;<br />                    </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'data_type'</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">[ </span><span class="default">$old_data_type </span><span class="keyword">][</span><span class="string">'data_type'</span><span class="keyword">] ?? </span><span class="default">$old_data_type</span><span class="keyword">;<br />                    </span><span class="default">$item</span><span class="keyword">[</span><span class="string">'from'</span><span class="keyword">]      = </span><span class="default">$data</span><span class="keyword">[ </span><span class="default">$old_data_type </span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">] ?? </span><span class="string">''</span><span class="keyword">;<br />                }<br />            }, </span><span class="default">$data </span><span class="keyword">);<br />        }<br />    }, </span><span class="default">$lookup </span><span class="keyword">);<br /><br />    return </span><span class="default">array_reverse</span><span class="keyword">( </span><span class="default">$lookup </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=soapclient.gettypes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/soapclient.gettypes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.soapclient.php">SoapClient</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="soapclient.call.php" title="_&#8203;_&#8203;call">_&#8203;_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.dorequest.php" title="_&#8203;_&#8203;doRequest">_&#8203;_&#8203;doRequest</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getcookies.php" title="_&#8203;_&#8203;getCookies">_&#8203;_&#8203;getCookies</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getfunctions.php" title="_&#8203;_&#8203;getFunctions">_&#8203;_&#8203;getFunctions</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getlastrequest.php" title="_&#8203;_&#8203;getLastRequest">_&#8203;_&#8203;getLastRequest</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getlastrequestheaders.php" title="_&#8203;_&#8203;getLastRequestHeaders">_&#8203;_&#8203;getLastRequestHeaders</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getlastresponse.php" title="_&#8203;_&#8203;getLastResponse">_&#8203;_&#8203;getLastResponse</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.getlastresponseheaders.php" title="_&#8203;_&#8203;getLastResponseHeaders">_&#8203;_&#8203;getLastResponseHeaders</a>
                        </li>
                                                <li class="current">
                            <a href="soapclient.gettypes.php" title="_&#8203;_&#8203;getTypes">_&#8203;_&#8203;getTypes</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.setcookie.php" title="_&#8203;_&#8203;setCookie">_&#8203;_&#8203;setCookie</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.setlocation.php" title="_&#8203;_&#8203;setLocation">_&#8203;_&#8203;setLocation</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.setsoapheaders.php" title="_&#8203;_&#8203;setSoapHeaders">_&#8203;_&#8203;setSoapHeaders</a>
                        </li>
                                                <li class="">
                            <a href="soapclient.soapcall.php" title="_&#8203;_&#8203;soapCall">_&#8203;_&#8203;soapCall</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
