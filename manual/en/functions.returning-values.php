<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Returning values - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/functions.returning-values.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/functions.returning-values.php">
 <link rel="alternate" href="https://www.php.net/manual/en/functions.returning-values.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.functions.php">
 <link rel="prev" href="https://www.php.net/manual/en/functions.arguments.php">
 <link rel="next" href="https://www.php.net/manual/en/functions.variable-functions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/functions.returning-values.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/functions.returning-values.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/functions.returning-values.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/functions.returning-values.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/functions.returning-values.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/functions.returning-values.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/functions.returning-values.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/functions.returning-values.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/functions.returning-values.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/functions.returning-values.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/functions.returning-values.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returning values" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Returning values - Manual" />
<meta name="twitter:description" content="Returning values" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Returning values - Manual" />
<meta itemprop="description" content="Returning values" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returning values" />

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
        <a href="functions.variable-functions.php">
          Variable functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="functions.arguments.php">
          &laquo; Function parameters and arguments        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.functions.php'>Functions</a></li>      </ul>
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
            <option value='en/functions.returning-values.php' selected="selected">English</option>
            <option value='de/functions.returning-values.php'>German</option>
            <option value='es/functions.returning-values.php'>Spanish</option>
            <option value='fr/functions.returning-values.php'>French</option>
            <option value='it/functions.returning-values.php'>Italian</option>
            <option value='ja/functions.returning-values.php'>Japanese</option>
            <option value='pt_BR/functions.returning-values.php'>Brazilian Portuguese</option>
            <option value='ru/functions.returning-values.php'>Russian</option>
            <option value='tr/functions.returning-values.php'>Turkish</option>
            <option value='uk/functions.returning-values.php'>Ukrainian</option>
            <option value='zh/functions.returning-values.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="functions.returning-values" class="sect1">
   <h2 class="title">Returning values</h2>

   <p class="para">
    Values are returned by using the optional return statement. Any
    type may be returned, including arrays and objects. This causes the
    function to end its execution immediately and pass control back to
    the line from which it was called. See <span class="function"><a href="function.return.php" class="function">return</a></span>
    for more information.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     If the <span class="function"><a href="function.return.php" class="function">return</a></span> is omitted the value <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> will be
     returned.
    </p>
   </p></blockquote>

   <div class="sect2">
    <h3 class="title">Use of return</h3>
    <p class="para">
     <div class="example" id="example-231">
      <p><strong>Example #1 Use of <span class="function"><a href="function.return.php" class="function">return</a></span></strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">square</span><span style="color: #007700">(</span><span style="color: #0000BB">$num</span><span style="color: #007700">)<br />{<br />    return </span><span style="color: #0000BB">$num </span><span style="color: #007700">* </span><span style="color: #0000BB">$num</span><span style="color: #007700">;<br />}<br />echo </span><span style="color: #0000BB">square</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">);   </span><span style="color: #FF8000">// outputs '16'.<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>

    <p class="para">
     A function can not return multiple values, but similar results can be
     obtained by returning an array.
    </p>
    <p class="para">
     <div class="example" id="example-232">
      <p><strong>Example #2 Returning an array to get multiple values</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">small_numbers</span><span style="color: #007700">()<br />{<br />    return [</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />}<br /></span><span style="color: #FF8000">// Array destructuring will collect each member of the array individually<br /></span><span style="color: #007700">[</span><span style="color: #0000BB">$zero</span><span style="color: #007700">, </span><span style="color: #0000BB">$one</span><span style="color: #007700">, </span><span style="color: #0000BB">$two</span><span style="color: #007700">] = </span><span style="color: #0000BB">small_numbers</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Prior to 7.1.0, the only equivalent alternative is using list() construct<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$zero</span><span style="color: #007700">, </span><span style="color: #0000BB">$one</span><span style="color: #007700">, </span><span style="color: #0000BB">$two</span><span style="color: #007700">) = </span><span style="color: #0000BB">small_numbers</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <p class="para">
     To return a reference from a function, use the reference operator &amp; in
     both the function declaration and when assigning the returned value to a
     variable:
    </p>
    <p class="para">
     <div class="example" id="example-233">
      <p><strong>Example #3 Returning a reference from a function</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function &amp;</span><span style="color: #0000BB">returns_reference</span><span style="color: #007700">()<br />{<br />    return </span><span style="color: #0000BB">$someref</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$newref </span><span style="color: #007700">=&amp; </span><span style="color: #0000BB">returns_reference</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
    <p class="simpara">
     For more information on references, please check out <a href="language.references.php" class="link">References Explained</a>.
    </p>
   </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/functions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunctions.returning-values%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=functions.returning-values&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.returning-values.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99660">  <div class="votes">
    <div id="Vu99660">
    <a href="/manual/vote-note.php?id=99660&amp;page=functions.returning-values&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99660">
    <a href="/manual/vote-note.php?id=99660&amp;page=functions.returning-values&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99660" title="53% like this...">
    21
    </div>
  </div>
  <a href="#99660" class="name">
  <strong class="user"><em>rstaveley at seseit dot com</em></strong></a><a class="genanchor" href="#99660"> &para;</a><div class="date" title="2010-08-29 01:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99660">
<div class="phpcode"><code><span class="html">Developers with a C background may expect pass by reference semantics for arrays. It may be surprising that  pass by value is used for arrays just like scalars. Objects are implicitly passed by reference.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment"># (1) Objects are always passed by reference and returned by reference<br /><br /></span><span class="keyword">class </span><span class="default">Obj </span><span class="keyword">{<br />    public </span><span class="default">$x</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">obj_inc_x</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">) {<br />    </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">x</span><span class="keyword">++;<br />    return </span><span class="default">$obj</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">Obj</span><span class="keyword">();<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$obj2 </span><span class="keyword">= </span><span class="default">obj_inc_x</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">);<br /></span><span class="default">obj_inc_x</span><span class="keyword">(</span><span class="default">$obj2</span><span class="keyword">);<br /><br />print </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">. </span><span class="string">', ' </span><span class="keyword">. </span><span class="default">$obj2</span><span class="keyword">-&gt;</span><span class="default">x </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment"># (2) Scalars are not passed by reference or returned as such<br /><br /></span><span class="keyword">function </span><span class="default">scalar_inc_x</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) {<br />    </span><span class="default">$x</span><span class="keyword">++;<br />    return </span><span class="default">$x</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$x2 </span><span class="keyword">= </span><span class="default">scalar_inc_x</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br /></span><span class="default">scalar_inc_x</span><span class="keyword">(</span><span class="default">$x2</span><span class="keyword">);<br /><br />print </span><span class="default">$x </span><span class="keyword">. </span><span class="string">', ' </span><span class="keyword">. </span><span class="default">$x2 </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment"># (3) You have to force pass by reference and return by reference on scalars<br /><br /></span><span class="keyword">function &amp;</span><span class="default">scalar_ref_inc_x</span><span class="keyword">(&amp;</span><span class="default">$x</span><span class="keyword">) {<br />    </span><span class="default">$x</span><span class="keyword">++;<br />    return </span><span class="default">$x</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$x2 </span><span class="keyword">=&amp; </span><span class="default">scalar_ref_inc_x</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);    </span><span class="comment"># Need reference here as well as the function sig<br /></span><span class="default">scalar_ref_inc_x</span><span class="keyword">(</span><span class="default">$x2</span><span class="keyword">);<br /><br />print </span><span class="default">$x </span><span class="keyword">. </span><span class="string">', ' </span><span class="keyword">. </span><span class="default">$x2 </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment"># (4) Arrays use pass by value sematics just like scalars<br /><br /></span><span class="keyword">function </span><span class="default">array_inc_x</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {<br />    </span><span class="default">$array</span><span class="keyword">{</span><span class="string">'x'</span><span class="keyword">}++;<br />    return </span><span class="default">$array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$array </span><span class="keyword">= array();<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$array2 </span><span class="keyword">= </span><span class="default">array_inc_x</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">array_inc_x</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br /><br />print </span><span class="default">$array</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] . </span><span class="string">', ' </span><span class="keyword">. </span><span class="default">$array2</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] . </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment"># (5) You have to force pass by reference and return by reference on arrays<br /><br /></span><span class="keyword">function &amp;</span><span class="default">array_ref_inc_x</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">) {<br />    </span><span class="default">$array</span><span class="keyword">{</span><span class="string">'x'</span><span class="keyword">}++;<br />    return </span><span class="default">$array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$array </span><span class="keyword">= array();<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$array2 </span><span class="keyword">=&amp; </span><span class="default">array_ref_inc_x</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment"># Need reference here as well as the function sig<br /></span><span class="default">array_ref_inc_x</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">);<br /><br />print </span><span class="default">$array</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] . </span><span class="string">', ' </span><span class="keyword">. </span><span class="default">$array2</span><span class="keyword">[</span><span class="string">'x'</span><span class="keyword">] . </span><span class="string">"\n"</span><span class="keyword">;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120402">  <div class="votes">
    <div id="Vu120402">
    <a href="/manual/vote-note.php?id=120402&amp;page=functions.returning-values&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120402">
    <a href="/manual/vote-note.php?id=120402&amp;page=functions.returning-values&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120402" title="53% like this...">
    18
    </div>
  </div>
  <a href="#120402" class="name">
  <strong class="user"><em>ryan dot jentzsch at gmail dot com</em></strong></a><a class="genanchor" href="#120402"> &para;</a><div class="date" title="2017-01-02 06:40"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120402">
<div class="phpcode"><code><span class="html">PHP 7.1 allows for void and null return types by preceding the type declaration with a ? -- (e.g. function canReturnNullorString(): ?string) <br /><br />However resource is not allowed as a return type:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fileOpen</span><span class="keyword">(</span><span class="default">string $fileName</span><span class="keyword">, </span><span class="default">string $mode</span><span class="keyword">): </span><span class="default">resource<br /></span><span class="keyword">{<br />    </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$fileName</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">);<br />    if (</span><span class="default">$handle </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">)<br />    {<br />        return </span><span class="default">$handle</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$resourceHandle </span><span class="keyword">= </span><span class="default">fileOpen</span><span class="keyword">(</span><span class="string">"myfile.txt"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Errors with:<br />Fatal error: Uncaught TypeError: Return value of fileOpen() must be an instance of resource, resource returned.</span></code></div>
  </div>
 </div>
  <div class="note" id="34686">  <div class="votes">
    <div id="Vu34686">
    <a href="/manual/vote-note.php?id=34686&amp;page=functions.returning-values&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34686">
    <a href="/manual/vote-note.php?id=34686&amp;page=functions.returning-values&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34686" title="54% like this...">
    9
    </div>
  </div>
  <a href="#34686" class="name">
  <strong class="user"><em>nick at itomic.com</em></strong></a><a class="genanchor" href="#34686"> &para;</a><div class="date" title="2003-08-04 12:56"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34686">
<div class="phpcode"><code><span class="html">Functions which return references, may return a NULL value. This is inconsistent with the fact that function parameters passed by reference can't be passed as NULL (or in fact anything which isnt a variable).<br /><br />i.e.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function &amp;</span><span class="default">testRet</span><span class="keyword">()<br />{<br />    return </span><span class="default">NULL</span><span class="keyword">;<br />}<br /><br />if (</span><span class="default">testRet</span><span class="keyword">() === </span><span class="default">NULL</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"NULL"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />parses fine and echoes NULL</span></code></div>
  </div>
 </div>
  <div class="note" id="82116">  <div class="votes">
    <div id="Vu82116">
    <a href="/manual/vote-note.php?id=82116&amp;page=functions.returning-values&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82116">
    <a href="/manual/vote-note.php?id=82116&amp;page=functions.returning-values&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82116" title="52% like this...">
    9
    </div>
  </div>
  <a href="#82116" class="name">
  <strong class="user"><em>bgalloway at citycarshare dot org</em></strong></a><a class="genanchor" href="#82116"> &para;</a><div class="date" title="2008-03-27 06:27"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82116">
<div class="phpcode"><code><span class="html">Be careful about using "do this thing or die()" logic in your return lines.  It doesn't work as you'd expect:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">myfunc1</span><span class="keyword">() {<br />    return(</span><span class="string">'thingy' </span><span class="keyword">or die(</span><span class="string">'otherthingy'</span><span class="keyword">));<br />}<br />function </span><span class="default">myfunc2</span><span class="keyword">() {<br />    return </span><span class="string">'thingy' </span><span class="keyword">or die(</span><span class="string">'otherthingy'</span><span class="keyword">);<br />}<br />function </span><span class="default">myfunc3</span><span class="keyword">() {<br />    return(</span><span class="string">'thingy'</span><span class="keyword">) or die(</span><span class="string">'otherthingy'</span><span class="keyword">);<br />}<br />function </span><span class="default">myfunc4</span><span class="keyword">() {<br />    return </span><span class="string">'thingy' </span><span class="keyword">or </span><span class="string">'otherthingy'</span><span class="keyword">;<br />}<br />function </span><span class="default">myfunc5</span><span class="keyword">() {<br />    </span><span class="default">$x </span><span class="keyword">= </span><span class="string">'thingy' </span><span class="keyword">or </span><span class="string">'otherthingy'</span><span class="keyword">; return </span><span class="default">$x</span><span class="keyword">;<br />}<br />echo </span><span class="default">myfunc1</span><span class="keyword">(). </span><span class="string">"\n"</span><span class="keyword">. </span><span class="default">myfunc2</span><span class="keyword">(). </span><span class="string">"\n"</span><span class="keyword">. </span><span class="default">myfunc3</span><span class="keyword">(). </span><span class="string">"\n"</span><span class="keyword">. </span><span class="default">myfunc4</span><span class="keyword">(). </span><span class="string">"\n"</span><span class="keyword">. </span><span class="default">myfunc5</span><span class="keyword">(). </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Only myfunc5() returns 'thingy' - the rest return 1.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=functions.returning-values&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.returning-values.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.functions.php">Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="functions.user-defined.php" title="User-&#8203;defined functions">User-&#8203;defined functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.arguments.php" title="Function parameters and arguments">Function parameters and arguments</a>
                        </li>
                                                <li class="current">
                            <a href="functions.returning-values.php" title="Returning values">Returning values</a>
                        </li>
                                                <li class="">
                            <a href="functions.variable-functions.php" title="Variable functions">Variable functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.internal.php" title="Internal (built-&#8203;in) functions">Internal (built-&#8203;in) functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.anonymous.php" title="Anonymous functions">Anonymous functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.arrow.php" title="Arrow Functions">Arrow Functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.first_class_callable_syntax.php" title="First class callable syntax">First class callable syntax</a>
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
