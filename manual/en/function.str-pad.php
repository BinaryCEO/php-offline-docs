<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: str_pad - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.str-pad.php">
 <link rel="shorturl" href="https://www.php.net/str-pad">
 <link rel="alternate" href="https://www.php.net/str-pad" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.str-ireplace.php">
 <link rel="next" href="https://www.php.net/manual/en/function.str-repeat.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.str-pad.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.str-pad.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.str-pad.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.str-pad.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.str-pad.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.str-pad.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.str-pad.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.str-pad.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.str-pad.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.str-pad.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.str-pad.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Pad a string to a certain length with another string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: str_pad - Manual" />
<meta name="twitter:description" content="Pad a string to a certain length with another string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: str_pad - Manual" />
<meta itemprop="description" content="Pad a string to a certain length with another string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Pad a string to a certain length with another string" />

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
        <a href="function.str-repeat.php">
          str_repeat &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.str-ireplace.php">
          &laquo; str_ireplace        </a>
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
            <option value='en/function.str-pad.php' selected="selected">English</option>
            <option value='de/function.str-pad.php'>German</option>
            <option value='es/function.str-pad.php'>Spanish</option>
            <option value='fr/function.str-pad.php'>French</option>
            <option value='it/function.str-pad.php'>Italian</option>
            <option value='ja/function.str-pad.php'>Japanese</option>
            <option value='pt_BR/function.str-pad.php'>Brazilian Portuguese</option>
            <option value='ru/function.str-pad.php'>Russian</option>
            <option value='tr/function.str-pad.php'>Turkish</option>
            <option value='uk/function.str-pad.php'>Ukrainian</option>
            <option value='zh/function.str-pad.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.str-pad" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">str_pad</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">str_pad</span> &mdash; <span class="dc-title">Pad a string to a certain length with another string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.str-pad-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>str_pad</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pad_string</code><span class="initializer"> = &quot; &quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$pad_type</code><span class="initializer"> = <strong><code><a href="string.constants.php#constant.str-pad-right">STR_PAD_RIGHT</a></code></strong></span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This function returns the <code class="parameter">string</code> string
   padded on the left, the right, or both sides to the specified
   padding length. If the optional argument
   <code class="parameter">pad_string</code> is not supplied, the
   <code class="parameter">string</code> is padded with spaces, otherwise it
   is padded with characters from <code class="parameter">pad_string</code>
   up to the limit.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.str-pad-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The desired length of the final padded string.
       If the value of <code class="parameter">length</code> is negative,
       less than, or equal to the length of the input string, no padding
       takes place, and <code class="parameter">string</code> will be returned.
      </p>
     </dd>
    
    
     <dt><code class="parameter">pad_string</code></dt>
     <dd>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        The <code class="parameter">pad_string</code> may be truncated if the
        required number of padding characters can&#039;t be evenly divided by the
        <code class="parameter">pad_string</code>&#039;s length.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">pad_type</code></dt>
     <dd>
      <p class="para">
       Optional argument <code class="parameter">pad_type</code> can be
       <strong><code><a href="string.constants.php#constant.str-pad-right">STR_PAD_RIGHT</a></code></strong>, <strong><code><a href="string.constants.php#constant.str-pad-left">STR_PAD_LEFT</a></code></strong>,
       or <strong><code><a href="string.constants.php#constant.str-pad-both">STR_PAD_BOTH</a></code></strong>. If
       <code class="parameter">pad_type</code> is not specified it is assumed to be
       <strong><code><a href="string.constants.php#constant.str-pad-right">STR_PAD_RIGHT</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.str-pad-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the padded string.
  </p>
 </div>



 <div class="refsect1 examples" id="refsect1-function.str-pad-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5137">
    <p><strong>Example #1 <span class="function"><strong>str_pad()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= </span><span style="color: #DD0000">"Alien"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                      </span><span style="color: #FF8000">// produces "Alien     "<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #DD0000">"-="</span><span style="color: #007700">, </span><span style="color: #0000BB">STR_PAD_LEFT</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;  </span><span style="color: #FF8000">// produces "-=-=-Alien"<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #DD0000">"_"</span><span style="color: #007700">, </span><span style="color: #0000BB">STR_PAD_BOTH</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;   </span><span style="color: #FF8000">// produces "__Alien___"<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,  </span><span style="color: #0000BB">6</span><span style="color: #007700">, </span><span style="color: #DD0000">"___"</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;               </span><span style="color: #FF8000">// produces "Alien_"<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,  </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #DD0000">"*"</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                 </span><span style="color: #FF8000">// produces "Alien"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.str-pad-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-str-pad.php" class="function" rel="rdfs-seeAlso">mb_str_pad()</a> - Pad a multibyte string to a certain length with another multibyte string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/str-pad.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.str-pad%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.str-pad&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-pad.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116164">  <div class="votes">
    <div id="Vu116164">
    <a href="/manual/vote-note.php?id=116164&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116164">
    <a href="/manual/vote-note.php?id=116164&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116164" title="71% like this...">
    108
    </div>
  </div>
  <a href="#116164" class="name">
  <strong class="user"><em>Marjune</em></strong></a><a class="genanchor" href="#116164"> &para;</a><div class="date" title="2014-11-17 03:45"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116164">
<div class="phpcode"><code><span class="html">since the default pad_type is STR_PAD_RIGHT. using STR_PAD_BOTH were always favor in the right pad if the required number of padding characters can't be evenly divided. <br /><br />e.g<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">"input"</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="string">"pp"</span><span class="keyword">, </span><span class="default">STR_PAD_BOTH </span><span class="keyword">); </span><span class="comment">// ppinputppp<br /></span><span class="keyword">echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">"input"</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="string">"p"</span><span class="keyword">, </span><span class="default">STR_PAD_BOTH </span><span class="keyword">); </span><span class="comment">// inputp<br /></span><span class="keyword">echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="string">"input"</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="string">"p"</span><span class="keyword">, </span><span class="default">STR_PAD_BOTH </span><span class="keyword">); </span><span class="comment">//pinputpp<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127742">  <div class="votes">
    <div id="Vu127742">
    <a href="/manual/vote-note.php?id=127742&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127742">
    <a href="/manual/vote-note.php?id=127742&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127742" title="76% like this...">
    7
    </div>
  </div>
  <a href="#127742" class="name">
  <strong class="user"><em>Borszczuk</em></strong></a><a class="genanchor" href="#127742"> &para;</a><div class="date" title="2022-10-18 03:04"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127742">
<div class="phpcode"><code><span class="html">Beware, \str_pad() is NOT able to correctly handle multibyte characters and as \strlen() it is assuming one char ==  byte. If you have multibyte chars in your string your result string will be shorter than you expect:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="string">'áč'</span><span class="keyword">; </span><span class="comment">// 2 accented chars<br /></span><span class="default">$lenA </span><span class="keyword">= </span><span class="default">\mb_strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />echo </span><span class="default">$lenA </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">\str_pad</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$lenA </span><span class="keyword">+ </span><span class="default">10</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">);<br /></span><span class="default">$lenB </span><span class="keyword">= </span><span class="default">\mb_strlen</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />echo </span><span class="default">$lenB </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />would produce:<br /><br />2<br />10<br /><br />instead of expected 12. There seem noth to be mb_str_pad() equivalent so you may end you concatenating your string and padding manually:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="string">'áč'</span><span class="keyword">; </span><span class="comment">// 2 accented chars<br /><br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">mb_str_pad</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$lenA </span><span class="keyword">+ </span><span class="default">10</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">);<br /></span><span class="default">$lenB </span><span class="keyword">= </span><span class="default">\mb_strlen</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />echo </span><span class="default">$lenB </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />function </span><span class="default">mb_str_pad</span><span class="keyword">(</span><span class="default">string $str</span><span class="keyword">, </span><span class="default">int $len</span><span class="keyword">, </span><span class="default">string $pad</span><span class="keyword">, </span><span class="default">int $align </span><span class="keyword">= </span><span class="default">\STR_PAD_RIGHT</span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />   </span><span class="default">$strLen </span><span class="keyword">= </span><span class="default">\mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />   if (</span><span class="default">$strLen </span><span class="keyword">&gt;= </span><span class="default">$len</span><span class="keyword">) {<br />      return </span><span class="default">$str</span><span class="keyword">;<br />   }<br /><br />   </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">$len </span><span class="keyword">- </span><span class="default">$strLen</span><span class="keyword">;<br />   </span><span class="default">$padding </span><span class="keyword">= </span><span class="default">\mb_substr</span><span class="keyword">(</span><span class="default">\str_repeat</span><span class="keyword">(</span><span class="default">$pad</span><span class="keyword">, </span><span class="default">$diff</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$diff</span><span class="keyword">);<br /><br />   switch (</span><span class="default">$align</span><span class="keyword">) {<br />      case </span><span class="default">\STR_PAD_BOTH</span><span class="keyword">:<br />         </span><span class="default">$diffHalf </span><span class="keyword">= (int)(</span><span class="default">$diff</span><span class="keyword">/</span><span class="default">2 </span><span class="keyword">+ </span><span class="default">0.5</span><span class="keyword">);<br />         </span><span class="default">$padding </span><span class="keyword">= </span><span class="default">\str_repeat</span><span class="keyword">(</span><span class="default">$pad</span><span class="keyword">, </span><span class="default">$diffHalf</span><span class="keyword">);<br />         </span><span class="default">$result </span><span class="keyword">= </span><span class="string">"</span><span class="keyword">{</span><span class="default">$padding</span><span class="keyword">}{</span><span class="default">$str</span><span class="keyword">}{</span><span class="default">$padding</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">;<br />         break;<br />      case </span><span class="default">\STR_PAD_LEFT</span><span class="keyword">:<br />         </span><span class="default">$result </span><span class="keyword">= </span><span class="string">"</span><span class="keyword">{</span><span class="default">$padding</span><span class="keyword">}{</span><span class="default">$str</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">;<br />         </span><span class="default">$result </span><span class="keyword">= </span><span class="string">"</span><span class="keyword">{</span><span class="default">$str</span><span class="keyword">}{</span><span class="default">$padding</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">;<br />         break;<br />      case </span><span class="default">\STR_PAD_RIGHT</span><span class="keyword">:<br />      default:<br />         </span><span class="default">$result </span><span class="keyword">= </span><span class="string">"</span><span class="keyword">{</span><span class="default">$str</span><span class="keyword">}{</span><span class="default">$padding</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">;<br />         break;<br />   }<br /><br />   return </span><span class="default">\mb_substr</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />returns expected 12 char long string.</span></code></div>
  </div>
 </div>
  <div class="note" id="125079">  <div class="votes">
    <div id="Vu125079">
    <a href="/manual/vote-note.php?id=125079&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125079">
    <a href="/manual/vote-note.php?id=125079&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125079" title="71% like this...">
    3
    </div>
  </div>
  <a href="#125079" class="name">
  <strong class="user"><em>neo_selen</em></strong></a><a class="genanchor" href="#125079"> &para;</a><div class="date" title="2020-06-04 02:11"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125079">
<div class="phpcode"><code><span class="html">you can use str_pad to display an integer with a fixed amount of digits, like that:<br />0002<br />0003<br />...<br />0100<br /><br />by just writing<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">10000</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />        echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="string">'0'</span><span class="keyword">,</span><span class="default">STR_PAD_LEFT</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />i set 4 digits (see parameter #2), but you can set any fitting your needs.</span></code></div>
  </div>
 </div>
  <div class="note" id="111147">  <div class="votes">
    <div id="Vu111147">
    <a href="/manual/vote-note.php?id=111147&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111147">
    <a href="/manual/vote-note.php?id=111147&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111147" title="57% like this...">
    12
    </div>
  </div>
  <a href="#111147" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#111147"> &para;</a><div class="date" title="2013-01-20 01:44"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111147">
<div class="phpcode"><code><span class="html">A proper unicode string padder;<br /><br /><span class="default">&lt;?php<br />mb_internal_encoding</span><span class="keyword">(</span><span class="string">'utf-8'</span><span class="keyword">); </span><span class="comment">// @important<br /><br /></span><span class="keyword">function </span><span class="default">str_pad_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$pad_len</span><span class="keyword">, </span><span class="default">$pad_str </span><span class="keyword">= </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">) {<br />    </span><span class="default">$str_len </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$pad_str_len </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$pad_str</span><span class="keyword">);<br />    if (!</span><span class="default">$str_len </span><span class="keyword">&amp;&amp; (</span><span class="default">$dir </span><span class="keyword">== </span><span class="default">STR_PAD_RIGHT </span><span class="keyword">|| </span><span class="default">$dir </span><span class="keyword">== </span><span class="default">STR_PAD_LEFT</span><span class="keyword">)) {<br />        </span><span class="default">$str_len </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="comment">// @debug<br />    </span><span class="keyword">}<br />    if (!</span><span class="default">$pad_len </span><span class="keyword">|| !</span><span class="default">$pad_str_len </span><span class="keyword">|| </span><span class="default">$pad_len </span><span class="keyword">&lt;= </span><span class="default">$str_len</span><span class="keyword">) {<br />        return </span><span class="default">$str</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$repeat </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$str_len </span><span class="keyword">- </span><span class="default">$pad_str_len </span><span class="keyword">+ </span><span class="default">$pad_len</span><span class="keyword">);<br />    if (</span><span class="default">$dir </span><span class="keyword">== </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">) {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$str </span><span class="keyword">. </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_str</span><span class="keyword">, </span><span class="default">$repeat</span><span class="keyword">);<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pad_len</span><span class="keyword">);<br />    } else if (</span><span class="default">$dir </span><span class="keyword">== </span><span class="default">STR_PAD_LEFT</span><span class="keyword">) {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_str</span><span class="keyword">, </span><span class="default">$repeat</span><span class="keyword">) . </span><span class="default">$str</span><span class="keyword">;<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, -</span><span class="default">$pad_len</span><span class="keyword">);<br />    } else if (</span><span class="default">$dir </span><span class="keyword">== </span><span class="default">STR_PAD_BOTH</span><span class="keyword">) {<br />        </span><span class="default">$length </span><span class="keyword">= (</span><span class="default">$pad_len </span><span class="keyword">- </span><span class="default">$str_len</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">;<br />        </span><span class="default">$repeat </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$length </span><span class="keyword">/ </span><span class="default">$pad_str_len</span><span class="keyword">);<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_str</span><span class="keyword">, </span><span class="default">$repeat</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">)) <br />                    . </span><span class="default">$str <br />                       </span><span class="keyword">. </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_str</span><span class="keyword">, </span><span class="default">$repeat</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">));<br />    }<br />    <br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Test;<br /><span class="default">&lt;?php<br /></span><span class="comment">// needs ie. "test.php" file encoded in "utf-8 without bom"<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="string">'...'</span><span class="keyword">;<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">1000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$s1 </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="string">'AO'</span><span class="keyword">, </span><span class="default">STR_PAD_BOTH</span><span class="keyword">); </span><span class="comment">// can not inculde unicode char!!!<br />    </span><span class="default">$s2 </span><span class="keyword">= </span><span class="default">str_pad_unicode</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="string">'ÄÖ'</span><span class="keyword">, </span><span class="default">STR_PAD_BOTH</span><span class="keyword">);<br />    </span><span class="default">$sl1 </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s1</span><span class="keyword">);<br />    </span><span class="default">$sl2 </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$s2</span><span class="keyword">);<br />    echo  </span><span class="string">"len </span><span class="default">$sl1</span><span class="string">: </span><span class="default">$s1</span><span class="string"> \n"</span><span class="keyword">;<br />    echo  </span><span class="string">"len </span><span class="default">$sl2</span><span class="string">: </span><span class="default">$s2</span><span class="string"> \n"</span><span class="keyword">;<br />    echo  </span><span class="string">"\n"</span><span class="keyword">;<br />    if (</span><span class="default">$sl1 </span><span class="keyword">!= </span><span class="default">$sl2</span><span class="keyword">) die(</span><span class="string">"Fail!"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Output;<br />len 3: ... <br />len 3: ... <br /><br />len 4: ...A <br />len 4: ...Ä <br /><br />len 5: A...A <br />len 5: Ä...Ä <br /><br />len 6: A...AO <br />len 6: Ä...ÄÖ <br />...</span></code></div>
  </div>
 </div>
  <div class="note" id="125092">  <div class="votes">
    <div id="Vu125092">
    <a href="/manual/vote-note.php?id=125092&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125092">
    <a href="/manual/vote-note.php?id=125092&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125092" title="56% like this...">
    3
    </div>
  </div>
  <a href="#125092" class="name">
  <strong class="user"><em>robertwhishaw at gmail dot com</em></strong></a><a class="genanchor" href="#125092"> &para;</a><div class="date" title="2020-06-07 03:44"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125092">
<div class="phpcode"><code><span class="html">Incrementing or decrementing numbers in PHP is easy with the ++ and -- operators but it can be difficult to set the precision of the numbers. The str_pad() can be useful for concatenating a string to the beginning or end of the incrementing number to simulate a different precision. <br /><br />Good example, we want to increment 001 to 002, 003, 004:<br /><br />$numbers = [];<br /><br />for($i = 1; $i &lt;= 4; $i++){<br />    $numbers[] = str_pad($i, 3, '0', STR_PAD_LEFT);<br />}<br /><br />print_r($numbers);<br /><br />$numbers[0] =&gt; '001',<br />$numbers[1] =&gt; '002',<br />$numbers[2] =&gt; '003',<br />$numbers[3] =&gt; '004',<br /><br />Bad example, we want to increment 001 to 002, 003, 004 but if we set $i = 001 in the for() loop to start with, 001 will be converted to 1 and the incrementing will return: 1, 2, 3, 4 etc... <br /><br />$numbers = [];<br /><br />for($i = 001; $i &lt;= 4; $i++){<br />    $numbers[] = $i;<br />}<br /><br />print_r($numbers);<br /><br />$numbers[0] =&gt; 1,<br />$numbers[1] =&gt; 2,<br />$numbers[2] =&gt; 3,<br />$numbers[3] =&gt; 4,</span></code></div>
  </div>
 </div>
  <div class="note" id="116244">  <div class="votes">
    <div id="Vu116244">
    <a href="/manual/vote-note.php?id=116244&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116244">
    <a href="/manual/vote-note.php?id=116244&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116244" title="54% like this...">
    7
    </div>
  </div>
  <a href="#116244" class="name">
  <strong class="user"><em>wes at nospamplsexample dot org</em></strong></a><a class="genanchor" href="#116244"> &para;</a><div class="date" title="2014-11-28 06:29"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116244">
<div class="phpcode"><code><span class="html">multibyte version:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_str_pad</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$pad_len</span><span class="keyword">, </span><span class="default">$pad_str </span><span class="keyword">= </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">)<br />{<br />    </span><span class="default">$encoding </span><span class="keyword">= </span><span class="default">$encoding </span><span class="keyword">=== </span><span class="default">NULL </span><span class="keyword">? </span><span class="default">mb_internal_encoding</span><span class="keyword">() : </span><span class="default">$encoding</span><span class="keyword">;<br />    </span><span class="default">$padBefore </span><span class="keyword">= </span><span class="default">$dir </span><span class="keyword">=== </span><span class="default">STR_PAD_BOTH </span><span class="keyword">|| </span><span class="default">$dir </span><span class="keyword">=== </span><span class="default">STR_PAD_LEFT</span><span class="keyword">;<br />    </span><span class="default">$padAfter </span><span class="keyword">= </span><span class="default">$dir </span><span class="keyword">=== </span><span class="default">STR_PAD_BOTH </span><span class="keyword">|| </span><span class="default">$dir </span><span class="keyword">=== </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">;<br />    </span><span class="default">$pad_len </span><span class="keyword">-= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />    </span><span class="default">$targetLen </span><span class="keyword">= </span><span class="default">$padBefore </span><span class="keyword">&amp;&amp; </span><span class="default">$padAfter </span><span class="keyword">? </span><span class="default">$pad_len </span><span class="keyword">/ </span><span class="default">2 </span><span class="keyword">: </span><span class="default">$pad_len</span><span class="keyword">;<br />    </span><span class="default">$strToRepeatLen </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$pad_str</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />    </span><span class="default">$repeatTimes </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$targetLen </span><span class="keyword">/ </span><span class="default">$strToRepeatLen</span><span class="keyword">);<br />    </span><span class="default">$repeatedString </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_str</span><span class="keyword">, </span><span class="default">max</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$repeatTimes</span><span class="keyword">)); </span><span class="comment">// safe if used with valid utf-8 strings<br />    </span><span class="default">$before </span><span class="keyword">= </span><span class="default">$padBefore </span><span class="keyword">? </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$repeatedString</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$targetLen</span><span class="keyword">), </span><span class="default">$encoding</span><span class="keyword">) : </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$after </span><span class="keyword">= </span><span class="default">$padAfter </span><span class="keyword">? </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$repeatedString</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$targetLen</span><span class="keyword">), </span><span class="default">$encoding</span><span class="keyword">) : </span><span class="string">''</span><span class="keyword">;<br />    return </span><span class="default">$before </span><span class="keyword">. </span><span class="default">$str </span><span class="keyword">. </span><span class="default">$after</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="27364">  <div class="votes">
    <div id="Vu27364">
    <a href="/manual/vote-note.php?id=27364&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27364">
    <a href="/manual/vote-note.php?id=27364&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27364" title="56% like this...">
    3
    </div>
  </div>
  <a href="#27364" class="name">
  <strong class="user"><em>bob [at] bobarmadillo [dot] com</em></strong></a><a class="genanchor" href="#27364"> &para;</a><div class="date" title="2002-12-03 09:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27364">
<div class="phpcode"><code><span class="html">In a lot of cases you're better off using str_repeat if you want to use something like   - it repeats the entire string.
<br />
<br />Using str_repeat, I wrote a full string pad function that should closely mimic str_pad in every other way:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">full_str_pad</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$pad_length</span><span class="keyword">, </span><span class="default">$pad_string </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$pad_type </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {
<br /> </span><span class="default">$str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br /> </span><span class="default">$length </span><span class="keyword">= </span><span class="default">$pad_length </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);
<br /> if (</span><span class="default">$length </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) { </span><span class="comment">// str_repeat doesn't like negatives
<br />  </span><span class="keyword">if (</span><span class="default">$pad_type </span><span class="keyword">== </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">) { </span><span class="comment">// STR_PAD_RIGHT == 1
<br />   </span><span class="default">$str </span><span class="keyword">= </span><span class="default">$input</span><span class="keyword">.</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_string</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);
<br />  } elseif (</span><span class="default">$pad_type </span><span class="keyword">== </span><span class="default">STR_PAD_BOTH</span><span class="keyword">) { </span><span class="comment">// STR_PAD_BOTH == 2
<br />   </span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_string</span><span class="keyword">, </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">));
<br />   </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">$input</span><span class="keyword">;
<br />   </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_string</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">));
<br />  } else { </span><span class="comment">// defaults to STR_PAD_LEFT == 0
<br />   </span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$pad_string</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">).</span><span class="default">$input</span><span class="keyword">;
<br />  }
<br /> } else { </span><span class="comment">// if $length is negative or zero we don't need to do anything
<br />  </span><span class="default">$str </span><span class="keyword">= </span><span class="default">$input</span><span class="keyword">;
<br /> }
<br /> return </span><span class="default">$str</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$pad_me </span><span class="keyword">= </span><span class="string">"Test String"</span><span class="keyword">;
<br />echo </span><span class="string">'|'</span><span class="keyword">.</span><span class="default">full_str_pad</span><span class="keyword">(</span><span class="default">$pad_me</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">).</span><span class="string">"|\n"</span><span class="keyword">;
<br />echo </span><span class="string">'|'</span><span class="keyword">.</span><span class="default">full_str_pad</span><span class="keyword">(</span><span class="default">$pad_me</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">).</span><span class="string">"|\n"</span><span class="keyword">;
<br />echo </span><span class="string">'|'</span><span class="keyword">.</span><span class="default">full_str_pad</span><span class="keyword">(</span><span class="default">$pad_me</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">STR_PAD_BOTH</span><span class="keyword">).</span><span class="string">"|\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76505">  <div class="votes">
    <div id="Vu76505">
    <a href="/manual/vote-note.php?id=76505&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76505">
    <a href="/manual/vote-note.php?id=76505&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76505" title="51% like this...">
    1
    </div>
  </div>
  <a href="#76505" class="name">
  <strong class="user"><em>Spudley</em></strong></a><a class="genanchor" href="#76505"> &para;</a><div class="date" title="2007-07-18 08:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76505">
<div class="phpcode"><code><span class="html">Warning: If your string includes non-ascii characters (eg the British pounds sign), str_pad() will treat these as two characters when calculating the padding.<br /><br />So for example:<br /><span class="default">&lt;?php<br />str_pad</span><span class="keyword">(</span><span class="default">$currency_symbol</span><span class="keyword">.</span><span class="default">$showtottopay</span><span class="keyword">,</span><span class="default">12</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>will produce a different length string depending on whether $currency_symbol is pounds or dollars.<br /><br />Hope this helps someone -- it caused me a lot of problems with misaligned columns in my invoices until I worked it out.</span></code></div>
  </div>
 </div>
  <div class="note" id="116616">  <div class="votes">
    <div id="Vu116616">
    <a href="/manual/vote-note.php?id=116616&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116616">
    <a href="/manual/vote-note.php?id=116616&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116616" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116616" class="name">
  <strong class="user"><em>mcinp</em></strong></a><a class="genanchor" href="#116616"> &para;</a><div class="date" title="2015-01-29 04:04"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116616">
<div class="phpcode"><code><span class="html">a different, more robust multibyte version of str_pad that works correctly only if $pad_string is non-multibyte string<br /><br />function my_mb_str_pad($input, $pad_length, $pad_string=' ', $pad_type=STR_PAD_RIGHT,$encoding='UTF-8'){<br />    $mb_diff=mb_strlen($str, $encoding)-strlen($string);        <br />    return str_pad($input,$pad_length+$mb_diff,$pad_string,$pad_type);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="22090">  <div class="votes">
    <div id="Vu22090">
    <a href="/manual/vote-note.php?id=22090&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22090">
    <a href="/manual/vote-note.php?id=22090&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22090" title="50% like this...">
    0
    </div>
  </div>
  <a href="#22090" class="name">
  <strong class="user"><em>pestilenc at hotmail dot com</em></strong></a><a class="genanchor" href="#22090"> &para;</a><div class="date" title="2002-06-06 04:26"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22090">
<div class="phpcode"><code><span class="html">For me this worked.<br />$string = 'help';<br /><br />#First, str_pad() with unique character.<br />$string = str_pad($string, 10, "*", STR_PAD_BOTH);<br />#$string = '***help***';<br /><br />#Second, str_replace with '&amp;nbsp;'<br />$string = str_replace("*", "&amp;nbsp;", $string);</span></code></div>
  </div>
 </div>
  <div class="note" id="118978">  <div class="votes">
    <div id="Vu118978">
    <a href="/manual/vote-note.php?id=118978&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118978">
    <a href="/manual/vote-note.php?id=118978&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118978" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#118978" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118978"> &para;</a><div class="date" title="2016-03-11 10:25"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118978">
<div class="phpcode"><code><span class="html">Here is the mcinp's version of mb_str_pad bugfixed: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_str_pad</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$pad_length</span><span class="keyword">, </span><span class="default">$pad_string</span><span class="keyword">=</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$pad_type</span><span class="keyword">=</span><span class="default">STR_PAD_RIGHT</span><span class="keyword">,</span><span class="default">$encoding</span><span class="keyword">=</span><span class="string">'UTF-8'</span><span class="keyword">){<br />        </span><span class="default">$mb_diff</span><span class="keyword">=</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">)-</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />        return </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">$pad_length</span><span class="keyword">-</span><span class="default">$mb_diff</span><span class="keyword">,</span><span class="default">$pad_string</span><span class="keyword">,</span><span class="default">$pad_type</span><span class="keyword">);<br />    } <br /></span><span class="default">?&gt;</span> <br /><br />Still working correctly only if $pad_string is non-multibyte string</span></code></div>
  </div>
 </div>
  <div class="note" id="27322">  <div class="votes">
    <div id="Vu27322">
    <a href="/manual/vote-note.php?id=27322&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27322">
    <a href="/manual/vote-note.php?id=27322&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27322" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#27322" class="name">
  <strong class="user"><em>Fahad dot Gilani at anu dot edu dot au</em></strong></a><a class="genanchor" href="#27322"> &para;</a><div class="date" title="2002-12-02 02:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27322">
<div class="phpcode"><code><span class="html">Basically, *all* of you guys have a 'long' way of padding text with html tags (which includes &amp;nbsp;) You dont even have to do a str_replace... try the following code and this will work with ANY html tag there is out there and you don't have to worry about tag character lengths so on and so forth:<br />&lt;?<br />  $text = "This is pretty interesting!";<br />  $pad_string = "&amp;nbsp;";<br />  <br />  //Pad text on both sides <br />  $text = str_pad($text, strlen($text)+(20*strlen($pad_string)), $pad_string, STR_PAD_BOTH);<br />  print $text." Dont you think?";<br />?&gt;<br />Will produce:<br />          This is pretty interesting!           Dont you think?<br /><br />Cheers,<br />Fahad</span></code></div>
  </div>
 </div>
  <div class="note" id="105912">  <div class="votes">
    <div id="Vu105912">
    <a href="/manual/vote-note.php?id=105912&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105912">
    <a href="/manual/vote-note.php?id=105912&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105912" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#105912" class="name">
  <strong class="user"><em>gene at swipesy dot com</em></strong></a><a class="genanchor" href="#105912"> &para;</a><div class="date" title="2011-09-24 09:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105912">
<div class="phpcode"><code><span class="html">This is how I pad using &amp;nbsp; :<br /><br />str_replace(" ", "&amp;nbsp;&amp;nbsp;", str_pad($foo, 10, " ", STR_PAD_LEFT))<br /><br />Seems to work well using two &amp;nbsp; tags for each character added, at least for my use. YMMV.</span></code></div>
  </div>
 </div>
  <div class="note" id="120438">  <div class="votes">
    <div id="Vu120438">
    <a href="/manual/vote-note.php?id=120438&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120438">
    <a href="/manual/vote-note.php?id=120438&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120438" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#120438" class="name">
  <strong class="user"><em>gtwizard</em></strong></a><a class="genanchor" href="#120438"> &para;</a><div class="date" title="2017-01-10 02:52"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120438">
<div class="phpcode"><code><span class="html">sprintf is faster<br /><br />$sTime = microtime(true);<br />$s = sprintf("%'-1000000s", '-');<br />$eTime = microtime(true);<br />echo 'sprintf ran in ' . (($eTime - $sTime) * 1000) . ' milliseconds' . "\n";<br /><br />$sTime = microtime(true);<br />$s = str_pad('-', 1000000, '-');<br />$eTime = microtime(true);<br />echo 'str_pad ran in ' . (($eTime - $sTime) * 1000) . ' milliseconds' . "\n";<br /><br />//result<br />sprintf ran in 2.0260810852051 milliseconds<br />str_pad ran in 26.59797668457 milliseconds</span></code></div>
  </div>
 </div>
  <div class="note" id="81944">  <div class="votes">
    <div id="Vu81944">
    <a href="/manual/vote-note.php?id=81944&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81944">
    <a href="/manual/vote-note.php?id=81944&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81944" title="42% like this...">
    -5
    </div>
  </div>
  <a href="#81944" class="name">
  <strong class="user"><em>bxi at apparoat dot nl</em></strong></a><a class="genanchor" href="#81944"> &para;</a><div class="date" title="2008-03-20 06:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81944">
<div class="phpcode"><code><span class="html">In case you want to pad 2 strings together with a character you can use:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">pad_between_strings</span><span class="keyword">(</span><span class="default">$string1</span><span class="keyword">, </span><span class="default">$string2</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$char </span><span class="keyword">= </span><span class="string">" "</span><span class="keyword">) {<br />    </span><span class="default">$fill_length </span><span class="keyword">= </span><span class="default">$length </span><span class="keyword">- ( </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string1</span><span class="keyword">) + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string2</span><span class="keyword">) );<br />    return </span><span class="default">$string1 </span><span class="keyword">. </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, </span><span class="default">$fill_length</span><span class="keyword">) . </span><span class="default">$string2</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117674">  <div class="votes">
    <div id="Vu117674">
    <a href="/manual/vote-note.php?id=117674&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117674">
    <a href="/manual/vote-note.php?id=117674&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117674" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#117674" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#117674"> &para;</a><div class="date" title="2015-07-19 11:13"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117674">
<div class="phpcode"><code><span class="html">For simple padding, you can use sprintf, which is faster:<br />see <a href="http://php.net/sprintf" rel="nofollow" target="_blank">http://php.net/sprintf</a> Example #5 "Specifying padding character"</span></code></div>
  </div>
 </div>
  <div class="note" id="74259">  <div class="votes">
    <div id="Vu74259">
    <a href="/manual/vote-note.php?id=74259&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74259">
    <a href="/manual/vote-note.php?id=74259&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74259" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#74259" class="name">
  <strong class="user"><em>christian dot reinecke at web dot de</em></strong></a><a class="genanchor" href="#74259"> &para;</a><div class="date" title="2007-04-01 10:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74259">
<div class="phpcode"><code><span class="html">Fills the first argument (mostly a number, f.e. from a &lt;select&gt; loop to display a date or time) with zeroes.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">zerofill</span><span class="keyword">(</span><span class="default">$mStretch</span><span class="keyword">, </span><span class="default">$iLength </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)<br />{<br />    </span><span class="default">$sPrintfString </span><span class="keyword">= </span><span class="string">'%0' </span><span class="keyword">. (int)</span><span class="default">$iLength </span><span class="keyword">. </span><span class="string">'s'</span><span class="keyword">;<br />    return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="default">$sPrintfString</span><span class="keyword">, </span><span class="default">$mStretch</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />sprintf() is indeed faster than str_pad.</span></code></div>
  </div>
 </div>
  <div class="note" id="121488">  <div class="votes">
    <div id="Vu121488">
    <a href="/manual/vote-note.php?id=121488&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121488">
    <a href="/manual/vote-note.php?id=121488&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121488" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#121488" class="name">
  <strong class="user"><em>Kirill Fuchs</em></strong></a><a class="genanchor" href="#121488"> &para;</a><div class="date" title="2017-08-06 09:32"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121488">
<div class="phpcode"><code><span class="html">sprintf() is not always faster... It certainly scales a lot better then str_pad so when running a benchmark that pads 10k characters,  sprintf will come out on top. But if you benchmarked a more real world scenario, it seems str_pad comes out the clear winner.<br /><br />$sTime = microtime(true);<br />$count = 5;<br />$s = sprintf("%'\n5s", "\n");<br />$eTime = microtime(true);<br />echo 'sprintf ran in ' . (($eTime - $sTime) * 1000) . ' milliseconds' . "\n";<br /><br />$sTime = microtime(true);<br />$s = str_pad("\n", 5, "\n");<br />$eTime = microtime(true);<br />echo 'str_pad ran in ' . (($eTime - $sTime) * 1000) . ' milliseconds' . "\n";<br /><br />sprintf ran in 0.015974044799805 milliseconds<br />str_pad ran in 0.0059604644775391 milliseconds</span></code></div>
  </div>
 </div>
  <div class="note" id="89754">  <div class="votes">
    <div id="Vu89754">
    <a href="/manual/vote-note.php?id=89754&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89754">
    <a href="/manual/vote-note.php?id=89754&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89754" title="39% like this...">
    -5
    </div>
  </div>
  <a href="#89754" class="name">
  <strong class="user"><em>Kari &amp;#34;Haprog&amp;#34; Sderholm</em></strong></a><a class="genanchor" href="#89754"> &para;</a><div class="date" title="2009-03-21 06:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89754">
<div class="phpcode"><code><span class="html">Here's a quick and simple way to make an mb_str_pad function that works when you have correctly set your internal encoding.<br /><br />I'm not sure how well this works in all possible scenarios but atleast it worked for me using UTF-8 as internal encoding and using this function on strings containing scandinavian characters "åäöÅÄÖ" that are double byte in UTF-8.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mb_str_pad</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$pad_length</span><span class="keyword">, </span><span class="default">$pad_string</span><span class="keyword">=</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$pad_type</span><span class="keyword">=</span><span class="default">STR_PAD_RIGHT</span><span class="keyword">) {<br />    </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) - </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    return </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$pad_length</span><span class="keyword">+</span><span class="default">$diff</span><span class="keyword">, </span><span class="default">$pad_string</span><span class="keyword">, </span><span class="default">$pad_type</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51337">  <div class="votes">
    <div id="Vu51337">
    <a href="/manual/vote-note.php?id=51337&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51337">
    <a href="/manual/vote-note.php?id=51337&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51337" title="36% like this...">
    -5
    </div>
  </div>
  <a href="#51337" class="name">
  <strong class="user"><em>zubfatal &lt;root at it dot dk&gt;</em></strong></a><a class="genanchor" href="#51337"> &para;</a><div class="date" title="2005-03-27 09:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51337">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * str_pad_html - Pad a string to a certain length with another string.<br />     * accepts HTML code in param: $strPadString.<br />     * <br />     * @name        str_pad_html()<br />     * @author        Tim Johannessen &lt;root@it.dk&gt;<br />     * @version        1.0.0<br />     * @param        string    $strInput    The array to iterate through, all non-numeric values will be skipped.<br />     * @param        int    $intPadLength    Padding length, must be greater than zero.<br />     * @param        string    [$strPadString]    String to pad $strInput with (default: &amp;nbsp;)<br />     * @param        int        [$intPadType]        STR_PAD_LEFT, STR_PAD_RIGHT (default), STR_PAD_BOTH<br />     * @return        string    Returns the padded string<br />    **/<br />    </span><span class="keyword">function </span><span class="default">str_pad_html</span><span class="keyword">(</span><span class="default">$strInput </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">, </span><span class="default">$intPadLength</span><span class="keyword">, </span><span class="default">$strPadString </span><span class="keyword">= </span><span class="string">"&amp;nbsp;"</span><span class="keyword">, </span><span class="default">$intPadType </span><span class="keyword">= </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">) {<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$strInput</span><span class="keyword">))) &lt; </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$intPadLength</span><span class="keyword">)) {<br />            <br />            switch (</span><span class="default">$intPadType</span><span class="keyword">) {<br />                 </span><span class="comment">// STR_PAD_LEFT<br />                </span><span class="keyword">case </span><span class="default">0</span><span class="keyword">:<br />                    </span><span class="default">$offsetLeft </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$intPadLength </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$strInput</span><span class="keyword">))));<br />                    </span><span class="default">$offsetRight </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                    break;<br />                    <br />                </span><span class="comment">// STR_PAD_RIGHT<br />                </span><span class="keyword">case </span><span class="default">1</span><span class="keyword">:<br />                    </span><span class="default">$offsetLeft </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                    </span><span class="default">$offsetRight </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$intPadLength </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$strInput</span><span class="keyword">))));<br />                    break;<br />                    <br />                </span><span class="comment">// STR_PAD_BOTH<br />                </span><span class="keyword">case </span><span class="default">2</span><span class="keyword">:<br />                    </span><span class="default">$offsetLeft </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">((</span><span class="default">$intPadLength </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$strInput</span><span class="keyword">)))) / </span><span class="default">2</span><span class="keyword">);<br />                    </span><span class="default">$offsetRight </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">((</span><span class="default">$intPadLength </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$strInput</span><span class="keyword">)))) / </span><span class="default">2</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />                    break;<br />                    <br />                </span><span class="comment">// STR_PAD_RIGHT<br />                </span><span class="keyword">default:<br />                    </span><span class="default">$offsetLeft </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                    </span><span class="default">$offsetRight </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$intPadLength </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$strInput</span><span class="keyword">))));<br />                    break;<br />            }<br />            <br />            </span><span class="default">$strPadded </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$strPadString</span><span class="keyword">, </span><span class="default">$offsetLeft</span><span class="keyword">) . </span><span class="default">$strInput </span><span class="keyword">. </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">$strPadString</span><span class="keyword">, </span><span class="default">$offsetRight</span><span class="keyword">);<br />            unset(</span><span class="default">$strInput</span><span class="keyword">, </span><span class="default">$offsetLeft</span><span class="keyword">, </span><span class="default">$offsetRight</span><span class="keyword">);<br />            <br />            return </span><span class="default">$strPadded</span><span class="keyword">;<br />        }<br />        <br />        else {<br />            return </span><span class="default">$strInput</span><span class="keyword">;<br />        }<br />    }<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="24527">  <div class="votes">
    <div id="Vu24527">
    <a href="/manual/vote-note.php?id=24527&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24527">
    <a href="/manual/vote-note.php?id=24527&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24527" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#24527" class="name">
  <strong class="user"><em>mreilly at NOSPAM dot mac dot com</em></strong></a><a class="genanchor" href="#24527"> &para;</a><div class="date" title="2002-08-20 11:23"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24527">
<div class="phpcode"><code><span class="html">When provided with a string of characters as the pad value, str_pad uses all the characters as fill, and can leave partial strings. (eg. If the pad value is 'ABC' and it needs 5 characters to pad with, it outputs 'ABCAB'.) This is a problem when you want to pad with non-breaking spaces, the code for which is 6 characters long. <br /><br />This can be resolved by first padding the string with a single character that won't be found in the strings such as * then doing a str_replace of * with &amp;nbsp;.</span></code></div>
  </div>
 </div>
  <div class="note" id="124491">  <div class="votes">
    <div id="Vu124491">
    <a href="/manual/vote-note.php?id=124491&amp;page=function.str-pad&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124491">
    <a href="/manual/vote-note.php?id=124491&amp;page=function.str-pad&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124491" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#124491" class="name">
  <strong class="user"><em>NOSPAM dot php at my dot jrklein dot com</em></strong></a><a class="genanchor" href="#124491"> &para;</a><div class="date" title="2019-12-07 06:53"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124491">
<div class="phpcode"><code><span class="html">str_pad() can provide sufficient "zero padding" when using block ciphers and manual padding with openssl_encrypt() and similar.<br /><br />The example below will pad the 6 character text "Secret" with two \x00 characters and return 8 characters of data. Substitute your plain text and block size as needed.<br /><br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="string">"Secret"</span><span class="keyword">;<br /></span><span class="default">$block_size </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) / </span><span class="default">$block_size</span><span class="keyword">) * </span><span class="default">$block_size</span><span class="keyword">;<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="string">"\x00"</span><span class="keyword">);</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.str-pad&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-pad.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
