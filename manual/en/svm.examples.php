<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Examples - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/svm.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/svm.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/svm.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.svm.php">
 <link rel="prev" href="https://www.php.net/manual/en/svm.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/class.svm.php">

 <link rel="alternate" href="https://www.php.net/manual/en/svm.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/svm.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/svm.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/svm.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/svm.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/svm.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/svm.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/svm.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/svm.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/svm.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/svm.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Examples" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Examples - Manual" />
<meta name="twitter:description" content="Examples" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Examples - Manual" />
<meta itemprop="description" content="Examples" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Examples" />

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
        <a href="class.svm.php">
          SVM &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="svm.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.svm.php'>SVM</a></li>      </ul>
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
            <option value='en/svm.examples.php' selected="selected">English</option>
            <option value='de/svm.examples.php'>German</option>
            <option value='es/svm.examples.php'>Spanish</option>
            <option value='fr/svm.examples.php'>French</option>
            <option value='it/svm.examples.php'>Italian</option>
            <option value='ja/svm.examples.php'>Japanese</option>
            <option value='pt_BR/svm.examples.php'>Brazilian Portuguese</option>
            <option value='ru/svm.examples.php'>Russian</option>
            <option value='tr/svm.examples.php'>Turkish</option>
            <option value='uk/svm.examples.php'>Ukrainian</option>
            <option value='zh/svm.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="svm.examples" class="chapter">
 <h1 class="title">Examples</h1>


 <p class="para">
  The basic process is to define parameters, supply training data to generate a 
  model on, then make predictions based on the model. There are a default set 
  of parameters that should get some results with most any input, so we&#039;ll start 
  by looking at the data. 
 </p>
 <p class="para">
  Data is supplied in either a file, a stream, or as an array. If supplied in 
  a file or a stream, it must contain one line per training example, which must 
  be formatted as an integer class (usually 1 and -1) followed by a series of 
  feature/value pairs, in increasing feature order. The features are integers, 
  the values floats, usually scaled 0-1. For example:
 </p>
 <p class="para">
  -1 1:0.43 3:0.12 9284:0.2
 </p>
 <p class="para">
  In a document classification problem, say a spam checker, each line would 
  represent a document. There would be two classes, -1 for spam, 1 for ham. 
  Each feature would represent some word, and the value would represent that 
  importance of that word to the document (perhaps the frequency count, with 
  the total scaled to unit length). Features that were 0 (e.g. the word did 
  not appear in the document at all) would simply not be included.
 </p>
 <p class="para">
  In array mode, the data must be passed as an array of arrays. Each sub-array 
  must have the class as the first element, then key =&gt; value sets for the 
  feature values pairs.
 </p>
 <p class="para">
  This data is passed to the SVM class&#039;s train function, which will return an 
  SVM model is successful.
 </p>
 <p class="para">
  Once a model has been generated, it can be used to make predictions about 
  previously unseen data. This can be passed as an array to the model&#039;s 
  predict function, in the same format as before, but without the label. 
  The response will be the class. 
 </p>
 <p class="para">
  Models can be saved and restored as required, using the save and load 
  functions, which both take a file location. 
 </p>
 <p class="para">
  <div class="example" id="example-4861">
   <p><strong>Example #1 Train from array</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= array(<br />    array(-</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.43</span><span style="color: #007700">, </span><span style="color: #0000BB">3 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.12</span><span style="color: #007700">, </span><span style="color: #0000BB">9284 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.2</span><span style="color: #007700">),<br />    array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.22</span><span style="color: #007700">, </span><span style="color: #0000BB">5 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.01</span><span style="color: #007700">, </span><span style="color: #0000BB">94 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.11</span><span style="color: #007700">),<br />);<br /><br /></span><span style="color: #0000BB">$svm </span><span style="color: #007700">= new </span><span style="color: #0000BB">SVM</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$model </span><span style="color: #007700">= </span><span style="color: #0000BB">$svm</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">train</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.43</span><span style="color: #007700">, </span><span style="color: #0000BB">3 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.12</span><span style="color: #007700">, </span><span style="color: #0000BB">9284 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0.2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">predict</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #DD0000">'model.svm'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
int(-1)
</pre></div>
   </div>
  </div>
  <div class="example" id="example-4862">
   <p><strong>Example #2 Train from a file</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$svm </span><span style="color: #007700">= new </span><span style="color: #0000BB">SVM</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$model </span><span style="color: #007700">= </span><span style="color: #0000BB">$svm</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">train</span><span style="color: #007700">(</span><span style="color: #DD0000">"traindata.txt"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/svm/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsvm.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=svm.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/svm.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127895">  <div class="votes">
    <div id="Vu127895">
    <a href="/manual/vote-note.php?id=127895&amp;page=svm.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127895">
    <a href="/manual/vote-note.php?id=127895&amp;page=svm.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127895" title="no votes...">
    0
    </div>
  </div>
  <a href="#127895" class="name">
  <strong class="user"><em>razvan_bc at yahoo dot com</em></strong></a><a class="genanchor" href="#127895"> &para;</a><div class="date" title="2022-11-04 09:03"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127895">
<div class="phpcode"><code><span class="html">ok i did more tests..<br /><br />getting the source<br /><a href="https://github.com/ianbarber/php-svm/blob/master/tests/002_predict.phpt" rel="nofollow" target="_blank">https://github.com/ianbarber/php-svm/blob/master/tests/002_predict.phpt</a>  modified ..<br /><span class="default">&lt;?php<br />$svm </span><span class="keyword">= new </span><span class="default">svmmodel</span><span class="keyword">();<br /></span><span class="comment">//$result = $svm-&gt;load(dirname(__FILE__) . '/australian.model');<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$svm</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'australian.model'</span><span class="keyword">);<br /><br />if(</span><span class="default">$result</span><span class="keyword">) {<br />    </span><span class="default">$data </span><span class="keyword">= array(<br />        </span><span class="string">"1" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />        </span><span class="default">2 </span><span class="keyword">=&gt; -</span><span class="default">0.731729</span><span class="keyword">,<br />        </span><span class="default">3 </span><span class="keyword">=&gt; -</span><span class="default">0.886786</span><span class="keyword">,<br />        </span><span class="default">4 </span><span class="keyword">=&gt; -</span><span class="default">1</span><span class="keyword">,<br />        </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="default">0.230769</span><span class="keyword">,<br />        </span><span class="string">"6" </span><span class="keyword">=&gt; -</span><span class="default">0.25</span><span class="keyword">,<br />        </span><span class="default">7 </span><span class="keyword">=&gt; -</span><span class="default">0.783509</span><span class="keyword">,<br />        </span><span class="default">8 </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />        </span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, <br />        </span><span class="default">10 </span><span class="keyword">=&gt; </span><span class="string">"-0.820896"</span><span class="keyword">,<br />        </span><span class="default">11 </span><span class="keyword">=&gt; -</span><span class="default">1</span><span class="keyword">, <br />        </span><span class="default">13 </span><span class="keyword">=&gt; -</span><span class="default">0.92</span><span class="keyword">,<br />        </span><span class="string">"14" </span><span class="keyword">=&gt; </span><span class="string">"-1"<br />    </span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$svm</span><span class="keyword">-&gt;</span><span class="default">predict</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />    if(</span><span class="default">$result </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />        echo </span><span class="string">"ok"</span><span class="keyword">;<br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />    } else {<br />        echo </span><span class="string">"predict failed: </span><span class="default">$result</span><span class="string">"</span><span class="keyword">;<br />    }<br />} else {<br />    echo </span><span class="string">"loading failed"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />with additional <a href="https://github.com/ianbarber/php-svm/blob/master/tests/australian.scale" rel="nofollow" target="_blank">https://github.com/ianbarber/php-svm/blob/master/tests/australian.scale</a> dropped inside the test folder where .php file is located i am able after running to get the result:<br />================================<br /><br />ok1  <br /><br />so it's work</span></code></div>
  </div>
 </div>
  <div class="note" id="127894">  <div class="votes">
    <div id="Vu127894">
    <a href="/manual/vote-note.php?id=127894&amp;page=svm.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127894">
    <a href="/manual/vote-note.php?id=127894&amp;page=svm.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127894" title="no votes...">
    0
    </div>
  </div>
  <a href="#127894" class="name">
  <strong class="user"><em>razvan_bc at yahoo dot com</em></strong></a><a class="genanchor" href="#127894"> &para;</a><div class="date" title="2022-11-04 08:41"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127894">
<div class="phpcode"><code><span class="html">i forgot a detail!<br />the installation folders if you think to install it manually in windows xampp should be  c:\xampp\php\lib\libsvm-3.1 (for the files i described in the first post) and extension in c:\xampp\php\ext (php_svm.dll)<br /><br />works.good luck</span></code></div>
  </div>
 </div>
  <div class="note" id="127893">  <div class="votes">
    <div id="Vu127893">
    <a href="/manual/vote-note.php?id=127893&amp;page=svm.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127893">
    <a href="/manual/vote-note.php?id=127893&amp;page=svm.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127893" title="no votes...">
    0
    </div>
  </div>
  <a href="#127893" class="name">
  <strong class="user"><em>razvan_bc at yahoo dot com</em></strong></a><a class="genanchor" href="#127893"> &para;</a><div class="date" title="2022-11-04 08:33"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127893">
<div class="phpcode"><code><span class="html">from pecl.php.net i download svm php_svm-0.2.3-8.1-ts-vs16-x64.zip so i read in README.md ..<br /><br />=====================================================<br />Data is supplied in either a file, a stream, or as an an array. If supplied in a file or a stream, it must contain one line per training example, which must be formatted as an integer class (usually 1 and -1) followed by a series of feature/value pairs, in increasing feature order. The features are integers, the values floats, usually scaled 0-1. For example:<br /><br />    -1 1:0.43 3:0.12 9284:0.2<br /><br />=====================================================<br /><br />so creating traindata.txt with the content  -1 1:0.43 3:0.12 9284:0.2 leads me to use it in the second example:<br /><br /><span class="default">&lt;?php<br />$svm </span><span class="keyword">= new </span><span class="default">SVM</span><span class="keyword">();<br /></span><span class="default">$model </span><span class="keyword">= </span><span class="default">$svm</span><span class="keyword">-&gt;</span><span class="default">train</span><span class="keyword">(</span><span class="string">"traindata.txt"</span><span class="keyword">);<br /></span><span class="default">$model</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="string">'model2.svm'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />and running and editing the model2.svm i got the content:<br />-------------------------------------------------------------------<br />svm_type c_svc<br />kernel_type rbf<br />gamma 0.00010771219302024989<br />nr_class 1<br />total_sv 0<br />rho<br />label -1<br />nr_sv 0<br />SV<br />--------------------------------------------------------------------<br /><br />so yes i think it's work, how i said i need to do more tests to get control with main functions to think to other more complicated</span></code></div>
  </div>
 </div>
  <div class="note" id="127892">  <div class="votes">
    <div id="Vu127892">
    <a href="/manual/vote-note.php?id=127892&amp;page=svm.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127892">
    <a href="/manual/vote-note.php?id=127892&amp;page=svm.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127892" title="no votes...">
    0
    </div>
  </div>
  <a href="#127892" class="name">
  <strong class="user"><em>razvan_bc at yahoo dot com</em></strong></a><a class="genanchor" href="#127892"> &para;</a><div class="date" title="2022-11-04 08:24"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127892">
<div class="phpcode"><code><span class="html">premises:php 8.1 ,windows 64<br />----------------------------------<br /><br />install (for beginners)<br />--------<br />after i visit <a href="https://github.com/ianbarber/php-svm" rel="nofollow" target="_blank">https://github.com/ianbarber/php-svm</a><br /><br />and i got from url found on page(install script) <br />..  <a href="http://www.csie.ntu.edu.tw/~cjlin/cgi-bin/libsvm.cgi?+http://www.csie.ntu.edu.tw/~cjlin/libsvm+tar.gz" rel="nofollow" target="_blank">http://www.csie.ntu.edu.tw/~cjlin/cgi-bin/libsvm.cgi?+http://www.csie.ntu.edu.tw/~cjlin/libsvm+tar.gz</a><br /><br />and manual install it:<br />1.php.ini<br /> (after the main group extension=... about 12 pieces)<br />...<br />extension=svm<br />...<br /><br />2.I put manually inside php a folder called libsvm-3.1 then i unzip there libsvm.dll , libsvmread.mexw64 ,libsvmwrite.mexw64 , svmpredict.mexw64 , svm-predict.exe, svm-scale.exe , svm-toy.exe , svmtrain.mexw64, svm-train.exe !<br /><br />running <br /><span class="default">&lt;?php<br /><br />$data </span><span class="keyword">= array(<br />    array(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">0.43</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="default">0.12</span><span class="keyword">, </span><span class="default">9284 </span><span class="keyword">=&gt; </span><span class="default">0.2</span><span class="keyword">),<br />    array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">0.22</span><span class="keyword">, </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="default">0.01</span><span class="keyword">, </span><span class="default">94 </span><span class="keyword">=&gt; </span><span class="default">0.11</span><span class="keyword">),<br />);<br /><br /></span><span class="default">$svm </span><span class="keyword">= new </span><span class="default">SVM</span><span class="keyword">();<br /></span><span class="default">$model </span><span class="keyword">= </span><span class="default">$svm</span><span class="keyword">-&gt;</span><span class="default">train</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">= array(</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">0.43</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="default">0.12</span><span class="keyword">, </span><span class="default">9284 </span><span class="keyword">=&gt; </span><span class="default">0.2</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$model</span><span class="keyword">-&gt;</span><span class="default">predict</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /></span><span class="default">$model</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="string">'model.svm'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />via server(apache ,php,mariadb;even custom or xampp) now i got results:<br />i got model.svm with the content<br />================================<br />svm_type c_svc<br />kernel_type rbf<br />gamma 0.00010771219302024989<br />nr_class 2<br />total_sv 2<br />rho 0<br />label 1 -1<br />nr_sv 1 1<br />SV<br />1 1:0.22 5:0.01 94:0.11 <br />-1 1:0.43 3:0.12 9284:0.2 <br />=================================<br /><br />so i think is very cool ..for a startup.<br />i will look around phpt files from github to understand why in yesterday's tests i got errors with some function witch require 2 parameters and not one like in the manual</span></code></div>
  </div>
 </div>
  <div class="note" id="127896">  <div class="votes">
    <div id="Vu127896">
    <a href="/manual/vote-note.php?id=127896&amp;page=svm.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127896">
    <a href="/manual/vote-note.php?id=127896&amp;page=svm.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127896" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#127896" class="name">
  <strong class="user"><em>razvan_bc at yahoo dot com</em></strong></a><a class="genanchor" href="#127896"> &para;</a><div class="date" title="2022-11-04 01:13"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127896">
<div class="phpcode"><code><span class="html">the example rated negative rated by the guy sign  "6765419 at qq dot com"  also works too!<br /><br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= array(<br />            array(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt;</span><span class="default">170</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">60</span><span class="keyword">),</span><span class="comment">//-1  表示男生，key 1表示身高，key 2表示体重=Represents a boy, key 1 represents height, key 2 represents weight<br />            </span><span class="keyword">array(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt;</span><span class="default">180</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">70</span><span class="keyword">),<br />            array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">160</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">46</span><span class="keyword">),</span><span class="comment">//1  表示女生，key 1表示身高，key 2表示体重=Represents a girl, key 1 represents height, key 2 represents weight<br />            </span><span class="keyword">array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">155</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">40</span><span class="keyword">),<br />        );<br /></span><span class="default">$svm </span><span class="keyword">= new </span><span class="default">SVM</span><span class="keyword">();<br /></span><span class="default">$model </span><span class="keyword">= </span><span class="default">$svm</span><span class="keyword">-&gt;</span><span class="default">train</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">$data </span><span class="keyword">= array( </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">165</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt;</span><span class="default">60</span><span class="keyword">);</span><span class="comment">//测试数据 =Test Data<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$model</span><span class="keyword">-&gt;</span><span class="default">predict</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />echo </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);</span><span class="comment">//echo var_export($result);<br />//return;<br /></span><span class="default">?&gt;<br /></span><br />so i got :<br /><br />float(-1)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=svm.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/svm.examples.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.svm.php">SVM</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.svm.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="svm.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="svm.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.svm.php" title="SVM">SVM</a>
                        </li>
                                                <li class="">
                            <a href="class.svmmodel.php" title="SVMModel">SVMModel</a>
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
