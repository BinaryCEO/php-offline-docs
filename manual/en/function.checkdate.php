<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: checkdate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.checkdate.php">
 <link rel="shorturl" href="https://www.php.net/checkdate">
 <link rel="alternate" href="https://www.php.net/checkdate" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.datetime.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.datetime.php">
 <link rel="next" href="https://www.php.net/manual/en/function.date.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.checkdate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.checkdate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.checkdate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.checkdate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.checkdate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.checkdate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.checkdate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.checkdate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.checkdate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.checkdate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.checkdate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Validate a Gregorian date" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: checkdate - Manual" />
<meta name="twitter:description" content="Validate a Gregorian date" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: checkdate - Manual" />
<meta itemprop="description" content="Validate a Gregorian date" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Validate a Gregorian date" />

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
        <a href="function.date.php">
          date &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.datetime.php">
          &laquo; Date/Time Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.datetime.php'>Date/Time</a></li>      <li><a href='ref.datetime.php'>Date/Time Functions</a></li>      </ul>
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
            <option value='en/function.checkdate.php' selected="selected">English</option>
            <option value='de/function.checkdate.php'>German</option>
            <option value='es/function.checkdate.php'>Spanish</option>
            <option value='fr/function.checkdate.php'>French</option>
            <option value='it/function.checkdate.php'>Italian</option>
            <option value='ja/function.checkdate.php'>Japanese</option>
            <option value='pt_BR/function.checkdate.php'>Brazilian Portuguese</option>
            <option value='ru/function.checkdate.php'>Russian</option>
            <option value='tr/function.checkdate.php'>Turkish</option>
            <option value='uk/function.checkdate.php'>Ukrainian</option>
            <option value='zh/function.checkdate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.checkdate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">checkdate</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">checkdate</span> &mdash; <span class="dc-title">Validate a Gregorian date</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.checkdate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>checkdate</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$month</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$day</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$year</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Checks the validity of the date formed by the arguments. A date
   is considered valid if each parameter is properly defined.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.checkdate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">month</code></dt>
     <dd>
      <p class="para">
       The month is between 1 and 12 inclusive.
      </p>
     </dd>
    
    
     <dt><code class="parameter">day</code></dt>
     <dd>
      <p class="para">
       The day is within the allowed number of days for the given 
       <code class="parameter">month</code>.  Leap <code class="parameter">year</code>s 
       are taken into consideration.
      </p>
     </dd>
    
    
     <dt><code class="parameter">year</code></dt>
     <dd>
      <p class="para">
       The year is between 1 and 32767 inclusive.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.checkdate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the date given is valid; otherwise returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.checkdate-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2266">
    <p><strong>Example #1 <span class="function"><strong>checkdate()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">checkdate</span><span style="color: #007700">(</span><span style="color: #0000BB">12</span><span style="color: #007700">, </span><span style="color: #0000BB">31</span><span style="color: #007700">, </span><span style="color: #0000BB">2000</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">checkdate</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">29</span><span style="color: #007700">, </span><span style="color: #0000BB">2001</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">bool(true)
bool(false)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.checkdate-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mktime.php" class="function" rel="rdfs-seeAlso">mktime()</a> - Get Unix timestamp for a date</span></li>
    <li><span class="function"><a href="function.strtotime.php" class="function" rel="rdfs-seeAlso">strtotime()</a> - Parse about any English textual datetime description into a Unix timestamp</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/datetime/functions/checkdate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.checkdate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.checkdate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.checkdate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113205">  <div class="votes">
    <div id="Vu113205">
    <a href="/manual/vote-note.php?id=113205&amp;page=function.checkdate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113205">
    <a href="/manual/vote-note.php?id=113205&amp;page=function.checkdate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113205" title="73% like this...">
    645
    </div>
  </div>
  <a href="#113205" class="name">
  <strong class="user"><em>glavic at gmail dot com</em></strong></a><a class="genanchor" href="#113205"> &para;</a><div class="date" title="2013-09-12 12:46"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113205">
<div class="phpcode"><code><span class="html">With DateTime you can make the shortest date&amp;time validator for all formats.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">validateDate</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">, </span><span class="default">$format </span><span class="keyword">= </span><span class="string">'Y-m-d H:i:s'</span><span class="keyword">)<br />{<br />    </span><span class="default">$d </span><span class="keyword">= </span><span class="default">DateTime</span><span class="keyword">::</span><span class="default">createFromFormat</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">, </span><span class="default">$date</span><span class="keyword">);<br />    return </span><span class="default">$d </span><span class="keyword">&amp;&amp; </span><span class="default">$d</span><span class="keyword">-&gt;</span><span class="default">format</span><span class="keyword">(</span><span class="default">$format</span><span class="keyword">) == </span><span class="default">$date</span><span class="keyword">;<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'2012-02-28 12:12:12'</span><span class="keyword">)); </span><span class="comment"># true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'2012-02-30 12:12:12'</span><span class="keyword">)); </span><span class="comment"># false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'2012-02-28'</span><span class="keyword">, </span><span class="string">'Y-m-d'</span><span class="keyword">)); </span><span class="comment"># true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'28/02/2012'</span><span class="keyword">, </span><span class="string">'d/m/Y'</span><span class="keyword">)); </span><span class="comment"># true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'30/02/2012'</span><span class="keyword">, </span><span class="string">'d/m/Y'</span><span class="keyword">)); </span><span class="comment"># false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'14:50'</span><span class="keyword">, </span><span class="string">'H:i'</span><span class="keyword">)); </span><span class="comment"># true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'14:77'</span><span class="keyword">, </span><span class="string">'H:i'</span><span class="keyword">)); </span><span class="comment"># false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="default">14</span><span class="keyword">, </span><span class="string">'H'</span><span class="keyword">)); </span><span class="comment"># true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'14'</span><span class="keyword">, </span><span class="string">'H'</span><span class="keyword">)); </span><span class="comment"># true<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'2012-02-28T12:12:12+02:00'</span><span class="keyword">, </span><span class="string">'Y-m-d\TH:i:sP'</span><span class="keyword">)); </span><span class="comment"># true<br /># or<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'2012-02-28T12:12:12+02:00'</span><span class="keyword">, </span><span class="default">DateTime</span><span class="keyword">::</span><span class="default">ATOM</span><span class="keyword">)); </span><span class="comment"># true<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'Tue, 28 Feb 2012 12:12:12 +0200'</span><span class="keyword">, </span><span class="string">'D, d M Y H:i:s O'</span><span class="keyword">)); </span><span class="comment"># true<br /># or<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'Tue, 28 Feb 2012 12:12:12 +0200'</span><span class="keyword">, </span><span class="default">DateTime</span><span class="keyword">::</span><span class="default">RSS</span><span class="keyword">)); </span><span class="comment"># true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">validateDate</span><span class="keyword">(</span><span class="string">'Tue, 27 Feb 2012 12:12:12 +0200'</span><span class="keyword">, </span><span class="default">DateTime</span><span class="keyword">::</span><span class="default">RSS</span><span class="keyword">)); </span><span class="comment"># false<br /># ...</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130396">  <div class="votes">
    <div id="Vu130396">
    <a href="/manual/vote-note.php?id=130396&amp;page=function.checkdate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130396">
    <a href="/manual/vote-note.php?id=130396&amp;page=function.checkdate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130396" title="50% like this...">
    0
    </div>
  </div>
  <a href="#130396" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#130396"> &para;</a><div class="date" title="2025-06-29 03:01"><strong>3 months ago</strong></div>
  <div class="text" id="Hcom130396">
<div class="phpcode"><code><span class="html">Function above from gladic returns bad result with format "Y-m" when month  is february and the year is non bissextile.<br /><br />function validateDate($date, $format = 'Y-m-d H:i:s')<br />{<br />    $d = DateTime::createFromFormat($format, $date);<br />    return $d &amp;&amp; $d-&gt;format($format) == $date;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.checkdate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.checkdate.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.datetime.php">Date/Time Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.checkdate.php" title="checkdate">checkdate</a>
                        </li>
                                                <li class="">
                            <a href="function.date.php" title="date">date</a>
                        </li>
                                                <li class="">
                            <a href="function.date-add.php" title="date_&#8203;add">date_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.date-create.php" title="date_&#8203;create">date_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.date-create-from-format.php" title="date_&#8203;create_&#8203;from_&#8203;format">date_&#8203;create_&#8203;from_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-create-immutable.php" title="date_&#8203;create_&#8203;immutable">date_&#8203;create_&#8203;immutable</a>
                        </li>
                                                <li class="">
                            <a href="function.date-create-immutable-from-format.php" title="date_&#8203;create_&#8203;immutable_&#8203;from_&#8203;format">date_&#8203;create_&#8203;immutable_&#8203;from_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-date-set.php" title="date_&#8203;date_&#8203;set">date_&#8203;date_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-default-timezone-get.php" title="date_&#8203;default_&#8203;timezone_&#8203;get">date_&#8203;default_&#8203;timezone_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.date-default-timezone-set.php" title="date_&#8203;default_&#8203;timezone_&#8203;set">date_&#8203;default_&#8203;timezone_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-diff.php" title="date_&#8203;diff">date_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.date-format.php" title="date_&#8203;format">date_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-get-last-errors.php" title="date_&#8203;get_&#8203;last_&#8203;errors">date_&#8203;get_&#8203;last_&#8203;errors</a>
                        </li>
                                                <li class="">
                            <a href="function.date-interval-create-from-date-string.php" title="date_&#8203;interval_&#8203;create_&#8203;from_&#8203;date_&#8203;string">date_&#8203;interval_&#8203;create_&#8203;from_&#8203;date_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.date-interval-format.php" title="date_&#8203;interval_&#8203;format">date_&#8203;interval_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-isodate-set.php" title="date_&#8203;isodate_&#8203;set">date_&#8203;isodate_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-modify.php" title="date_&#8203;modify">date_&#8203;modify</a>
                        </li>
                                                <li class="">
                            <a href="function.date-offset-get.php" title="date_&#8203;offset_&#8203;get">date_&#8203;offset_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.date-parse.php" title="date_&#8203;parse">date_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.date-parse-from-format.php" title="date_&#8203;parse_&#8203;from_&#8203;format">date_&#8203;parse_&#8203;from_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.date-sub.php" title="date_&#8203;sub">date_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.date-sun-info.php" title="date_&#8203;sun_&#8203;info">date_&#8203;sun_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.date-sunrise.php" title="date_&#8203;sunrise">date_&#8203;sunrise</a>
                        </li>
                                                <li class="">
                            <a href="function.date-sunset.php" title="date_&#8203;sunset">date_&#8203;sunset</a>
                        </li>
                                                <li class="">
                            <a href="function.date-time-set.php" title="date_&#8203;time_&#8203;set">date_&#8203;time_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-timestamp-get.php" title="date_&#8203;timestamp_&#8203;get">date_&#8203;timestamp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.date-timestamp-set.php" title="date_&#8203;timestamp_&#8203;set">date_&#8203;timestamp_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.date-timezone-get.php" title="date_&#8203;timezone_&#8203;get">date_&#8203;timezone_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.date-timezone-set.php" title="date_&#8203;timezone_&#8203;set">date_&#8203;timezone_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.getdate.php" title="getdate">getdate</a>
                        </li>
                                                <li class="">
                            <a href="function.gettimeofday.php" title="gettimeofday">gettimeofday</a>
                        </li>
                                                <li class="">
                            <a href="function.gmdate.php" title="gmdate">gmdate</a>
                        </li>
                                                <li class="">
                            <a href="function.gmmktime.php" title="gmmktime">gmmktime</a>
                        </li>
                                                <li class="">
                            <a href="function.gmstrftime.php" title="gmstrftime">gmstrftime</a>
                        </li>
                                                <li class="">
                            <a href="function.idate.php" title="idate">idate</a>
                        </li>
                                                <li class="">
                            <a href="function.localtime.php" title="localtime">localtime</a>
                        </li>
                                                <li class="">
                            <a href="function.microtime.php" title="microtime">microtime</a>
                        </li>
                                                <li class="">
                            <a href="function.mktime.php" title="mktime">mktime</a>
                        </li>
                                                <li class="">
                            <a href="function.strftime.php" title="strftime">strftime</a>
                        </li>
                                                <li class="">
                            <a href="function.strptime.php" title="strptime">strptime</a>
                        </li>
                                                <li class="">
                            <a href="function.strtotime.php" title="strtotime">strtotime</a>
                        </li>
                                                <li class="">
                            <a href="function.time.php" title="time">time</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-abbreviations-list.php" title="timezone_&#8203;abbreviations_&#8203;list">timezone_&#8203;abbreviations_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-identifiers-list.php" title="timezone_&#8203;identifiers_&#8203;list">timezone_&#8203;identifiers_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-location-get.php" title="timezone_&#8203;location_&#8203;get">timezone_&#8203;location_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-name-from-abbr.php" title="timezone_&#8203;name_&#8203;from_&#8203;abbr">timezone_&#8203;name_&#8203;from_&#8203;abbr</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-name-get.php" title="timezone_&#8203;name_&#8203;get">timezone_&#8203;name_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-offset-get.php" title="timezone_&#8203;offset_&#8203;get">timezone_&#8203;offset_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-open.php" title="timezone_&#8203;open">timezone_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-transitions-get.php" title="timezone_&#8203;transitions_&#8203;get">timezone_&#8203;transitions_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.timezone-version-get.php" title="timezone_&#8203;version_&#8203;get">timezone_&#8203;version_&#8203;get</a>
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
