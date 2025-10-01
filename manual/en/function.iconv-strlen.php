<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: iconv_strlen - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.iconv-strlen.php">
 <link rel="shorturl" href="https://www.php.net/iconv-strlen">
 <link rel="alternate" href="https://www.php.net/iconv-strlen" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.iconv.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.iconv-set-encoding.php">
 <link rel="next" href="https://www.php.net/manual/en/function.iconv-strpos.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.iconv-strlen.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.iconv-strlen.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.iconv-strlen.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.iconv-strlen.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.iconv-strlen.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.iconv-strlen.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.iconv-strlen.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.iconv-strlen.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.iconv-strlen.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.iconv-strlen.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.iconv-strlen.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the character count of string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: iconv_strlen - Manual" />
<meta name="twitter:description" content="Returns the character count of string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: iconv_strlen - Manual" />
<meta itemprop="description" content="Returns the character count of string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the character count of string" />

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
        <a href="function.iconv-strpos.php">
          iconv_strpos &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.iconv-set-encoding.php">
          &laquo; iconv_set_encoding        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.iconv.php'>iconv</a></li>      <li><a href='ref.iconv.php'>iconv Functions</a></li>      </ul>
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
            <option value='en/function.iconv-strlen.php' selected="selected">English</option>
            <option value='de/function.iconv-strlen.php'>German</option>
            <option value='es/function.iconv-strlen.php'>Spanish</option>
            <option value='fr/function.iconv-strlen.php'>French</option>
            <option value='it/function.iconv-strlen.php'>Italian</option>
            <option value='ja/function.iconv-strlen.php'>Japanese</option>
            <option value='pt_BR/function.iconv-strlen.php'>Brazilian Portuguese</option>
            <option value='ru/function.iconv-strlen.php'>Russian</option>
            <option value='tr/function.iconv-strlen.php'>Turkish</option>
            <option value='uk/function.iconv-strlen.php'>Ukrainian</option>
            <option value='zh/function.iconv-strlen.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.iconv-strlen" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">iconv_strlen</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_strlen</span> &mdash; <span class="dc-title">Returns the character count of string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.iconv-strlen-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>iconv_strlen</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   In contrast to <span class="function"><a href="function.strlen.php" class="function">strlen()</a></span>,
   <span class="function"><strong>iconv_strlen()</strong></span> counts the occurrences of characters
   in the given byte sequence <code class="parameter">string</code> on the basis of
   the specified character set, the result of which is not necessarily
   identical to the length of the string in bytes.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.iconv-strlen-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">encoding</code> parameter is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>,
       <code class="parameter">string</code> is assumed to be encoded in
       <a href="iconv.configuration.php" class="link">iconv.internal_encoding</a>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.iconv-strlen-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the character count of <code class="parameter">string</code>, as an integer,
   or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurs during the encoding.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.iconv-strlen-changelog">
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
       <code class="parameter">encoding</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.iconv-strlen-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.grapheme-strlen.php" class="function" rel="rdfs-seeAlso">grapheme_strlen()</a> - Get string length in grapheme units</span></li>
    <li><span class="function"><a href="function.mb-strlen.php" class="function" rel="rdfs-seeAlso">mb_strlen()</a> - Get string length</span></li>
    <li><span class="function"><a href="function.strlen.php" class="function" rel="rdfs-seeAlso">strlen()</a> - Get string length</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/iconv/functions/iconv-strlen.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.iconv-strlen%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.iconv-strlen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.iconv-strlen.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="62320">  <div class="votes">
    <div id="Vu62320">
    <a href="/manual/vote-note.php?id=62320&amp;page=function.iconv-strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62320">
    <a href="/manual/vote-note.php?id=62320&amp;page=function.iconv-strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62320" title="64% like this...">
    12
    </div>
  </div>
  <a href="#62320" class="name">
  <strong class="user"><em>hfuecks @ nospam org</em></strong></a><a class="genanchor" href="#62320"> &para;</a><div class="date" title="2006-02-24 04:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62320">
<div class="phpcode"><code><span class="html">If iconv_strlen is passed a UTF-8 string containing badly formed sequences, it will return FALSE. This is in contrast to mb_strlen of the behaviour of utf8_decode, which strip out any bad sequences;<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># UTF-8 string containing bad sequence: \xe9<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"I?t?rn?ti?n\xe9?liz?ti?n"</span><span class="keyword">;<br /><br />print </span><span class="string">"mb_strlen: "</span><span class="keyword">.</span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"strlen/utf8_decode: "</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)).</span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"iconv_strlen: "</span><span class="keyword">.</span><span class="default">iconv_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Displays;<br /><br />mb_strlen: 20<br />strlen/utf8_decode: 20<br />iconv_strlen:<br /><br />(PHP 5.0.5)<br /><br />As such it is being "stricter" than mb_strlen and it may mean you need to check for invalid sequences first. A quick way to check is to exploit the behaviour of the PCRE extension (see notes on pattern modifiers);<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^.{1}/us'</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$ar</span><span class="keyword">) != </span><span class="default">1</span><span class="keyword">) {<br />    die(</span><span class="string">"string contains invalid UTF-8"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />A slower but stricter check (regex) can be found at: <a href="http://www.w3.org/International/questions/qa-forms-utf-8" rel="nofollow" target="_blank">http://www.w3.org/International/questions/qa-forms-utf-8</a><br /><br />Similiar applies to iconv_substr, iconv_strpos and iconv_strrpos</span></code></div>
  </div>
 </div>
  <div class="note" id="124905">  <div class="votes">
    <div id="Vu124905">
    <a href="/manual/vote-note.php?id=124905&amp;page=function.iconv-strlen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124905">
    <a href="/manual/vote-note.php?id=124905&amp;page=function.iconv-strlen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124905" title="75% like this...">
    4
    </div>
  </div>
  <a href="#124905" class="name">
  <strong class="user"><em>sheryl</em></strong></a><a class="genanchor" href="#124905"> &para;</a><div class="date" title="2020-04-12 06:15"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124905">
<div class="phpcode"><code><span class="html">Notice there is a disconnect:  <br />&gt;If charset`parameter is omitted, str is assumed to be encoded in iconv.internal_encoding.<br /><br />But clicking on the iconv.internal_encoding link (<a href="https://www.php.net/manual/en/iconv.configuration.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/iconv.configuration.php</a>), the docs indicate that iconv.internal_encoding is deprecated since 5.6.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.iconv-strlen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.iconv-strlen.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.iconv.php">iconv Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.iconv.php" title="iconv">iconv</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-get-encoding.php" title="iconv_&#8203;get_&#8203;encoding">iconv_&#8203;get_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-mime-decode.php" title="iconv_&#8203;mime_&#8203;decode">iconv_&#8203;mime_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-mime-decode-headers.php" title="iconv_&#8203;mime_&#8203;decode_&#8203;headers">iconv_&#8203;mime_&#8203;decode_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-mime-encode.php" title="iconv_&#8203;mime_&#8203;encode">iconv_&#8203;mime_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-set-encoding.php" title="iconv_&#8203;set_&#8203;encoding">iconv_&#8203;set_&#8203;encoding</a>
                        </li>
                                                <li class="current">
                            <a href="function.iconv-strlen.php" title="iconv_&#8203;strlen">iconv_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-strpos.php" title="iconv_&#8203;strpos">iconv_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-strrpos.php" title="iconv_&#8203;strrpos">iconv_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-substr.php" title="iconv_&#8203;substr">iconv_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-iconv-handler.php" title="ob_&#8203;iconv_&#8203;handler">ob_&#8203;iconv_&#8203;handler</a>
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
