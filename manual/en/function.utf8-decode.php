<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: utf8_decode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.utf8-decode.php">
 <link rel="shorturl" href="https://www.php.net/utf8-decode">
 <link rel="alternate" href="https://www.php.net/utf8-decode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ucwords.php">
 <link rel="next" href="https://www.php.net/manual/en/function.utf8-encode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.utf8-decode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.utf8-decode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.utf8-decode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.utf8-decode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.utf8-decode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.utf8-decode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.utf8-decode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.utf8-decode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.utf8-decode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.utf8-decode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.utf8-decode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable
   characters" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: utf8_decode - Manual" />
<meta name="twitter:description" content="Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable
   characters" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: utf8_decode - Manual" />
<meta itemprop="description" content="Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable
   characters" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable
   characters" />

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
        <a href="function.utf8-encode.php">
          utf8_encode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ucwords.php">
          &laquo; ucwords        </a>
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
            <option value='en/function.utf8-decode.php' selected="selected">English</option>
            <option value='de/function.utf8-decode.php'>German</option>
            <option value='es/function.utf8-decode.php'>Spanish</option>
            <option value='fr/function.utf8-decode.php'>French</option>
            <option value='it/function.utf8-decode.php'>Italian</option>
            <option value='ja/function.utf8-decode.php'>Japanese</option>
            <option value='pt_BR/function.utf8-decode.php'>Brazilian Portuguese</option>
            <option value='ru/function.utf8-decode.php'>Russian</option>
            <option value='tr/function.utf8-decode.php'>Turkish</option>
            <option value='uk/function.utf8-decode.php'>Ukrainian</option>
            <option value='zh/function.utf8-decode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.utf8-decode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">utf8_decode</h1> 
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">utf8_decode</span> &mdash; <span class="dc-title">
   Converts a string from UTF-8 to ISO-8859-1, replacing invalid or unrepresentable
   characters
  </span></p>

 </div>

 <div id="function.utf8-decode-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 8.2.0. Relying on this function
is highly discouraged.</p></div>
 </div>

 <div class="refsect1 description" id="refsect1-function.utf8-decode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="methodname"><strong>utf8_decode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   This function converts the string <code class="parameter">string</code> from the
   <code class="literal">UTF-8</code> encoding to <code class="literal">ISO-8859-1</code>. Bytes
   in the string which are not valid <code class="literal">UTF-8</code>, and
   <code class="literal">UTF-8</code> characters which do not exist in
   <code class="literal">ISO-8859-1</code> (that is, code points above
   <code class="literal">U+00FF</code>) are replaced with <code class="literal">?</code>.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Many web pages marked as using the <code class="literal">ISO-8859-1</code> character
    encoding actually use the similar <code class="literal">Windows-1252</code> encoding,
    and web browsers will interpret <code class="literal">ISO-8859-1</code> web pages as
    <code class="literal">Windows-1252</code>. <code class="literal">Windows-1252</code> features
    additional printable characters, such as the Euro sign
    (<code class="literal">€</code>) and curly quotes (<code class="literal">“</code>
    <code class="literal">”</code>), instead of certain <code class="literal">ISO-8859-1</code>
    control characters. This function will not convert such
    <code class="literal">Windows-1252</code> characters correctly. Use a different
    function if <code class="literal">Windows-1252</code> conversion is required.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.utf8-decode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       A UTF-8 encoded string.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.utf8-decode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the ISO-8859-1 translation of <code class="parameter">string</code>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.utf8-decode-changelog">
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
       <td>8.2.0</td>
       <td>
        This function has been deprecated.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        This function has been moved from the XML extension to the core of PHP.
        In previous versions, it was only available if the XML extension was installed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.utf8-decode-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-5196">
   <p><strong>Example #1 Basic examples</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Convert the string 'Zoë' from UTF-8 to ISO 8859-1<br /></span><span style="color: #0000BB">$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\x5A\x6F\xC3\xAB"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">utf8_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Invalid UTF-8 sequences are replaced with '?'<br /></span><span style="color: #0000BB">$invalid_utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xC3"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">utf8_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$invalid_utf8_string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Characters which don't exist in ISO 8859-1, such as<br />// '€' (Euro Sign) are also replaced with '?'<br /></span><span style="color: #0000BB">$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xE2\x82\xAC"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">utf8_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">5a6feb
string(1) &quot;?&quot;
string(1) &quot;?&quot;</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-function.utf8-decode-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <strong>Deprecation and alternatives</strong><br />
   <p class="para">
    This function is <em>deprecated</em> as of PHP 8.2.0,
    and will be removed in a future version. Existing uses should be checked
    and replaced with appropriate alternatives.
   </p>
   <p class="para">
    Similar functionality can be achieved with <span class="function"><a href="function.mb-convert-encoding.php" class="function">mb_convert_encoding()</a></span>,
    which supports ISO-8859-1 and many other character encodings.
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xC3\xAB"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 'ë' (e with diaeresis) in UTF-8<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xCE\xBB"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 'λ' (Greek lower-case lambda) in UTF-8<br /></span><span style="color: #0000BB">$iso8859_7_string </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-7'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_7_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xE2\x82\xAC"</span><span style="color: #007700">; </span><span style="color: #FF8000">// '€' (Euro sign) in UTF-8 (not present in ISO-8859-1)<br /></span><span style="color: #0000BB">$windows_1252_string </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'Windows-1252'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$windows_1252_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <p class="para">The above example will output:</p>
     <div class="example-contents screen">
<div class="annotation-interactive notescode"><pre class="notescode">eb
eb
80</pre>
</div>
     </div>
    </div>
   </p>
   <p class="para">
    Other options which may be available depending on the extensions installed are
    <span class="methodname"><a href="uconverter.transcode.php" class="methodname">UConverter::transcode()</a></span> and <span class="function"><a href="function.iconv.php" class="function">iconv()</a></span>.
   </p>
   <p class="para">
    The following all give the same result:
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\x5A\x6F\xC3\xAB"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 'Zoë' in UTF-8<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">utf8_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">mb_convert_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">iconv</span><span style="color: #007700">(</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">UConverter</span><span style="color: #007700">::</span><span style="color: #0000BB">transcode</span><span style="color: #007700">(</span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF8'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">bin2hex</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <p class="para">The above example will output:</p>
     <div class="example-contents screen">
<div class="annotation-interactive notescode"><pre class="notescode">5a6feb
5a6feb
5a6feb
5a6feb</pre>
</div>
     </div>
    </div>
    Specifying <code class="literal">&#039;?&#039;</code> as the <code class="literal">&#039;to_subst&#039;</code> option
    to <span class="methodname"><a href="uconverter.transcode.php" class="methodname">UConverter::transcode()</a></span> gives the same result as
    <span class="function"><strong>utf8_decode()</strong></span> for strings which are invalid or which can not
    be represented in ISO 8859-1.
    <div class="informalexample">
     <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$utf8_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xE2\x82\xAC"</span><span style="color: #007700">; </span><span style="color: #FF8000">// € (Euro Sign) does not exist in ISO 8859-1<br /></span><span style="color: #0000BB">$iso8859_1_string </span><span style="color: #007700">= </span><span style="color: #0000BB">UConverter</span><span style="color: #007700">::</span><span style="color: #0000BB">transcode</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$utf8_string</span><span style="color: #007700">, </span><span style="color: #DD0000">'ISO-8859-1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">, [</span><span style="color: #DD0000">'to_subst' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'?'</span><span style="color: #007700">]<br />);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$iso8859_1_string</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <p class="para">The above example will output:</p>
     <div class="example-contents screen">
<div class="annotation-interactive notescode"><pre class="notescode">sring(1) &quot;?&quot;</pre>
</div>
     </div>
    </div>
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.utf8-decode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.utf8-encode.php" class="function" rel="rdfs-seeAlso">utf8_encode()</a> - Converts a string from ISO-8859-1 to UTF-8</span></li>
    <li><span class="function"><a href="function.mb-convert-encoding.php" class="function" rel="rdfs-seeAlso">mb_convert_encoding()</a> - Convert a string from one character encoding to another</span></li>
    <li><span class="methodname"><a href="uconverter.transcode.php" class="methodname" rel="rdfs-seeAlso">UConverter::transcode()</a> - Convert a string from one character encoding to another</span></li>
    <li><span class="function"><a href="function.iconv.php" class="function" rel="rdfs-seeAlso">iconv()</a> - Convert a string from one character encoding to another</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/utf8-decode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.utf8-decode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.utf8-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.utf8-decode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">31 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="88488">  <div class="votes">
    <div id="Vu88488">
    <a href="/manual/vote-note.php?id=88488&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88488">
    <a href="/manual/vote-note.php?id=88488&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88488" title="53% like this...">
    10
    </div>
  </div>
  <a href="#88488" class="name">
  <strong class="user"><em>info at vanylla dot it</em></strong></a><a class="genanchor" href="#88488"> &para;</a><div class="date" title="2009-01-26 12:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88488">
<div class="phpcode"><code><span class="html">IMPORTANT: when converting UTF8 data that contains the EURO sign DON'T USE utf_decode function.<br /><br />utf_decode converts the data into ISO-8859-1 charset. But ISO-8859-1 charset does not contain the EURO sign, therefor the EURO sign will be converted into a question mark character '?'<br /><br />In order to convert properly UTF8 data with EURO sign you must use:<br /><br />iconv("UTF-8", "CP1252", $data)</span></code></div>
  </div>
 </div>
  <div class="note" id="75261">  <div class="votes">
    <div id="Vu75261">
    <a href="/manual/vote-note.php?id=75261&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75261">
    <a href="/manual/vote-note.php?id=75261&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75261" title="70% like this...">
    4
    </div>
  </div>
  <a href="#75261" class="name">
  <strong class="user"><em>alexlevin at kvadro dot net</em></strong></a><a class="genanchor" href="#75261"> &para;</a><div class="date" title="2007-05-20 08:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75261">
<div class="phpcode"><code><span class="html">If you running Gentoo Linux and encounter problems with some PHP4 applications saying:<br />Call to undefined function: utf8_decode()<br />Try reemerge PHP4 with 'expat' flag enabled.</span></code></div>
  </div>
 </div>
  <div class="note" id="104907">  <div class="votes">
    <div id="Vu104907">
    <a href="/manual/vote-note.php?id=104907&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104907">
    <a href="/manual/vote-note.php?id=104907&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104907" title="51% like this...">
    8
    </div>
  </div>
  <a href="#104907" class="name">
  <strong class="user"><em>deceze at gmail dot com</em></strong></a><a class="genanchor" href="#104907"> &para;</a><div class="date" title="2011-07-14 07:01"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104907">
<div class="phpcode"><code><span class="html">Please note that utf8_decode simply converts a string encoded in UTF-8 to ISO-8859-1. A more appropriate name for it would be utf8_to_iso88591. If your text is already encoded in ISO-8859-1, you do not need this function. If you don't want to use ISO-8859-1, you do not need this function.<br /><br />Note that UTF-8 can represent many more characters than ISO-8859-1. Trying to convert a UTF-8 string that contains characters that can't be represented in ISO-8859-1 to ISO-8859-1 will garble your text and/or cause characters to go missing. Trying to convert text that is not encoded in UTF-8 using this function will most likely garble the text.<br /><br />If you need to convert any text from any encoding to any other encoding, look at iconv() instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="128345">  <div class="votes">
    <div id="Vu128345">
    <a href="/manual/vote-note.php?id=128345&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128345">
    <a href="/manual/vote-note.php?id=128345&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128345" title="66% like this...">
    1
    </div>
  </div>
  <a href="#128345" class="name">
  <strong class="user"><em>jamalmarlone at gmail dot com</em></strong></a><a class="genanchor" href="#128345"> &para;</a><div class="date" title="2023-03-29 11:33"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128345">
<div class="phpcode"><code><span class="html">$string = "BjÃ¸rn Johansen";<br /><br />echo mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');<br /><br />----<br />prints: "Bjørn Johansen"</span></code></div>
  </div>
 </div>
  <div class="note" id="104379">  <div class="votes">
    <div id="Vu104379">
    <a href="/manual/vote-note.php?id=104379&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104379">
    <a href="/manual/vote-note.php?id=104379&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104379" title="55% like this...">
    5
    </div>
  </div>
  <a href="#104379" class="name">
  <strong class="user"><em>gabriel arobase gabsoftware dot com</em></strong></a><a class="genanchor" href="#104379"> &para;</a><div class="date" title="2011-06-12 08:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104379">
<div class="phpcode"><code><span class="html">If you want to retrieve some UTF-8 data from your database, you don't need utf8_decode().<br /><br />Simply do the following query before any SELECT :<br /><br />$result = mysql_query("SET NAMES utf8");</span></code></div>
  </div>
 </div>
  <div class="note" id="72978">  <div class="votes">
    <div id="Vu72978">
    <a href="/manual/vote-note.php?id=72978&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72978">
    <a href="/manual/vote-note.php?id=72978&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72978" title="56% like this...">
    4
    </div>
  </div>
  <a href="#72978" class="name">
  <strong class="user"><em>sam</em></strong></a><a class="genanchor" href="#72978"> &para;</a><div class="date" title="2007-02-06 08:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72978">
<div class="phpcode"><code><span class="html">In addition to yannikh's note, to convert a hex utf8 string<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="string">"\x61\xc3\xb6\x61"</span><span class="keyword">);<br /></span><span class="comment">// works as expected<br /><br /></span><span class="default">$abc</span><span class="keyword">=</span><span class="string">"61c3b661"</span><span class="keyword">;<br /></span><span class="default">$newstr </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">$l </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$abc</span><span class="keyword">);<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$l</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">){<br />    </span><span class="default">$newstr </span><span class="keyword">.= </span><span class="string">"\x"</span><span class="keyword">.</span><span class="default">$abc</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="default">$abc</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">];<br />}<br />echo </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$newstr</span><span class="keyword">);<br /></span><span class="comment">// or varieties  of "\x": "\\x" etc does NOT output what you want<br /><br /></span><span class="keyword">echo </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">,</span><span class="default">$abc</span><span class="keyword">));<br /></span><span class="comment">// this outputs the correct string, like the first line.<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81599">  <div class="votes">
    <div id="Vu81599">
    <a href="/manual/vote-note.php?id=81599&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81599">
    <a href="/manual/vote-note.php?id=81599&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81599" title="53% like this...">
    2
    </div>
  </div>
  <a href="#81599" class="name">
  <strong class="user"><em>lukasz dot mlodzik at gmail dot com</em></strong></a><a class="genanchor" href="#81599"> &para;</a><div class="date" title="2008-03-05 04:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81599">
<div class="phpcode"><code><span class="html">Update to MARC13 function utf2iso()<br />I'm using it to handle AJAX POST calls. <br />Despite using <br />http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'; charset='utf-8'); <br />it still code Polish letters using UTF-16<br /><br />This is only for Polish letters:<br /> <br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">utf16_2_utf8 </span><span class="keyword">(</span><span class="default">$nowytekst</span><span class="keyword">) {<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0104'</span><span class="keyword">,</span><span class="string">'Ą'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ą<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0106'</span><span class="keyword">,</span><span class="string">'Ć'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ć<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0118'</span><span class="keyword">,</span><span class="string">'Ę'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ę<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0141'</span><span class="keyword">,</span><span class="string">'Ł'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ł<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0143'</span><span class="keyword">,</span><span class="string">'Ń'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ń<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u00D3'</span><span class="keyword">,</span><span class="string">'Ó'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ó<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u015A'</span><span class="keyword">,</span><span class="string">'Ś'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ś<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0179'</span><span class="keyword">,</span><span class="string">'Ź'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ź<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u017B'</span><span class="keyword">,</span><span class="string">'Ż'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ż<br />       <br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0105'</span><span class="keyword">,</span><span class="string">'ą'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ą<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0107'</span><span class="keyword">,</span><span class="string">'ć'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ć<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0119'</span><span class="keyword">,</span><span class="string">'ę'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ę<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0142'</span><span class="keyword">,</span><span class="string">'ł'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ł<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u0144'</span><span class="keyword">,</span><span class="string">'ń'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ń<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u00F3'</span><span class="keyword">,</span><span class="string">'ó'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ó<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u015B'</span><span class="keyword">,</span><span class="string">'ś'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ś<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u017A'</span><span class="keyword">,</span><span class="string">'ź'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ź<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'%u017C'</span><span class="keyword">,</span><span class="string">'ż'</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ż<br />   </span><span class="keyword">return (</span><span class="default">$nowytekst</span><span class="keyword">);<br />   }    <br /></span><span class="default">?&gt;<br /></span><br />Everything goes smooth, but it doesn't change '%u00D3','Ó' and '%u00F3','ó'. I dont have idea what to do with that.<br /><br />Remember! File must be saved in UTF-8 coding.</span></code></div>
  </div>
 </div>
  <div class="note" id="39517">  <div class="votes">
    <div id="Vu39517">
    <a href="/manual/vote-note.php?id=39517&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39517">
    <a href="/manual/vote-note.php?id=39517&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39517" title="53% like this...">
    2
    </div>
  </div>
  <a href="#39517" class="name">
  <strong class="user"><em>Aidan Kehoe &lt;php-manual at parhasard dot net&gt;</em></strong></a><a class="genanchor" href="#39517"> &para;</a><div class="date" title="2004-01-31 05:35"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39517">
<div class="phpcode"><code><span class="html">The fastest way I've found to check if something is valid UTF-8 is <br /><span class="default">&lt;?php <br /></span><span class="keyword">if (</span><span class="default">iconv</span><span class="keyword">(</span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">) != </span><span class="default">$input</span><span class="keyword">) { <br />        </span><span class="comment">/* It's not UTF-8--for me, it's probably CP1252, the Windows<br />           version of Latin 1, with directed quotation marks and<br />           the Euro sign.  */<br /></span><span class="keyword">}<br /> </span><span class="default">?&gt;</span>. <br />The iconv() C library fails if it's told a string is UTF-8 and it isn't; the PHP one doesn't, it just returns the conversion up to the point of failure, so you have to compare the result to the input to find out if the conversion succeeded.</span></code></div>
  </div>
 </div>
  <div class="note" id="121290">  <div class="votes">
    <div id="Vu121290">
    <a href="/manual/vote-note.php?id=121290&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121290">
    <a href="/manual/vote-note.php?id=121290&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121290" title="53% like this...">
    1
    </div>
  </div>
  <a href="#121290" class="name">
  <strong class="user"><em>Aleksandr</em></strong></a><a class="genanchor" href="#121290"> &para;</a><div class="date" title="2017-06-30 02:46"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121290">
<div class="phpcode"><code><span class="html">In addition to note by yannikh at gmeil dot com, another way to decode strings with non-latin chars from unix console like<br /><br />C=RU, L=\xD0\x9C\xD0\xBE\xD1\x81\xD0\xBA\xD0\xB2\xD0\xB0,<br /><br /><span class="default">&lt;?php preg_replace_callback</span><span class="keyword">(</span><span class="string">'/\\\\x([0-9A-F]{2})/'</span><span class="keyword">, function(</span><span class="default">$a</span><span class="keyword">){ return </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]); }, </span><span class="default">$str</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />The code above will output:<br />C=RU, L=Москва,</span></code></div>
  </div>
 </div>
  <div class="note" id="56962">  <div class="votes">
    <div id="Vu56962">
    <a href="/manual/vote-note.php?id=56962&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56962">
    <a href="/manual/vote-note.php?id=56962&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56962" title="54% like this...">
    1
    </div>
  </div>
  <a href="#56962" class="name">
  <strong class="user"><em>j dot dittmer at portrix dot net</em></strong></a><a class="genanchor" href="#56962"> &para;</a><div class="date" title="2005-09-20 05:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56962">
<div class="phpcode"><code><span class="html">The regex in the last comment has some typos. This is a<br />syntactically valid one, don't know if it's correct though.<br />You've to concat the expression in one long line.<br /><br />^(<br />[\x00-\x7f]|<br />[\xc2-\xdf][\x80-\xbf]|<br />[\xe0][\xa0-\xbf][\x80-\xbf]|<br />[\xe1-\xec][\x80-\xbf]{2}|<br />[\xed][\x80-\x9f][\x80-\xbf]|<br />[\xee-\xef][\x80-\xbf]{2}|<br />[\xf0][\x90-\xbf][\x80-\xbf]{2}|<br />[\xf1-\xf3][\x80-\xbf]{3}|<br />[\xf4][\x80-\x8f][\x80-\xbf]{2}<br />)*$</span></code></div>
  </div>
 </div>
  <div class="note" id="110494">  <div class="votes">
    <div id="Vu110494">
    <a href="/manual/vote-note.php?id=110494&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110494">
    <a href="/manual/vote-note.php?id=110494&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110494" title="50% like this...">
    1
    </div>
  </div>
  <a href="#110494" class="name">
  <strong class="user"><em>christoffer</em></strong></a><a class="genanchor" href="#110494"> &para;</a><div class="date" title="2012-10-29 10:35"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110494">
<div class="phpcode"><code><span class="html">The preferred way to use this on an array would be with the built in PHP function "array_map()", as for example:<br />$array = array_map("utf8_decode", $array);</span></code></div>
  </div>
 </div>
  <div class="note" id="57339">  <div class="votes">
    <div id="Vu57339">
    <a href="/manual/vote-note.php?id=57339&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57339">
    <a href="/manual/vote-note.php?id=57339&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57339" title="51% like this...">
    1
    </div>
  </div>
  <a href="#57339" class="name">
  <strong class="user"><em>thierry.bo # netcourrier point com</em></strong></a><a class="genanchor" href="#57339"> &para;</a><div class="date" title="2005-09-30 12:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57339">
<div class="phpcode"><code><span class="html">In response to fhoech (22-Sep-2005 11:55), I just tried a simultaneous test with the file UTF-8-test.txt using your regexp, 'j dot dittmer' (20-Sep-2005 06:30) regexp (message #56962), `php-note-2005` (17-Feb-2005 08:57) regexp in his message on `mb-detect-encoding` page (<a href="http://us3.php.net/manual/en/function.mb-detect-encoding.php#50087" rel="nofollow" target="_blank">http://us3.php.net/manual/en/function.mb-detect-encoding.php#50087</a>) who is using a regexp from the W3C (<a href="http://w3.org/International/questions/qa-forms-utf-8.html" rel="nofollow" target="_blank">http://w3.org/International/questions/qa-forms-utf-8.html</a>), and PHP mb_detect_encoding function.<br /><br />Here are a summarize of the results :<br /><br />201 lines are valid UTF8 strings using phpnote regexp<br />203 lines are valid UTF8 strings using j.dittmer regexp<br />200 lines are valid UTF8 strings using fhoech regexp<br />239 lines are valid  UTF8 strings using using mb_detect_encoding<br /><br />Here are the lines with differences (left to right, phpnote, j.dittmer and fhoech) :<br /><br />Line #70 : NOT UTF8|IS UTF8!|IS UTF8! :2.1.1 1 byte (U-00000000): "" <br />Line #79 : NOT UTF8|IS UTF8!|IS UTF8! :2.2.1 1 byte (U-0000007F): "" <br />Line #81 : IS UTF8!|IS UTF8!|NOT UTF8 :2.2.3 3 bytes (U-0000FFFF): "&amp;#65535;" | <br />Line #267 : IS UTF8!|IS UTF8!|NOT UTF8 :5.3.1 U+FFFE = ef bf be = "&amp;#65534;" |<br />Line #268 : IS UTF8!|IS UTF8!|NOT UTF8 :5.3.2 U+FFFF = ef bf bf = "&amp;#65535;" | <br /><br />Interesting is that you said that your regexp corrected j.dittmer regexp that failed on 5.3 section, but it my test I have the opposite result ?!<br /><br />I ran this test on windows XP with PHP 4.3.11dev. Maybe these differences come from operating system, or PHP version. <br /><br />For mb_detect_encoding I used the command :<br /><br />mb_detect_encoding($line, 'UTF-8, ISO-8859-1, ASCII');</span></code></div>
  </div>
 </div>
  <div class="note" id="116671">  <div class="votes">
    <div id="Vu116671">
    <a href="/manual/vote-note.php?id=116671&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116671">
    <a href="/manual/vote-note.php?id=116671&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116671" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116671" class="name">
  <strong class="user"><em>okx dot oliver dot koenig at gmail dot com</em></strong></a><a class="genanchor" href="#116671"> &para;</a><div class="date" title="2015-02-08 11:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116671">
<div class="phpcode"><code><span class="html">// This finally helped me to do the job, thanks to Blackbit, had to modify deprecated ereg:<br />// original comment: "Squirrelmail contains a nice function in the sources to convert unicode to entities:"<br /><br />function charset_decode_utf_8 ($string) {<br />    /* Only do the slow convert if there are 8-bit characters */<br />    /* avoid using 0xA0 (\240) in ereg ranges. RH73 does not like that */<br />    if (!preg_match("/[\200-\237]/", $string)<br />     &amp;&amp; !preg_match("/[\241-\377]/", $string)<br />    ) {<br />        return $string;<br />    }<br /><br />    // decode three byte unicode characters<br />    $string = preg_replace("/([\340-\357])([\200-\277])([\200-\277])/e",<br />        "'&amp;#'.((ord('\\1')-224)*4096 + (ord('\\2')-128)*64 + (ord('\\3')-128)).';'",<br />        $string<br />    );<br /><br />    // decode two byte unicode characters<br />    $string = preg_replace("/([\300-\337])([\200-\277])/e",<br />        "'&amp;#'.((ord('\\1')-192)*64+(ord('\\2')-128)).';'",<br />        $string<br />    );<br /><br />    return $string;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="116271">  <div class="votes">
    <div id="Vu116271">
    <a href="/manual/vote-note.php?id=116271&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116271">
    <a href="/manual/vote-note.php?id=116271&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116271" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116271" class="name">
  <strong class="user"><em>sashott at gmail dot com</em></strong></a><a class="genanchor" href="#116271"> &para;</a><div class="date" title="2014-12-04 11:57"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116271">
<div class="phpcode"><code><span class="html">Use of utf8_decode was not enough for me by get page content from another site. Problem appear by different alphabet from standard latin. As example some chars (corresponding to HTML codes &amp;bdquo; , &amp;nbsp; and others) are converted to "?" or "xA0" (hex value). You need to make some conversion before execute utf8_decode. And you can not replace simple, that they can be part of 2 bytes code for a char (UTF-8 use 2 bytes). Next is for cyrillic alphabet, but for other must be very close.<br /><br />function convertMethod($text){<br />    //Problem is that utf8_decode convert HTML chars for &amp;bdquo; and other to ? or &amp;nbsp; to \xA0. And you can not replace, that they are in some char bytes and you broke cyrillic (or other alphabet) chars.<br />    $problem_enc=array(<br />        'euro',<br />        'sbquo',<br />        'bdquo',<br />        'hellip',<br />        'dagger',<br />        'Dagger',<br />        'permil',<br />        'lsaquo',<br />        'lsquo',<br />        'rsquo',<br />        'ldquo',<br />        'rdquo',<br />        'bull',<br />        'ndash',<br />        'mdash',<br />        'trade',<br />        'rsquo',<br />        'brvbar',<br />        'copy',<br />        'laquo',<br />        'reg',<br />        'plusmn',<br />        'micro',<br />        'para',<br />        'middot',<br />        'raquo',<br />        'nbsp'<br />    );<br />    $text=mb_convert_encoding($text,'HTML-ENTITIES','UTF-8');<br />    $text=preg_replace('#(?&lt;!\&amp;ETH;)\&amp;('.implode('|',$problem_enc).');#s','--amp{$1}',$text);<br />    $text=mb_convert_encoding($text,'UTF-8','HTML-ENTITIES');<br />    $text=utf8_decode($text);<br />    $text=mb_convert_encoding($text,'HTML-ENTITIES','UTF-8');<br />    $text=preg_replace('#\-\-amp\{([^\}]+)\}#su','&amp;$1;',$text);<br />    $text=mb_convert_encoding($text,'UTF-8','HTML-ENTITIES');<br />    return $text;<br />}<br /><br />If this don't work, try to set "die($text);" on some places to look, what is happen to this row. Is better to test with long text. It is very possible to broke other alphabet character. In this case, it is very possible, that for you alphabet set "&amp;ETH;" is not the right one. You need to set "die($text);" after this preg_replace and look HTML code for character before set "--amp".</span></code></div>
  </div>
 </div>
  <div class="note" id="84031">  <div class="votes">
    <div id="Vu84031">
    <a href="/manual/vote-note.php?id=84031&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84031">
    <a href="/manual/vote-note.php?id=84031&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84031" title="50% like this...">
    0
    </div>
  </div>
  <a href="#84031" class="name">
  <strong class="user"><em>punchivan at gmail dot com</em></strong></a><a class="genanchor" href="#84031"> &para;</a><div class="date" title="2008-06-24 02:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84031">
<div class="phpcode"><code><span class="html">EY! the bug is not in the function 'utf8_decode'. The bug is in the function 'mb_detect_encoding'. If you put a word with a special char at the end like this 'accentué', that will lead to a wrong result (UTF-8) but if you put another char at the end like this 'accentuée' you will get it right. So you should always add a ISO-8859-1 character to your string for this check. My advise is to use a blank space.<br />I´ve tried it and it works! <br /><br />function ISO_convert($array)<br />{<br />    $array_temp = array();<br />     <br />    foreach($array as $name =&gt; $value)<br />    {<br />        if(is_array($value))<br />          $array_temp[(mb_detect_encoding($name." ",'UTF-8,ISO-8859-1') == 'UTF-8' ? utf8_decode($name) : $name )] = ISO_convert($value);<br />        else<br />          $array_temp[(mb_detect_encoding($name." ",'UTF-8,ISO-8859-1') == 'UTF-8' ? utf8_decode($name) : $name )] = (mb_detect_encoding($value." ",'UTF-8,ISO-8859-1') == 'UTF-8' ? utf8_decode($value) : $value );<br />    }<br /><br />    return $array_temp; <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="76434">  <div class="votes">
    <div id="Vu76434">
    <a href="/manual/vote-note.php?id=76434&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76434">
    <a href="/manual/vote-note.php?id=76434&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76434" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76434" class="name">
  <strong class="user"><em>ludvig dot ericson at gmail dot com</em></strong></a><a class="genanchor" href="#76434"> &para;</a><div class="date" title="2007-07-15 10:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76434">
<div class="phpcode"><code><span class="html">A better way to convert would be to use iconv, see <a href="http://www.php.net/iconv" rel="nofollow" target="_blank">http://www.php.net/iconv</a> -- example:<br /><br /><span class="default">&lt;?php<br />$myUnicodeString </span><span class="keyword">= </span><span class="string">"Åäö"</span><span class="keyword">;<br />echo </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">, </span><span class="string">"ISO-8859-1"</span><span class="keyword">, </span><span class="default">$myUnicodeString</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Above would echo out the given variable in ISO-8859-1 encoding, you may replace it with whatever you prefer.<br /><br />Another solution to the issue of misdisplayed glyphs is to simply send the document as UTF-8, and of course send UTF-8 data:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># Replace text/html with whatever MIME-type you prefer.<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: text/html; charset=utf-8"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76250">  <div class="votes">
    <div id="Vu76250">
    <a href="/manual/vote-note.php?id=76250&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76250">
    <a href="/manual/vote-note.php?id=76250&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76250" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76250" class="name">
  <strong class="user"><em>MARC13</em></strong></a><a class="genanchor" href="#76250"> &para;</a><div class="date" title="2007-07-07 07:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76250">
<div class="phpcode"><code><span class="html">I did this function to convert data from AJAX call to insert to my database.<br />It converts UTF-8 from XMLHttpRequest() to ISO-8859-2 that I use in LATIN2 MySQL database.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">utf2iso</span><span class="keyword">(</span><span class="default">$tekst</span><span class="keyword">)<br />{<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0104"</span><span class="keyword">,</span><span class="string">"\xA1"</span><span class="keyword">,</span><span class="default">$tekst</span><span class="keyword">);    </span><span class="comment">//Ą<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0106"</span><span class="keyword">,</span><span class="string">"\xC6"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ć<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0118"</span><span class="keyword">,</span><span class="string">"\xCA"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ę<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0141"</span><span class="keyword">,</span><span class="string">"\xA3"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ł<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0143"</span><span class="keyword">,</span><span class="string">"\xD1"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ń<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u00D3"</span><span class="keyword">,</span><span class="string">"\xD3"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ó<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u015A"</span><span class="keyword">,</span><span class="string">"\xA6"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ś<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0179"</span><span class="keyword">,</span><span class="string">"\xAC"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ź<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u017B"</span><span class="keyword">,</span><span class="string">"\xAF"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//Ż<br />        <br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0105"</span><span class="keyword">,</span><span class="string">"\xB1"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ą<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0107"</span><span class="keyword">,</span><span class="string">"\xE6"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ć<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0119"</span><span class="keyword">,</span><span class="string">"\xEA"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ę<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0142"</span><span class="keyword">,</span><span class="string">"\xB3"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ł<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u0144"</span><span class="keyword">,</span><span class="string">"\xF1"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ń<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u00D4"</span><span class="keyword">,</span><span class="string">"\xF3"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ó<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u015B"</span><span class="keyword">,</span><span class="string">"\xB6"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ś<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u017A"</span><span class="keyword">,</span><span class="string">"\xBC"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ź<br />        </span><span class="default">$nowytekst </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"%u017C"</span><span class="keyword">,</span><span class="string">"\xBF"</span><span class="keyword">,</span><span class="default">$nowytekst</span><span class="keyword">);    </span><span class="comment">//ż<br />        <br />    </span><span class="keyword">return (</span><span class="default">$nowytekst</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />In my case also the code file that deals with AJAX calls must be in UTF-8 coding.</span></code></div>
  </div>
 </div>
  <div class="note" id="75941">  <div class="votes">
    <div id="Vu75941">
    <a href="/manual/vote-note.php?id=75941&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75941">
    <a href="/manual/vote-note.php?id=75941&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75941" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75941" class="name">
  <strong class="user"><em>luka8088 at gmail dot com</em></strong></a><a class="genanchor" href="#75941"> &para;</a><div class="date" title="2007-06-22 07:03"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75941">
<div class="phpcode"><code><span class="html">simple UTF-8 to HTML conversion:<br /><br />function utf8_to_html ($data)<br />    {<br />    return preg_replace("/([\\xC0-\\xF7]{1,1}[\\x80-\\xBF]+)/e", '_utf8_to_html("\\1")', $data);<br />    }<br /><br />function _utf8_to_html ($data)<br />    {<br />    $ret = 0;<br />    foreach((str_split(strrev(chr((ord($data{0}) % 252 % 248 % 240 % 224 % 192) + 128) . substr($data, 1)))) as $k =&gt; $v)<br />        $ret += (ord($v) % 128) * pow(64, $k);<br />    return "&amp;#$ret;";<br />    }<br /><br />Example:<br />echo utf8_to_html("a b č ć ž こ に ち わ ()[]{}!#$?*");<br /><br />Output:<br />a b &amp;#269; &amp;#263; &amp;#382; &amp;#12371; &amp;#12395; &amp;#12385; &amp;#12431; ()[]{}!#$?*</span></code></div>
  </div>
 </div>
  <div class="note" id="37747">  <div class="votes">
    <div id="Vu37747">
    <a href="/manual/vote-note.php?id=37747&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37747">
    <a href="/manual/vote-note.php?id=37747&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37747" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37747" class="name">
  <strong class="user"><em>gto at interia dot pl</em></strong></a><a class="genanchor" href="#37747"> &para;</a><div class="date" title="2003-11-25 07:12"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37747">
<div class="phpcode"><code><span class="html">Correction to function converting utf82iso88592 and iso88592tutf8.<br />Janusz forgot about "&amp;#324;", and "&amp;#380;" exchanged from "&amp;#378;" here and there.<br /><br />GTo<br /><br />function utf82iso88592($tekscik) {<br />     $tekscik = str_replace("\xC4\x85", "&amp;#261;", $tekscik);<br />     $tekscik = str_replace("\xC4\x84", '&amp;#260;', $tekscik);<br />     $tekscik = str_replace("\xC4\x87", '&amp;#263;', $tekscik);<br />     $tekscik = str_replace("\xC4\x86", '&amp;#262;', $tekscik);<br />     $tekscik = str_replace("\xC4\x99", '&amp;#281;', $tekscik);<br />     $tekscik = str_replace("\xC4\x98", '&amp;#280;', $tekscik);<br />     $tekscik = str_replace("\xC5\x82", '&amp;#322;', $tekscik);<br />     $tekscik = str_replace("\xC5\x81", '&amp;#321;', $tekscik);<br />     $tekscik = str_replace("\xC5\x84", '&amp;#324;', $tekscik);     <br />     $tekscik = str_replace("\xC5\x83", '&amp;#323;', $tekscik);<br />     $tekscik = str_replace("\xC3\xB3", '?', $tekscik);<br />     $tekscik = str_replace("\xC3\x93", '?', $tekscik);<br />     $tekscik = str_replace("\xC5\x9B", '&amp;#347;', $tekscik);<br />     $tekscik = str_replace("\xC5\x9A", '&amp;#346;', $tekscik);<br />     $tekscik = str_replace("\xC5\xBC", '&amp;#380;', $tekscik);<br />     $tekscik = str_replace("\xC5\xBB", '&amp;#379;', $tekscik);<br />     $tekscik = str_replace("\xC5\xBA", '&amp;#378;', $tekscik);<br />     $tekscik = str_replace("\xC5\xB9", '&amp;#377;', $tekscik);<br />     return $tekscik;<br />} // utf82iso88592<br /><br />function iso885922utf8($tekscik) {<br />     $tekscik = str_replace("&amp;#261;", "\xC4\x85", $tekscik);<br />     $tekscik = str_replace('&amp;#260;', "\xC4\x84", $tekscik);<br />     $tekscik = str_replace('&amp;#263;', "\xC4\x87", $tekscik);<br />     $tekscik = str_replace('&amp;#262;', "\xC4\x86", $tekscik);<br />     $tekscik = str_replace('&amp;#281;', "\xC4\x99", $tekscik);<br />     $tekscik = str_replace('&amp;#280;', "\xC4\x98", $tekscik);<br />     $tekscik = str_replace('&amp;#322;', "\xC5\x82", $tekscik);<br />     $tekscik = str_replace('&amp;#321;', "\xC5\x81", $tekscik);<br />     $tekscik = str_replace('&amp;#324;', "\xC5\x84", $tekscik);<br />     $tekscik = str_replace('&amp;#323;',"\xC5\x83", $tekscik);<br />     $tekscik = str_replace('?', "\xC3\xB3", $tekscik);<br />     $tekscik = str_replace('?', "\xC3\x93", $tekscik);<br />     $tekscik = str_replace('&amp;#347;', "\xC5\x9B", $tekscik);<br />     $tekscik = str_replace('&amp;#346;', "\xC5\x9A", $tekscik);<br />     $tekscik = str_replace('&amp;#380;', "\xC5\xBC", $tekscik);<br />     $tekscik = str_replace('&amp;#379;', "\xC5\xBB", $tekscik);<br />     $tekscik = str_replace('&amp;#378;', "\xC5\xBA", $tekscik);<br />     $tekscik = str_replace('&amp;#377;', "\xC5\xB9", $tekscik);     <br />     return $tekscik;<br />} // iso885922utf8</span></code></div>
  </div>
 </div>
  <div class="note" id="119280">  <div class="votes">
    <div id="Vu119280">
    <a href="/manual/vote-note.php?id=119280&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119280">
    <a href="/manual/vote-note.php?id=119280&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119280" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#119280" class="name">
  <strong class="user"><em>kode68</em></strong></a><a class="genanchor" href="#119280"> &para;</a><div class="date" title="2016-05-02 06:09"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119280">
<div class="phpcode"><code><span class="html">Update Answer from okx dot oliver dot koenig at gmail dot com for PHP 5.6 since e/ modifier is depreciated<br /><br />// This finally helped me to do the job, thanks to Blackbit, had to modify deprecated ereg:<br />// original comment: "Squirrelmail contains a nice function in the sources to convert unicode to entities:"<br /><br />function charset_decode_utf_8($string)<br />    {<br />        /* Only do the slow convert if there are 8-bit characters */<br />        if ( !preg_match("/[\200-\237]/", $string) &amp;&amp; !preg_match("/[\241-\377]/", $string) )<br />               return $string;<br /><br />        // decode three byte unicode characters<br />          $string = preg_replace_callback("/([\340-\357])([\200-\277])([\200-\277])/",<br />                    create_function ('$matches', 'return \'&amp;#\'.((ord($matches[1])-224)*4096+(ord($matches[2])-128)*64+(ord($matches[3])-128)).\';\';'),<br />                    $string);<br /><br />        // decode two byte unicode characters<br />          $string = preg_replace_callback("/([\300-\337])([\200-\277])/",<br />                    create_function ('$matches', 'return \'&amp;#\'.((ord($matches[1])-192)*64+(ord($matches[2])-128)).\';\';'),<br />                    $string);<br /><br />        return $string;<br />    }<br /><br />Enjoy</span></code></div>
  </div>
 </div>
  <div class="note" id="75952">  <div class="votes">
    <div id="Vu75952">
    <a href="/manual/vote-note.php?id=75952&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75952">
    <a href="/manual/vote-note.php?id=75952&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75952" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#75952" class="name">
  <strong class="user"><em>visus at portsonline dot net</em></strong></a><a class="genanchor" href="#75952"> &para;</a><div class="date" title="2007-06-23 09:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75952">
<div class="phpcode"><code><span class="html">Following code helped me with mixed (UTF8+ISO-8859-1(x)) encodings. In this case, I have template files made and maintained by designers who do not care about encoding and MySQL data in utf8_binary_ci encoded tables.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Helper<br /></span><span class="keyword">{<br />    function </span><span class="default">strSplit</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$split </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />        if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$split</span><span class="keyword">) &amp;&amp; </span><span class="default">$split </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br /><br />        </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br /><br />        </span><span class="default">$array </span><span class="keyword">= array();<br /><br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />        while (</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">)<br />        {<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br /><br />            for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$split</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">)<br />            {<br />                </span><span class="default">$key </span><span class="keyword">.= </span><span class="default">$text</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">};<br /><br />                </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />            }<br /><br />            </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">$key</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">$array</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">UTF8ToHTML</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />    {<br />        </span><span class="default">$search </span><span class="keyword">= array();<br />        </span><span class="default">$search</span><span class="keyword">[] = </span><span class="string">"/([\\xC0-\\xF7]{1,1}[\\x80-\\xBF]+)/e"</span><span class="keyword">;<br />        </span><span class="default">$search</span><span class="keyword">[] = </span><span class="string">"/&amp;#228;/"</span><span class="keyword">;<br />        </span><span class="default">$search</span><span class="keyword">[] = </span><span class="string">"/&amp;#246;/"</span><span class="keyword">;<br />        </span><span class="default">$search</span><span class="keyword">[] = </span><span class="string">"/&amp;#252;/"</span><span class="keyword">;<br />        </span><span class="default">$search</span><span class="keyword">[] = </span><span class="string">"/&amp;#196;/"</span><span class="keyword">;<br />        </span><span class="default">$search</span><span class="keyword">[] = </span><span class="string">"/&amp;#214;/"</span><span class="keyword">;<br />        </span><span class="default">$search</span><span class="keyword">[] = </span><span class="string">"/&amp;#220;/"</span><span class="keyword">;<br />        </span><span class="default">$search</span><span class="keyword">[] = </span><span class="string">"/&amp;#223;/"</span><span class="keyword">;<br /><br />        </span><span class="default">$replace </span><span class="keyword">= array();<br />        </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">'Helper::_UTF8ToHTML("\\1")'</span><span class="keyword">;<br />        </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">"ä"</span><span class="keyword">;<br />        </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">"ö"</span><span class="keyword">;<br />        </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">"ü"</span><span class="keyword">;<br />        </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">"Ä"</span><span class="keyword">;<br />        </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">"Ö"</span><span class="keyword">;<br />        </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">"ü"</span><span class="keyword">;<br />        </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">"ß"</span><span class="keyword">;<br /><br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br /><br />        return </span><span class="default">$str</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">_UTF8ToHTML</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />    {<br />        </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />        foreach((</span><span class="default">Helper</span><span class="keyword">::</span><span class="default">strSplit</span><span class="keyword">(</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">((</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}) % </span><span class="default">252 </span><span class="keyword">% </span><span class="default">248 </span><span class="keyword">% </span><span class="default">240 </span><span class="keyword">% </span><span class="default">224 </span><span class="keyword">% </span><span class="default">192</span><span class="keyword">) + </span><span class="default">128</span><span class="keyword">).</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)))) as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)<br />            </span><span class="default">$ret </span><span class="keyword">+= (</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) % </span><span class="default">128</span><span class="keyword">) * </span><span class="default">pow</span><span class="keyword">(</span><span class="default">64</span><span class="keyword">, </span><span class="default">$k</span><span class="keyword">);<br />        return </span><span class="string">"&amp;#"</span><span class="keyword">.</span><span class="default">$ret</span><span class="keyword">.</span><span class="string">";"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">// Usage example:<br /><br /></span><span class="default">$tpl </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"template.tpl"</span><span class="keyword">);<br /></span><span class="comment">/* ... */<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">mysql_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /><br />print(</span><span class="default">Helper</span><span class="keyword">::</span><span class="default">UTF8ToHTML</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"{VAR}"</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'var'</span><span class="keyword">], </span><span class="default">$tpl</span><span class="keyword">)));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70776">  <div class="votes">
    <div id="Vu70776">
    <a href="/manual/vote-note.php?id=70776&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70776">
    <a href="/manual/vote-note.php?id=70776&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70776" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#70776" class="name">
  <strong class="user"><em>paul.hayes at entropedia.co.uk</em></strong></a><a class="genanchor" href="#70776"> &para;</a><div class="date" title="2006-10-27 07:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70776">
<div class="phpcode"><code><span class="html">I noticed that the utf-8 to html functions below are only for 2 byte long codes. Well I wanted 3 byte support (sorry haven't done 4, 5 or 6). Also I noticed the concatination of the character codes did have the hex prefix 0x and so failed with the large 2 byte codes)<br /><br />&lt;?<br />  public function utf2html (&amp;$str) {<br />    <br />    $ret = "";<br />    $max = strlen($str);<br />    $last = 0;  // keeps the index of the last regular character<br />    for ($i=0; $i&lt;$max; $i++) {<br />        $c = $str{$i};<br />        $c1 = ord($c);<br />        if ($c1&gt;&gt;5 == 6) {  // 110x xxxx, 110 prefix for 2 bytes unicode<br />            $ret .= substr($str, $last, $i-$last); // append all the regular characters we've passed<br />            $c1 &amp;= 31; // remove the 3 bit two bytes prefix<br />            $c2 = ord($str{++$i}); // the next byte<br />            $c2 &amp;= 63;  // remove the 2 bit trailing byte prefix<br />            $c2 |= (($c1 &amp; 3) &lt;&lt; 6); // last 2 bits of c1 become first 2 of c2<br />            $c1 &gt;&gt;= 2; // c1 shifts 2 to the right<br />            $ret .= "&amp;#" . ($c1 * 0x100 + $c2) . ";"; // this is the fastest string concatenation<br />            $last = $i+1;       <br />        }<br />        elseif ($c1&gt;&gt;4 == 14) {  // 1110 xxxx, 110 prefix for 3 bytes unicode<br />            $ret .= substr($str, $last, $i-$last); // append all the regular characters we've passed<br />            $c2 = ord($str{++$i}); // the next byte<br />            $c3 = ord($str{++$i}); // the third byte<br />            $c1 &amp;= 15; // remove the 4 bit three bytes prefix<br />            $c2 &amp;= 63;  // remove the 2 bit trailing byte prefix<br />            $c3 &amp;= 63;  // remove the 2 bit trailing byte prefix<br />            $c3 |= (($c2 &amp; 3) &lt;&lt; 6); // last 2 bits of c2 become first 2 of c3<br />            $c2 &gt;&gt;=2; //c2 shifts 2 to the right<br />            $c2 |= (($c1 &amp; 15) &lt;&lt; 4); // last 4 bits of c1 become first 4 of c2<br />            $c1 &gt;&gt;= 4; // c1 shifts 4 to the right<br />            $ret .= '&amp;#' . (($c1 * 0x10000) + ($c2 * 0x100) + $c3) . ';'; // this is the fastest string concatenation<br />            $last = $i+1;       <br />        }<br />    }<br />    $str=$ret . substr($str, $last, $i); // append the last batch of regular characters<br />} <br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="59485">  <div class="votes">
    <div id="Vu59485">
    <a href="/manual/vote-note.php?id=59485&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59485">
    <a href="/manual/vote-note.php?id=59485&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59485" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#59485" class="name">
  <strong class="user"><em>php-net at ---NOSPAM---lc dot yi dot org</em></strong></a><a class="genanchor" href="#59485"> &para;</a><div class="date" title="2005-12-08 12:04"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59485">
<div class="phpcode"><code><span class="html">I've just created this code snippet to improve the user-customizable emails sent by one of my websites.<br /><br />The goal was to use UTF-8 (Unicode) so that non-english users have all the Unicode benefits, BUT also make life seamless for English (or specifically, English MS-Outlook users).  The niggle: Outlook prior to 2003 (?)  does not properly detect unicode emails.  When "smart quotes" from MS Word were pasted into a rich text area and saved in Unicode, then sent by email to an Outlook user, more often than not, these characters were wrongly rendered as "greek". <br /><br />So, the following code snippet replaces a few strategic characters into html entities which Outlook XP (and possibly earlier) will render as expected.  [Code based on bits of code from previous posts on this and the htmlenties page]<br /><span class="default">&lt;?php<br />    $badwordchars</span><span class="keyword">=array(<br />        </span><span class="string">"\xe2\x80\x98"</span><span class="keyword">, </span><span class="comment">// left single quote<br />        </span><span class="string">"\xe2\x80\x99"</span><span class="keyword">, </span><span class="comment">// right single quote<br />        </span><span class="string">"\xe2\x80\x9c"</span><span class="keyword">, </span><span class="comment">// left double quote<br />        </span><span class="string">"\xe2\x80\x9d"</span><span class="keyword">, </span><span class="comment">// right double quote<br />        </span><span class="string">"\xe2\x80\x94"</span><span class="keyword">, </span><span class="comment">// em dash<br />        </span><span class="string">"\xe2\x80\xa6" </span><span class="comment">// elipses<br />    </span><span class="keyword">);<br />    </span><span class="default">$fixedwordchars</span><span class="keyword">=array(<br />        </span><span class="string">"&amp;#8216;"</span><span class="keyword">,<br />        </span><span class="string">"&amp;#8217;"</span><span class="keyword">,<br />        </span><span class="string">'&amp;#8220;'</span><span class="keyword">,<br />        </span><span class="string">'&amp;#8221;'</span><span class="keyword">,<br />        </span><span class="string">'&amp;mdash;'</span><span class="keyword">,<br />        </span><span class="string">'&amp;#8230;'<br />    </span><span class="keyword">);<br />    </span><span class="default">$html</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$badwordchars</span><span class="keyword">,</span><span class="default">$fixedwordchars</span><span class="keyword">,</span><span class="default">$html</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85034">  <div class="votes">
    <div id="Vu85034">
    <a href="/manual/vote-note.php?id=85034&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85034">
    <a href="/manual/vote-note.php?id=85034&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85034" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#85034" class="name">
  <strong class="user"><em>Blackbit</em></strong></a><a class="genanchor" href="#85034"> &para;</a><div class="date" title="2008-08-12 04:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85034">
<div class="phpcode"><code><span class="html">Squirrelmail contains a nice function in the sources to convert unicode to entities:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">charset_decode_utf_8 </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {
<br />      </span><span class="comment">/* Only do the slow convert if there are 8-bit characters */
<br />    /* avoid using 0xA0 (\240) in ereg ranges. RH73 does not like that */
<br />    </span><span class="keyword">if (! </span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"[\200-\237]"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">) and ! </span><span class="default">ereg</span><span class="keyword">(</span><span class="string">"[\241-\377]"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">))
<br />        return </span><span class="default">$string</span><span class="keyword">;
<br />
<br />    </span><span class="comment">// decode three byte unicode characters
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/([\340-\357])([\200-\277])([\200-\277])/e"</span><span class="keyword">,        \
<br />    </span><span class="string">"'&amp;#'.((ord('\\1')-224)*4096 + (ord('\\2')-128)*64 + (ord('\\3')-128)).';'"</span><span class="keyword">,    \
<br />    </span><span class="default">$string</span><span class="keyword">);
<br />
<br />    </span><span class="comment">// decode two byte unicode characters
<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/([\300-\337])([\200-\277])/e"</span><span class="keyword">, \
<br />    </span><span class="string">"'&amp;#'.((ord('\\1')-192)*64+(ord('\\2')-128)).';'"</span><span class="keyword">, \
<br />    </span><span class="default">$string</span><span class="keyword">);
<br />
<br />    return </span><span class="default">$string</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75723">  <div class="votes">
    <div id="Vu75723">
    <a href="/manual/vote-note.php?id=75723&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75723">
    <a href="/manual/vote-note.php?id=75723&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75723" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#75723" class="name">
  <strong class="user"><em>Sadi</em></strong></a><a class="genanchor" href="#75723"> &para;</a><div class="date" title="2007-06-13 03:38"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75723">
<div class="phpcode"><code><span class="html">Once again about polish letters. If you use fananf's solution, make sure that PHP file is coded with cp1250 or else it won't work. It's quite obvious, however I spent some time before I finally figured that out, so I thought I post it here.</span></code></div>
  </div>
 </div>
  <div class="note" id="49185">  <div class="votes">
    <div id="Vu49185">
    <a href="/manual/vote-note.php?id=49185&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49185">
    <a href="/manual/vote-note.php?id=49185&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49185" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#49185" class="name">
  <strong class="user"><em>rasmus at flajm dot se</em></strong></a><a class="genanchor" href="#49185"> &para;</a><div class="date" title="2005-01-19 02:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49185">
<div class="phpcode"><code><span class="html">If you don't have the multibyte extension installed, here's a function to decode UTF-16 encoded strings. It support both BOM-less and BOM'ed strings, (big- and little-endian byte order.)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Decode UTF-16 encoded strings.<br /> * <br /> * Can handle both BOM'ed data and un-BOM'ed data. <br /> * Assumes Big-Endian byte order if no BOM is available.<br /> * <br /> * @param   string  $str  UTF-16 encoded data to decode.<br /> * @return  string  UTF-8 / ISO encoded data.<br /> * @access  public<br /> * @version 0.1 / 2005-01-19<br /> * @author  Rasmus Andersson {@link <a href="http://rasmusandersson.se/}" rel="nofollow" target="_blank">http://rasmusandersson.se/}</a><br /> * @package Groupies<br /> */<br /></span><span class="keyword">function </span><span class="default">utf16_decode</span><span class="keyword">( </span><span class="default">$str </span><span class="keyword">) {<br />    if( </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) &lt; </span><span class="default">2 </span><span class="keyword">) return </span><span class="default">$str</span><span class="keyword">;<br />    </span><span class="default">$bom_be </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />    </span><span class="default">$c0 </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">});<br />    </span><span class="default">$c1 </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">1</span><span class="keyword">});<br />    if( </span><span class="default">$c0 </span><span class="keyword">== </span><span class="default">0xfe </span><span class="keyword">&amp;&amp; </span><span class="default">$c1 </span><span class="keyword">== </span><span class="default">0xff </span><span class="keyword">) { </span><span class="default">$str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">); }<br />    elseif( </span><span class="default">$c0 </span><span class="keyword">== </span><span class="default">0xff </span><span class="keyword">&amp;&amp; </span><span class="default">$c1 </span><span class="keyword">== </span><span class="default">0xfe </span><span class="keyword">) { </span><span class="default">$str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">); </span><span class="default">$bom_be </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">; }<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    </span><span class="default">$newstr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$len</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">) {<br />        if( </span><span class="default">$bom_be </span><span class="keyword">) { </span><span class="default">$val </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">})   &lt;&lt; </span><span class="default">4</span><span class="keyword">; </span><span class="default">$val </span><span class="keyword">+= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">}); }<br />        else {        </span><span class="default">$val </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">}) &lt;&lt; </span><span class="default">4</span><span class="keyword">; </span><span class="default">$val </span><span class="keyword">+= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">}); }<br />        </span><span class="default">$newstr </span><span class="keyword">.= (</span><span class="default">$val </span><span class="keyword">== </span><span class="default">0x228</span><span class="keyword">) ? </span><span class="string">"\n" </span><span class="keyword">: </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$newstr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71999">  <div class="votes">
    <div id="Vu71999">
    <a href="/manual/vote-note.php?id=71999&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71999">
    <a href="/manual/vote-note.php?id=71999&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71999" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#71999" class="name">
  <strong class="user"><em>Ajgor</em></strong></a><a class="genanchor" href="#71999"> &para;</a><div class="date" title="2006-12-28 05:38"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71999">
<div class="phpcode"><code><span class="html">small upgrade for polish decoding:<br /><br />function utf82iso88592($text) {<br /> $text = str_replace("\xC4\x85", 'ą', $text);<br /> $text = str_replace("\xC4\x84", 'Ą', $text);<br /> $text = str_replace("\xC4\x87", 'ć', $text);<br /> $text = str_replace("\xC4\x86", 'Ć', $text);<br /> $text = str_replace("\xC4\x99", 'ę', $text);<br /> $text = str_replace("\xC4\x98", 'Ę', $text);<br /> $text = str_replace("\xC5\x82", 'ł', $text);<br /> $text = str_replace("\xC5\x81", 'Ł', $text);<br /> $text = str_replace("\xC3\xB3", 'ó', $text);<br /> $text = str_replace("\xC3\x93", 'Ó', $text);<br /> $text = str_replace("\xC5\x9B", 'ś', $text);<br /> $text = str_replace("\xC5\x9A", 'Ś', $text);<br /> $text = str_replace("\xC5\xBC", 'ż', $text);<br /> $text = str_replace("\xC5\xBB", 'Ż', $text);<br /> $text = str_replace("\xC5\xBA", 'ż', $text);<br /> $text = str_replace("\xC5\xB9", 'Ż', $text);<br /> $text = str_replace("\xc5\x84", 'ń', $text);<br /> $text = str_replace("\xc5\x83", 'Ń', $text);<br /><br />return $text;<br />} // utf82iso88592</span></code></div>
  </div>
 </div>
  <div class="note" id="61120">  <div class="votes">
    <div id="Vu61120">
    <a href="/manual/vote-note.php?id=61120&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61120">
    <a href="/manual/vote-note.php?id=61120&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61120" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#61120" class="name">
  <strong class="user"><em>2ge at NO2geSPAM dot us</em></strong></a><a class="genanchor" href="#61120"> &para;</a><div class="date" title="2006-01-26 01:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61120">
<div class="phpcode"><code><span class="html">Hello all,
<br />
<br />I like to use COOL (nice) URIs, example: <a href="http://example.com/try-something" rel="nofollow" target="_blank">http://example.com/try-something</a>
<br />I'm using UTF8 as input, so I have to write a function UTF8toASCII to have nice URI. Here is what I come with:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">urlize</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">) {
<br /> </span><span class="default">$search </span><span class="keyword">= array(</span><span class="string">'/[^a-z0-9]/'</span><span class="keyword">, </span><span class="string">'/--+/'</span><span class="keyword">, </span><span class="string">'/^-+/'</span><span class="keyword">, </span><span class="string">'/-+$/' </span><span class="keyword">);
<br /> </span><span class="default">$replace </span><span class="keyword">= array( </span><span class="string">'-'</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);
<br /> return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">utf2ascii</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">));
<br />}     
<br />
<br />function </span><span class="default">utf2ascii</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {
<br /> </span><span class="default">$iso88591  </span><span class="keyword">= </span><span class="string">"\\xE0\\xE1\\xE2\\xE3\\xE4\\xE5\\xE6\\xE7"</span><span class="keyword">;
<br /> </span><span class="default">$iso88591 </span><span class="keyword">.= </span><span class="string">"\\xE8\\xE9\\xEA\\xEB\\xEC\\xED\\xEE\\xEF"</span><span class="keyword">;
<br /> </span><span class="default">$iso88591 </span><span class="keyword">.= </span><span class="string">"\\xF0\\xF1\\xF2\\xF3\\xF4\\xF5\\xF6\\xF7"</span><span class="keyword">;
<br /> </span><span class="default">$iso88591 </span><span class="keyword">.= </span><span class="string">"\\xF8\\xF9\\xFA\\xFB\\xFC\\xFD\\xFE\\xFF"</span><span class="keyword">;
<br /> </span><span class="default">$ascii </span><span class="keyword">= </span><span class="string">"aaaaaaaceeeeiiiidnooooooouuuuyyy"</span><span class="keyword">;
<br /> return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">), </span><span class="string">'ISO-8859-1'</span><span class="keyword">),</span><span class="default">$iso88591</span><span class="keyword">,</span><span class="default">$ascii</span><span class="keyword">);
<br />}
<br />
<br />echo </span><span class="default">urlize</span><span class="keyword">(</span><span class="string">"Fucking ?m?l"</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />I hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="83051">  <div class="votes">
    <div id="Vu83051">
    <a href="/manual/vote-note.php?id=83051&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83051">
    <a href="/manual/vote-note.php?id=83051&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83051" title="39% like this...">
    -5
    </div>
  </div>
  <a href="#83051" class="name">
  <strong class="user"><em>haugas at gmail dot com</em></strong></a><a class="genanchor" href="#83051"> &para;</a><div class="date" title="2008-05-08 02:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83051">
<div class="phpcode"><code><span class="html">If you don't know exactly, how many times your string is encoded, you can use this function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">_utf8_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)<br />{<br />  </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$string</span><span class="keyword">;<br />  </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />  while (</span><span class="default">mb_detect_encoding</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">)==</span><span class="string">"UTF-8"</span><span class="keyword">)<br />  {<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">);<br />    </span><span class="default">$count</span><span class="keyword">++;<br />  }<br />  <br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">-</span><span class="default">1 </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />  {<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    <br />  }<br />  return </span><span class="default">$string</span><span class="keyword">;<br />  <br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59484">  <div class="votes">
    <div id="Vu59484">
    <a href="/manual/vote-note.php?id=59484&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59484">
    <a href="/manual/vote-note.php?id=59484&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59484" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#59484" class="name">
  <strong class="user"><em>yannikh at gmeil dot com</em></strong></a><a class="genanchor" href="#59484"> &para;</a><div class="date" title="2005-12-07 11:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59484">
<div class="phpcode"><code><span class="html">I had to tackle a very interesting problem:<br /><br />I wanted to replace all \xXX in a text by it's letters. Unfortunatelly XX were ASCII and not utf8. I solved my problem that way:<br /><span class="default">&lt;?php preg_replace </span><span class="keyword">(</span><span class="string">'/\\\\x([0-9a-fA-F]{2})/e'</span><span class="keyword">, </span><span class="string">"pack('H*',utf8_decode('\\1'))"</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57070">  <div class="votes">
    <div id="Vu57070">
    <a href="/manual/vote-note.php?id=57070&amp;page=function.utf8-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57070">
    <a href="/manual/vote-note.php?id=57070&amp;page=function.utf8-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57070" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#57070" class="name">
  <strong class="user"><em>fhoech</em></strong></a><a class="genanchor" href="#57070"> &para;</a><div class="date" title="2005-09-22 10:55"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57070">
<div class="phpcode"><code><span class="html">Sorry, I had a typo in my last comment. Corrected regexp:<br /><br />^([\\x00-\\x7f]|<br />[\\xc2-\\xdf][\\x80-\\xbf]|<br />\\xe0[\\xa0-\\xbf][\\x80-\\xbf]|<br />[\\xe1-\\xec][\\x80-\\xbf]{2}|<br />\\xed[\\x80-\\x9f][\\x80-\\xbf]|<br />\\xef[\\x80-\\xbf][\\x80-\\xbd]|<br />\\xee[\\x80-\\xbf]{2}|<br />\xf0[\\x90-\\xbf][\\x80-\\xbf]{2}|<br />[\\xf1-\\xf3][\\x80-\\xbf]{3}|<br />\\xf4[\\x80-\\x8f][\\x80-\\xbf]{2})*$</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.utf8-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.utf8-decode.php">＋<small>add a note</small></a></div>
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
                                    <li class="current">
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
