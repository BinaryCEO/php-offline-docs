<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: virtual - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.virtual.php">
 <link rel="shorturl" href="https://www.php.net/virtual">
 <link rel="alternate" href="https://www.php.net/virtual" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.apache.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.getallheaders.php">
 <link rel="next" href="https://www.php.net/manual/en/book.fpm.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.virtual.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.virtual.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.virtual.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.virtual.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.virtual.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.virtual.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.virtual.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.virtual.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.virtual.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.virtual.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.virtual.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Perform an Apache sub-request" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: virtual - Manual" />
<meta name="twitter:description" content="Perform an Apache sub-request" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: virtual - Manual" />
<meta itemprop="description" content="Perform an Apache sub-request" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Perform an Apache sub-request" />

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
        <a href="book.fpm.php">
          FastCGI Process Manager &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.getallheaders.php">
          &laquo; getallheaders        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.server.php'>Server Specific Extensions</a></li>      <li><a href='book.apache.php'>Apache</a></li>      <li><a href='ref.apache.php'>Apache Functions</a></li>      </ul>
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
            <option value='en/function.virtual.php' selected="selected">English</option>
            <option value='de/function.virtual.php'>German</option>
            <option value='es/function.virtual.php'>Spanish</option>
            <option value='fr/function.virtual.php'>French</option>
            <option value='it/function.virtual.php'>Italian</option>
            <option value='ja/function.virtual.php'>Japanese</option>
            <option value='pt_BR/function.virtual.php'>Brazilian Portuguese</option>
            <option value='ru/function.virtual.php'>Russian</option>
            <option value='tr/function.virtual.php'>Turkish</option>
            <option value='uk/function.virtual.php'>Ukrainian</option>
            <option value='zh/function.virtual.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.virtual" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">virtual</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">virtual</span> &mdash; <span class="dc-title">Perform an Apache sub-request</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.virtual-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>virtual</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$uri</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>virtual()</strong></span> is an Apache-specific function which
   is similar to <code class="literal">&lt;!--#include virtual...--&gt;</code> in
   <code class="literal">mod_include</code>.
   It performs an Apache sub-request.  It is useful for including
   CGI scripts or <var class="filename">.shtml</var> files, or anything else that you would
   parse through Apache. Note that for a CGI script, the script
   must generate valid CGI headers.  At the minimum that means it
   must generate a <code class="literal">Content-Type</code> header.
  </p>
  <p class="para">
   To run the sub-request, all buffers are terminated and flushed to the
   browser, pending headers are sent too.
  </p>
  <p class="simpara">This function is supported when PHP
is installed as an Apache module webserver.
</p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.virtual-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">uri</code></dt>
     <dd>
      <p class="para">
       The file that the virtual command will be performed on.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.virtual-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Performs the virtual command on success, or returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.virtual-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   See <span class="function"><a href="function.apache-note.php" class="function">apache_note()</a></span> for an example.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.virtual-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    The query string can be passed to the included file but
    <var class="varname"><a href="reserved.variables.get.php" class="classname">$_GET</a></var> is copied from the parent script and only
    <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['QUERY_STRING']</a></var> is filled with the passed
    query string. The query string may only be passed when using Apache 2.
    The requested file will not be listed in the Apache access log.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Environment variables set in the requested file are not visible to the
    calling script.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function may be used on PHP files. However, it is typically better
    to use <span class="function"><a href="function.include.php" class="function">include</a></span> or <span class="function"><a href="function.require.php" class="function">require</a></span> for
    PHP files.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.virtual-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.apache-note.php" class="function" rel="rdfs-seeAlso">apache_note()</a> - Get and set apache request notes</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/apache/functions/virtual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.virtual%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.virtual&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.virtual.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124597">  <div class="votes">
    <div id="Vu124597">
    <a href="/manual/vote-note.php?id=124597&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124597">
    <a href="/manual/vote-note.php?id=124597&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124597" title="100% like this...">
    4
    </div>
  </div>
  <a href="#124597" class="name">
  <strong class="user"><em>php at nagler-ihlein dot de</em></strong></a><a class="genanchor" href="#124597"> &para;</a><div class="date" title="2020-01-10 01:22"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124597">
<div class="phpcode"><code><span class="html">Starting with 7.2 various session related things were changed and it seems part of it is conflicting with virtual(). Calling it you may receive a "PHP Warning:  virtual(): Headers already sent. You cannot change the session module's ini settings at this time in ..." although no header was set and virtual() should simply provide static content from a file.<br /><br />It took half a day to find out that some main session.configuration.php settings (e.g. save_handler, serialize_handler, or save_path) in the Apache config (all levels) are causing this. It seems the settings are regarded as likely to change headers but virtual() is already beyond sending them. Unfortunately the warning is then not only logged to error_log but also part of the content virtual() sends to the client which screws it up - the format of the content like binary image data is no more correct.<br /><br />If you do not need php's session management you can remove all session.* settings in your apache configuration to avoid the warning. Otherwise a workaround is to switch off E_WARNING before calling virtual().<br /><br /><span class="default">&lt;?php<br />$filename </span><span class="keyword">= </span><span class="string">'/data/image.jpg'</span><span class="keyword">;<br /></span><span class="default">$level </span><span class="keyword">= </span><span class="default">error_reporting</span><span class="keyword">();<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">$level </span><span class="keyword">&amp; ~</span><span class="default">E_WARNING</span><span class="keyword">); <br /></span><span class="default">virtual</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">$level</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="28124">  <div class="votes">
    <div id="Vu28124">
    <a href="/manual/vote-note.php?id=28124&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28124">
    <a href="/manual/vote-note.php?id=28124&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28124" title="100% like this...">
    3
    </div>
  </div>
  <a href="#28124" class="name">
  <strong class="user"><em>php at n-wise dot com</em></strong></a><a class="genanchor" href="#28124"> &para;</a><div class="date" title="2003-01-02 11:15"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28124">
<div class="phpcode"><code><span class="html">I saw the note above about the length of the query string... but didn't know what it was, so have altered the code so it can post to the script.<br />Probly only works on nix systems as it makes use of the echo function...<br />This code also will look evaluate the result, so you can get cgi to dynamically create PHP (probly best to watch out that posted variables do not include script!)<br />&lt;?<br />$CGISCRIPT="./cgi-bin/cgiscript.cgi";<br /> // preparing the arguments passed to this PHP page <br />$QSTRING = $QUERY_STRING; <br /><br />foreach ($HTTP_POST_VARS as $header=&gt; $value ){<br /> if($QSTRING==""){<br />    $QSTRING = $header.'='.urlencode($value); <br /> }else{<br />    $QSTRING = $QSTRING.'&amp;'.$header.'='.urlencode($value); <br /> }<br />}<br /> <br />putenv('REQUEST_METHOD=POST'); <br />putenv('CONTENT_TYPE=application/x-www-form-urlencoded');<br />putenv('CONTENT_LENGTH='.strlen($QSTRING));<br />putenv('QUERY_STRING='.$QSTRING); <br />unset($return_array); <br />exec('echo "'.$QSTRING.'"| '.$CGISCRIPT, $return_array, $return_val); <br /><br />//The 1st line of my script was "Content...." ... so remove it!<br />$firstline=array_shift($return_array);<br />//evaluate the code<br />eval('?&gt;'.implode($return_array,''));<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="18104">  <div class="votes">
    <div id="Vu18104">
    <a href="/manual/vote-note.php?id=18104&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18104">
    <a href="/manual/vote-note.php?id=18104&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18104" title="80% like this...">
    3
    </div>
  </div>
  <a href="#18104" class="name">
  <strong class="user"><em>crazyted at crazyted dot com</em></strong></a><a class="genanchor" href="#18104"> &para;</a><div class="date" title="2002-01-10 11:57"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18104">
<div class="phpcode"><code><span class="html">I have a header that's include()'ed on each of my pages. I then wanted to add a Perl script to that header file (header.php) via the virtual() command. <br /><br />Since my header is used by documents in my /www folder along with other folders inside that (and inside those), and virtual() seems to take only relative paths, I had to write some code to dynamically get the path to the perl script.<br /><br />Hope this helps some ppl out:<br /><br />  $cwd = getcwd();<br />  $script_name = "cgi-bin/perl_script.pl";<br />  $count = substr_count($cwd, '/');<br />  $count = $count - 3;<br />  // get rid of extra absolute paths since my directory is /home/user/www<br /><br />  // Add additional path information<br />  for($i = 1; $i &lt;= $count; $i++){<br />    $script_name = "../".$script_name;      <br />  }<br />  virtual($script_name);</span></code></div>
  </div>
 </div>
  <div class="note" id="67945">  <div class="votes">
    <div id="Vu67945">
    <a href="/manual/vote-note.php?id=67945&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67945">
    <a href="/manual/vote-note.php?id=67945&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67945" title="63% like this...">
    3
    </div>
  </div>
  <a href="#67945" class="name">
  <strong class="user"><em>vcaron at bearstech dot com</em></strong></a><a class="genanchor" href="#67945"> &para;</a><div class="date" title="2006-07-07 03:26"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67945">
<div class="phpcode"><code><span class="html">You can use virtual() to implement your own dispatcher/auth handler in an efficient and effective way.<br /><br />For instance if you have a bunch of images you would like to be served statically by Apache (its job after all), but with a more com<br />plex access pattern than mod_access allows you to do (say a MySQL lookup with your app logic), try this simple Apache rule:<br /><br />  Order Allow,Deny<br />  Allow from env=PHP_ALLOW<br /><br />Then in your PHP script, before sending any content or header:<br /><br /><span class="default">&lt;?php<br />$image </span><span class="keyword">= </span><span class="string">"/some/URL/path/test.png"</span><span class="keyword">;<br />if (</span><span class="default">client_may_view_image</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">)) {<br />  </span><span class="default">apache_setenv</span><span class="keyword">(</span><span class="string">'PHP_ALLOW'</span><span class="keyword">, </span><span class="string">'1'</span><span class="keyword">);<br />  if (</span><span class="default">virtual</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">))<br />    exit(</span><span class="default">0</span><span class="keyword">);<br />  echo </span><span class="string">"Ops, failed to fetched granted image </span><span class="default">$image</span><span class="string"> (hammer your webmaster).\n"</span><span class="keyword">;<br />} else<br />  echo </span><span class="string">"Sorry buddy, you're not allowed in here.\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Of course very Apache-ish, but it's much more efficient and uniform to rely on Apache rather than passthru() and mime_content_type()<br /> hacks : it does the path lookup and auth/security audit as the admin expects, use the best static serving it can (think 'sendfile')<br /> and you can even chain your request with another embedded script eg. in mod_perl.</span></code></div>
  </div>
 </div>
  <div class="note" id="2477">  <div class="votes">
    <div id="Vu2477">
    <a href="/manual/vote-note.php?id=2477&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd2477">
    <a href="/manual/vote-note.php?id=2477&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V2477" title="75% like this...">
    2
    </div>
  </div>
  <a href="#2477" class="name">
  <strong class="user"><em>david at audiogalaxy dot com</em></strong></a><a class="genanchor" href="#2477"> &para;</a><div class="date" title="1999-11-28 10:44"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom2477">
<div class="phpcode"><code><span class="html">Virtual returns the HTTP entity header after the requested file, when it's the first output to the page.
<br />
<br />The work-around to prevent seeing the header is, of course, to output something (such as echo " "; ) before calling virtual.</span></code></div>
  </div>
 </div>
  <div class="note" id="111080">  <div class="votes">
    <div id="Vu111080">
    <a href="/manual/vote-note.php?id=111080&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111080">
    <a href="/manual/vote-note.php?id=111080&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111080" title="61% like this...">
    3
    </div>
  </div>
  <a href="#111080" class="name">
  <strong class="user"><em>Peter Kehl</em></strong></a><a class="genanchor" href="#111080"> &para;</a><div class="date" title="2013-01-12 03:47"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111080">
<div class="phpcode"><code><span class="html">This documentation is not clear enough. Parameter $filename is not a filename as on the filesystem, but a URI. It can be absolute, starting with /, or relative to URI that involved the PHP script which called virtual(). (I.e. if the PHP script that calls virtual() is invoked via PHP require/require_once/include/include_once mechanism and it passes a relative URI to virtual(), then that URI must be relative to the URI of the topmost PHP script on the inclusion stack.)<br /><br />Not sure how relative URIs work if the request which calls virtual() was processed through Apache rewrite rules.</span></code></div>
  </div>
 </div>
  <div class="note" id="88722">  <div class="votes">
    <div id="Vu88722">
    <a href="/manual/vote-note.php?id=88722&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88722">
    <a href="/manual/vote-note.php?id=88722&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88722" title="60% like this...">
    3
    </div>
  </div>
  <a href="#88722" class="name">
  <strong class="user"><em>phpforum at joolee dot nl</em></strong></a><a class="genanchor" href="#88722"> &para;</a><div class="date" title="2009-02-04 12:00"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88722">
<div class="phpcode"><code><span class="html">Problem with most of the scripts posted below is that virtual() flushes the pending headers before making the subrequest. Requesting an image with virtual() still returns a text/html type document.<br />A workaround is to set the content-type first. But that requires getting the content-type first.<br /><br />I'm using the following script for now. A disadvantage is that Apache makes 2 subrequests.<br /><br /><span class="default">&lt;?PHP<br />$file </span><span class="keyword">= </span><span class="string">'/resources/7z.gif'</span><span class="keyword">;<br /></span><span class="default">$file_info </span><span class="keyword">= </span><span class="default">apache_lookup_uri</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'content-type: ' </span><span class="keyword">. </span><span class="default">$file_info </span><span class="keyword">-&gt; </span><span class="default">content_type</span><span class="keyword">);<br /></span><span class="default">virtual</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />die();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75023">  <div class="votes">
    <div id="Vu75023">
    <a href="/manual/vote-note.php?id=75023&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75023">
    <a href="/manual/vote-note.php?id=75023&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75023" title="66% like this...">
    1
    </div>
  </div>
  <a href="#75023" class="name">
  <strong class="user"><em>Anonymous at spam dot org</em></strong></a><a class="genanchor" href="#75023"> &para;</a><div class="date" title="2007-05-08 05:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75023">
<div class="phpcode"><code><span class="html">Note that QUERY_STRING seems to get inherited, so to make a virtual request WITHOUT one, one needs to explicitly append a "?" to the URL of the sub-request (to cause the creation of a "null" query string).  Of course, if the desired URL has its own query string, that will override and an additional "?" should not be appended.<br /><br />This was with PHP 4.4.7 (released May 2007).</span></code></div>
  </div>
 </div>
  <div class="note" id="61507">  <div class="votes">
    <div id="Vu61507">
    <a href="/manual/vote-note.php?id=61507&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61507">
    <a href="/manual/vote-note.php?id=61507&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61507" title="66% like this...">
    1
    </div>
  </div>
  <a href="#61507" class="name">
  <strong class="user"><em>ruibal_DELETED_p*AT*gmail__dot__com</em></strong></a><a class="genanchor" href="#61507"> &para;</a><div class="date" title="2006-02-05 03:04"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61507">
<div class="phpcode"><code><span class="html">when php is installed as an apache module, this works pretty well for writing your own php preprocessor/information logger. For example, requests to any URI underneath pre.php will first be executed by pre.php, then returned to the user.<br />&lt;?<br />$docroot        = $_SERVER['DOCUMENT_ROOT'];<br />$script_root    = str_replace( basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME'] );<br />$script_ext     = substr( $_SERVER['SCRIPT_NAME'], strrpos( $_SERVER['SCRIPT_NAME'],'.' ) );<br />$fakework_root  = $script_root.basename( $_SERVER['SCRIPT_NAME'] ).'/';<br />$framework_root = $script_root.'_'.basename( $_SERVER['SCRIPT_NAME'], $script_ext ).'/';<br />$frequest_root  = dirname( $framework_root.substr( $_SERVER['PATH_INFO'], 1 )).'/';<br />$frequest_name  = basename( $_SERVER['PATH_INFO'] );<br />$frequest_ext   = (strrpos($frequest_name,'.')===FALSE ? FALSE : strtolower(substr( $frequest_name, ( strrpos( $frequest_name, '.' )+1 ) ) ) );<br />$frequest_full  = $frequest_root.$frequest_name;<br />$doc_frequest   = $docroot.$frequest_full;<br />$doc_framework   = $docroot.$framework_root;<br /><br />$DO_PARSE = in_array( $frequest_ext, $chk_exts );<br />if( $DO_PARSE )<br />{<br />    $tmpfname = tempnam( $doc_framework.'tmp', 'aj_' ).($frequest_ext? ('.'.$frequest_ext) : '');<br />    if( ($to_parse=@file_get_contents($doc_frequest))===FALSE )<br />        $to_parse="404";<br />    $tmpvname = str_replace( $docroot, '', $tmpfname ); <br />    $tmpvname = str_replace( '\\\\', '/', $tmpvname ); <br />// - - - - - - - - - - - - - - - - - - - - - - - - - - -<br />//  Do processing of data stored in $to_parse<br />// - - - - - - - - - - - - - - - - - - - - - - - - - - -<br />    $to_parse = striptags( $to_parse );<br /><br />// - - - - - - - - - - - - - - - - - - - - - - - - - - -<br />    $handle = fopen($tmpfname, "w");<br />    fwrite($handle, $to_parse);<br />    fclose($handle);<br />    @virtual( $tmpvname.$getvars );<br />    unlink( $tmpfname );<br />}<br />else<br />    @virtual( $frequest_full.$getvars );<br /><br />?&gt;<br /><br />So all files in <a href="http://server/sub/pre.php/path/" rel="nofollow" target="_blank">http://server/sub/pre.php/path/</a> are really located in <a href="http://server/sub/_pre/path/" rel="nofollow" target="_blank">http://server/sub/_pre/path/</a><br /><br />All this needs is some kind of caching mechanism.<br /><br />But yeah, this could be modified to add watermarks with the image functions, convert to xml with Tidy, check for extensions better with mimeTypes, proxy content with cURL, validate $_SERVER['HTTP_REFERER'] or $_SERVER['HTTP_USER_AGENT'], etc etc<br /><br />This gives you much more over than the auto_prepend_file, and auto_append_file, for certain functionality<br /><br />The key is the virtual function _because_ it delivers the modified content with an apache subrequest.</span></code></div>
  </div>
 </div>
  <div class="note" id="14433">  <div class="votes">
    <div id="Vu14433">
    <a href="/manual/vote-note.php?id=14433&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14433">
    <a href="/manual/vote-note.php?id=14433&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14433" title="66% like this...">
    1
    </div>
  </div>
  <a href="#14433" class="name">
  <strong class="user"><em>s dot dan at free dot fr</em></strong></a><a class="genanchor" href="#14433"> &para;</a><div class="date" title="2001-07-31 08:43"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14433">
<div class="phpcode"><code><span class="html">Another way of passing arguments:
<br />If you have some CGI programs that depend on some libraries where you can't change the source code (in my case an online payment library), you can pass the arguments by changing some environment variables.
<br />
<br />Of course the CGI program has to get the GET/POST variables in the usual manner.
<br />It simulates, more or less, a direct call from the server to a CGI program:
<br />
<br />// preparing the arguments passed to this PHP page
<br />$QSTRING = $QUERY_STRING;
<br />
<br />// pay attention to the maximum length of the QUERY string.
<br />while (list ($header, $value) = each ($HTTP_POST_VARS)){
<br />  if (empty($QSTRING))
<br />    $QSTRING = $header.'='.$value;
<br /> else
<br />    $QSTRING = $QSTRING.'&amp;'.$header.'='.$value;
<br />} 
<br />
<br />putenv('REQUEST_METHOD=GET');
<br />putenv('QUERY_STRING='.$QSTRING);
<br />
<br />unset($return_array);
<br />exec('my_CGI', $return_array, $return_val);
<br />
<br />Now you can parse the output of 'my_CGI' in return_array.</span></code></div>
  </div>
 </div>
  <div class="note" id="12653">  <div class="votes">
    <div id="Vu12653">
    <a href="/manual/vote-note.php?id=12653&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12653">
    <a href="/manual/vote-note.php?id=12653&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12653" title="66% like this...">
    1
    </div>
  </div>
  <a href="#12653" class="name">
  <strong class="user"><em>logang at deltatee dot com</em></strong></a><a class="genanchor" href="#12653"> &para;</a><div class="date" title="2001-04-26 07:21"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12653">
<div class="phpcode"><code><span class="html">If you want to pass all post and get values to the cgi script you can use this code:
<br />
<br /><span class="default">&lt;?php
<br />$QSTRING </span><span class="keyword">= </span><span class="default">$QUERY_STRING</span><span class="keyword">;
<br />while (list (</span><span class="default">$header</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) = </span><span class="default">each </span><span class="keyword">(</span><span class="default">$HTTP_POST_VARS</span><span class="keyword">)) 
<br />{
<br />   </span><span class="default">$QSTRING </span><span class="keyword">= </span><span class="default">$QSTRING</span><span class="keyword">.</span><span class="string">'&amp;'</span><span class="keyword">.</span><span class="default">$header</span><span class="keyword">.</span><span class="string">'='</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">virtual</span><span class="keyword">(</span><span class="default">$script</span><span class="keyword">.</span><span class="string">'?'</span><span class="keyword">.</span><span class="default">$QSTRING</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />It takes all the values of $HTTP_POST_VARS and appends them in the proper format to the values you get in $QUERY_STRING</span></code></div>
  </div>
 </div>
  <div class="note" id="95034">  <div class="votes">
    <div id="Vu95034">
    <a href="/manual/vote-note.php?id=95034&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95034">
    <a href="/manual/vote-note.php?id=95034&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95034" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95034" class="name">
  <strong class="user"><em>jhibbard at gmail dot com</em></strong></a><a class="genanchor" href="#95034"> &para;</a><div class="date" title="2009-12-09 02:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95034">
<div class="phpcode"><code><span class="html">While the virtual() function has it's promising sides, there exists issues when using it in relation to a cache system such as eAccellerator.  The issue becomes that the first time you load with a virtual file, it will seem to work fine.  But once the cache is put into play, the virtual call will end up returning nothing at all, and basically returning a blank page.<br /><br />Please realize that this is not an issue with virtual(), but instead an issue of the cacheing application.  Should anyone else have a similar issue, hopefully this will shed some light onto this subject.<br /><br />Jonathon Hibbard</span></code></div>
  </div>
 </div>
  <div class="note" id="33142">  <div class="votes">
    <div id="Vu33142">
    <a href="/manual/vote-note.php?id=33142&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33142">
    <a href="/manual/vote-note.php?id=33142&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33142" title="50% like this...">
    0
    </div>
  </div>
  <a href="#33142" class="name">
  <strong class="user"><em>abentley at panoramicfeedback dot com</em></strong></a><a class="genanchor" href="#33142"> &para;</a><div class="date" title="2003-06-17 10:29"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33142">
<div class="phpcode"><code><span class="html">Here's an update to tomwk's code:<br />function safe_virtual( $filename )<br />{<br />   $curDir = getcwd();<br />   virtual ( $filename );<br />   chdir( $curDir );<br />}<br /><br />This is better if you've already changed your current directory to be something other than your script's directory.  It works for PHP4 and above.</span></code></div>
  </div>
 </div>
  <div class="note" id="26634">  <div class="votes">
    <div id="Vu26634">
    <a href="/manual/vote-note.php?id=26634&amp;page=function.virtual&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26634">
    <a href="/manual/vote-note.php?id=26634&amp;page=function.virtual&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26634" title="50% like this...">
    0
    </div>
  </div>
  <a href="#26634" class="name">
  <strong class="user"><em>chardin at ssc dot wisc dot edu</em></strong></a><a class="genanchor" href="#26634"> &para;</a><div class="date" title="2002-11-07 03:00"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26634">
<div class="phpcode"><code><span class="html">If you are having problems using virtual include becuase of files being stored in different directories, a root-relative path will make things much easier:<br /><br />virtual ("/root directory/directory/filename.htm/");<br /><br />where root directory is the root directory of your site (ask your sys admin if you dont know what it is) Don't include the protocol or host name.<br /><br />This will also allow you to move your files around your site without having to redirect your includes which is *very* helpfull</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.virtual&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.virtual.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.apache.php">Apache Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.apache-child-terminate.php" title="apache_&#8203;child_&#8203;terminate">apache_&#8203;child_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-get-modules.php" title="apache_&#8203;get_&#8203;modules">apache_&#8203;get_&#8203;modules</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-get-version.php" title="apache_&#8203;get_&#8203;version">apache_&#8203;get_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-getenv.php" title="apache_&#8203;getenv">apache_&#8203;getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-lookup-uri.php" title="apache_&#8203;lookup_&#8203;uri">apache_&#8203;lookup_&#8203;uri</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-note.php" title="apache_&#8203;note">apache_&#8203;note</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-request-headers.php" title="apache_&#8203;request_&#8203;headers">apache_&#8203;request_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-response-headers.php" title="apache_&#8203;response_&#8203;headers">apache_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-setenv.php" title="apache_&#8203;setenv">apache_&#8203;setenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getallheaders.php" title="getallheaders">getallheaders</a>
                        </li>
                                                <li class="current">
                            <a href="function.virtual.php" title="virtual">virtual</a>
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
