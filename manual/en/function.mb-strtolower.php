<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mb_strtolower - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mb-strtolower.php">
 <link rel="shorturl" href="https://www.php.net/mb-strtolower">
 <link rel="alternate" href="https://www.php.net/mb-strtolower" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mb-strstr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-strtoupper.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mb-strtolower.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mb-strtolower.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mb-strtolower.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mb-strtolower.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mb-strtolower.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mb-strtolower.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mb-strtolower.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mb-strtolower.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mb-strtolower.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mb-strtolower.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mb-strtolower.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Make a string lowercase" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mb_strtolower - Manual" />
<meta name="twitter:description" content="Make a string lowercase" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mb_strtolower - Manual" />
<meta itemprop="description" content="Make a string lowercase" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Make a string lowercase" />

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
        <a href="function.mb-strtoupper.php">
          mb_strtoupper &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mb-strstr.php">
          &laquo; mb_strstr        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      <li><a href='ref.mbstring.php'>Multibyte String Functions</a></li>      </ul>
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
            <option value='en/function.mb-strtolower.php' selected="selected">English</option>
            <option value='de/function.mb-strtolower.php'>German</option>
            <option value='es/function.mb-strtolower.php'>Spanish</option>
            <option value='fr/function.mb-strtolower.php'>French</option>
            <option value='it/function.mb-strtolower.php'>Italian</option>
            <option value='ja/function.mb-strtolower.php'>Japanese</option>
            <option value='pt_BR/function.mb-strtolower.php'>Brazilian Portuguese</option>
            <option value='ru/function.mb-strtolower.php'>Russian</option>
            <option value='tr/function.mb-strtolower.php'>Turkish</option>
            <option value='uk/function.mb-strtolower.php'>Ukrainian</option>
            <option value='zh/function.mb-strtolower.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mb-strtolower" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mb_strtolower</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mb_strtolower</span> &mdash; <span class="dc-title">Make a string lowercase</span></p>

 </div>
   
 <div class="refsect1 description" id="refsect1-function.mb-strtolower-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mb_strtolower</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns <code class="parameter">string</code>
   with all alphabetic characters converted to lowercase.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mb-strtolower-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being lowercased.
      </p>
     </dd>
    
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      <p class="para">The <code class="parameter">encoding</code>
parameter is the character encoding. If it is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the internal character
encoding value will be used.</p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mb-strtolower-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <code class="parameter">string</code> with all alphabetic characters converted to lowercase.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mb-strtolower-changelog">
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
       <td>8.3.0</td>
       <td>
        Implemented conditional casing rules for the Greek letter sigma.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.mb-strtolower-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2788">
    <p><strong>Example #1 <span class="function"><strong>mb_strtolower()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"Mary Had A Little Lamb and She LOVED It So"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">; </span><span style="color: #FF8000">// Prints mary had a little lamb and she loved it so<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>

  <p class="para">
   <div class="example" id="example-2789">
    <p><strong>Example #2 <span class="function"><strong>mb_strtolower()</strong></span> example with non-Latin UTF-8 text</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$str </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$str</span><span style="color: #007700">; </span><span style="color: #FF8000">// Prints τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.mb-strtolower-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   By contrast to <span class="function"><a href="function.strtolower.php" class="function">strtolower()</a></span>, &#039;alphabetic&#039; is
   determined by the Unicode character properties. Thus the behaviour
   of this function is not affected by locale settings and it can convert
   any characters that have &#039;alphabetic&#039; property, such as a-umlaut (ä).
  </p>
  <p class="para">
   For more information about the Unicode properties, please see <a href="http://www.unicode.org/reports/tr21/" class="link external">&raquo;&nbsp;http://www.unicode.org/reports/tr21/</a>.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mb-strtolower-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-strtoupper.php" class="function" rel="rdfs-seeAlso">mb_strtoupper()</a> - Make a string uppercase</span></li>
    <li><span class="function"><a href="function.mb-convert-case.php" class="function" rel="rdfs-seeAlso">mb_convert_case()</a> - Perform case folding on a string</span></li>
    <li><span class="function"><a href="function.strtolower.php" class="function" rel="rdfs-seeAlso">strtolower()</a> - Make a string lowercase</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/functions/mb-strtolower.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mb-strtolower%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mb-strtolower&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-strtolower.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105753">  <div class="votes">
    <div id="Vu105753">
    <a href="/manual/vote-note.php?id=105753&amp;page=function.mb-strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105753">
    <a href="/manual/vote-note.php?id=105753&amp;page=function.mb-strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105753" title="77% like this...">
    25
    </div>
  </div>
  <a href="#105753" class="name">
  <strong class="user"><em>akniep at linklift dot net</em></strong></a><a class="genanchor" href="#105753"> &para;</a><div class="date" title="2011-09-12 08:42"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105753">
<div class="phpcode"><code><span class="html">Please, note that when using with UTF-8 mb_strtolower will only convert upper case characters to lower case which are marked with the Unicode property "Upper case letter" ("Lu"). However, there are also letters such as "Letter numbers" (Unicode property "Nl") that also have lower case and upper case variants. These characters will not be converted be mb_strtolower!
<br />
<br />Example:
<br />The Roman letters Ⅰ, Ⅱ, Ⅲ, ..., Ⅿ (UTF-8 code points 8544 through 8559) also exist in their respective lower case variants ⅰ, ⅱ, ⅲ, ..., ⅿ (UTF-8 code points 8560 through 8575) and should, in my opinion, also be converted by mb_strtolower, but they are not!
<br />
<br />Big internet-companies (like Google) do match both variants as semantically equal (since the representations only differ in case).
<br />
<br />Since I was not finding any proper solution in the internet on how to map all UTF8-strings to their lowercase counterpart in PHP, I offer the following hard-coded extended mb_strtolower function for UTF-8 strings:
<br />
<br />The function wraps the existing function mb_strtolower() and additionally replaces uppercase UTF8-characters for which there is a lowercase representation. Since there is no proper Unicode uppercase and lowercase character-table in the internet that I was able to find, I checked the first million UTF8-characters against the Google-search and -KeywordTool and identified the following 78 characters as uppercase-characters, not being replaced by mb_strtolower, but having a UTF8 lowercase counterpart.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">//the numbers in the in-line-comments display the characters' Unicode code-points (CP).
<br /></span><span class="keyword">function </span><span class="default">strtolower_utf8_extended</span><span class="keyword">( </span><span class="default">$utf8_string </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$additional_replacements    </span><span class="keyword">= array
<br />        ( </span><span class="string">"ǅ"    </span><span class="keyword">=&gt; </span><span class="string">"ǆ"        </span><span class="comment">//   453 -&gt;   454
<br />        </span><span class="keyword">, </span><span class="string">"ǈ"    </span><span class="keyword">=&gt; </span><span class="string">"ǉ"        </span><span class="comment">//   456 -&gt;   457
<br />        </span><span class="keyword">, </span><span class="string">"ǋ"    </span><span class="keyword">=&gt; </span><span class="string">"ǌ"        </span><span class="comment">//   459 -&gt;   460
<br />        </span><span class="keyword">, </span><span class="string">"ǲ"    </span><span class="keyword">=&gt; </span><span class="string">"ǳ"        </span><span class="comment">//   498 -&gt;   499
<br />        </span><span class="keyword">, </span><span class="string">"Ϸ"    </span><span class="keyword">=&gt; </span><span class="string">"ϸ"        </span><span class="comment">//  1015 -&gt;  1016
<br />        </span><span class="keyword">, </span><span class="string">"Ϲ"    </span><span class="keyword">=&gt; </span><span class="string">"ϲ"        </span><span class="comment">//  1017 -&gt;  1010
<br />        </span><span class="keyword">, </span><span class="string">"Ϻ"    </span><span class="keyword">=&gt; </span><span class="string">"ϻ"        </span><span class="comment">//  1018 -&gt;  1019
<br />        </span><span class="keyword">, </span><span class="string">"ᾈ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾀ"        </span><span class="comment">//  8072 -&gt;  8064
<br />        </span><span class="keyword">, </span><span class="string">"ᾉ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾁ"        </span><span class="comment">//  8073 -&gt;  8065
<br />        </span><span class="keyword">, </span><span class="string">"ᾊ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾂ"        </span><span class="comment">//  8074 -&gt;  8066
<br />        </span><span class="keyword">, </span><span class="string">"ᾋ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾃ"        </span><span class="comment">//  8075 -&gt;  8067
<br />        </span><span class="keyword">, </span><span class="string">"ᾌ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾄ"        </span><span class="comment">//  8076 -&gt;  8068
<br />        </span><span class="keyword">, </span><span class="string">"ᾍ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾅ"        </span><span class="comment">//  8077 -&gt;  8069
<br />        </span><span class="keyword">, </span><span class="string">"ᾎ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾆ"        </span><span class="comment">//  8078 -&gt;  8070
<br />        </span><span class="keyword">, </span><span class="string">"ᾏ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾇ"        </span><span class="comment">//  8079 -&gt;  8071
<br />        </span><span class="keyword">, </span><span class="string">"ᾘ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾐ"        </span><span class="comment">//  8088 -&gt;  8080
<br />        </span><span class="keyword">, </span><span class="string">"ᾙ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾑ"        </span><span class="comment">//  8089 -&gt;  8081
<br />        </span><span class="keyword">, </span><span class="string">"ᾚ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾒ"        </span><span class="comment">//  8090 -&gt;  8082
<br />        </span><span class="keyword">, </span><span class="string">"ᾛ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾓ"        </span><span class="comment">//  8091 -&gt;  8083
<br />        </span><span class="keyword">, </span><span class="string">"ᾜ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾔ"        </span><span class="comment">//  8092 -&gt;  8084
<br />        </span><span class="keyword">, </span><span class="string">"ᾝ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾕ"        </span><span class="comment">//  8093 -&gt;  8085
<br />        </span><span class="keyword">, </span><span class="string">"ᾞ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾖ"        </span><span class="comment">//  8094 -&gt;  8086
<br />        </span><span class="keyword">, </span><span class="string">"ᾟ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾗ"        </span><span class="comment">//  8095 -&gt;  8087
<br />        </span><span class="keyword">, </span><span class="string">"ᾨ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾠ"        </span><span class="comment">//  8104 -&gt;  8096
<br />        </span><span class="keyword">, </span><span class="string">"ᾩ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾡ"        </span><span class="comment">//  8105 -&gt;  8097
<br />        </span><span class="keyword">, </span><span class="string">"ᾪ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾢ"        </span><span class="comment">//  8106 -&gt;  8098
<br />        </span><span class="keyword">, </span><span class="string">"ᾫ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾣ"        </span><span class="comment">//  8107 -&gt;  8099
<br />        </span><span class="keyword">, </span><span class="string">"ᾬ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾤ"        </span><span class="comment">//  8108 -&gt;  8100
<br />        </span><span class="keyword">, </span><span class="string">"ᾭ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾥ"        </span><span class="comment">//  8109 -&gt;  8101
<br />        </span><span class="keyword">, </span><span class="string">"ᾮ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾦ"        </span><span class="comment">//  8110 -&gt;  8102
<br />        </span><span class="keyword">, </span><span class="string">"ᾯ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾧ"        </span><span class="comment">//  8111 -&gt;  8103
<br />        </span><span class="keyword">, </span><span class="string">"ᾼ"    </span><span class="keyword">=&gt; </span><span class="string">"ᾳ"        </span><span class="comment">//  8124 -&gt;  8115
<br />        </span><span class="keyword">, </span><span class="string">"ῌ"    </span><span class="keyword">=&gt; </span><span class="string">"ῃ"        </span><span class="comment">//  8140 -&gt;  8131
<br />        </span><span class="keyword">, </span><span class="string">"ῼ"    </span><span class="keyword">=&gt; </span><span class="string">"ῳ"        </span><span class="comment">//  8188 -&gt;  8179
<br />        </span><span class="keyword">, </span><span class="string">"Ⅰ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅰ"        </span><span class="comment">//  8544 -&gt;  8560
<br />        </span><span class="keyword">, </span><span class="string">"Ⅱ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅱ"        </span><span class="comment">//  8545 -&gt;  8561
<br />        </span><span class="keyword">, </span><span class="string">"Ⅲ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅲ"        </span><span class="comment">//  8546 -&gt;  8562
<br />        </span><span class="keyword">, </span><span class="string">"Ⅳ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅳ"        </span><span class="comment">//  8547 -&gt;  8563
<br />        </span><span class="keyword">, </span><span class="string">"Ⅴ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅴ"        </span><span class="comment">//  8548 -&gt;  8564
<br />        </span><span class="keyword">, </span><span class="string">"Ⅵ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅵ"        </span><span class="comment">//  8549 -&gt;  8565
<br />        </span><span class="keyword">, </span><span class="string">"Ⅶ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅶ"        </span><span class="comment">//  8550 -&gt;  8566
<br />        </span><span class="keyword">, </span><span class="string">"Ⅷ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅷ"        </span><span class="comment">//  8551 -&gt;  8567
<br />        </span><span class="keyword">, </span><span class="string">"Ⅸ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅸ"        </span><span class="comment">//  8552 -&gt;  8568
<br />        </span><span class="keyword">, </span><span class="string">"Ⅹ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅹ"        </span><span class="comment">//  8553 -&gt;  8569
<br />        </span><span class="keyword">, </span><span class="string">"Ⅺ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅺ"        </span><span class="comment">//  8554 -&gt;  8570
<br />        </span><span class="keyword">, </span><span class="string">"Ⅻ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅻ"        </span><span class="comment">//  8555 -&gt;  8571
<br />        </span><span class="keyword">, </span><span class="string">"Ⅼ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅼ"        </span><span class="comment">//  8556 -&gt;  8572
<br />        </span><span class="keyword">, </span><span class="string">"Ⅽ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅽ"        </span><span class="comment">//  8557 -&gt;  8573
<br />        </span><span class="keyword">, </span><span class="string">"Ⅾ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅾ"        </span><span class="comment">//  8558 -&gt;  8574
<br />        </span><span class="keyword">, </span><span class="string">"Ⅿ"    </span><span class="keyword">=&gt; </span><span class="string">"ⅿ"        </span><span class="comment">//  8559 -&gt;  8575
<br />        </span><span class="keyword">, </span><span class="string">"Ⓐ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓐ"        </span><span class="comment">//  9398 -&gt;  9424
<br />        </span><span class="keyword">, </span><span class="string">"Ⓑ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓑ"        </span><span class="comment">//  9399 -&gt;  9425
<br />        </span><span class="keyword">, </span><span class="string">"Ⓒ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓒ"        </span><span class="comment">//  9400 -&gt;  9426
<br />        </span><span class="keyword">, </span><span class="string">"Ⓓ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓓ"        </span><span class="comment">//  9401 -&gt;  9427
<br />        </span><span class="keyword">, </span><span class="string">"Ⓔ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓔ"        </span><span class="comment">//  9402 -&gt;  9428
<br />        </span><span class="keyword">, </span><span class="string">"Ⓕ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓕ"        </span><span class="comment">//  9403 -&gt;  9429
<br />        </span><span class="keyword">, </span><span class="string">"Ⓖ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓖ"        </span><span class="comment">//  9404 -&gt;  9430
<br />        </span><span class="keyword">, </span><span class="string">"Ⓗ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓗ"        </span><span class="comment">//  9405 -&gt;  9431
<br />        </span><span class="keyword">, </span><span class="string">"Ⓘ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓘ"        </span><span class="comment">//  9406 -&gt;  9432
<br />        </span><span class="keyword">, </span><span class="string">"Ⓙ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓙ"        </span><span class="comment">//  9407 -&gt;  9433
<br />        </span><span class="keyword">, </span><span class="string">"Ⓚ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓚ"        </span><span class="comment">//  9408 -&gt;  9434
<br />        </span><span class="keyword">, </span><span class="string">"Ⓛ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓛ"        </span><span class="comment">//  9409 -&gt;  9435
<br />        </span><span class="keyword">, </span><span class="string">"Ⓜ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓜ"        </span><span class="comment">//  9410 -&gt;  9436
<br />        </span><span class="keyword">, </span><span class="string">"Ⓝ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓝ"        </span><span class="comment">//  9411 -&gt;  9437
<br />        </span><span class="keyword">, </span><span class="string">"Ⓞ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓞ"        </span><span class="comment">//  9412 -&gt;  9438
<br />        </span><span class="keyword">, </span><span class="string">"Ⓟ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓟ"        </span><span class="comment">//  9413 -&gt;  9439
<br />        </span><span class="keyword">, </span><span class="string">"Ⓠ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓠ"        </span><span class="comment">//  9414 -&gt;  9440
<br />        </span><span class="keyword">, </span><span class="string">"Ⓡ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓡ"        </span><span class="comment">//  9415 -&gt;  9441
<br />        </span><span class="keyword">, </span><span class="string">"Ⓢ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓢ"        </span><span class="comment">//  9416 -&gt;  9442
<br />        </span><span class="keyword">, </span><span class="string">"Ⓣ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓣ"        </span><span class="comment">//  9417 -&gt;  9443
<br />        </span><span class="keyword">, </span><span class="string">"Ⓤ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓤ"        </span><span class="comment">//  9418 -&gt;  9444
<br />        </span><span class="keyword">, </span><span class="string">"Ⓥ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓥ"        </span><span class="comment">//  9419 -&gt;  9445
<br />        </span><span class="keyword">, </span><span class="string">"Ⓦ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓦ"        </span><span class="comment">//  9420 -&gt;  9446
<br />        </span><span class="keyword">, </span><span class="string">"Ⓧ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓧ"        </span><span class="comment">//  9421 -&gt;  9447
<br />        </span><span class="keyword">, </span><span class="string">"Ⓨ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓨ"        </span><span class="comment">//  9422 -&gt;  9448
<br />        </span><span class="keyword">, </span><span class="string">"Ⓩ"    </span><span class="keyword">=&gt; </span><span class="string">"ⓩ"        </span><span class="comment">//  9423 -&gt;  9449
<br />        </span><span class="keyword">, </span><span class="string">"𐐦"    </span><span class="keyword">=&gt; </span><span class="string">"𐑎"        </span><span class="comment">// 66598 -&gt; 66638
<br />        </span><span class="keyword">, </span><span class="string">"𐐧"    </span><span class="keyword">=&gt; </span><span class="string">"𐑏"        </span><span class="comment">// 66599 -&gt; 66639
<br />        </span><span class="keyword">);
<br />    
<br />    </span><span class="default">$utf8_string    </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">( </span><span class="default">$utf8_string</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);
<br />    
<br />    </span><span class="default">$utf8_string    </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">( </span><span class="default">$utf8_string</span><span class="keyword">, </span><span class="default">$additional_replacements </span><span class="keyword">);
<br />    
<br />    return </span><span class="default">$utf8_string</span><span class="keyword">;
<br />} </span><span class="comment">//strtolower_utf8_extended()
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78906">  <div class="votes">
    <div id="Vu78906">
    <a href="/manual/vote-note.php?id=78906&amp;page=function.mb-strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78906">
    <a href="/manual/vote-note.php?id=78906&amp;page=function.mb-strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78906" title="69% like this...">
    16
    </div>
  </div>
  <a href="#78906" class="name">
  <strong class="user"><em>Philipp H</em></strong></a><a class="genanchor" href="#78906"> &para;</a><div class="date" title="2007-11-01 10:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78906">
<div class="phpcode"><code><span class="html">Note that mb_strtolower() is very SLOW, if you have a database connection, you may want to use it to convert your strings to lower case. Even latin1/9 (iso-8859-1/15) and other encodings are possible.<br /><br />Have a look at my simple benchmark:<br /><br /><span class="default">&lt;?php<br /><br />$text </span><span class="keyword">= </span><span class="string">"Lörem ipßüm dölör ßit ämet, cönßectetüer ädipißcing elit. Sed ligülä. Präeßent jüßtö tellüß, grävidä eü, tempüß ä, mättiß nön, örci. Näm qüiß lörem. Näm äliqüet elit ßed elit. Phäßellüß venenätiß jüßtö eget enim. Dönec nißl. Pröin mättiß venenätiß jüßtö. Sed äliqüäm pörtä örci. Cräß elit nißl, cönvälliß qüiß, tincidünt ät, vehicülä äccümßän, ödiö. Sed möleßtie. Etiäm mölliß feügiät elit. Veßtibülüm änte ipßüm primiß in fäücibüß örci lüctüß et ültriceß pößüere cübiliä Cüräe; Mäecenäß nön nüllä."</span><span class="keyword">;<br /><br /></span><span class="comment">// mb_strtolower()<br /></span><span class="default">$timeMB </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);     <br />              <br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">30000</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) <br />        </span><span class="default">$lower </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="string">"</span><span class="default">$text</span><span class="string">/no-cache-</span><span class="default">$i</span><span class="string">"</span><span class="keyword">);<br /><br /></span><span class="default">$timeMB </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$timeMB</span><span class="keyword">;<br /><br /></span><span class="comment">// MySQL lower()<br /></span><span class="default">$timeSQL </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);    <br /><br />    </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="string">"set names latin1"</span><span class="keyword">);               <br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">30000</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) { <br />        </span><span class="default">$r </span><span class="keyword">= </span><span class="default">mysql_fetch_row</span><span class="keyword">(</span><span class="default">mysql_query</span><span class="keyword">(</span><span class="string">"select lower('</span><span class="default">$text</span><span class="string">/no-cache-</span><span class="default">$i</span><span class="string">')"</span><span class="keyword">));<br />        </span><span class="default">$lower </span><span class="keyword">= </span><span class="default">$r</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }<br /><br /></span><span class="default">$timeSQL </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$timeSQL</span><span class="keyword">;<br /><br />echo </span><span class="string">"mb: "</span><span class="keyword">.</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%.5f"</span><span class="keyword">,</span><span class="default">$timeMB</span><span class="keyword">).</span><span class="string">" sek.&lt;br /&gt;"</span><span class="keyword">;<br />echo </span><span class="string">"sql: "</span><span class="keyword">.</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%.5f"</span><span class="keyword">,</span><span class="default">$timeSQL</span><span class="keyword">).</span><span class="string">" sek.&lt;br /&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment">// Result on my notebook:<br />// mb: 11.50642 sek.<br />// sql: 5.44143 sek.<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108346">  <div class="votes">
    <div id="Vu108346">
    <a href="/manual/vote-note.php?id=108346&amp;page=function.mb-strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108346">
    <a href="/manual/vote-note.php?id=108346&amp;page=function.mb-strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108346" title="75% like this...">
    10
    </div>
  </div>
  <a href="#108346" class="name">
  <strong class="user"><em>fisharebest at gmail dot com</em></strong></a><a class="genanchor" href="#108346"> &para;</a><div class="date" title="2012-04-18 04:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108346">
<div class="phpcode"><code><span class="html">There is not a one-to-one correspondence between upper and lower case letters.<br /><br />Turkish is a good example of this.  In Turkish, the letter I/i has a dotted-upper-case form (İ) and a dotless-lower-case form (ı).<br /><br /><a href="https://en.wikipedia.org/wiki/Dotted_and_dotless_I" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Dotted_and_dotless_I</a><br /><br />This means that you cannot correctly convert between upper-case and lower-case without also knowing the locale of the data.<br /><br />Since the function does not let you specify a locale, you should only use this function for text written in languages that follow the same orthography as English.<br /><br />Although it does handle some digraphs, such as the Dutch ij (ĳ), it does not handle others, such as the Polish dz (ʣ).</span></code></div>
  </div>
 </div>
  <div class="note" id="58790">  <div class="votes">
    <div id="Vu58790">
    <a href="/manual/vote-note.php?id=58790&amp;page=function.mb-strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58790">
    <a href="/manual/vote-note.php?id=58790&amp;page=function.mb-strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58790" title="75% like this...">
    6
    </div>
  </div>
  <a href="#58790" class="name">
  <strong class="user"><em>btherl at yahoo dot com dot au</em></strong></a><a class="genanchor" href="#58790"> &para;</a><div class="date" title="2005-11-15 09:12"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58790">
<div class="phpcode"><code><span class="html">If you use this function on a unicode string without telling PHP that it is unicode, then you will corrupt your string.  In particular, the uppercase 'A' with tilde, common in 2-byte UTF-8 characters, is converted to lowercase 'a' with tilde.<br /><br />This can be handled correctly by:<br />$str = mb_strtolower($str, mb_detect_encoding($str));<br /><br />Or if you know your data is UTF-8, just use the string "UTF-8" as the second argument.<br /><br />You should check also that mb_detect_encoding() is checking the encodings you want it to check, and is detecting the correct encodings.</span></code></div>
  </div>
 </div>
  <div class="note" id="99164">  <div class="votes">
    <div id="Vu99164">
    <a href="/manual/vote-note.php?id=99164&amp;page=function.mb-strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99164">
    <a href="/manual/vote-note.php?id=99164&amp;page=function.mb-strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99164" title="60% like this...">
    5
    </div>
  </div>
  <a href="#99164" class="name">
  <strong class="user"><em>Ken Shiro</em></strong></a><a class="genanchor" href="#99164"> &para;</a><div class="date" title="2010-07-31 02:07"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99164">
<div class="phpcode"><code><span class="html">[If you get this error:]
<br />Fatal error: Call to undefined function: mb_strtolower() in ????.php on line ??
<br />
<br />The PHP mbstring extension, which is required to handle international character sets, is not available on your server. Check your PHP configuration and make sure that PHP has been compiled with --enable-mbstring.
<br />
<br />It's also apply to
<br />Call to undefined function mb_eregi() / mb_strtolower()</span></code></div>
  </div>
 </div>
  <div class="note" id="118378">  <div class="votes">
    <div id="Vu118378">
    <a href="/manual/vote-note.php?id=118378&amp;page=function.mb-strtolower&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118378">
    <a href="/manual/vote-note.php?id=118378&amp;page=function.mb-strtolower&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118378" title="62% like this...">
    2
    </div>
  </div>
  <a href="#118378" class="name">
  <strong class="user"><em>Ukio</em></strong></a><a class="genanchor" href="#118378"> &para;</a><div class="date" title="2015-11-25 09:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118378">
<div class="phpcode"><code><span class="html">Maybe it help someone.<br />Make up case with first char, low case for other.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_split_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$l </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />    if (</span><span class="default">$l </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$ret </span><span class="keyword">= array();<br />        </span><span class="default">$len </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$l</span><span class="keyword">) {<br />            </span><span class="default">$ret</span><span class="keyword">[] = </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$l</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br />        }<br />        return </span><span class="default">$ret</span><span class="keyword">;<br />    }<br />    return </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"//u"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">ToCorrectCase</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){<br /><br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$str_array </span><span class="keyword">= </span><span class="default">str_split_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$str_array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$str_array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    foreach (</span><span class="default">$str_array </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">){<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">$str</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$str</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mb-strtolower&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-strtolower.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mbstring.php">Multibyte String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mb-check-encoding.php" title="mb_&#8203;check_&#8203;encoding">mb_&#8203;check_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-chr.php" title="mb_&#8203;chr">mb_&#8203;chr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-case.php" title="mb_&#8203;convert_&#8203;case">mb_&#8203;convert_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-encoding.php" title="mb_&#8203;convert_&#8203;encoding">mb_&#8203;convert_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-kana.php" title="mb_&#8203;convert_&#8203;kana">mb_&#8203;convert_&#8203;kana</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-variables.php" title="mb_&#8203;convert_&#8203;variables">mb_&#8203;convert_&#8203;variables</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-mimeheader.php" title="mb_&#8203;decode_&#8203;mimeheader">mb_&#8203;decode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-numericentity.php" title="mb_&#8203;decode_&#8203;numericentity">mb_&#8203;decode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-encoding.php" title="mb_&#8203;detect_&#8203;encoding">mb_&#8203;detect_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-order.php" title="mb_&#8203;detect_&#8203;order">mb_&#8203;detect_&#8203;order</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-mimeheader.php" title="mb_&#8203;encode_&#8203;mimeheader">mb_&#8203;encode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-numericentity.php" title="mb_&#8203;encode_&#8203;numericentity">mb_&#8203;encode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encoding-aliases.php" title="mb_&#8203;encoding_&#8203;aliases">mb_&#8203;encoding_&#8203;aliases</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg.php" title="mb_&#8203;ereg">mb_&#8203;ereg</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-match.php" title="mb_&#8203;ereg_&#8203;match">mb_&#8203;ereg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace.php" title="mb_&#8203;ereg_&#8203;replace">mb_&#8203;ereg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace-callback.php" title="mb_&#8203;ereg_&#8203;replace_&#8203;callback">mb_&#8203;ereg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search.php" title="mb_&#8203;ereg_&#8203;search">mb_&#8203;ereg_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getpos">mb_&#8203;ereg_&#8203;search_&#8203;getpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getregs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getregs">mb_&#8203;ereg_&#8203;search_&#8203;getregs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-init.php" title="mb_&#8203;ereg_&#8203;search_&#8203;init">mb_&#8203;ereg_&#8203;search_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-pos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;pos">mb_&#8203;ereg_&#8203;search_&#8203;pos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-regs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;regs">mb_&#8203;ereg_&#8203;search_&#8203;regs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-setpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;setpos">mb_&#8203;ereg_&#8203;search_&#8203;setpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi.php" title="mb_&#8203;eregi">mb_&#8203;eregi</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi-replace.php" title="mb_&#8203;eregi_&#8203;replace">mb_&#8203;eregi_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-get-info.php" title="mb_&#8203;get_&#8203;info">mb_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-input.php" title="mb_&#8203;http_&#8203;input">mb_&#8203;http_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-output.php" title="mb_&#8203;http_&#8203;output">mb_&#8203;http_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-internal-encoding.php" title="mb_&#8203;internal_&#8203;encoding">mb_&#8203;internal_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-language.php" title="mb_&#8203;language">mb_&#8203;language</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-lcfirst.php" title="mb_&#8203;lcfirst">mb_&#8203;lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-list-encodings.php" title="mb_&#8203;list_&#8203;encodings">mb_&#8203;list_&#8203;encodings</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ltrim.php" title="mb_&#8203;ltrim">mb_&#8203;ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ord.php" title="mb_&#8203;ord">mb_&#8203;ord</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-output-handler.php" title="mb_&#8203;output_&#8203;handler">mb_&#8203;output_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-parse-str.php" title="mb_&#8203;parse_&#8203;str">mb_&#8203;parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-preferred-mime-name.php" title="mb_&#8203;preferred_&#8203;mime_&#8203;name">mb_&#8203;preferred_&#8203;mime_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-encoding.php" title="mb_&#8203;regex_&#8203;encoding">mb_&#8203;regex_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-set-options.php" title="mb_&#8203;regex_&#8203;set_&#8203;options">mb_&#8203;regex_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-rtrim.php" title="mb_&#8203;rtrim">mb_&#8203;rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-scrub.php" title="mb_&#8203;scrub">mb_&#8203;scrub</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-send-mail.php" title="mb_&#8203;send_&#8203;mail">mb_&#8203;send_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-split.php" title="mb_&#8203;split">mb_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-pad.php" title="mb_&#8203;str_&#8203;pad">mb_&#8203;str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-split.php" title="mb_&#8203;str_&#8203;split">mb_&#8203;str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strcut.php" title="mb_&#8203;strcut">mb_&#8203;strcut</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strimwidth.php" title="mb_&#8203;strimwidth">mb_&#8203;strimwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stripos.php" title="mb_&#8203;stripos">mb_&#8203;stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stristr.php" title="mb_&#8203;stristr">mb_&#8203;stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strlen.php" title="mb_&#8203;strlen">mb_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strpos.php" title="mb_&#8203;strpos">mb_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrchr.php" title="mb_&#8203;strrchr">mb_&#8203;strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrichr.php" title="mb_&#8203;strrichr">mb_&#8203;strrichr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strripos.php" title="mb_&#8203;strripos">mb_&#8203;strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrpos.php" title="mb_&#8203;strrpos">mb_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strstr.php" title="mb_&#8203;strstr">mb_&#8203;strstr</a>
                        </li>
                                                <li class="current">
                            <a href="function.mb-strtolower.php" title="mb_&#8203;strtolower">mb_&#8203;strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtoupper.php" title="mb_&#8203;strtoupper">mb_&#8203;strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strwidth.php" title="mb_&#8203;strwidth">mb_&#8203;strwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substitute-character.php" title="mb_&#8203;substitute_&#8203;character">mb_&#8203;substitute_&#8203;character</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr.php" title="mb_&#8203;substr">mb_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr-count.php" title="mb_&#8203;substr_&#8203;count">mb_&#8203;substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-trim.php" title="mb_&#8203;trim">mb_&#8203;trim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ucfirst.php" title="mb_&#8203;ucfirst">mb_&#8203;ucfirst</a>
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
