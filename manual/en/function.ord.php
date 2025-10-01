<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ord - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ord.php">
 <link rel="shorturl" href="https://www.php.net/ord">
 <link rel="alternate" href="https://www.php.net/ord" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.number-format.php">
 <link rel="next" href="https://www.php.net/manual/en/function.parse-str.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ord.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ord.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ord.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ord.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ord.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ord.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ord.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ord.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ord.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ord.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ord.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert the first byte of a string to a value between 0 and 255" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ord - Manual" />
<meta name="twitter:description" content="Convert the first byte of a string to a value between 0 and 255" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ord - Manual" />
<meta itemprop="description" content="Convert the first byte of a string to a value between 0 and 255" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert the first byte of a string to a value between 0 and 255" />

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
        <a href="function.parse-str.php">
          parse_str &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.number-format.php">
          &laquo; number_format        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.ord.php' selected="selected">English</option>
            <option value='de/function.ord.php'>German</option>
            <option value='es/function.ord.php'>Spanish</option>
            <option value='fr/function.ord.php'>French</option>
            <option value='it/function.ord.php'>Italian</option>
            <option value='ja/function.ord.php'>Japanese</option>
            <option value='pt_BR/function.ord.php'>Brazilian Portuguese</option>
            <option value='ru/function.ord.php'>Russian</option>
            <option value='tr/function.ord.php'>Turkish</option>
            <option value='uk/function.ord.php'>Ukrainian</option>
            <option value='zh/function.ord.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ord" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ord</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ord</span> &mdash; <span class="dc-title">Convert the first byte of a string to a value between 0 and 255</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ord-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ord</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$character</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Interprets the binary value of the first byte of
   <code class="parameter">character</code> as an unsigned integer between 0 and 255.
  </p>
  <p class="para">
   If the string is in a single-byte encoding, such as ASCII, ISO-8859, or Windows 1252, this is equivalent to returning the position of a character in the character set&#039;s mapping table. However, note that this function is not aware of any string encoding, and in particular will never identify a Unicode code point in a multi-byte encoding such as UTF-8 or UTF-16.
  </p>
  <p class="para">
   This function complements <span class="function"><a href="function.chr.php" class="function">chr()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ord-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">character</code></dt>
     <dd>
      <p class="para">
       A character.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ord-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An integer between 0 and 255.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ord-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5097">
    <p><strong>Example #1 <span class="function"><strong>ord()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">) == </span><span style="color: #0000BB">10</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"The first character of \$str is a line feed.\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
 </p>
 <p class="para"> 
   <div class="example" id="example-5098">
    <p><strong>Example #2 Examining the individual bytes of a UTF-8 string</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"🐘"</span><span style="color: #007700">;<br />for ( </span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$pos </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">); </span><span style="color: #0000BB">$pos </span><span style="color: #007700">++ ) {<br /> </span><span style="color: #0000BB">$byte </span><span style="color: #007700">= </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br /> echo </span><span style="color: #DD0000">'Byte ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$pos </span><span style="color: #007700">. </span><span style="color: #DD0000">' of $str has value ' </span><span style="color: #007700">. </span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$byte</span><span style="color: #007700">) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen"><br />
Byte 0 of $str has value 240<br />
Byte 1 of $str has value 159<br />
Byte 2 of $str has value 144<br />
Byte 3 of $str has value 152<br />
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ord-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.chr.php" class="function" rel="rdfs-seeAlso">chr()</a> - Generate a single-byte string from a number</span></li>
    <li>An <a href="https://www.man7.org/linux/man-pages/man7/ascii.7.html" class="link external">&raquo;&nbsp;ASCII-table</a></li>
    <li><span class="function"><a href="function.mb-ord.php" class="function" rel="rdfs-seeAlso">mb_ord()</a> - Get Unicode code point of character</span></li>
    <li><span class="function"><a href="intlchar.ord.php" class="function" rel="rdfs-seeAlso">IntlChar::ord()</a> - Return Unicode code point value of character</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/ord.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ord%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ord&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ord.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109812">  <div class="votes">
    <div id="Vu109812">
    <a href="/manual/vote-note.php?id=109812&amp;page=function.ord&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109812">
    <a href="/manual/vote-note.php?id=109812&amp;page=function.ord&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109812" title="65% like this...">
    48
    </div>
  </div>
  <a href="#109812" class="name">
  <strong class="user"><em>arglanir+phpnet at gmail dot com</em></strong></a><a class="genanchor" href="#109812"> &para;</a><div class="date" title="2012-08-23 03:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109812">
<div class="phpcode"><code><span class="html">As ord() doesn't work with utf-8, and if you do not have access to mb_* functions, the following function will work well:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ordutf8</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, &amp;</span><span class="default">$offset</span><span class="keyword">) {<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)); <br />    if (</span><span class="default">$code </span><span class="keyword">&gt;= </span><span class="default">128</span><span class="keyword">) {        </span><span class="comment">//otherwise 0xxxxxxx<br />        </span><span class="keyword">if (</span><span class="default">$code </span><span class="keyword">&lt; </span><span class="default">224</span><span class="keyword">) </span><span class="default">$bytesnumber </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;                </span><span class="comment">//110xxxxx<br />        </span><span class="keyword">else if (</span><span class="default">$code </span><span class="keyword">&lt; </span><span class="default">240</span><span class="keyword">) </span><span class="default">$bytesnumber </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;        </span><span class="comment">//1110xxxx<br />        </span><span class="keyword">else if (</span><span class="default">$code </span><span class="keyword">&lt; </span><span class="default">248</span><span class="keyword">) </span><span class="default">$bytesnumber </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;    </span><span class="comment">//11110xxx<br />        </span><span class="default">$codetemp </span><span class="keyword">= </span><span class="default">$code </span><span class="keyword">- </span><span class="default">192 </span><span class="keyword">- (</span><span class="default">$bytesnumber </span><span class="keyword">&gt; </span><span class="default">2 </span><span class="keyword">? </span><span class="default">32 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">) - (</span><span class="default">$bytesnumber </span><span class="keyword">&gt; </span><span class="default">3 </span><span class="keyword">? </span><span class="default">16 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">);<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$bytesnumber</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="default">$offset </span><span class="keyword">++;<br />            </span><span class="default">$code2 </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)) - </span><span class="default">128</span><span class="keyword">;        </span><span class="comment">//10xxxxxx<br />            </span><span class="default">$codetemp </span><span class="keyword">= </span><span class="default">$codetemp</span><span class="keyword">*</span><span class="default">64 </span><span class="keyword">+ </span><span class="default">$code2</span><span class="keyword">;<br />        }<br />        </span><span class="default">$code </span><span class="keyword">= </span><span class="default">$codetemp</span><span class="keyword">;<br />    }<br />    </span><span class="default">$offset </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />    if (</span><span class="default">$offset </span><span class="keyword">&gt;= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) </span><span class="default">$offset </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />    return </span><span class="default">$code</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>$offset is a reference, as it is not easy to split a utf-8 char-by-char. Useful to iterate on a string:<br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="string">"abcàêß€abc"</span><span class="keyword">;<br /></span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while (</span><span class="default">$offset </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {<br />    echo </span><span class="default">$offset</span><span class="keyword">.</span><span class="string">": "</span><span class="keyword">.</span><span class="default">ordutf8</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="comment">/* returns:<br />0: 97<br />1: 98<br />2: 99<br />3: 224<br />5: 234<br />7: 223<br />9: 8364<br />12: 97<br />13: 98<br />14: 99<br />*/<br /></span><span class="default">?&gt;<br /></span>Feel free to adapt my code to fit your needs.</span></code></div>
  </div>
 </div>
  <div class="note" id="112396">  <div class="votes">
    <div id="Vu112396">
    <a href="/manual/vote-note.php?id=112396&amp;page=function.ord&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112396">
    <a href="/manual/vote-note.php?id=112396&amp;page=function.ord&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112396" title="66% like this...">
    18
    </div>
  </div>
  <a href="#112396" class="name">
  <strong class="user"><em>rowan dot collins at cwtdigital dot com</em></strong></a><a class="genanchor" href="#112396"> &para;</a><div class="date" title="2013-06-11 06:28"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112396">
<div class="phpcode"><code><span class="html">Regarding character sets, and whether or not this is "ASCII". Firstly, there is no such thing as "8-bit ASCII", so if it were ASCII it would only ever return integers up to 127. 8-bit ASCII-compatible encodings include the ISO 8859 family of encodings, which map various common characters to the values from 128 to 255. UTF-8 is also designed so that characters representable in 7-bit ASCII are coded the same; byte values higher than 127 in a UTF-8 string represent the beginning of a multi-byte character.<br /><br />In fact, like most of PHP's string functions, this function isn't doing anything to do with character encoding at all - it is just interpreting a binary byte from a string as an unsigned integer. That is, ord(chr(200)) will always return 200, but what character chr(200) *means* will vary depending on what character encoding it is *interpreted* as part of (e.g. during display).<br /><br />A technically correct description would be "Returns an integer representation of the first byte of a string, from 0 to 255. For single-byte encodings such as (7-bit) ASCII and the ISO 8859 family, this will correspond to the first character, and will be the position of that character in the encoding's mapping table. For multi-byte encodings, such as UTF-8 or UTF-16, the byte may not represent a complete character."<br /><br />The link to asciitable.com should also be replaced by one which explains what character encoding it is displaying, as "Extended ASCII" is an ambiguous and misleading name.</span></code></div>
  </div>
 </div>
  <div class="note" id="124749">  <div class="votes">
    <div id="Vu124749">
    <a href="/manual/vote-note.php?id=124749&amp;page=function.ord&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124749">
    <a href="/manual/vote-note.php?id=124749&amp;page=function.ord&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124749" title="66% like this...">
    6
    </div>
  </div>
  <a href="#124749" class="name">
  <strong class="user"><em>paco at olecode dot com</em></strong></a><a class="genanchor" href="#124749"> &para;</a><div class="date" title="2020-02-24 02:46"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124749">
<div class="phpcode"><code><span class="html">this function convert UTF-8 string to RTF code string. I am using code of v0rbiz at yahoo dot com, thanks!!! <br /><br />function cadena_rtf($txt)<br />   {<br />      $result = null;<br /><br />      for ($pos = 0; $pos &lt; mb_strlen($txt); $pos++) {<br /><br />         $char = mb_substr($txt, $pos, 1);<br /><br />         if (!preg_match("/[A-Za-z1-9,.]/", $char)) {<br />            //unicode ord real!!!<br />            $k   = mb_convert_encoding($char, 'UCS-2LE', 'UTF-8');<br />            $k1  = ord(substr($k, 0, 1));<br />            $k2  = ord(substr($k, 1, 1));<br />            $ord = $k2 * 256 + $k1;<br /><br />            if ($ord &gt; 255) {<br />               $result .= '\uc1\u' . $ord . '*';<br />            } elseif ($ord &gt; 32768) {<br />               $result .= '\uc1\u' . ($ord - 65535) . '*';<br />            } else {<br />               $result .= "\\'" . dechex($ord);<br />            }<br />         } else {<br />            $result .= $char;<br />         }<br />      }<br />      return $result;<br />   }</span></code></div>
  </div>
 </div>
  <div class="note" id="42778">  <div class="votes">
    <div id="Vu42778">
    <a href="/manual/vote-note.php?id=42778&amp;page=function.ord&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42778">
    <a href="/manual/vote-note.php?id=42778&amp;page=function.ord&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42778" title="57% like this...">
    9
    </div>
  </div>
  <a href="#42778" class="name">
  <strong class="user"><em>v0rbiz at yahoo dot com</em></strong></a><a class="genanchor" href="#42778"> &para;</a><div class="date" title="2004-05-28 04:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42778">
<div class="phpcode"><code><span class="html">I did not found a unicode/multibyte capable 'ord' function, so...
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">uniord</span><span class="keyword">(</span><span class="default">$u</span><span class="keyword">) {
<br />    </span><span class="default">$k </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$u</span><span class="keyword">, </span><span class="string">'UCS-2LE'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);
<br />    </span><span class="default">$k1 </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));
<br />    </span><span class="default">$k2 </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));
<br />    return </span><span class="default">$k2 </span><span class="keyword">* </span><span class="default">256 </span><span class="keyword">+ </span><span class="default">$k1</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126791">  <div class="votes">
    <div id="Vu126791">
    <a href="/manual/vote-note.php?id=126791&amp;page=function.ord&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126791">
    <a href="/manual/vote-note.php?id=126791&amp;page=function.ord&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126791" title="54% like this...">
    1
    </div>
  </div>
  <a href="#126791" class="name">
  <strong class="user"><em>Noname</em></strong></a><a class="genanchor" href="#126791"> &para;</a><div class="date" title="2022-01-22 03:51"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126791">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">declare (</span><span class="default">encoding</span><span class="keyword">=</span><span class="string">'UTF-8'</span><span class="keyword">);<br /><br /></span><span class="default">$animalsstr </span><span class="keyword">= </span><span class="string">'🐀🐁🐂🐃🐄🐅🐆🐇🐈🐉🐊🐋🐌🐍🐎🐏🐐🐑🐒🐓🐔🐕🐖🐗🐘🐙'<br />        </span><span class="keyword">. </span><span class="string">'🐚🐛🐜🐝🐞🐟🐠🐡🐢🐣🐤🐥🐦🐧🐨🐩🐪🐫🐬🐭🐮🐯🐰🐱🐲🐳🐴🐵'<br />        </span><span class="keyword">. </span><span class="string">'🐶🐷🐸🐹🐺🐻🐼🐽🐾🐿'</span><span class="keyword">;<br /><br /></span><span class="default">$animals </span><span class="keyword">= </span><span class="default">mb_str_split</span><span class="keyword">(</span><span class="default">$animalsstr</span><span class="keyword">);<br />foreach (</span><span class="default">$animals </span><span class="keyword">as </span><span class="default">$animal</span><span class="keyword">) {<br />    for (</span><span class="default">$pos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$pos </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$animal</span><span class="keyword">); </span><span class="default">$pos</span><span class="keyword">++) {<br />        </span><span class="default">$byte </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$animal</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);<br />        echo </span><span class="string">"Byte </span><span class="default">$pos</span><span class="string"> of </span><span class="default">$animal</span><span class="string"> has value " </span><span class="keyword">. </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$byte</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126265">  <div class="votes">
    <div id="Vu126265">
    <a href="/manual/vote-note.php?id=126265&amp;page=function.ord&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126265">
    <a href="/manual/vote-note.php?id=126265&amp;page=function.ord&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126265" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#126265" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126265"> &para;</a><div class="date" title="2021-07-22 06:40"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126265">
<div class="phpcode"><code><span class="html">For anyone who's looking to convert full strings to map and back it's pretty simple but takes some getting used to...the code below saves an hour of scrounging codes for beginners like myself.<br /><br />function var2map($a) {<br />    $b='';<br />    $c=strlen($a);<br />    for($i=0; $i&lt;$c; ++$i) {<br />        $d=ord(substr($a,$i,1));<br />        if($d&lt;10) {<br />            $e='00'.$d;<br />        } else {<br />            if($d&lt;100) {<br />                $e='0'.$d;<br />            } else {<br />                $e=$d;<br />            }<br />        }<br />        if($b=='') {<br />            $b=$e;<br />        } else {<br />            $b=$b.$e;<br />        }<br />    }<br />    return $b;<br />}<br /><br />function map2var($a) {<br />    $b='';<br />    $c=strlen($a) / 3;<br />    for($i=0; $i&lt;$c; ++$i) {<br />        $d=chr(substr($a,$i*3,3));<br />        if($b=='') {<br />            $b=$d;<br />        } else {<br />            $b=$b.$d;<br />        }<br />    }<br />    return $b;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ord&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ord.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="current">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
