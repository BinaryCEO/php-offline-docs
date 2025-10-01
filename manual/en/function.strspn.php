<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strspn - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strspn.php">
 <link rel="shorturl" href="https://www.php.net/strspn">
 <link rel="alternate" href="https://www.php.net/strspn" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strrpos.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strstr.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strspn.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strspn.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strspn.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strspn.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strspn.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strspn.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strspn.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strspn.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strspn.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strspn.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strspn.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Finds the length of the initial segment of a string consisting
   entirely of characters contained within a given mask" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strspn - Manual" />
<meta name="twitter:description" content="Finds the length of the initial segment of a string consisting
   entirely of characters contained within a given mask" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strspn - Manual" />
<meta itemprop="description" content="Finds the length of the initial segment of a string consisting
   entirely of characters contained within a given mask" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Finds the length of the initial segment of a string consisting
   entirely of characters contained within a given mask" />

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
        <a href="function.strstr.php">
          strstr &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strrpos.php">
          &laquo; strrpos        </a>
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
            <option value='en/function.strspn.php' selected="selected">English</option>
            <option value='de/function.strspn.php'>German</option>
            <option value='es/function.strspn.php'>Spanish</option>
            <option value='fr/function.strspn.php'>French</option>
            <option value='it/function.strspn.php'>Italian</option>
            <option value='ja/function.strspn.php'>Japanese</option>
            <option value='pt_BR/function.strspn.php'>Brazilian Portuguese</option>
            <option value='ru/function.strspn.php'>Russian</option>
            <option value='tr/function.strspn.php'>Turkish</option>
            <option value='uk/function.strspn.php'>Ukrainian</option>
            <option value='zh/function.strspn.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strspn" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strspn</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strspn</span> &mdash; <span class="dc-title">
   Finds the length of the initial segment of a string consisting
   entirely of characters contained within a given mask
  </span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strspn-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strspn</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$characters</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Finds the length of the initial segment of <code class="parameter">string</code>
   that contains <em>only</em> characters from <code class="parameter">characters</code>.
  </p>
  <p class="para">
   If <code class="parameter">offset</code> and <code class="parameter">length</code>
   are omitted, then all of <code class="parameter">string</code> will be
   examined. If they are included, then the effect will be the same as
   calling <code class="literal">strspn(substr($string, $offset, $length),
   $characters)</code> (see <a href="function.substr.php" class="xref">substr</a>
   for more information).
  </p>
  <p class="para">
   The line of code:
   <div class="informalexample">
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$var </span><span style="color: #007700">= </span><span style="color: #0000BB">strspn</span><span style="color: #007700">(</span><span style="color: #DD0000">"42 is the answer to the 128th question."</span><span style="color: #007700">, </span><span style="color: #DD0000">"1234567890"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   will assign <code class="literal">2</code> to <var class="varname">$var</var>,
   because the string &quot;42&quot; is the initial segment
   of <code class="parameter">string</code> that consists only of characters
   contained within &quot;1234567890&quot;.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strspn-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to examine.
      </p>
     </dd>
    
    
     <dt><code class="parameter">characters</code></dt>
     <dd>
      <p class="para">
       The list of allowable characters.
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       The position in <code class="parameter">string</code> to
       start searching.
      </p>
      <p class="para">
       If <code class="parameter">offset</code> is given and is non-negative,
       then <span class="function"><strong>strspn()</strong></span> will begin
       examining <code class="parameter">string</code> at
       the <code class="parameter">offset</code>&#039;th position. For instance, in
       the string &#039;<code class="literal">abcdef</code>&#039;, the character at
       position <code class="literal">0</code> is &#039;<code class="literal">a</code>&#039;, the
       character at position <code class="literal">2</code> is
       &#039;<code class="literal">c</code>&#039;, and so forth.
      </p>
      <p class="para">
       If <code class="parameter">offset</code> is given and is negative,
       then <span class="function"><strong>strspn()</strong></span> will begin
       examining <code class="parameter">string</code> at
       the <code class="parameter">offset</code>&#039;th position from the end
       of <code class="parameter">string</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The length of the segment from <code class="parameter">string</code>
       to examine. 
      </p>
      <p class="para">
       If <code class="parameter">length</code> is given and is non-negative,
       then <code class="parameter">string</code> will be examined
       for <code class="parameter">length</code> characters after the starting
       position.
      </p>
      <p class="para">
        If <code class="parameter">length</code> is given and is negative,
        then <code class="parameter">string</code> will be examined from the
        starting position up to <code class="parameter">length</code>
        characters from the end of <code class="parameter">string</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strspn-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the length of the initial segment of <code class="parameter">string</code>
   which consists entirely of characters in <code class="parameter">characters</code>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When a <code class="parameter">offset</code> parameter is set, the returned length
    is counted starting from this position, not from the beginning of
    <code class="parameter">string</code>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.strspn-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">length</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.strspn-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5171">
    <p><strong>Example #1 <span class="function"><strong>strspn()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// subject does not start with any characters from mask<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">strspn</span><span style="color: #007700">(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"o"</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// examine two characters from subject starting at offset 1<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">strspn</span><span style="color: #007700">(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"o"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// examine one character from subject starting at offset 1<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">strspn</span><span style="color: #007700">(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"o"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">int(0)
int(2)
int(1)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strspn-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strspn-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strcspn.php" class="function" rel="rdfs-seeAlso">strcspn()</a> - Find length of initial segment not matching mask</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strspn.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strspn%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strspn&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strspn.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="84980">  <div class="votes">
    <div id="Vu84980">
    <a href="/manual/vote-note.php?id=84980&amp;page=function.strspn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84980">
    <a href="/manual/vote-note.php?id=84980&amp;page=function.strspn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84980" title="79% like this...">
    25
    </div>
  </div>
  <a href="#84980" class="name">
  <strong class="user"><em>barry dot balkowski at gmail dot com</em></strong></a><a class="genanchor" href="#84980"> &para;</a><div class="date" title="2008-08-08 02:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84980">
<div class="phpcode"><code><span class="html">It took me some time to understand the way this function works…<br />I’ve compiled my own explanation with my own words that is more understandable for me personally than the official one or those that can be found in different tutorials on the web.<br />Perhaps, it will save someone several minutes…<br /><br /><span class="default">&lt;?php <br />strspn</span><span class="keyword">(</span><span class="default">string $haystack</span><span class="keyword">, </span><span class="default">string $char_list </span><span class="keyword">[, </span><span class="default">int $start </span><span class="keyword">[, </span><span class="default">int $length</span><span class="keyword">]])<br /></span><span class="default">?&gt;<br /></span><br />The way it works:<br /> -   searches for a segment of $haystack that consists entirely from supplied through the second argument chars <br /> -   $haystack must start from one of the chars supplied through $char_list, otherwise the function will find nothing<br /> -   as soon as the function encounters a char that was not mentioned in $chars it understands that the segment is over and stops (it doesn’t search for the second, third and so on segments)<br /> -   finally, it measures the segment’s length and return it (i.e. length)<br /><br />In other words it finds a span (only the first one) in the string that consists entirely form chars supplied in $chars_list and returns its length</span></code></div>
  </div>
 </div>
  <div class="note" id="101133">  <div class="votes">
    <div id="Vu101133">
    <a href="/manual/vote-note.php?id=101133&amp;page=function.strspn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101133">
    <a href="/manual/vote-note.php?id=101133&amp;page=function.strspn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101133" title="76% like this...">
    22
    </div>
  </div>
  <a href="#101133" class="name">
  <strong class="user"><em>AT-HE (at_he.hotmail)</em></strong></a><a class="genanchor" href="#101133"> &para;</a><div class="date" title="2010-11-28 02:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101133">
<div class="phpcode"><code><span class="html">you can use this function with strlen to check illegal characters, string lenght must be the same than strspn (characters from my string contained in another)<br /><br /><span class="default">&lt;?php<br /><br />$digits</span><span class="keyword">=</span><span class="string">'0123456789'</span><span class="keyword">;<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$phone</span><span class="keyword">) != </span><span class="default">strspn</span><span class="keyword">(</span><span class="default">$phone</span><span class="keyword">,</span><span class="default">$digits</span><span class="keyword">))<br /> echo </span><span class="string">"illegal characters"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78200">  <div class="votes">
    <div id="Vu78200">
    <a href="/manual/vote-note.php?id=78200&amp;page=function.strspn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78200">
    <a href="/manual/vote-note.php?id=78200&amp;page=function.strspn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78200" title="72% like this...">
    10
    </div>
  </div>
  <a href="#78200" class="name">
  <strong class="user"><em>B Crawford</em></strong></a><a class="genanchor" href="#78200"> &para;</a><div class="date" title="2007-10-02 05:20"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78200">
<div class="phpcode"><code><span class="html">This function is significantly faster for checking illegal characters than the equivalent preg_match() method.</span></code></div>
  </div>
 </div>
  <div class="note" id="102190">  <div class="votes">
    <div id="Vu102190">
    <a href="/manual/vote-note.php?id=102190&amp;page=function.strspn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102190">
    <a href="/manual/vote-note.php?id=102190&amp;page=function.strspn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102190" title="64% like this...">
    7
    </div>
  </div>
  <a href="#102190" class="name">
  <strong class="user"><em>mrsohailkhan at gmail dot com</em></strong></a><a class="genanchor" href="#102190"> &para;</a><div class="date" title="2011-02-01 12:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102190">
<div class="phpcode"><code><span class="html">very dificult to get from the definition directly, while i search for that,i came to know that
<br />
<br />strspn() will tell you the length of a string consisting entirely of the set of characters in accept set. That is, it starts walking down str until it finds a character that is not in the set (that is, a character that is not to be accepted), and returns the length of the string so far. 
<br />
<br />and 
<br />
<br />strcspn() works much the same way, except that it walks down str until it finds a character in the reject set (that is, a character that is to be rejected.) It then returns the length of the string so far.
<br />
<br /><span class="default">&lt;?php
<br />$acceptSet </span><span class="keyword">= </span><span class="string">"aeiou"</span><span class="keyword">;
<br /></span><span class="default">$rejectSet  </span><span class="keyword">= </span><span class="string">"y"</span><span class="keyword">;
<br />
<br /></span><span class="default">$str1 </span><span class="keyword">=</span><span class="string">"a banana"</span><span class="keyword">;
<br /></span><span class="default">$str2 </span><span class="keyword">=</span><span class="string">"the bolivian navy on manuvers in the south pacific"</span><span class="keyword">;
<br />
<br />echo </span><span class="default">$n </span><span class="keyword">= </span><span class="default">strspn</span><span class="keyword">(</span><span class="default">$str1</span><span class="keyword">,</span><span class="default">$acceptSet</span><span class="keyword">);</span><span class="comment">// $n == 1, just "a"
<br />
<br /></span><span class="keyword">echo </span><span class="default">$n </span><span class="keyword">= </span><span class="default">strcspn</span><span class="keyword">(</span><span class="default">$str2</span><span class="keyword">,</span><span class="default">$rejectSet</span><span class="keyword">);</span><span class="comment">// n = 16, "the bolivian nav"
<br /></span><span class="default">?&gt;
<br /></span>
<br />hope this example will help in understanding the concept of strspn() and strcspn().</span></code></div>
  </div>
 </div>
  <div class="note" id="89362">  <div class="votes">
    <div id="Vu89362">
    <a href="/manual/vote-note.php?id=89362&amp;page=function.strspn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89362">
    <a href="/manual/vote-note.php?id=89362&amp;page=function.strspn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89362" title="64% like this...">
    5
    </div>
  </div>
  <a href="#89362" class="name">
  <strong class="user"><em>Dmitry Mazur</em></strong></a><a class="genanchor" href="#89362"> &para;</a><div class="date" title="2009-03-04 10:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89362">
<div class="phpcode"><code><span class="html">The second parameter is a set of allowed characters.<br />strspn will return an zero-based index of a first non-allowed character.</span></code></div>
  </div>
 </div>
  <div class="note" id="108922">  <div class="votes">
    <div id="Vu108922">
    <a href="/manual/vote-note.php?id=108922&amp;page=function.strspn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108922">
    <a href="/manual/vote-note.php?id=108922&amp;page=function.strspn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108922" title="60% like this...">
    3
    </div>
  </div>
  <a href="#108922" class="name">
  <strong class="user"><em>bob at example dot com</em></strong></a><a class="genanchor" href="#108922"> &para;</a><div class="date" title="2012-06-05 03:37"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108922">
<div class="phpcode"><code><span class="html">Quick way to check if a string consists entirely of characters within the mask is to compare strspn with strlen eg:
<br />
<br /><span class="default">&lt;?php
<br />$path </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PATH_INFO'</span><span class="keyword">];
<br />if (</span><span class="default">strspn</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="string">'/'</span><span class="keyword">) == </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)) {
<br />    </span><span class="comment">//PATH_INFO is empty
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125265">  <div class="votes">
    <div id="Vu125265">
    <a href="/manual/vote-note.php?id=125265&amp;page=function.strspn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125265">
    <a href="/manual/vote-note.php?id=125265&amp;page=function.strspn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125265" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125265" class="name">
  <strong class="user"><em>lincoln dot mahmud at gmail dot com</em></strong></a><a class="genanchor" href="#125265"> &para;</a><div class="date" title="2020-08-13 01:34"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125265">
<div class="phpcode"><code><span class="html">Get Group match letter<br /><br /><span class="default">&lt;?php <br /><br />$s</span><span class="keyword">= </span><span class="string">'aaabbbcceeffaaeeeaaabbzmmm'</span><span class="keyword">;<br /><br />function </span><span class="default">groupby</span><span class="keyword">( </span><span class="default">$s </span><span class="keyword">){<br />    static </span><span class="default">$a </span><span class="keyword">= [];<br />    static </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    <br />    </span><span class="default">$o </span><span class="keyword">= </span><span class="default">strspn</span><span class="keyword">( </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$i</span><span class="keyword">);<br />    </span><span class="default">$a</span><span class="keyword">[ </span><span class="default">$i </span><span class="keyword">] = [  </span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] =&gt; </span><span class="default">$o </span><span class="keyword">];<br />    </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$o</span><span class="keyword">;<br />    <br />    if( </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) ) {<br />        </span><span class="default">groupby</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);<br />    }<br /><br />    return </span><span class="default">$a</span><span class="keyword">;<br />}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">groupby</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122366">  <div class="votes">
    <div id="Vu122366">
    <a href="/manual/vote-note.php?id=122366&amp;page=function.strspn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122366">
    <a href="/manual/vote-note.php?id=122366&amp;page=function.strspn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122366" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#122366" class="name">
  <strong class="user"><em>nino dot skopac at gmail dot com</em></strong></a><a class="genanchor" href="#122366"> &para;</a><div class="date" title="2018-02-07 06:59"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122366">
<div class="phpcode"><code><span class="html">strspon and preg_match seem to be equally fast for validating numbers:<br /><br /><span class="default">&lt;?php<br /><br />$testValInvalid </span><span class="keyword">= </span><span class="string">'foobar123^^'</span><span class="keyword">;<br /></span><span class="default">$testValValid </span><span class="keyword">= </span><span class="string">'12346'</span><span class="keyword">;<br /></span><span class="default">$allowedChars </span><span class="keyword">= </span><span class="string">'1234567890'</span><span class="keyword">;<br /><br /></span><span class="default">$t1 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">assert</span><span class="keyword">(</span><span class="default">strspn</span><span class="keyword">(</span><span class="default">$testValInvalid</span><span class="keyword">, </span><span class="default">$allowedChars</span><span class="keyword">) != </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$testValInvalid</span><span class="keyword">));<br />    </span><span class="default">assert</span><span class="keyword">(</span><span class="default">strspn</span><span class="keyword">(</span><span class="default">$testValValid</span><span class="keyword">, </span><span class="default">$allowedChars</span><span class="keyword">) == </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$testValValid</span><span class="keyword">));<br />}<br />print </span><span class="string">'Time taken for strspon: ' </span><span class="keyword">. (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$t1</span><span class="keyword">);<br />print </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">$t1 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">assert</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^[0-9]+$/'</span><span class="keyword">, </span><span class="default">$testValInvalid</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">assert</span><span class="keyword">(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^[0-9]+$/'</span><span class="keyword">, </span><span class="default">$testValValid</span><span class="keyword">));<br />}<br /><br />print </span><span class="string">'Time taken for preg_match: ' </span><span class="keyword">. (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$t1</span><span class="keyword">);<br />print </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="comment">/**<br />nino-mcb:hosp_web ninoskopac$ php test.php<br />Time taken for strspon: 3.24165391922<br />Time taken for preg_match: 3.1820080280304<br />nino-mcb:hosp_web ninoskopac$ php test.php<br />Time taken for strspon: 3.1806418895721<br />Time taken for preg_match: 3.2244551181793<br /> */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strspn&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strspn.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
