<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XOR training - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/fann.examples-1.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/fann.examples-1.php">
 <link rel="alternate" href="https://www.php.net/manual/en/fann.examples-1.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/fann.examples.php">
 <link rel="prev" href="https://www.php.net/manual/en/fann.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.fann.php">

 <link rel="alternate" href="https://www.php.net/manual/en/fann.examples-1.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/fann.examples-1.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/fann.examples-1.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/fann.examples-1.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/fann.examples-1.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/fann.examples-1.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/fann.examples-1.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/fann.examples-1.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/fann.examples-1.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/fann.examples-1.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/fann.examples-1.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="XOR training" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XOR training - Manual" />
<meta name="twitter:description" content="XOR training" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XOR training - Manual" />
<meta itemprop="description" content="XOR training" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="XOR training" />

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
        <a href="ref.fann.php">
          Fann Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="fann.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.fann.php'>FANN</a></li>      <li><a href='fann.examples.php'>Examples</a></li>      </ul>
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
            <option value='en/fann.examples-1.php' selected="selected">English</option>
            <option value='de/fann.examples-1.php'>German</option>
            <option value='es/fann.examples-1.php'>Spanish</option>
            <option value='fr/fann.examples-1.php'>French</option>
            <option value='it/fann.examples-1.php'>Italian</option>
            <option value='ja/fann.examples-1.php'>Japanese</option>
            <option value='pt_BR/fann.examples-1.php'>Brazilian Portuguese</option>
            <option value='ru/fann.examples-1.php'>Russian</option>
            <option value='tr/fann.examples-1.php'>Turkish</option>
            <option value='uk/fann.examples-1.php'>Ukrainian</option>
            <option value='zh/fann.examples-1.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="fann.examples-1" class="section">
  <h2 class="title">XOR training</h2>
  <p class="para">
   This example shows how to train data for XOR function
   <div class="example" id="example-3693">
    <p><strong>Example #1 xor.data file</strong></p>
    <div class="example-contents">
<div class="txtcode"><pre class="txtcode">4 2 1
-1 -1
-1
-1 1
1
1 -1
1
1 1
-1</pre>
</div>
    </div>

   </div>
   <div class="example" id="example-3694">
    <p><strong>Example #2 Simple train</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$num_input </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$num_output </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$num_layers </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$num_neurons_hidden </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$desired_error </span><span style="color: #007700">= </span><span style="color: #0000BB">0.001</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$max_epochs </span><span style="color: #007700">= </span><span style="color: #0000BB">500000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$epochs_between_reports </span><span style="color: #007700">= </span><span style="color: #0000BB">1000</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$ann </span><span style="color: #007700">= </span><span style="color: #0000BB">fann_create_standard</span><span style="color: #007700">(</span><span style="color: #0000BB">$num_layers</span><span style="color: #007700">, </span><span style="color: #0000BB">$num_input</span><span style="color: #007700">, </span><span style="color: #0000BB">$num_neurons_hidden</span><span style="color: #007700">, </span><span style="color: #0000BB">$num_output</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$ann</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">fann_set_activation_function_hidden</span><span style="color: #007700">(</span><span style="color: #0000BB">$ann</span><span style="color: #007700">, </span><span style="color: #0000BB">FANN_SIGMOID_SYMMETRIC</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">fann_set_activation_function_output</span><span style="color: #007700">(</span><span style="color: #0000BB">$ann</span><span style="color: #007700">, </span><span style="color: #0000BB">FANN_SIGMOID_SYMMETRIC</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">) . </span><span style="color: #DD0000">"/xor.data"</span><span style="color: #007700">;<br />    if (</span><span style="color: #0000BB">fann_train_on_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$ann</span><span style="color: #007700">, </span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #0000BB">$max_epochs</span><span style="color: #007700">, </span><span style="color: #0000BB">$epochs_between_reports</span><span style="color: #007700">, </span><span style="color: #0000BB">$desired_error</span><span style="color: #007700">))<br />        </span><span style="color: #0000BB">fann_save</span><span style="color: #007700">(</span><span style="color: #0000BB">$ann</span><span style="color: #007700">, </span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">) . </span><span style="color: #DD0000">"/xor_float.net"</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">fann_destroy</span><span style="color: #007700">(</span><span style="color: #0000BB">$ann</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   This example shows how to read and run data for XOR function
   <div class="example" id="example-3695">
    <p><strong>Example #3 Simple test</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$train_file </span><span style="color: #007700">= (</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">) . </span><span style="color: #DD0000">"/xor_float.net"</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$train_file</span><span style="color: #007700">))<br />    die(</span><span style="color: #DD0000">"The file xor_float.net has not been created! Please run simple_train.php to generate it"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$ann </span><span style="color: #007700">= </span><span style="color: #0000BB">fann_create_from_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$train_file</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$ann</span><span style="color: #007700">)<br />    die(</span><span style="color: #DD0000">"ANN could not be created"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$input </span><span style="color: #007700">= array(-</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$calc_out </span><span style="color: #007700">= </span><span style="color: #0000BB">fann_run</span><span style="color: #007700">(</span><span style="color: #0000BB">$ann</span><span style="color: #007700">, </span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"xor test (%f,%f) -&gt; %f\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">], </span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #0000BB">$calc_out</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">fann_destroy</span><span style="color: #007700">(</span><span style="color: #0000BB">$ann</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/fann/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffann.examples-1%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=fann.examples-1&amp;repo=en&amp;redirect=https://www.php.net/manual/en/fann.examples-1.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117242">  <div class="votes">
    <div id="Vu117242">
    <a href="/manual/vote-note.php?id=117242&amp;page=fann.examples-1&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117242">
    <a href="/manual/vote-note.php?id=117242&amp;page=fann.examples-1&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117242" title="73% like this...">
    69
    </div>
  </div>
  <a href="#117242" class="name">
  <strong class="user"><em>Aurelien Marchand</em></strong></a><a class="genanchor" href="#117242"> &para;</a><div class="date" title="2015-05-08 02:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117242">
<div class="phpcode"><code><span class="html">Here is an explanation for the input file for training, as it might be obvious to everyone and you must understand it to write your own:<br /><br />4 2 1 &lt;- header file saying there are 4 sets to read, with 2 inputs and 1 output<br />-1 -1 &lt;- the 2 inputs for the 1st group<br />-1    &lt;- the 1 output for the 1st group<br />-1 1  &lt;- the 2 inputs for the 2nd group<br />1     &lt;- the 1 output for the 2nd group<br />1 -1  &lt;- the 2 inputs for the 3rd group<br />1     &lt;- the 1 output for the 3rd group<br />1 1   &lt;- the 2 inputs for the 4th group<br />-1    &lt;- the 1 output for the 4th group</span></code></div>
  </div>
 </div>
  <div class="note" id="120735">  <div class="votes">
    <div id="Vu120735">
    <a href="/manual/vote-note.php?id=120735&amp;page=fann.examples-1&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120735">
    <a href="/manual/vote-note.php?id=120735&amp;page=fann.examples-1&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120735" title="73% like this...">
    7
    </div>
  </div>
  <a href="#120735" class="name">
  <strong class="user"><em>Ray.Paseur sometimes uses Gmail</em></strong></a><a class="genanchor" href="#120735"> &para;</a><div class="date" title="2017-03-03 08:43"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120735">
<div class="phpcode"><code><span class="html">A helpful reference for FANN is available here:<br /><a href="http://leenissen.dk/fann/html/files2/theory-txt.html" rel="nofollow" target="_blank">http://leenissen.dk/fann/html/files2/theory-txt.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="124433">  <div class="votes">
    <div id="Vu124433">
    <a href="/manual/vote-note.php?id=124433&amp;page=fann.examples-1&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124433">
    <a href="/manual/vote-note.php?id=124433&amp;page=fann.examples-1&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124433" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124433" class="name">
  <strong class="user"><em>ithirzty</em></strong></a><a class="genanchor" href="#124433"> &para;</a><div class="date" title="2019-11-25 07:44"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124433">
<div class="phpcode"><code><span class="html">If you wan't your result to be saved after the time limit, you will need to add this to your code.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">shutdown</span><span class="keyword">()<br />{<br />  global </span><span class="default">$ann</span><span class="keyword">;<br /></span><span class="default">fann_save</span><span class="keyword">(</span><span class="default">$ann</span><span class="keyword">, </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">) . </span><span class="string">"/result.net"</span><span class="keyword">);<br /></span><span class="default">fann_destroy</span><span class="keyword">(</span><span class="default">$ann</span><span class="keyword">);<br />}<br /><br /></span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'shutdown'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>where $ann is your neural network var and 'result.net' your neural network config file.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=fann.examples-1&amp;repo=en&amp;redirect=https://www.php.net/manual/en/fann.examples-1.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="fann.examples.php">Examples</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="fann.examples-1.php" title="XOR training">XOR training</a>
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
