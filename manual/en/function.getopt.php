<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: getopt - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.getopt.php">
 <link rel="shorturl" href="https://www.php.net/getopt">
 <link rel="alternate" href="https://www.php.net/getopt" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.getmyuid.php">
 <link rel="next" href="https://www.php.net/manual/en/function.getrusage.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.getopt.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.getopt.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.getopt.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.getopt.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.getopt.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.getopt.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.getopt.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.getopt.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.getopt.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.getopt.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.getopt.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets options from the command line argument list" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: getopt - Manual" />
<meta name="twitter:description" content="Gets options from the command line argument list" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: getopt - Manual" />
<meta itemprop="description" content="Gets options from the command line argument list" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets options from the command line argument list" />

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
        <a href="function.getrusage.php">
          getrusage &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.getmyuid.php">
          &laquo; getmyuid        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.getopt.php' selected="selected">English</option>
            <option value='de/function.getopt.php'>German</option>
            <option value='es/function.getopt.php'>Spanish</option>
            <option value='fr/function.getopt.php'>French</option>
            <option value='it/function.getopt.php'>Italian</option>
            <option value='ja/function.getopt.php'>Japanese</option>
            <option value='pt_BR/function.getopt.php'>Brazilian Portuguese</option>
            <option value='ru/function.getopt.php'>Russian</option>
            <option value='tr/function.getopt.php'>Turkish</option>
            <option value='uk/function.getopt.php'>Ukrainian</option>
            <option value='zh/function.getopt.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.getopt" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">getopt</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">getopt</span> &mdash; <span class="dc-title">Gets options from the command line argument list</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.getopt-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>getopt</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$short_options</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$long_options</code><span class="initializer"> = []</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$rest_index</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Parses options passed to the script.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.getopt-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">short_options</code></dt>
     <dd>
      <span class="simpara">
       Each character in this string will be used as option characters and
       matched against options passed to the script starting with a single
       hyphen (<code class="literal">-</code>).
      </span>
      <span class="simpara">
       For example, an option string <code class="literal">&quot;x&quot;</code> recognizes an
       option <code class="literal">-x</code>.
      </span>
      <span class="simpara">
       Only a-z, A-Z and 0-9 are allowed.
      </span>
     </dd>
    
    
     <dt><code class="parameter">long_options</code></dt>
     <dd>
      <span class="simpara">
       An array of options. Each element in this array will be used as option
       strings and matched against options passed to the script starting with
       two hyphens (<code class="literal">--</code>).
      </span>
      <span class="simpara">
       For example, an longopts element <code class="literal">&quot;opt&quot;</code> recognizes an
       option <code class="literal">--opt</code>.
      </span>
     </dd>
    
    
     <dt><code class="parameter">rest_index</code></dt>
     <dd>
      <span class="simpara">
       If the <code class="parameter">rest_index</code> parameter is present, then the
       index where argument parsing stopped will be written to this variable.
      </span>
     </dd>
    
   </dl>
  </p>
  <p class="para">
   The <code class="parameter">short_options</code> parameter may contain the following
   elements:
   <ul class="simplelist">
    <li>Individual characters (do not accept values)</li>
    <li>Characters followed by a colon (parameter requires value)</li>
    <li>Characters followed by two colons (optional value)</li>
   </ul>
   Option values are the first argument after the string. If a value is required,
   it does not matter whether the value has leading white space or not. See note.
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Optional values do not accept <code class="literal">&quot; &quot;</code> (space) as a separator.
    </span>
   </p></blockquote>
  </p>
  <p class="para">
    The <code class="parameter">long_options</code> array values may contain:
    <ul class="simplelist">
      <li>String (parameter does not accept any value)</li>
      <li>String followed by a colon (parameter requires value)</li>
      <li>String followed by two colons (optional value)</li>
    </ul>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The format for the <code class="parameter">short_options</code> and
    <code class="parameter">long_options</code> is almost the same, the only difference is
    that <code class="parameter">long_options</code> takes an array of options (where each
    element is the option) whereas <code class="parameter">short_options</code> takes a
    string (where each character is the option).
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.getopt-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   This function will return an array of option / argument pairs,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The parsing of options will end at the first non-option found, anything
    that follows is discarded.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.getopt-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>7.1.0</td>
       <td>
        Added the <code class="parameter">rest_index</code> parameter.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.getopt-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="getopt.examples-1">
    <p><strong>Example #1 <span class="function"><strong>getopt()</strong></span> example: The basics</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Script example.php<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= </span><span style="color: #0000BB">getopt</span><span style="color: #007700">(</span><span style="color: #DD0000">"f:hp:"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">shell&gt; php example.php -fvalue -h</pre>
</div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(2) {
  [&quot;f&quot;]=&gt;
  string(5) &quot;value&quot;
  [&quot;h&quot;]=&gt;
  bool(false)
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="getopt.examples-2">
    <p><strong>Example #2 <span class="function"><strong>getopt()</strong></span> example: Introducing long options</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Script example.php<br /></span><span style="color: #0000BB">$shortopts  </span><span style="color: #007700">= </span><span style="color: #DD0000">""</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$shortopts </span><span style="color: #007700">.= </span><span style="color: #DD0000">"f:"</span><span style="color: #007700">;  </span><span style="color: #FF8000">// Required value<br /></span><span style="color: #0000BB">$shortopts </span><span style="color: #007700">.= </span><span style="color: #DD0000">"v::"</span><span style="color: #007700">; </span><span style="color: #FF8000">// Optional value<br /></span><span style="color: #0000BB">$shortopts </span><span style="color: #007700">.= </span><span style="color: #DD0000">"abc"</span><span style="color: #007700">; </span><span style="color: #FF8000">// These options do not accept values<br /><br /></span><span style="color: #0000BB">$longopts  </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">"required:"</span><span style="color: #007700">,     </span><span style="color: #FF8000">// Required value<br />    </span><span style="color: #DD0000">"optional::"</span><span style="color: #007700">,    </span><span style="color: #FF8000">// Optional value<br />    </span><span style="color: #DD0000">"option"</span><span style="color: #007700">,        </span><span style="color: #FF8000">// No value<br />    </span><span style="color: #DD0000">"opt"</span><span style="color: #007700">,           </span><span style="color: #FF8000">// No value<br /></span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= </span><span style="color: #0000BB">getopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$shortopts</span><span style="color: #007700">, </span><span style="color: #0000BB">$longopts</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">shell&gt; php example.php -f &quot;value for f&quot; -v -a --required value --optional=&quot;optional value&quot; --option</pre>
</div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(6) {
  [&quot;f&quot;]=&gt;
  string(11) &quot;value for f&quot;
  [&quot;v&quot;]=&gt;
  bool(false)
  [&quot;a&quot;]=&gt;
  bool(false)
  [&quot;required&quot;]=&gt;
  string(5) &quot;value&quot;
  [&quot;optional&quot;]=&gt;
  string(14) &quot;optional value&quot;
  [&quot;option&quot;]=&gt;
  bool(false)
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="getopt.examples-3">
    <p><strong>Example #3 <span class="function"><strong>getopt()</strong></span> example: Passing multiple options as one</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Script example.php<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= </span><span style="color: #0000BB">getopt</span><span style="color: #007700">(</span><span style="color: #DD0000">"abc"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">shell&gt; php example.php -aaac</pre>
</div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(2) {
  [&quot;a&quot;]=&gt;
  array(3) {
    [0]=&gt;
    bool(false)
    [1]=&gt;
    bool(false)
    [2]=&gt;
    bool(false)
  }
  [&quot;c&quot;]=&gt;
  bool(false)
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="getopt.examples-4">
    <p><strong>Example #4 <span class="function"><strong>getopt()</strong></span> example: Using <code class="parameter">rest_index</code></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Script example.php<br /></span><span style="color: #0000BB">$rest_index </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= </span><span style="color: #0000BB">getopt</span><span style="color: #007700">(</span><span style="color: #DD0000">'a:b:'</span><span style="color: #007700">, [], </span><span style="color: #0000BB">$rest_index</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$pos_args </span><span style="color: #007700">= </span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$argv</span><span style="color: #007700">, </span><span style="color: #0000BB">$rest_index</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$pos_args</span><span style="color: #007700">);</span></span></code></div>
    </div>

    <div class="example-contents">
<div class="shellcode"><pre class="shellcode">shell&gt; php example.php -a 1 -b 2 -- test</pre>
</div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(1) {
  [0]=&gt;
  string(4) &quot;test&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.getopt-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="reserved.variables.argv.php" class="link"><var class="varname"><a href="reserved.variables.argv.php" class="classname">$argv</a></var></a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/getopt.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.getopt%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.getopt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.getopt.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">26 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123135">  <div class="votes">
    <div id="Vu123135">
    <a href="/manual/vote-note.php?id=123135&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123135">
    <a href="/manual/vote-note.php?id=123135&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123135" title="93% like this...">
    176
    </div>
  </div>
  <a href="#123135" class="name">
  <strong class="user"><em>Sane Guy</em></strong></a><a class="genanchor" href="#123135"> &para;</a><div class="date" title="2018-09-17 12:40"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123135">
<div class="phpcode"><code><span class="html">Be sure to wrap your head around this PHP jewel that took me a while to comprehend:<br /><br />The returned array will contain a boolean FALSE for options that HAVE been specified.<br /><br />Because why use TRUE to indicate "yes, it's there" when you can also use FALSE for that purpose, right? This is completely counter-intuitive and is most certainly only ever possible in PHP-land.</span></code></div>
  </div>
 </div>
  <div class="note" id="41862">  <div class="votes">
    <div id="Vu41862">
    <a href="/manual/vote-note.php?id=41862&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41862">
    <a href="/manual/vote-note.php?id=41862&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41862" title="84% like this...">
    41
    </div>
  </div>
  <a href="#41862" class="name">
  <strong class="user"><em>chris at tiny dot net</em></strong></a><a class="genanchor" href="#41862"> &para;</a><div class="date" title="2004-04-23 07:17"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41862">
<div class="phpcode"><code><span class="html">"phpnotes at kipu dot co dot uk" and "tim at digicol dot de" are both wrong or misleading.  Sean was correct.  Quoted space-containing strings on the command line are one argument.  It has to do with how the shell handles the command line, more than PHP.  PHP's getopt() is modeled on and probably built upon the Unix/POSIX/C library getopt(3) which treats strings as strings, and does not break them apart on white space.<br /><br />Here's proof:<br /><br />$ cat opt.php<br />#! /usr/local/bin/php<br /><span class="default">&lt;?php<br />$options </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="string">"f:"</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>$ opt.php -f a b c<br />Array<br />(<br />    [f] =&gt; a<br />)<br />$ opt.php -f 'a b c'<br />Array<br />(<br />    [f] =&gt; a b c<br />)<br />$ opt.php -f "a b c"<br />Array<br />(<br />    [f] =&gt; a b c<br />)<br />$ opt.php -f a\ b\ c<br />Array<br />(<br />    [f] =&gt; a b c<br />)<br />$</span></code></div>
  </div>
 </div>
  <div class="note" id="113015">  <div class="votes">
    <div id="Vu113015">
    <a href="/manual/vote-note.php?id=113015&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113015">
    <a href="/manual/vote-note.php?id=113015&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113015" title="84% like this...">
    34
    </div>
  </div>
  <a href="#113015" class="name">
  <strong class="user"><em>ch1902</em></strong></a><a class="genanchor" href="#113015"> &para;</a><div class="date" title="2013-08-18 03:37"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113015">
<div class="phpcode"><code><span class="html">Sometimes you will want to run a script from both the command line and as a web page, for example to debug with better output or a command line version that writes an image to the system but a web version that prints the image in the browser. You can use this function to get the same options whether passed as command line arguments or as $_REQUEST values.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Get options from the command line or web request<br /> * <br /> * @param string $options<br /> * @param array $longopts<br /> * @return array<br /> */<br /></span><span class="keyword">function </span><span class="default">getoptreq </span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">, </span><span class="default">$longopts</span><span class="keyword">)<br />{<br />   if (</span><span class="default">PHP_SAPI </span><span class="keyword">=== </span><span class="string">'cli' </span><span class="keyword">|| empty(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REMOTE_ADDR'</span><span class="keyword">]))  </span><span class="comment">// command line<br />   </span><span class="keyword">{<br />      return </span><span class="default">getopt</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">, </span><span class="default">$longopts</span><span class="keyword">);<br />   }<br />   else if (isset(</span><span class="default">$_REQUEST</span><span class="keyword">))  </span><span class="comment">// web script<br />   </span><span class="keyword">{<br />      </span><span class="default">$found </span><span class="keyword">= array();<br /><br />      </span><span class="default">$shortopts </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'@([a-z0-9][:]{0,2})@i'</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">PREG_SPLIT_DELIM_CAPTURE </span><span class="keyword">| </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br />      </span><span class="default">$opts </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$shortopts</span><span class="keyword">, </span><span class="default">$longopts</span><span class="keyword">);<br /><br />      foreach (</span><span class="default">$opts </span><span class="keyword">as </span><span class="default">$opt</span><span class="keyword">)<br />      {<br />         if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">, -</span><span class="default">2</span><span class="keyword">) === </span><span class="string">'::'</span><span class="keyword">)  </span><span class="comment">// optional<br />         </span><span class="keyword">{<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">2</span><span class="keyword">);<br /><br />            if (isset(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) &amp;&amp; !empty(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))<br />               </span><span class="default">$found</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />            else if (isset(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))<br />               </span><span class="default">$found</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">false</span><span class="keyword">;<br />         }<br />         else if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">) === </span><span class="string">':'</span><span class="keyword">)  </span><span class="comment">// required value<br />         </span><span class="keyword">{<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br /><br />            if (isset(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) &amp;&amp; !empty(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))<br />               </span><span class="default">$found</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />         }<br />         else if (</span><span class="default">ctype_alnum</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">))  </span><span class="comment">// no value<br />         </span><span class="keyword">{<br />            if (isset(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="default">$opt</span><span class="keyword">]))<br />               </span><span class="default">$found</span><span class="keyword">[</span><span class="default">$opt</span><span class="keyword">] = </span><span class="default">false</span><span class="keyword">;<br />         }<br />      }<br /><br />      return </span><span class="default">$found</span><span class="keyword">;<br />   }<br /><br />   return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// php script.php -a -c=XXX -e=YYY -f --two --four=ZZZ --five=5<br />// script.php?a&amp;c=XXX&amp;e=YYY&amp;f&amp;two&amp;four=ZZZ&amp;five=5<br /><br /></span><span class="default">$opts </span><span class="keyword">= </span><span class="default">getoptreq</span><span class="keyword">(</span><span class="string">'abc:d:e::f::'</span><span class="keyword">, array(</span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">, </span><span class="string">'three:'</span><span class="keyword">, </span><span class="string">'four:'</span><span class="keyword">, </span><span class="string">'five::'</span><span class="keyword">));<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);<br /><br /></span><span class="comment">/**<br />array(7) {<br />  'a' =&gt; bool(false)<br />  'c' =&gt; string(3) "XXX"<br />  'e' =&gt; string(3) "YYY"<br />  'f' =&gt; bool(false)<br />  'two' =&gt; bool(false)<br />  'four' =&gt; string(3) "ZZZ"<br />  'five' =&gt; string(1) "5"<br />}<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102211">  <div class="votes">
    <div id="Vu102211">
    <a href="/manual/vote-note.php?id=102211&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102211">
    <a href="/manual/vote-note.php?id=102211&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102211" title="75% like this...">
    12
    </div>
  </div>
  <a href="#102211" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#102211"> &para;</a><div class="date" title="2011-02-02 04:33"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102211">
<div class="phpcode"><code><span class="html">getopt() only returns the options specified if they were listed in the options.<br /><br />So you cant make a switch() use default: to complain of an unknown option. :(</span></code></div>
  </div>
 </div>
  <div class="note" id="122764">  <div class="votes">
    <div id="Vu122764">
    <a href="/manual/vote-note.php?id=122764&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122764">
    <a href="/manual/vote-note.php?id=122764&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122764" title="75% like this...">
    6
    </div>
  </div>
  <a href="#122764" class="name">
  <strong class="user"><em>Matt</em></strong></a><a class="genanchor" href="#122764"> &para;</a><div class="date" title="2018-05-24 03:35"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122764">
<div class="phpcode"><code><span class="html">Beware, this function can be dangerous for options following arguments when, for example, you make use of a --dry-run option, due to this behaviour:<br /><br />"Note: The parsing of options will end at the first non-option found, anything that follows is discarded."<br /><br />My script was doing a live run even though I specified --dry-run as the last part of the command like this `php foo.php arg1 --dry-run`: getopt() did NOT include dry-run in its list of options resulting in my script executing a live run.</span></code></div>
  </div>
 </div>
  <div class="note" id="117483">  <div class="votes">
    <div id="Vu117483">
    <a href="/manual/vote-note.php?id=117483&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117483">
    <a href="/manual/vote-note.php?id=117483&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117483" title="72% like this...">
    8
    </div>
  </div>
  <a href="#117483" class="name">
  <strong class="user"><em>housni dot yakoob at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#117483"> &para;</a><div class="date" title="2015-06-17 11:14"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117483">
<div class="phpcode"><code><span class="html">To elaborate on what 'ch1902' said, there certainly are instances where you may need to execute a script via CLI and the HTTP protocol. In such an instance, you can normalize how your script parses via CLI (using getopt()) as well as via HTTP (using $_GET) with the following simplified code:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// PHP 5.4+ only due to the new array brace style.<br /></span><span class="keyword">function </span><span class="default">request</span><span class="keyword">(array </span><span class="default">$options </span><span class="keyword">= []) {<br />    </span><span class="comment">// Set the default values.<br />    </span><span class="default">$defaults </span><span class="keyword">= [<br />        </span><span class="string">'params' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />        </span><span class="string">'os' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />        </span><span class="string">'username' </span><span class="keyword">=&gt; </span><span class="default">posix_getpwuid</span><span class="keyword">(</span><span class="default">posix_geteuid</span><span class="keyword">())[</span><span class="string">'name'</span><span class="keyword">],<br />        </span><span class="string">'env' </span><span class="keyword">=&gt; </span><span class="string">''<br />    </span><span class="keyword">];<br />    </span><span class="default">$options </span><span class="keyword">+= </span><span class="default">$defaults</span><span class="keyword">;<br /><br />    </span><span class="comment">// Sufficient enough check for CLI.<br />    </span><span class="keyword">if (</span><span class="string">'cli' </span><span class="keyword">=== </span><span class="default">PHP_SAPI</span><span class="keyword">) {<br />        return </span><span class="default">getopt</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, [</span><span class="string">'params:'</span><span class="keyword">, </span><span class="string">'os::'</span><span class="keyword">, </span><span class="string">'username::'</span><span class="keyword">, </span><span class="string">'env::'</span><span class="keyword">]) + </span><span class="default">$options</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$_GET </span><span class="keyword">+ </span><span class="default">$options</span><span class="keyword">;<br />}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">request</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />The above code would yield the results below when access via CLI and HTTP.<br /><br />/**<br /> * params = foo/bar<br /> * username = housni.yakoob<br /> */<br />// CLI<br />$ php script.php --params=foo/bar --username=housni.yakoob<br />Array<br />(<br />    [params] =&gt; foo/bar<br />    [username] =&gt; housni.yakoob<br />    [os] =&gt; <br />    [env] =&gt; <br />)<br /><br />// HTTP<br />script.php?params=foo/bar&amp;username=housni.yakoob<br />Array<br />(<br />    [params] =&gt; foo/bar<br />    [username] =&gt; housni.yakoob<br />    [os] =&gt; <br />    [env] =&gt; <br />)<br /><br />/**<br /> * params = foo/bar<br /> * username = Not provided, therefore, the default value will be used.<br /> */<br />// CLI<br />$ whoami &amp;&amp; php script.php --params=foo/bar<br />housni // &lt;-- Current users usersname (output of `whoami`).<br />Array<br />(<br />    [params] =&gt; foo/bar<br />    [os] =&gt; <br />    [username] =&gt; housni<br />    [env] =&gt; <br />)<br /><br />// HTTP<br />script.php?params=foo/bar<br />Array<br />(<br />    [params] =&gt; foo/bar<br />    [os] =&gt; <br />    // The username of my Apache user, the result of posix_getpwuid(posix_geteuid())['name']<br />    [username] =&gt; www-data<br />    [env] =&gt; <br />)<br /><br />As you can see, the output is consistent when the script is executed via the CLI or the web.</span></code></div>
  </div>
 </div>
  <div class="note" id="82793">  <div class="votes">
    <div id="Vu82793">
    <a href="/manual/vote-note.php?id=82793&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82793">
    <a href="/manual/vote-note.php?id=82793&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82793" title="70% like this...">
    10
    </div>
  </div>
  <a href="#82793" class="name">
  <strong class="user"><em>uberlinuxguy at tulg dot org</em></strong></a><a class="genanchor" href="#82793"> &para;</a><div class="date" title="2008-04-25 01:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82793">
<div class="phpcode"><code><span class="html">One thing of important note would be that getopt() actually respects the '--' option to end an option list.  Thus given the code:
<br />
<br />test.php:
<br /><span class="default">&lt;?php
<br />    $options </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="string">"m:g:h:"</span><span class="keyword">);
<br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">) ) {
<br />        print </span><span class="string">"There was a problem reading in the options.\n\n"</span><span class="keyword">;
<br />        exit(</span><span class="default">1</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">$errors </span><span class="keyword">= array();
<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span> 
<br />
<br />And running:
<br />
<br /># ./test.php ./run_vfs  -h test1 -g test2 -m test3 -- this is a test -m green
<br />
<br />Will return: 
<br />
<br />Array
<br />(
<br />    [h] =&gt; test1
<br />    [g] =&gt; test2
<br />    [m] =&gt; test3
<br />)
<br />
<br />Whereas running:
<br /># /test.php ./run_vfs  -h test1 -g test2 -m test3 this is a test -m green
<br />
<br />Will return:
<br />
<br />Array
<br />(
<br />    [h] =&gt; test1
<br />    [g] =&gt; test2
<br />    [m] =&gt; Array
<br />        (
<br />            [0] =&gt; test3
<br />            [1] =&gt; green
<br />        )
<br />
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="83414">  <div class="votes">
    <div id="Vu83414">
    <a href="/manual/vote-note.php?id=83414&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83414">
    <a href="/manual/vote-note.php?id=83414&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83414" title="69% like this...">
    5
    </div>
  </div>
  <a href="#83414" class="name">
  <strong class="user"><em>mbirth at webwriters dot de</em></strong></a><a class="genanchor" href="#83414"> &para;</a><div class="date" title="2008-05-24 01:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83414">
<div class="phpcode"><code><span class="html">After getopt() of PHP5.3.0 (on Windows) ignored some parameters if there was a syntactical problem, I decided to code my own generic parameter parser.<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * Parses $GLOBALS['argv'] for parameters and assigns them to an array.<br />     *<br />     * Supports:<br />     * -e<br />     * -e &lt;value&gt;<br />     * --long-param<br />     * --long-param=&lt;value&gt;<br />     * --long-param &lt;value&gt;<br />     * &lt;value&gt;<br />     *<br />     * @param array $noopt List of parameters without values<br />     */<br />    </span><span class="keyword">function </span><span class="default">parseParameters</span><span class="keyword">(</span><span class="default">$noopt </span><span class="keyword">= array()) {<br />        </span><span class="default">$result </span><span class="keyword">= array();<br />        </span><span class="default">$params </span><span class="keyword">= </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">];<br />        </span><span class="comment">// could use getopt() here (since PHP 5.3.0), but it doesn't work relyingly<br />        </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br />        while (list(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">$p</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">)) {<br />            if (</span><span class="default">$p</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">'-'</span><span class="keyword">) {<br />                </span><span class="default">$pname </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                if (</span><span class="default">$pname</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">'-'</span><span class="keyword">) {<br />                    </span><span class="comment">// long-opt (--&lt;param&gt;)<br />                    </span><span class="default">$pname </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$pname</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />                    if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />                        </span><span class="comment">// value specified inline (--&lt;param&gt;=&lt;value&gt;)<br />                        </span><span class="keyword">list(</span><span class="default">$pname</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'='</span><span class="keyword">, </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">);<br />                    }<br />                }<br />                </span><span class="comment">// check if next parameter is a descriptor or a value<br />                </span><span class="default">$nextparm </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br />                if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$pname</span><span class="keyword">, </span><span class="default">$noopt</span><span class="keyword">) &amp;&amp; </span><span class="default">$value </span><span class="keyword">=== </span><span class="default">true </span><span class="keyword">&amp;&amp; </span><span class="default">$nextparm </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">&amp;&amp; </span><span class="default">$nextparm</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} != </span><span class="string">'-'</span><span class="keyword">) list(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$pname</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            } else {<br />                </span><span class="comment">// param doesn't belong to any option<br />                </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$p</span><span class="keyword">;<br />            }<br />        }<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />A call like: php.exe -f test.php -- alfons -a 1 -b2 -c --d 2 --e=3=4 --f "alber t" hans wurst<br /><br />and an in-program call parseParameters(array('f')); would yield in a resulting array:<br /><br />Array<br />(<br />    [0] =&gt; alfons<br />    [a] =&gt; 1<br />    [b2] =&gt; 1<br />    [c] =&gt; 1<br />    [d] =&gt; 2<br />    [e] =&gt; 3=4<br />    [f] =&gt; 1<br />    [1] =&gt; alber t<br />    [2] =&gt; hans<br />    [3] =&gt; wurst<br />)<br /><br />As you can see, values without an identifier are stored with numeric indexes. Existing identifiers without values get "true".</span></code></div>
  </div>
 </div>
  <div class="note" id="97787">  <div class="votes">
    <div id="Vu97787">
    <a href="/manual/vote-note.php?id=97787&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97787">
    <a href="/manual/vote-note.php?id=97787&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97787" title="66% like this...">
    4
    </div>
  </div>
  <a href="#97787" class="name">
  <strong class="user"><em>geoff at gosquared dot com</em></strong></a><a class="genanchor" href="#97787"> &para;</a><div class="date" title="2010-05-08 05:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97787">
<div class="phpcode"><code><span class="html">It seems under PHP 5.3.2, getopt() makes a script fail to load if called via HTTP without any conditions. You'll need something like if(isset($_SERVER['argc'])) $args = getopt(); to prevent that.</span></code></div>
  </div>
 </div>
  <div class="note" id="100573">  <div class="votes">
    <div id="Vu100573">
    <a href="/manual/vote-note.php?id=100573&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100573">
    <a href="/manual/vote-note.php?id=100573&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100573" title="64% like this...">
    5
    </div>
  </div>
  <a href="#100573" class="name">
  <strong class="user"><em>mpartap at gmx dot net</em></strong></a><a class="genanchor" href="#100573"> &para;</a><div class="date" title="2010-10-24 01:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100573">
<div class="phpcode"><code><span class="html">Here's another way of removing options found by getopt() from the argv[] array. It handles the different kind of parameters without eating chunks that do not belong to an --option. (-nr foo param1 param2 foo)<br /><span class="default">&lt;?php<br />$parameters </span><span class="keyword">= array(<br />  </span><span class="string">'n' </span><span class="keyword">=&gt; </span><span class="string">'noparam'</span><span class="keyword">,<br />  </span><span class="string">'r:' </span><span class="keyword">=&gt; </span><span class="string">'required:'</span><span class="keyword">,<br />  </span><span class="string">'o::' </span><span class="keyword">=&gt; </span><span class="string">'optional::'</span><span class="keyword">,<br />);<br /><br /></span><span class="default">$options </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="default">implode</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$parameters</span><span class="keyword">)), </span><span class="default">$parameters</span><span class="keyword">);<br /></span><span class="default">$pruneargv </span><span class="keyword">= array();<br />foreach (</span><span class="default">$options </span><span class="keyword">as </span><span class="default">$option </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />  foreach (</span><span class="default">$argv </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$chunk</span><span class="keyword">) {<br />    </span><span class="default">$regex </span><span class="keyword">= </span><span class="string">'/^'</span><span class="keyword">. (isset(</span><span class="default">$option</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) ? </span><span class="string">'--' </span><span class="keyword">: </span><span class="string">'-'</span><span class="keyword">) . </span><span class="default">$option </span><span class="keyword">. </span><span class="string">'/'</span><span class="keyword">;<br />    if (</span><span class="default">$chunk </span><span class="keyword">== </span><span class="default">$value </span><span class="keyword">&amp;&amp; </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] == </span><span class="string">'-' </span><span class="keyword">|| </span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$regex</span><span class="keyword">, </span><span class="default">$chunk</span><span class="keyword">)) {<br />      </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$pruneargv</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br />    }<br />  }<br />}<br />while (</span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$pruneargv</span><span class="keyword">)) unset(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="65427">  <div class="votes">
    <div id="Vu65427">
    <a href="/manual/vote-note.php?id=65427&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65427">
    <a href="/manual/vote-note.php?id=65427&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65427" title="63% like this...">
    3
    </div>
  </div>
  <a href="#65427" class="name">
  <strong class="user"><em>joey at alegria dot co dot jp</em></strong></a><a class="genanchor" href="#65427"> &para;</a><div class="date" title="2006-04-30 09:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65427">
<div class="phpcode"><code><span class="html">There are 2 simpler (and much faster) methods for getting good getopt() operation without creating your own handler.<br /><br />1. Use the Console_Getopt PEAR class (should be standard in most PHP installations) which lets you specify both short and long form options as well as whether or not arguments supplied to an option are themselves 'optional'. Very simple to use and requires very little code to operate compaired to writing own handler.<br /><br />2. If you cannot load external PEAR objects, use your shell's getopt() functions (which in BASHs case work very well) to process options and have your shell script then call your PHP script with a rigid argument structure that is very easy for PHP to digest such as: <br />% myfile.php -a TRUE -b FALSE -c ARGUMENT ... <br />If the initial arguments are invalid you can have the shell script return an error without calling the PHP script. Sounds convoluted but is a very simple solution and in fact PHP's own % pear command uses this method. /usr/bin/pear is a shell script that does some simle checking before calling pearcmd.php and repassing the arguments on to it.<br /><br />The second method is by far the best for portability because it allows a single shell script to check a few things like your PHP version and respond acordingly e.g. does it call your PHP4 or PHP5 compatible script? Also, because getopt() is not available on Windows, The second solution allows you to do Windows specific testing as a BAT file (as oposed to BASH, ZSH or Korn on UNIX).</span></code></div>
  </div>
 </div>
  <div class="note" id="79047">  <div class="votes">
    <div id="Vu79047">
    <a href="/manual/vote-note.php?id=79047&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79047">
    <a href="/manual/vote-note.php?id=79047&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79047" title="62% like this...">
    4
    </div>
  </div>
  <a href="#79047" class="name">
  <strong class="user"><em>Damien B.</em></strong></a><a class="genanchor" href="#79047"> &para;</a><div class="date" title="2007-11-07 10:47"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79047">
<div class="phpcode"><code><span class="html">This is how I handle arguments with getopt: I use switch within a foreach at the beginning of a program.<br /><br /><span class="default">&lt;?php<br /><br />$opts </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="string">'hs:'</span><span class="keyword">);<br /><br /></span><span class="comment">// Handle command line arguments<br /></span><span class="keyword">foreach (</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">) as </span><span class="default">$opt</span><span class="keyword">) switch (</span><span class="default">$opt</span><span class="keyword">) {<br />  case </span><span class="string">'s'</span><span class="keyword">:<br />    </span><span class="comment">// Do something with s parameter<br />    </span><span class="default">$something </span><span class="keyword">= </span><span class="default">$opts</span><span class="keyword">[</span><span class="string">'s'</span><span class="keyword">];<br />    break;<br /><br />  case </span><span class="string">'h'</span><span class="keyword">:<br />    </span><span class="default">print_help_message</span><span class="keyword">();<br />    exit(</span><span class="default">1</span><span class="keyword">);<br />}<br /><br />print </span><span class="string">"</span><span class="default">$something</span><span class="string">\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125129">  <div class="votes">
    <div id="Vu125129">
    <a href="/manual/vote-note.php?id=125129&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125129">
    <a href="/manual/vote-note.php?id=125129&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125129" title="60% like this...">
    1
    </div>
  </div>
  <a href="#125129" class="name">
  <strong class="user"><em>taka8aru at gmail dot com</em></strong></a><a class="genanchor" href="#125129"> &para;</a><div class="date" title="2020-06-20 08:40"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125129">
<div class="phpcode"><code><span class="html">getopt() simply ignores unnecessary options specified in argv.<br />Many times, it does not work well to handle errors in command line.<br /><br />A package PEAR::Console_Getopt can handle this problem, but it requires additonal installation.<br />GNU getopt(1) does well at shell level.<br /><br />Following is my extended getopt() can detect unnecessary options:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getoptex</span><span class="keyword">(</span><span class="default">$sopt</span><span class="keyword">, </span><span class="default">$lopt</span><span class="keyword">, &amp;</span><span class="default">$ind</span><span class="keyword">)<br />{<br />    global </span><span class="default">$argv</span><span class="keyword">, </span><span class="default">$argc</span><span class="keyword">;<br /><br />    </span><span class="default">$sopts </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="default">$sopt</span><span class="keyword">, </span><span class="default">$lopt</span><span class="keyword">);<br />    </span><span class="default">$sopts_cnt </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$sopts</span><span class="keyword">); </span><span class="comment">// single-option count based on original sopt<br /><br />    </span><span class="default">$asopt </span><span class="keyword">= </span><span class="default">$sopt </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">range</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"z"</span><span class="keyword">)) . </span><span class="default">implode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">range</span><span class="keyword">(</span><span class="string">"A"</span><span class="keyword">, </span><span class="string">"Z"</span><span class="keyword">)) . </span><span class="default">implode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">range</span><span class="keyword">(</span><span class="string">"0"</span><span class="keyword">, </span><span class="string">"9"</span><span class="keyword">));<br />    </span><span class="default">$asopts </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="default">$asopt</span><span class="keyword">, </span><span class="default">$lopt</span><span class="keyword">);<br />    </span><span class="default">$asopts_cnt </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$asopts</span><span class="keyword">); </span><span class="comment">// actual single-option count including all single options even if is not listed as sopt<br /><br />    </span><span class="default">$lopt_trim </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$lopt </span><span class="keyword">as </span><span class="default">$o</span><span class="keyword">) {<br />        </span><span class="default">$lopt_trim</span><span class="keyword">[] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$o</span><span class="keyword">, </span><span class="string">":"</span><span class="keyword">);<br />    }<br />    </span><span class="default">$alopts_cnt </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$alopts_flag </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$argc</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        if (</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] === </span><span class="string">"--"</span><span class="keyword">) { </span><span class="comment">// end of option<br />            </span><span class="keyword">break;<br />        }<br />        if (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="string">"--"</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) { </span><span class="comment">// actual long-option<br />            </span><span class="default">$alopts_cnt</span><span class="keyword">++;<br />            </span><span class="default">$o </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">2</span><span class="keyword">);<br />            if (! </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$o</span><span class="keyword">, </span><span class="default">$lopt_trim</span><span class="keyword">)) { </span><span class="comment">// but it is not listed as lopt<br />                </span><span class="default">$alopts_flag </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            } else {<br />                if (</span><span class="default">in_array</span><span class="keyword">((</span><span class="default">$o </span><span class="keyword">. </span><span class="string">":"</span><span class="keyword">), </span><span class="default">$lopt</span><span class="keyword">)) { </span><span class="comment">// if the option requires value<br />                    </span><span class="default">$i</span><span class="keyword">++; </span><span class="comment">// assume next is the value<br />                    </span><span class="keyword">if (</span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$argc</span><span class="keyword">) { </span><span class="comment">// and the value is missing<br />                        </span><span class="default">$alopts_flag </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                        break;<br />                    }<br />                }<br />            }<br />        }<br />    }<br /><br />    </span><span class="comment">//var_dump($sopts, $asopts, $lopts, $alopts_cnt, $alopts_flag);<br />    </span><span class="keyword">if (</span><span class="default">$sopts_cnt </span><span class="keyword">!= </span><span class="default">$asopts_cnt </span><span class="keyword">|| (! </span><span class="default">$alopts_flag</span><span class="keyword">)) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    } else {<br />        return </span><span class="default">getopt</span><span class="keyword">(</span><span class="default">$sopt</span><span class="keyword">, </span><span class="default">$lopt</span><span class="keyword">, </span><span class="default">$ind</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79286">  <div class="votes">
    <div id="Vu79286">
    <a href="/manual/vote-note.php?id=79286&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79286">
    <a href="/manual/vote-note.php?id=79286&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79286" title="60% like this...">
    2
    </div>
  </div>
  <a href="#79286" class="name">
  <strong class="user"><em>Francois Hill</em></strong></a><a class="genanchor" href="#79286"> &para;</a><div class="date" title="2007-11-19 12:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79286">
<div class="phpcode"><code><span class="html">Although very interesting, koenbollen at gnospamail dot com's update of the argv array fails when option values follow the option with no space :<br />Indeed <br />    php MyScript.php5 -t5 <br />and<br />    php MyScript.php5 -t 5<br />with $options="t:" are treated as the same by getopt.<br /><br />This upgraded function should take care of it :<br /><br />File : shift_test.php5<br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">shift</span><span class="keyword">(</span><span class="default">$options_array</span><span class="keyword">)<br />    {<br />        foreach( </span><span class="default">$options_array </span><span class="keyword">as </span><span class="default">$o </span><span class="keyword">=&gt; </span><span class="default">$a </span><span class="keyword">)<br />        {<br />            </span><span class="comment">// Look for all occurrences of option in argv and remove if found :<br />            // ----------------------------------------------------------------<br />            // Look for occurrences of -o (simple option with no value) or -o&lt;val&gt; (no space in between):<br />            </span><span class="keyword">while(</span><span class="default">$k</span><span class="keyword">=</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"-"</span><span class="keyword">.</span><span class="default">$o</span><span class="keyword">.</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">]))<br />            {    </span><span class="comment">// If found remove from argv:<br />                </span><span class="keyword">if(</span><span class="default">$k</span><span class="keyword">)<br />                    unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">][</span><span class="default">$k</span><span class="keyword">]);<br />            }<br />            </span><span class="comment">// Look for remaining occurrences of -o &lt;val&gt; (space in between):<br />            </span><span class="keyword">while(</span><span class="default">$k</span><span class="keyword">=</span><span class="default">array_search</span><span class="keyword">(</span><span class="string">"-"</span><span class="keyword">.</span><span class="default">$o</span><span class="keyword">,</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">]))<br />            {    </span><span class="comment">// If found remove both option and value from argv:<br />                </span><span class="keyword">if(</span><span class="default">$k</span><span class="keyword">)<br />                {    unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">][</span><span class="default">$k</span><span class="keyword">]);<br />                    unset(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">][</span><span class="default">$k</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]);<br />                }<br />            }<br />        }<br />        </span><span class="comment">// Reindex :<br />        </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">]=</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'argv'</span><span class="keyword">]);<br />    }<br /><br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">);<br />    </span><span class="default">$options_array</span><span class="keyword">=</span><span class="default">getopt</span><span class="keyword">(</span><span class="string">'t:h'</span><span class="keyword">);<br />    </span><span class="default">shift</span><span class="keyword">(</span><span class="default">$options_array</span><span class="keyword">);<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />&gt;php shift_test.php5 -h -t4 param1 param2<br />will ouptut :<br />Array<br />(<br />    [0] =&gt; test.php5<br />    [1] =&gt; -h<br />    [2] =&gt; -t4<br />    [3] =&gt; param1<br />    [4] =&gt; param2<br />)<br />Array<br />(<br />    [0] =&gt; test.php5<br />    [1] =&gt; param1<br />    [2] =&gt; param2<br />)<br /><br />&gt;php shift_test.php5 -h -t 4 param1 param2<br />will ouptut :<br />Array<br />(<br />    [0] =&gt; test.php5<br />    [1] =&gt; -h<br />    [2] =&gt; -t<br />    [3] =&gt; 4<br />    [4] =&gt; param1<br />    [5] =&gt; param2<br />)<br />Array<br />(<br />    [0] =&gt; test.php5<br />    [1] =&gt; param1<br />    [2] =&gt; param2<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="74190">  <div class="votes">
    <div id="Vu74190">
    <a href="/manual/vote-note.php?id=74190&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74190">
    <a href="/manual/vote-note.php?id=74190&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74190" title="60% like this...">
    2
    </div>
  </div>
  <a href="#74190" class="name">
  <strong class="user"><em>koenbollen at gnospamail dot com</em></strong></a><a class="genanchor" href="#74190"> &para;</a><div class="date" title="2007-03-29 12:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74190">
<div class="phpcode"><code><span class="html">After you use the getopt function you can use the following script to update the $argv array:<br /><span class="default">&lt;?php<br />  $options </span><span class="keyword">= </span><span class="string">"c:ho:s:t:uvV"</span><span class="keyword">;<br />  </span><span class="default">$opts </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">( </span><span class="default">$options </span><span class="keyword">);<br />  foreach( </span><span class="default">$opts </span><span class="keyword">as </span><span class="default">$o </span><span class="keyword">=&gt; </span><span class="default">$a </span><span class="keyword">)<br />  {<br />    while( </span><span class="default">$k </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">( </span><span class="string">"-" </span><span class="keyword">. </span><span class="default">$o</span><span class="keyword">, </span><span class="default">$argv </span><span class="keyword">) )<br />    {<br />      if( </span><span class="default">$k </span><span class="keyword">)<br />        unset( </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] );<br />      if( </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">"/^.*"</span><span class="keyword">.</span><span class="default">$o</span><span class="keyword">.</span><span class="string">":.*$/i"</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">) )<br />        unset( </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">] );<br />    }<br />  }<br />  </span><span class="default">$argv </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">( </span><span class="default">$argv </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Note: I used the array_merge function to reindex the array's keys.<br /><br />Cheers, Koen Bollen</span></code></div>
  </div>
 </div>
  <div class="note" id="72407">  <div class="votes">
    <div id="Vu72407">
    <a href="/manual/vote-note.php?id=72407&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72407">
    <a href="/manual/vote-note.php?id=72407&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72407" title="57% like this...">
    2
    </div>
  </div>
  <a href="#72407" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#72407"> &para;</a><div class="date" title="2007-01-17 11:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72407">
<div class="phpcode"><code><span class="html">About getopt(String):<br /> Parses the command-line arguments into an associative array, using the function's String parameter to specify arguments and options, thus:<br />* arguments are specified as any letter followed by a colon, e.g. "h:".<br />* arguments are returned as "h" =&gt; "value".<br />* options are specified as any letter not followed by a colon, e.g. "r".<br />* options are returned as "r" =&gt; (boolean) false.<br /><br />Also note that:<br />1) Options or arguments not passed in the command-line parameters are not set in the returned associative array.<br />2) Options or arguments present in the command-line arguments multiple times are returned as an enumerated array within the returned associative array.</span></code></div>
  </div>
 </div>
  <div class="note" id="114587">  <div class="votes">
    <div id="Vu114587">
    <a href="/manual/vote-note.php?id=114587&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114587">
    <a href="/manual/vote-note.php?id=114587&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114587" title="55% like this...">
    3
    </div>
  </div>
  <a href="#114587" class="name">
  <strong class="user"><em>takingsides at gmail dot com</em></strong></a><a class="genanchor" href="#114587"> &para;</a><div class="date" title="2014-03-09 03:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114587">
<div class="phpcode"><code><span class="html">As already mentioned getopt() will stop parsing options upon the '--'.  Sometimes you will have options and arguments but the user may not always provide the explicit -- option.<br /><br />Below is a quick way to collect options and arguments regardless of the -- consistently.<br /><br />#!/usr/bin/php<br /><span class="default">&lt;?php<br /><br />$options </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="string">'hl::m:v:a'</span><span class="keyword">, [<br />    </span><span class="string">'help'</span><span class="keyword">,<br />    </span><span class="string">'list::'</span><span class="keyword">,<br />    </span><span class="string">'module:'</span><span class="keyword">,<br />    </span><span class="string">'version:'</span><span class="keyword">,<br />    </span><span class="string">'all'</span><span class="keyword">,<br />]);<br /><br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$options </span><span class="keyword">);<br /><br /></span><span class="default">$args </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="string">'--'</span><span class="keyword">, </span><span class="default">$argv</span><span class="keyword">);<br /></span><span class="default">$args </span><span class="keyword">= </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">, </span><span class="default">$args </span><span class="keyword">? ++</span><span class="default">$args </span><span class="keyword">: (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">) - </span><span class="default">count</span><span class="keyword">(</span><span class="default">$opt</span><span class="keyword">)));<br /><br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$args </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127341">  <div class="votes">
    <div id="Vu127341">
    <a href="/manual/vote-note.php?id=127341&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127341">
    <a href="/manual/vote-note.php?id=127341&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127341" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127341" class="name">
  <strong class="user"><em>S2</em></strong></a><a class="genanchor" href="#127341"> &para;</a><div class="date" title="2022-07-26 04:55"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127341">
<div class="phpcode"><code><span class="html">As noted the options not required or optional (parameter does not accept any value) only returns the index key with a value of FALSE when provided as an argument. That is counter-intuitive to how the option will likely be used, so simply leverage the keys existence and reset the variable's index for that option:<br /><br /><span class="default">&lt;?php <br />$options </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, [</span><span class="string">'update'</span><span class="keyword">, </span><span class="string">'insert'</span><span class="keyword">]);<br /></span><span class="default">$options</span><span class="keyword">[</span><span class="string">'update'</span><span class="keyword">] = </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'update'</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">$options</span><span class="keyword">[</span><span class="string">'insert'</span><span class="keyword">] = </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'insert'</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />shell&gt; php testfile.php --insert<br /><br />array(2) {<br />  ["update"]=&gt;<br />  bool(false)<br />  ["insert"]=&gt;<br />  bool(true)<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="126096">  <div class="votes">
    <div id="Vu126096">
    <a href="/manual/vote-note.php?id=126096&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126096">
    <a href="/manual/vote-note.php?id=126096&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126096" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126096" class="name">
  <strong class="user"><em>gingko at gingko dot ovh</em></strong></a><a class="genanchor" href="#126096"> &para;</a><div class="date" title="2021-05-20 12:38"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126096">
<div class="phpcode"><code><span class="html">Unfortunately, even using Example #4 do not allow to easily detect a bad -x or --xx argument as the last -x or --xx is always “eaten” even if it is bad:<br /><br />If I use this (Example #4) :<br /><span class="default">&lt;?php<br /></span><span class="comment">// Script example.php<br /></span><span class="default">$rest_index </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">$opts </span><span class="keyword">= </span><span class="default">getopt</span><span class="keyword">(</span><span class="string">'a:b:'</span><span class="keyword">, [], </span><span class="default">$rest_index</span><span class="keyword">);<br /></span><span class="default">$pos_args </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">, </span><span class="default">$rest_index</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$pos_args</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />shell&gt; php example.php -a 1 -b 2<br />shell&gt; php example.php -a 1 -b 2 --test<br />shell&gt; php example.php -a 1 -tb 2<br /><br />All return the same result (-t and --test not defined) :<br /><br />array(0) {<br />}<br /><br />(last one use combining single letters, making user testing much much more complicated)</span></code></div>
  </div>
 </div>
  <div class="note" id="119154">  <div class="votes">
    <div id="Vu119154">
    <a href="/manual/vote-note.php?id=119154&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119154">
    <a href="/manual/vote-note.php?id=119154&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119154" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119154" class="name">
  <strong class="user"><em>micropresident at gmail dot com</em></strong></a><a class="genanchor" href="#119154"> &para;</a><div class="date" title="2016-04-12 01:21"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119154">
<div class="phpcode"><code><span class="html">when using -f option to indicate script name, php does not allow to use double dash -- to define options after the script name; <br /><br />For example, the following command  cannot be execute:<br />php -f myscript.php --config "myconfig.ini"</span></code></div>
  </div>
 </div>
  <div class="note" id="120440">  <div class="votes">
    <div id="Vu120440">
    <a href="/manual/vote-note.php?id=120440&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120440">
    <a href="/manual/vote-note.php?id=120440&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120440" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#120440" class="name">
  <strong class="user"><em>wouter dot berben at phpro dot be</em></strong></a><a class="genanchor" href="#120440"> &para;</a><div class="date" title="2017-01-10 10:37"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120440">
<div class="phpcode"><code><span class="html">Your description on getopt is either wrong or the documentation of the function is wrong.<br /><br />-- snippet --<br />array getopt ( string $options [, array $longopts [, int &amp;$optind ]] )<br />--<br /><br />As I read this only the first parameter string $options is required.<br /><br />-- snippet --<br />longopts<br />An array of options. Each ...<br /><br />optind<br />If the optind parameter is present, ...<br />--<br /><br />This means that "longopts" is optional, but the third parameter "optind" is required (although the description leaves room for interpretation). This is against the possibilities of PHP because when a parameter is declared optional all following parameters must be declared optional as well.<br /><br />See <a href="http://php.net/manual/en/functions.arguments.php" rel="nofollow" target="_blank">http://php.net/manual/en/functions.arguments.php</a> Example #4 and #5.<br /><br />The immutable embedded stub (PHPStorm) [ <a href="https://github.com/JetBrains/phpstorm-stubs/blob/master/standard/standard_3.php" rel="nofollow" target="_blank">https://github.com/JetBrains/phpstorm-stubs/blob/master/standard/standard_3.php</a> ] specifies this:<br />-- snippet --<br />function getopt ($options, array $longopts = null, &amp;$optind) {}<br />--<br /><br />Which is also wrong, but probably based upon this documentation.</span></code></div>
  </div>
 </div>
  <div class="note" id="126803">  <div class="votes">
    <div id="Vu126803">
    <a href="/manual/vote-note.php?id=126803&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126803">
    <a href="/manual/vote-note.php?id=126803&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126803" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#126803" class="name">
  <strong class="user"><em>Dominik Deobald</em></strong></a><a class="genanchor" href="#126803"> &para;</a><div class="date" title="2022-01-26 01:51"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126803">
<div class="phpcode"><code><span class="html">This documentation never really explains the logic behind $short_options and just expects that you get it from reading the examples.<br /><br />So if you are like me and start to think that the order of letters between the ":" characters has anything to say, think simpler.<br /><br />It really is...<br />- every letter in the string will be allowed as a parameter, <br />- if that letter has ONE colon after it, then it will require a value<br />- if it has TWO colons, then it can accept a value<br />- the order of the letters does not matter at all as long as the colons are where they belong.<br /><br />That means that these two examples are the same: "ab::c:def:" &lt;-&gt; "adec:f:b::"</span></code></div>
  </div>
 </div>
  <div class="note" id="121596">  <div class="votes">
    <div id="Vu121596">
    <a href="/manual/vote-note.php?id=121596&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121596">
    <a href="/manual/vote-note.php?id=121596&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121596" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#121596" class="name">
  <strong class="user"><em>salimzadehsajad at gmail dot com</em></strong></a><a class="genanchor" href="#121596"> &para;</a><div class="date" title="2017-09-02 05:16"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121596">
<div class="phpcode"><code><span class="html">if you use command like below<br />    php [filename] [argument without (-) ] [options]<br />getopt don't return value. you can use this function<br /><br />function getoptions() {<br />    global $argv,$argc;<br />    $options = array();<br />    for($i = 0;$i &lt; $argc;$i++) {<br />        $arg = $argv[$i];<br />        if(strlen($arg) &gt; 1 &amp;&amp; $arg[0] == '-') {<br />            if($arg[1] == '-' &amp;&amp; $i + 1 &lt; $argc) { $i++; $options[substr($arg,2,strlen($arg))] = $argv[$i]; }<br />            else $options[$arg[1]] = substr($arg,2,strlen($arg));<br />        }<br />    }<br />    return $options;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="129393">  <div class="votes">
    <div id="Vu129393">
    <a href="/manual/vote-note.php?id=129393&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129393">
    <a href="/manual/vote-note.php?id=129393&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129393" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#129393" class="name">
  <strong class="user"><em>php at keith tyler dot com</em></strong></a><a class="genanchor" href="#129393"> &para;</a><div class="date" title="2024-04-11 05:32"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129393">
<div class="phpcode"><code><span class="html">Note that if you are mangling $argv separate from getopt(), that getopt() expects $argv to start with the command name in $argv[0]. So if you've shifted $argv, getopt() will start parsing at the second token, which means it will either miss the first option, or start parsing on the first option's value, breaking parsing.<br /><br />    $cmd = array_shift($argv);<br /><br />    $key_id=array_shift($argv);<br /><br />     array_unshift($argv,"");<br /><br />     $opts = getopt("a:b:c:");<br /><br />getopt() skips over $argv[0] to start its parsing at $argv[1]. It doesn't really matter what is in $argv[0].</span></code></div>
  </div>
 </div>
  <div class="note" id="126335">  <div class="votes">
    <div id="Vu126335">
    <a href="/manual/vote-note.php?id=126335&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126335">
    <a href="/manual/vote-note.php?id=126335&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126335" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#126335" class="name">
  <strong class="user"><em>edg at Greenberg dot org</em></strong></a><a class="genanchor" href="#126335"> &para;</a><div class="date" title="2021-08-12 12:22"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126335">
<div class="phpcode"><code><span class="html">&gt; This function will return an array of option / argument pairs, or false on failure.<br /><br />I note that on my PHP 7.4 installation, getopt returns an empty array for no options specified, not FALSE as the doc states.  Although "failure" is rather non-specific.  Maybe that doesn't include the condition of no options.</span></code></div>
  </div>
 </div>
  <div class="note" id="124552">  <div class="votes">
    <div id="Vu124552">
    <a href="/manual/vote-note.php?id=124552&amp;page=function.getopt&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124552">
    <a href="/manual/vote-note.php?id=124552&amp;page=function.getopt&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124552" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#124552" class="name">
  <strong class="user"><em>rastyazhenko dot anton at gmail dot com</em></strong></a><a class="genanchor" href="#124552"> &para;</a><div class="date" title="2019-12-29 03:14"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124552">
<div class="phpcode"><code><span class="html">$opts = getopt('', $params = ['ogrn:','inn:','kpp::','host:','port:','user:','pass:','path:','pattern:']) + ['kpp' =&gt; 0,'port' =&gt; 21,'path' =&gt; '/','pattern' =&gt; '.+\.dbf'];<br /><br />array_map(function ($param) use ($opts) {<br />    $matches = [];<br />    if ((bool)preg_match('/(?&lt;param&gt;[^:\s]+)\b:$/sU', $param, $matches)<br />        &amp;&amp; (!array_key_exists($matches['param'], $opts) || empty($opts[$matches['param']])))<br />        die(sprintf('&lt;prtg&gt;&lt;error&gt;1&lt;/error&gt;&lt;text&gt;%s not set&lt;/text&gt;&lt;/text&gt;&lt;/error&gt;&lt;/prtg&gt;', $matches['param']));<br />}, $params);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.getopt&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.getopt.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="current">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
