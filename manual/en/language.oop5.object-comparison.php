<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Comparing Objects - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.oop5.object-comparison.php">
 <link rel="shorturl" href="https://www.php.net/oop5.object-comparison">
 <link rel="alternate" href="https://www.php.net/oop5.object-comparison" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.oop5.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.oop5.cloning.php">
 <link rel="next" href="https://www.php.net/manual/en/language.oop5.late-static-bindings.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.oop5.object-comparison.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.oop5.object-comparison.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.oop5.object-comparison.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.oop5.object-comparison.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.oop5.object-comparison.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.oop5.object-comparison.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.oop5.object-comparison.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.oop5.object-comparison.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.oop5.object-comparison.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.oop5.object-comparison.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.oop5.object-comparison.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Comparing Objects" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Comparing Objects - Manual" />
<meta name="twitter:description" content="Comparing Objects" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Comparing Objects - Manual" />
<meta itemprop="description" content="Comparing Objects" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Comparing Objects" />

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
        <a href="language.oop5.late-static-bindings.php">
          Late Static Bindings &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.oop5.cloning.php">
          &laquo; Object Cloning        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.oop5.php'>Classes and Objects</a></li>      </ul>
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
            <option value='en/language.oop5.object-comparison.php' selected="selected">English</option>
            <option value='de/language.oop5.object-comparison.php'>German</option>
            <option value='es/language.oop5.object-comparison.php'>Spanish</option>
            <option value='fr/language.oop5.object-comparison.php'>French</option>
            <option value='it/language.oop5.object-comparison.php'>Italian</option>
            <option value='ja/language.oop5.object-comparison.php'>Japanese</option>
            <option value='pt_BR/language.oop5.object-comparison.php'>Brazilian Portuguese</option>
            <option value='ru/language.oop5.object-comparison.php'>Russian</option>
            <option value='tr/language.oop5.object-comparison.php'>Turkish</option>
            <option value='uk/language.oop5.object-comparison.php'>Ukrainian</option>
            <option value='zh/language.oop5.object-comparison.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.oop5.object-comparison" class="sect1">
   <h2 class="title">Comparing Objects</h2>
   <p class="para">
    When using the comparison operator (<code class="literal">==</code>), 
    object variables are compared in a simple manner, namely: Two object
    instances are equal if they have the same attributes and values (values are compared with <code class="literal">==</code>), and are
    instances of the same class.
   </p>
   <p class="para">
    When using the identity operator (<code class="literal">===</code>),
    object variables are identical if and only if they refer to the same
    instance of the same class.
   </p>
   <p class="para">
    An example will clarify these rules.
    <div class="example" id="example-362">
     <p><strong>Example #1 Example of object comparison</strong></p>
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">bool2str</span><span style="color: #007700">(</span><span style="color: #0000BB">$bool</span><span style="color: #007700">)<br />{<br />    if (</span><span style="color: #0000BB">$bool </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />        return </span><span style="color: #DD0000">'FALSE'</span><span style="color: #007700">;<br />    } else {<br />        return </span><span style="color: #DD0000">'TRUE'</span><span style="color: #007700">;<br />    }<br />}<br /><br />function </span><span style="color: #0000BB">compareObjects</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$o1</span><span style="color: #007700">, &amp;</span><span style="color: #0000BB">$o2</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #DD0000">'o1 == o2 : ' </span><span style="color: #007700">. </span><span style="color: #0000BB">bool2str</span><span style="color: #007700">(</span><span style="color: #0000BB">$o1 </span><span style="color: #007700">== </span><span style="color: #0000BB">$o2</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">'o1 != o2 : ' </span><span style="color: #007700">. </span><span style="color: #0000BB">bool2str</span><span style="color: #007700">(</span><span style="color: #0000BB">$o1 </span><span style="color: #007700">!= </span><span style="color: #0000BB">$o2</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">'o1 === o2 : ' </span><span style="color: #007700">. </span><span style="color: #0000BB">bool2str</span><span style="color: #007700">(</span><span style="color: #0000BB">$o1 </span><span style="color: #007700">=== </span><span style="color: #0000BB">$o2</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">'o1 !== o2 : ' </span><span style="color: #007700">. </span><span style="color: #0000BB">bool2str</span><span style="color: #007700">(</span><span style="color: #0000BB">$o1 </span><span style="color: #007700">!== </span><span style="color: #0000BB">$o2</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">Flag<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$flag</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$flag </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flag </span><span style="color: #007700">= </span><span style="color: #0000BB">$flag</span><span style="color: #007700">;<br />    }<br />}<br /><br />class </span><span style="color: #0000BB">OtherFlag<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$flag</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$flag </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flag </span><span style="color: #007700">= </span><span style="color: #0000BB">$flag</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$o </span><span style="color: #007700">= new </span><span style="color: #0000BB">Flag</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$p </span><span style="color: #007700">= new </span><span style="color: #0000BB">Flag</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$q </span><span style="color: #007700">= </span><span style="color: #0000BB">$o</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$r </span><span style="color: #007700">= new </span><span style="color: #0000BB">OtherFlag</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">"Two instances of the same class\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">compareObjects</span><span style="color: #007700">(</span><span style="color: #0000BB">$o</span><span style="color: #007700">, </span><span style="color: #0000BB">$p</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"\nTwo references to the same instance\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">compareObjects</span><span style="color: #007700">(</span><span style="color: #0000BB">$o</span><span style="color: #007700">, </span><span style="color: #0000BB">$q</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"\nInstances of two different classes\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">compareObjects</span><span style="color: #007700">(</span><span style="color: #0000BB">$o</span><span style="color: #007700">, </span><span style="color: #0000BB">$r</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Two instances of the same class
o1 == o2 : TRUE
o1 != o2 : FALSE
o1 === o2 : FALSE
o1 !== o2 : TRUE

Two references to the same instance
o1 == o2 : TRUE
o1 != o2 : FALSE
o1 === o2 : TRUE
o1 !== o2 : FALSE

Instances of two different classes
o1 == o2 : FALSE
o1 != o2 : TRUE
o1 === o2 : FALSE
o1 !== o2 : TRUE
</pre></div>
     </div>
    </div>
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Extensions can define own rules for their objects comparison
     (<code class="literal">==</code>).
    </p>
   </p></blockquote>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/oop5/object-comparison.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.oop5.object-comparison%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.oop5.object-comparison&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.object-comparison.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="71623">  <div class="votes">
    <div id="Vu71623">
    <a href="/manual/vote-note.php?id=71623&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71623">
    <a href="/manual/vote-note.php?id=71623&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71623" title="82% like this...">
    86
    </div>
  </div>
  <a href="#71623" class="name">
  <strong class="user"><em>jazfresh at hotmail.com</em></strong></a><a class="genanchor" href="#71623"> &para;</a><div class="date" title="2006-12-08 02:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71623">
<div class="phpcode"><code><span class="html">Note that when comparing object attributes, the comparison is recursive (at least, it is with PHP 5.2). That is, if $a-&gt;x contains an object then that will be compared with $b-&gt;x in the same manner. Be aware that this can lead to recursion errors:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    public </span><span class="default">$x</span><span class="keyword">;<br />}<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$b </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">= </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Results in:<br />PHP Fatal error:  Nesting level too deep - recursive dependency? in test.php on line 11</span></code></div>
  </div>
 </div>
  <div class="note" id="98725">  <div class="votes">
    <div id="Vu98725">
    <a href="/manual/vote-note.php?id=98725&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98725">
    <a href="/manual/vote-note.php?id=98725&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98725" title="79% like this...">
    64
    </div>
  </div>
  <a href="#98725" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#98725"> &para;</a><div class="date" title="2010-07-02 09:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98725">
<div class="phpcode"><code><span class="html">Comparison using &lt;&gt; operators should be documented.  Between two objects, at least in PHP5.3, the comparison operation stops and returns at the first unequal property found.<br /><br /><span class="default">&lt;?php<br /><br />$o1 </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();<br /></span><span class="default">$o1</span><span class="keyword">-&gt;</span><span class="default">prop1 </span><span class="keyword">= </span><span class="string">'c'</span><span class="keyword">;<br /></span><span class="default">$o1</span><span class="keyword">-&gt;</span><span class="default">prop2 </span><span class="keyword">= </span><span class="default">25</span><span class="keyword">;<br /></span><span class="default">$o1</span><span class="keyword">-&gt;</span><span class="default">prop3 </span><span class="keyword">= </span><span class="default">201</span><span class="keyword">;<br /></span><span class="default">$o1</span><span class="keyword">-&gt;</span><span class="default">prop4 </span><span class="keyword">= </span><span class="default">1000</span><span class="keyword">;<br /><br /></span><span class="default">$o2 </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">();<br /></span><span class="default">$o2</span><span class="keyword">-&gt;</span><span class="default">prop1 </span><span class="keyword">= </span><span class="string">'c'</span><span class="keyword">;<br /></span><span class="default">$o2</span><span class="keyword">-&gt;</span><span class="default">prop2 </span><span class="keyword">= </span><span class="default">25</span><span class="keyword">;<br /></span><span class="default">$o2</span><span class="keyword">-&gt;</span><span class="default">prop3 </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /></span><span class="default">$o2</span><span class="keyword">-&gt;</span><span class="default">prop4 </span><span class="keyword">= </span><span class="default">9999</span><span class="keyword">;<br /><br />echo (int)(</span><span class="default">$o1 </span><span class="keyword">&lt; </span><span class="default">$o2</span><span class="keyword">); </span><span class="comment">// 0<br /></span><span class="keyword">echo (int)(</span><span class="default">$o1 </span><span class="keyword">&gt; </span><span class="default">$o2</span><span class="keyword">); </span><span class="comment">// 1<br /><br /></span><span class="default">$o1</span><span class="keyword">-&gt;</span><span class="default">prop3 </span><span class="keyword">= </span><span class="default">200</span><span class="keyword">;<br /><br />echo (int)(</span><span class="default">$o1 </span><span class="keyword">&lt; </span><span class="default">$o2</span><span class="keyword">); </span><span class="comment">// 1<br /></span><span class="keyword">echo (int)(</span><span class="default">$o1 </span><span class="keyword">&gt; </span><span class="default">$o2</span><span class="keyword">); </span><span class="comment">// 0<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121105">  <div class="votes">
    <div id="Vu121105">
    <a href="/manual/vote-note.php?id=121105&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121105">
    <a href="/manual/vote-note.php?id=121105&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121105" title="63% like this...">
    9
    </div>
  </div>
  <a href="#121105" class="name">
  <strong class="user"><em>rnealxp at yahoo dot com</em></strong></a><a class="genanchor" href="#121105"> &para;</a><div class="date" title="2017-05-20 10:26"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121105">
<div class="phpcode"><code><span class="html">These three functions call themselves recursively and handle any nesting levels of arrays/objects/values and do strict comparisons. The entry-point to this function set would be "valuesAreIdentical".<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">valuesAreIdentical</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">): </span><span class="default">bool </span><span class="keyword">{<br />    </span><span class="default">$type1 </span><span class="keyword">= </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">);<br />    </span><span class="default">$type2 </span><span class="keyword">= </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$v2</span><span class="keyword">);<br /><br />    if(</span><span class="default">$type1 </span><span class="keyword">!== </span><span class="default">$type2</span><span class="keyword">){<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    switch(</span><span class="default">true</span><span class="keyword">){<br />        case (</span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'boolean' </span><span class="keyword">|| </span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'integer' </span><span class="keyword">|| </span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'double' </span><span class="keyword">|| </span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'string'</span><span class="keyword">):<br />            </span><span class="comment">//Do strict comparison here.<br />            </span><span class="keyword">if(</span><span class="default">$v1 </span><span class="keyword">!== </span><span class="default">$v2</span><span class="keyword">){<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            break;<br /><br />        case (</span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'array'</span><span class="keyword">):<br />            </span><span class="default">$bool </span><span class="keyword">= </span><span class="default">arraysAreIdentical</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">);<br />            if(</span><span class="default">$bool</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            break;<br /><br />        case </span><span class="string">'object'</span><span class="keyword">:<br />            </span><span class="default">$bool </span><span class="keyword">= </span><span class="default">objectsAreIdentical</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">,</span><span class="default">$v2</span><span class="keyword">);<br />            if(</span><span class="default">$bool</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            break;<br /><br />        case </span><span class="string">'NULL'</span><span class="keyword">:<br />            </span><span class="comment">//Since both types were of type NULL, consider their "values" equal.<br />            </span><span class="keyword">break;<br /><br />        case </span><span class="string">'resource'</span><span class="keyword">:<br />            </span><span class="comment">//How to compare if at all?<br />            </span><span class="keyword">break;<br /><br />        case </span><span class="string">'unknown type'</span><span class="keyword">:<br />            </span><span class="comment">//How to compare if at all?<br />            </span><span class="keyword">break;<br />    } </span><span class="comment">//end switch<br /><br />    //All tests passed.<br />    </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">objectsAreIdentical</span><span class="keyword">(</span><span class="default">$o1</span><span class="keyword">, </span><span class="default">$o2</span><span class="keyword">): </span><span class="default">bool </span><span class="keyword">{<br />    </span><span class="comment">//See if loose comparison passes.<br />    </span><span class="keyword">if(</span><span class="default">$o1 </span><span class="keyword">!= </span><span class="default">$o2</span><span class="keyword">){<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">//Now do strict(er) comparison.<br />    </span><span class="default">$objReflection1 </span><span class="keyword">= new </span><span class="default">ReflectionObject</span><span class="keyword">(</span><span class="default">$o1</span><span class="keyword">);<br />    </span><span class="default">$objReflection2 </span><span class="keyword">= new </span><span class="default">ReflectionObject</span><span class="keyword">(</span><span class="default">$o2</span><span class="keyword">);<br /><br />    </span><span class="default">$arrProperties1 </span><span class="keyword">= </span><span class="default">$objReflection1</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">(</span><span class="default">ReflectionProperty</span><span class="keyword">::</span><span class="default">IS_PUBLIC</span><span class="keyword">);<br />    </span><span class="default">$arrProperties2 </span><span class="keyword">= </span><span class="default">$objReflection2</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">(</span><span class="default">ReflectionProperty</span><span class="keyword">::</span><span class="default">IS_PUBLIC</span><span class="keyword">);<br /><br />    </span><span class="default">$bool </span><span class="keyword">= </span><span class="default">arraysAreIdentical</span><span class="keyword">(</span><span class="default">$arrProperties1</span><span class="keyword">, </span><span class="default">$arrProperties2</span><span class="keyword">);<br />    if(</span><span class="default">$bool</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    foreach(</span><span class="default">$arrProperties1 </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$propName</span><span class="keyword">){<br />        </span><span class="default">$bool </span><span class="keyword">= </span><span class="default">valuesAreIdentical</span><span class="keyword">(</span><span class="default">$o1</span><span class="keyword">-&gt;</span><span class="default">$propName</span><span class="keyword">, </span><span class="default">$o2</span><span class="keyword">-&gt;</span><span class="default">$propName</span><span class="keyword">);<br />        if(</span><span class="default">$bool</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="comment">//All tests passed.<br />    </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">arraysAreIdentical</span><span class="keyword">(array </span><span class="default">$arr1</span><span class="keyword">, array </span><span class="default">$arr2</span><span class="keyword">): </span><span class="default">bool </span><span class="keyword">{<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">);<br /><br />    </span><span class="comment">//Require that they have the same size.<br />    </span><span class="keyword">if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr2</span><span class="keyword">) !== </span><span class="default">$count</span><span class="keyword">){<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">//Require that they have the same keys.<br />    </span><span class="default">$arrKeysInCommon </span><span class="keyword">= </span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">);<br />    if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$arrKeysInCommon</span><span class="keyword">)!== </span><span class="default">$count</span><span class="keyword">){<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">//Require that their keys be in the same order.<br />    </span><span class="default">$arrKeys1 </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">);<br />    </span><span class="default">$arrKeys2 </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr2</span><span class="keyword">);<br />    foreach(</span><span class="default">$arrKeys1 </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">){<br />        if(</span><span class="default">$arrKeys1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] !== </span><span class="default">$arrKeys2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]){<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="comment">//They do have same keys and in same order.<br />    </span><span class="keyword">foreach(</span><span class="default">$arr1 </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">){<br />        </span><span class="default">$bool </span><span class="keyword">= </span><span class="default">valuesAreIdentical</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$arr2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        if(</span><span class="default">$bool</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /><br />    </span><span class="comment">//All tests passed.<br />    </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124904">  <div class="votes">
    <div id="Vu124904">
    <a href="/manual/vote-note.php?id=124904&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124904">
    <a href="/manual/vote-note.php?id=124904&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124904" title="56% like this...">
    2
    </div>
  </div>
  <a href="#124904" class="name">
  <strong class="user"><em>rnealxp at yahoo dot com</em></strong></a><a class="genanchor" href="#124904"> &para;</a><div class="date" title="2020-04-12 04:19"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124904">
<div class="phpcode"><code><span class="html">Please use this corrected version of function "valuesAreIdentical" instead of that which I previously posted (dependencies found in previous post); if an Admin can just replace the fn snippet, awesome/thanks, otherwise, apologies.<br /><span class="default">&lt;?php<br />    </span><span class="keyword">public static function </span><span class="default">valuesAreIdentical</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">):</span><span class="default">bool</span><span class="keyword">{<br />        </span><span class="default">$type1 </span><span class="keyword">= </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">);<br />        </span><span class="default">$type2 </span><span class="keyword">= </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$v2</span><span class="keyword">);<br />        switch(</span><span class="default">true</span><span class="keyword">){<br />            case (</span><span class="default">$type1 </span><span class="keyword">!== </span><span class="default">$type2</span><span class="keyword">):<br />                return </span><span class="default">false</span><span class="keyword">;<br />            case (</span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'boolean' </span><span class="keyword">|| </span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'integer' </span><span class="keyword">|| </span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'double' </span><span class="keyword">|| </span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'string'</span><span class="keyword">):<br />                </span><span class="comment">//Do strict comparison here.<br />                </span><span class="keyword">return (</span><span class="default">$v1</span><span class="keyword">===</span><span class="default">$v2</span><span class="keyword">);<br />            case (</span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'array'</span><span class="keyword">):<br />                return </span><span class="default">self</span><span class="keyword">::</span><span class="default">arraysAreIdentical</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">, </span><span class="default">$v2</span><span class="keyword">);<br />            case (</span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'object'</span><span class="keyword">):<br />                return </span><span class="default">self</span><span class="keyword">::</span><span class="default">objectsAreIdentical</span><span class="keyword">(</span><span class="default">$v1</span><span class="keyword">,</span><span class="default">$v2</span><span class="keyword">);<br />            case (</span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'NULL'</span><span class="keyword">):<br />                </span><span class="comment">//Since both types were of type NULL, consider their "values" equal.<br />                </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />            case (</span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'resource' </span><span class="keyword">|| </span><span class="default">$type1</span><span class="keyword">===</span><span class="string">'unknown type'</span><span class="keyword">):<br />                </span><span class="comment">//How to compare if at all?<br />                </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">;<br />            default:<br />                return </span><span class="default">true</span><span class="keyword">; </span><span class="comment">//Code-flow not intended to arrive here.             <br />        </span><span class="keyword">} </span><span class="comment">//end switch<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128273">  <div class="votes">
    <div id="Vu128273">
    <a href="/manual/vote-note.php?id=128273&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128273">
    <a href="/manual/vote-note.php?id=128273&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128273" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128273" class="name">
  <strong class="user"><em>cpmjr1 at gmail dot com</em></strong></a><a class="genanchor" href="#128273"> &para;</a><div class="date" title="2023-03-02 05:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128273">
<div class="phpcode"><code><span class="html">It is not immediately obvious based on the docs, but the equality comparison operator does also check protected and private properties.<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{ public </span><span class="default">$a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; private </span><span class="default">$b </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">) {</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">b </span><span class="keyword">= </span><span class="default">$test</span><span class="keyword">;}}<br />echo </span><span class="string">"A(1) == A(2) " </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">((new </span><span class="default">A</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">)) == (new </span><span class="default">A</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">)), </span><span class="default">true</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"A(1) == A(1) " </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">((new </span><span class="default">A</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">)) == (new </span><span class="default">A</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">)), </span><span class="default">true</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>Output:<br />A(1) == A(2) false<br />A(1) == A(1) true</span></code></div>
  </div>
 </div>
  <div class="note" id="114407">  <div class="votes">
    <div id="Vu114407">
    <a href="/manual/vote-note.php?id=114407&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114407">
    <a href="/manual/vote-note.php?id=114407&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114407" title="50% like this...">
    0
    </div>
  </div>
  <a href="#114407" class="name">
  <strong class="user"><em>nhuhoai</em></strong></a><a class="genanchor" href="#114407"> &para;</a><div class="date" title="2014-02-17 12:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114407">
<div class="phpcode"><code><span class="html">For comparison about two objects in a class, you can use an interface like this and customize your functions for each class:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">EQU </span><span class="keyword">{<br />    public static function </span><span class="default">compare</span><span class="keyword">( </span><span class="default">EQU $me</span><span class="keyword">, </span><span class="default">EQU $you </span><span class="keyword">);<br />    public function </span><span class="default">equals</span><span class="keyword">( </span><span class="default">EQU $you </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />If you gotcha a super class, you can make generic functions (not safe but work with not complex class):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">SuperClass </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">( ) {<br />        </span><span class="comment">// do what you need<br />    </span><span class="keyword">}<br />    public static function </span><span class="default">compare</span><span class="keyword">( </span><span class="default">$obj1</span><span class="keyword">, </span><span class="default">$obj2 </span><span class="keyword">) {<br />        return </span><span class="default">serialize</span><span class="keyword">( </span><span class="default">$obj1 </span><span class="keyword">) == </span><span class="default">serialize</span><span class="keyword">( </span><span class="default">$obj2 </span><span class="keyword">);<br />    }<br />    public function </span><span class="default">equals</span><span class="keyword">( </span><span class="default">$obj </span><span class="keyword">) {<br />        return static::</span><span class="default">compare</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">, </span><span class="default">$obj </span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="73542">  <div class="votes">
    <div id="Vu73542">
    <a href="/manual/vote-note.php?id=73542&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73542">
    <a href="/manual/vote-note.php?id=73542&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73542" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73542" class="name">
  <strong class="user"><em>rune at zedeler dot dk</em></strong></a><a class="genanchor" href="#73542"> &para;</a><div class="date" title="2007-02-28 08:34"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73542">
<div class="phpcode"><code><span class="html">Whoops, apparently I hadn't checked the array-part of the below very well.<br />Forgot to test if the arrays had same length, and had some misaligned parenthesis.<br />This one should work better :+)<br /><br />&lt;?<br />function deepCompare($a,$b) {<br />  if(is_object($a) &amp;&amp; is_object($b)) {<br />    if(get_class($a)!=get_class($b))<br />      return false;<br />    foreach($a as $key =&gt; $val) {<br />      if(!deepCompare($val,$b-&gt;$key))<br />        return false;<br />    }<br />    return true;<br />  }<br />  else if(is_array($a) &amp;&amp; is_array($b)) {<br />    while(!is_null(key($a)) &amp;&amp; !is_null(key($b))) {<br />      if (key($a)!==key($b) || !deepCompare(current($a),current($b)))<br />        return false;<br />      next($a); next($b);<br />    }<br />    return is_null(key($a)) &amp;&amp; is_null(key($b));<br />  }<br />  else<br />    return $a===$b;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="85606">  <div class="votes">
    <div id="Vu85606">
    <a href="/manual/vote-note.php?id=85606&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85606">
    <a href="/manual/vote-note.php?id=85606&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85606" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#85606" class="name">
  <strong class="user"><em>wbcarts at juno dot com</em></strong></a><a class="genanchor" href="#85606"> &para;</a><div class="date" title="2008-09-08 01:36"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85606">
<div class="phpcode"><code><span class="html">COMPARING OBJECTS using PHP's usort() method.<br /><br />PHP and MySQL both provide ways to sort your data already, and it is a good idea to use that if possible. However, since this section is on comparing your own PHP objects (and that you may need to alter the sorting method in PHP), here is an example of how you can do that using PHP's "user-defined" sort method, usort() and your own class compare() methods.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br /> * Employee.php<br /> *<br /> * This class defines a compare() method, which tells PHP the sorting rules<br /> * for this object - which is to sort by emp_id.<br /> *<br /> */<br /></span><span class="keyword">class </span><span class="default">Employee<br /></span><span class="keyword">{<br />    public </span><span class="default">$first</span><span class="keyword">;<br />    public </span><span class="default">$last</span><span class="keyword">;<br />    public </span><span class="default">$emp_id</span><span class="keyword">;     </span><span class="comment">// the property we're interested in...<br /><br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$emp_first</span><span class="keyword">, </span><span class="default">$emp_last</span><span class="keyword">, </span><span class="default">$emp_ID</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">first </span><span class="keyword">= </span><span class="default">$emp_first</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">last </span><span class="keyword">= </span><span class="default">$emp_last</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">emp_id </span><span class="keyword">= </span><span class="default">$emp_ID</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/*<br />     * define the rules for sorting this object - using emp_id.<br />     * Make sure this function returns a -1, 0, or 1.<br />     */<br />    </span><span class="keyword">public static function </span><span class="default">compare</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">emp_id </span><span class="keyword">&lt; </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">emp_id</span><span class="keyword">) return -</span><span class="default">1</span><span class="keyword">;<br />        else if(</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">emp_id </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">emp_id</span><span class="keyword">) return </span><span class="default">0</span><span class="keyword">;<br />        else return </span><span class="default">1</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">__toString</span><span class="keyword">()<br />    {<br />        return </span><span class="string">"Employee[first=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">first</span><span class="string">, last=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">last</span><span class="string">, emp_id=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">emp_id</span><span class="string">]"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment"># create a PHP array and initialize it with Employee objects.<br /></span><span class="default">$employees </span><span class="keyword">= array(<br />  new </span><span class="default">Employee</span><span class="keyword">(</span><span class="string">"John"</span><span class="keyword">, </span><span class="string">"Smith"</span><span class="keyword">, </span><span class="default">345</span><span class="keyword">),<br />  new </span><span class="default">Employee</span><span class="keyword">(</span><span class="string">"Jane"</span><span class="keyword">, </span><span class="string">"Doe"</span><span class="keyword">, </span><span class="default">231</span><span class="keyword">),<br />  new </span><span class="default">Employee</span><span class="keyword">(</span><span class="string">"Mike"</span><span class="keyword">, </span><span class="string">"Barnes"</span><span class="keyword">, </span><span class="default">522</span><span class="keyword">),<br />  new </span><span class="default">Employee</span><span class="keyword">(</span><span class="string">"Vicky"</span><span class="keyword">, </span><span class="string">"Jones"</span><span class="keyword">, </span><span class="default">107</span><span class="keyword">),<br />  new </span><span class="default">Employee</span><span class="keyword">(</span><span class="string">"John"</span><span class="keyword">, </span><span class="string">"Doe"</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">),<br />  new </span><span class="default">Employee</span><span class="keyword">(</span><span class="string">"Kevin"</span><span class="keyword">, </span><span class="string">"Patterson"</span><span class="keyword">, </span><span class="default">89</span><span class="keyword">)<br />);<br /><br /></span><span class="comment"># sort the $employees array using Employee compare() method.<br /></span><span class="default">usort</span><span class="keyword">(</span><span class="default">$employees</span><span class="keyword">, array(</span><span class="string">"Employee"</span><span class="keyword">, </span><span class="string">"compare"</span><span class="keyword">));<br /><br /></span><span class="comment"># print the results<br /></span><span class="keyword">foreach(</span><span class="default">$employees </span><span class="keyword">as </span><span class="default">$employee</span><span class="keyword">)<br />{<br />  echo </span><span class="default">$employee </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Results are now sorted by emp_id:<br /><br />Employee[first=John, last=Doe, emp_id=2]<br />Employee[first=Kevin, last=Patterson, emp_id=89]<br />Employee[first=Vicky, last=Jones, emp_id=107]<br />Employee[first=Jane, last=Doe, emp_id=231]<br />Employee[first=John, last=Smith, emp_id=345]<br />Employee[first=Mike, last=Barnes, emp_id=522]<br /><br />Important Note: Your PHP code will never directly call the Employee's compare() method, but PHP's usort() calls it many many times. Also, when defining the rules for sorting, make sure to get to a "primitive type" level... that is, down to a number or string, and that the function returns a -1, 0, or 1, for reliable and consistent results.<br /><br />Also see: <a href="http://www.php.net/manual/en/function.usort.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.usort.php</a> for more examples of PHP's sorting facilities.</span></code></div>
  </div>
 </div>
  <div class="note" id="81600">  <div class="votes">
    <div id="Vu81600">
    <a href="/manual/vote-note.php?id=81600&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81600">
    <a href="/manual/vote-note.php?id=81600&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81600" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#81600" class="name">
  <strong class="user"><em>cross+php at distal dot com</em></strong></a><a class="genanchor" href="#81600"> &para;</a><div class="date" title="2008-03-05 08:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81600">
<div class="phpcode"><code><span class="html">In response to "rune at zedeler dot dk"s comment about class contents being equal, I have a similar issue.  I want to sort an array of objects using sort().<br /><br />I know I can do it with usort(), but I'm used to C++ where you can define operators that allow comparison.  I see in the zend source code that it calls a compare_objects function, but I don't see any way to implement that function for an object.  Would it have to be an extension to provide that interface?<br /><br />If so, I'd like to suggest that you allow equivalence and/or comparison operations to be defined in a class definition in PHP.  Then, the sorts of things rune and I want to do would be much easier.</span></code></div>
  </div>
 </div>
  <div class="note" id="73528">  <div class="votes">
    <div id="Vu73528">
    <a href="/manual/vote-note.php?id=73528&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73528">
    <a href="/manual/vote-note.php?id=73528&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73528" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#73528" class="name">
  <strong class="user"><em>rune at zedeler dot dk</em></strong></a><a class="genanchor" href="#73528"> &para;</a><div class="date" title="2007-02-27 08:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73528">
<div class="phpcode"><code><span class="html">I haven't found a build-in function to check whether two obects are identical - that is, all their fields are identical.<br />In other words,<br /><br />&lt;?<br />class A {<br />  var $x;<br />  function __construct($x) { $this-&gt;x = $x; }<br /><br />}<br />$identical1 = new A(42);<br />$identical2 = new A(42);<br />$different = new A('42');<br />?&gt;<br /><br />Comparing the objects with "==" will claim that all three of them are equal. Comparing with "===" will claim that all are un-equal.<br />I have found no build-in function to check that the two identicals are <br />identical, but not identical to the different.<br /><br />The following function does that:<br /><br />&lt;?<br />function deepCompare($a,$b) {<br />  if(is_object($a) &amp;&amp; is_object($b)) {<br />    if(get_class($a)!=get_class($b))<br />      return false;<br />    foreach($a as $key =&gt; $val) {<br />      if(!deepCompare($val,$b-&gt;$key))<br />    return false;<br />    }<br />    return true;<br />  }<br />  else if(is_array($a) &amp;&amp; is_array($b)) {<br />    while(!is_null(key($a) &amp;&amp; !is_null(key($b)))) {<br />      if (key($a)!==key($b) || !deepCompare(current($a),current($b)))<br />    return false;<br />      next($a); next($b);<br />    }<br />    return true;<br />  }<br />  else<br />    return $a===$b;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="85769">  <div class="votes">
    <div id="Vu85769">
    <a href="/manual/vote-note.php?id=85769&amp;page=language.oop5.object-comparison&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85769">
    <a href="/manual/vote-note.php?id=85769&amp;page=language.oop5.object-comparison&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85769" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#85769" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#85769"> &para;</a><div class="date" title="2008-09-16 03:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85769">
<div class="phpcode"><code><span class="html">This has already been mentioned (see jazfresh at hotmail.com's note), but here it is again in more detail because for objects the difference between == and === is significant.<br /><br />Loose equality (==) over objects is recursive: if the properties of the two objects being compared are themselves objects, then those properties will also be compared using ==.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Link<br /></span><span class="keyword">{<br />    public </span><span class="default">$link</span><span class="keyword">; function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">) { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">link </span><span class="keyword">= </span><span class="default">$link</span><span class="keyword">; }<br />}<br />class </span><span class="default">Leaf<br /></span><span class="keyword">{<br />    public </span><span class="default">$leaf</span><span class="keyword">; function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$leaf</span><span class="keyword">) { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">leaf </span><span class="keyword">= </span><span class="default">$leaf</span><span class="keyword">; }<br />}<br /><br /></span><span class="default">$leaf1 </span><span class="keyword">= new </span><span class="default">Leaf</span><span class="keyword">(</span><span class="default">42</span><span class="keyword">);<br /></span><span class="default">$leaf2 </span><span class="keyword">= new </span><span class="default">Leaf</span><span class="keyword">(</span><span class="default">42</span><span class="keyword">);<br /><br /></span><span class="default">$link1 </span><span class="keyword">= new </span><span class="default">Link</span><span class="keyword">(</span><span class="default">$leaf1</span><span class="keyword">);<br /></span><span class="default">$link2 </span><span class="keyword">= new </span><span class="default">Link</span><span class="keyword">(</span><span class="default">$leaf2</span><span class="keyword">);<br /><br />echo </span><span class="string">"Comparing Leaf object equivalence: is \$leaf1==\$leaf2? "</span><span class="keyword">, (</span><span class="default">$leaf1 </span><span class="keyword">== </span><span class="default">$leaf2  </span><span class="keyword">? </span><span class="string">"Yes" </span><span class="keyword">: </span><span class="string">"No"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"Comparing Leaf object identity: is \$leaf1===\$leaf2? "</span><span class="keyword">,   (</span><span class="default">$leaf1 </span><span class="keyword">=== </span><span class="default">$leaf2 </span><span class="keyword">? </span><span class="string">"Yes" </span><span class="keyword">: </span><span class="string">"No"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"Comparing Link object equivalence: is \$link1==\$link2? "</span><span class="keyword">,(</span><span class="default">$link1 </span><span class="keyword">== </span><span class="default">$link2  </span><span class="keyword">? </span><span class="string">"Yes" </span><span class="keyword">: </span><span class="string">"No"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"Comparing Link object identity: is \$link1===\$link2? "</span><span class="keyword">,  (</span><span class="default">$link1 </span><span class="keyword">=== </span><span class="default">$link2 </span><span class="keyword">? </span><span class="string">"Yes" </span><span class="keyword">: </span><span class="string">"No"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Even though $link1 and $link2 contain different Leaf objects, they are still equivalent because the Leaf objects are themselves equivalent.<br /><br />The practical upshot is that using "==" when "===" would be more appropriate can result in a severe performance penalty, especially if the objects are large and/or complex. In fact, if there are any circular relationships involved between the objects or (recursively) any of their properties, then a fatal error can result because of the implied infinite loop.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{ public </span><span class="default">$foo</span><span class="keyword">; }<br /></span><span class="default">$t </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">; </span><span class="default">$t</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="default">$t</span><span class="keyword">;<br /></span><span class="default">$g </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">; </span><span class="default">$g</span><span class="keyword">-&gt;</span><span class="default">foo </span><span class="keyword">= </span><span class="default">$g</span><span class="keyword">;<br /><br />echo </span><span class="string">"Strict identity:   "</span><span class="keyword">, (</span><span class="default">$t</span><span class="keyword">===</span><span class="default">$g </span><span class="keyword">? </span><span class="string">"True" </span><span class="keyword">: </span><span class="string">"False"</span><span class="keyword">),</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"Loose equivalence: "</span><span class="keyword">, (</span><span class="default">$t</span><span class="keyword">==</span><span class="default">$g  </span><span class="keyword">? </span><span class="string">"True" </span><span class="keyword">: </span><span class="string">"False"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />So preference should be given to comparing objects with "===" rather than "=="; if two distinct objects are to be compared for equivalence, try to do so by examining suitable individual properties. (Maybe PHP could get a magic "__equals" method that gets used to evaluate "=="? :) )</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.oop5.object-comparison&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.oop5.object-comparison.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.oop5.php">Classes and Objects</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="oop5.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.basic.php" title="The Basics">The Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.properties.php" title="Properties">Properties</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.property-hooks.php" title="Property Hooks">Property Hooks</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.constants.php" title="Class Constants">Class Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.autoload.php" title="Autoloading Classes">Autoloading Classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.decon.php" title="Constructors and Destructors">Constructors and Destructors</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.visibility.php" title="Visibility">Visibility</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.inheritance.php" title="Object Inheritance">Object Inheritance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.paamayim-nekudotayim.php" title="Scope Resolution Operator (::)">Scope Resolution Operator (::)</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.static.php" title="Static Keyword">Static Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.abstract.php" title="Class Abstraction">Class Abstraction</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.interfaces.php" title="Object Interfaces">Object Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.traits.php" title="Traits">Traits</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.anonymous.php" title="Anonymous classes">Anonymous classes</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.overloading.php" title="Overloading">Overloading</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.iterations.php" title="Object Iteration">Object Iteration</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.magic.php" title="Magic Methods">Magic Methods</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.final.php" title="Final Keyword">Final Keyword</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.cloning.php" title="Object Cloning">Object Cloning</a>
                        </li>
                                                <li class="current">
                            <a href="language.oop5.object-comparison.php" title="Comparing Objects">Comparing Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.late-static-bindings.php" title="Late Static Bindings">Late Static Bindings</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.references.php" title="Objects and references">Objects and references</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.serialization.php" title="Object Serialization">Object Serialization</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.variance.php" title="Covariance and Contravariance">Covariance and Contravariance</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.lazy-objects.php" title="Lazy Objects">Lazy Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.changelog.php" title="OOP Changelog">OOP Changelog</a>
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
