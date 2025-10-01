<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mb_split - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mb-split.php">
 <link rel="shorturl" href="https://www.php.net/mb-split">
 <link rel="alternate" href="https://www.php.net/mb-split" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mb-send-mail.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-str-pad.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mb-split.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mb-split.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mb-split.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mb-split.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mb-split.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mb-split.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mb-split.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mb-split.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mb-split.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mb-split.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mb-split.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Split multibyte string using regular expression" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mb_split - Manual" />
<meta name="twitter:description" content="Split multibyte string using regular expression" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mb_split - Manual" />
<meta itemprop="description" content="Split multibyte string using regular expression" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Split multibyte string using regular expression" />

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
        <a href="function.mb-str-pad.php">
          mb_str_pad &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mb-send-mail.php">
          &laquo; mb_send_mail        </a>
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
            <option value='en/function.mb-split.php' selected="selected">English</option>
            <option value='de/function.mb-split.php'>German</option>
            <option value='es/function.mb-split.php'>Spanish</option>
            <option value='fr/function.mb-split.php'>French</option>
            <option value='it/function.mb-split.php'>Italian</option>
            <option value='ja/function.mb-split.php'>Japanese</option>
            <option value='pt_BR/function.mb-split.php'>Brazilian Portuguese</option>
            <option value='ru/function.mb-split.php'>Russian</option>
            <option value='tr/function.mb-split.php'>Turkish</option>
            <option value='uk/function.mb-split.php'>Ukrainian</option>
            <option value='zh/function.mb-split.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mb-split" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mb_split</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mb_split</span> &mdash; <span class="dc-title">Split multibyte string using regular expression</span></p>

 </div>
   
 <div class="refsect1 description" id="refsect1-function.mb-split-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mb_split</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = -1</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="simpara">
   Split a multibyte
   <code class="parameter">string</code> using regular expression
   <code class="parameter">pattern</code> and returns the result as an
   <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mb-split-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">
       The regular expression pattern.
      </p>
     </dd>
    
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being split.
      </p>
     </dd>
    
    
     <dt><code class="parameter">limit</code></dt>
     <dd>
      <span class="simpara">
       If optional parameter <code class="parameter">limit</code> is specified, 
       it will be split in <code class="parameter">limit</code> elements as
       maximum.
      </span>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mb-split-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The result as an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.mb-split-notes">
  <h3 class="title">Notes</h3>
  
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">The
character encoding specified by <span class="function"><a href="function.mb-regex-encoding.php" class="function">mb_regex_encoding()</a></span>
will be used as the character encoding for this function by default.</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mb-split-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-regex-encoding.php" class="function" rel="rdfs-seeAlso">mb_regex_encoding()</a> - Set/Get character encoding for multibyte regex</span></li>
    <li><span class="function"><a href="function.mb-ereg.php" class="function" rel="rdfs-seeAlso">mb_ereg()</a> - Regular expression match with multibyte support</span></li>
    <li><span class="function"><a href="function.explode.php" class="function" rel="rdfs-seeAlso">explode()</a> - Split a string by a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/functions/mb-split.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mb-split%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mb-split&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-split.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117588">  <div class="votes">
    <div id="Vu117588">
    <a href="/manual/vote-note.php?id=117588&amp;page=function.mb-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117588">
    <a href="/manual/vote-note.php?id=117588&amp;page=function.mb-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117588" title="90% like this...">
    75
    </div>
  </div>
  <a href="#117588" class="name">
  <strong class="user"><em>Stas Trefilov, Vertilia</em></strong></a><a class="genanchor" href="#117588"> &para;</a><div class="date" title="2015-07-02 11:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117588">
<div class="phpcode"><code><span class="html">a (simpler) way to extract all characters from a UTF-8 string to array with a single call to a built-in function:<br /><br /><span class="default">&lt;?php<br />  $str </span><span class="keyword">= </span><span class="string">'Ма-<br />руся'</span><span class="keyword">;<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'//u'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />Array<br />(<br />    [0] =&gt; М<br />    [1] =&gt; а<br />    [2] =&gt; -<br />    [3] =&gt; <br /><br />    [4] =&gt; р<br />    [5] =&gt; у<br />    [6] =&gt; с<br />    [7] =&gt; я<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="103470">  <div class="votes">
    <div id="Vu103470">
    <a href="/manual/vote-note.php?id=103470&amp;page=function.mb-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103470">
    <a href="/manual/vote-note.php?id=103470&amp;page=function.mb-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103470" title="88% like this...">
    61
    </div>
  </div>
  <a href="#103470" class="name">
  <strong class="user"><em>boukeversteegh at gmail dot com</em></strong></a><a class="genanchor" href="#103470"> &para;</a><div class="date" title="2011-04-14 01:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103470">
<div class="phpcode"><code><span class="html">The $pattern argument doesn't use /pattern/ delimiters, unlike other regex functions such as preg_match.<br /><br /><span class="default">&lt;?php<br />   </span><span class="comment"># Works. No slashes around the /pattern/<br />   </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">mb_split</span><span class="keyword">(</span><span class="string">"\s"</span><span class="keyword">, </span><span class="string">"hello world"</span><span class="keyword">) );<br />   Array (<br />      [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">hello<br />      </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">world<br />   </span><span class="keyword">)<br /><br />   </span><span class="comment"># Doesn't work:<br />   </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">mb_split</span><span class="keyword">(</span><span class="string">"/\s/"</span><span class="keyword">, </span><span class="string">"hello world"</span><span class="keyword">) );<br />   Array (<br />      [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">hello world<br />   </span><span class="keyword">)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80046">  <div class="votes">
    <div id="Vu80046">
    <a href="/manual/vote-note.php?id=80046&amp;page=function.mb-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80046">
    <a href="/manual/vote-note.php?id=80046&amp;page=function.mb-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80046" title="76% like this...">
    48
    </div>
  </div>
  <a href="#80046" class="name">
  <strong class="user"><em>adjwilli at yahoo dot com</em></strong></a><a class="genanchor" href="#80046"> &para;</a><div class="date" title="2007-12-26 09:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80046">
<div class="phpcode"><code><span class="html">I figure most people will want a simple way to break-up a multibyte string into its individual characters. Here's a function I'm using to do that. Change UTF-8 to your chosen encoding method.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mbStringToArray </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {
<br />    </span><span class="default">$strlen </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />    while (</span><span class="default">$strlen</span><span class="keyword">) {
<br />        </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="string">"UTF-8"</span><span class="keyword">);
<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">$strlen</span><span class="keyword">,</span><span class="string">"UTF-8"</span><span class="keyword">);
<br />        </span><span class="default">$strlen </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />    }
<br />    return </span><span class="default">$array</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108189">  <div class="votes">
    <div id="Vu108189">
    <a href="/manual/vote-note.php?id=108189&amp;page=function.mb-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108189">
    <a href="/manual/vote-note.php?id=108189&amp;page=function.mb-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108189" title="80% like this...">
    12
    </div>
  </div>
  <a href="#108189" class="name">
  <strong class="user"><em>gunkan at terra dot es</em></strong></a><a class="genanchor" href="#108189"> &para;</a><div class="date" title="2012-04-05 06:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108189">
<div class="phpcode"><code><span class="html">To split an string like this: "日、に、本、ほん、語、ご" using the "、" delimiter i used:<br /><br />     $v = mb_split('、',"日、に、本、ほん、語、ご");<br /><br />but didn't work.<br /><br />The solution was to set this before:<br /><br />       mb_regex_encoding('UTF-8');<br />      mb_internal_encoding("UTF-8"); <br />     $v = mb_split('、',"日、に、本、ほん、語、ご");<br /><br />and now it's working:<br /><br />Array<br />(<br />    [0] =&gt; 日<br />    [1] =&gt; に<br />    [2] =&gt; 本<br />    [3] =&gt; ほん<br />    [4] =&gt; 語<br />    [5] =&gt; ご<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="99851">  <div class="votes">
    <div id="Vu99851">
    <a href="/manual/vote-note.php?id=99851&amp;page=function.mb-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99851">
    <a href="/manual/vote-note.php?id=99851&amp;page=function.mb-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99851" title="73% like this...">
    22
    </div>
  </div>
  <a href="#99851" class="name">
  <strong class="user"><em>boukeversteegh at gmail dot com</em></strong></a><a class="genanchor" href="#99851"> &para;</a><div class="date" title="2010-09-10 09:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99851">
<div class="phpcode"><code><span class="html">In addition to Sezer Yalcin's tip.
<br />
<br />This function splits a multibyte string into an array of characters. Comparable to str_split().
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mb_str_split</span><span class="keyword">( </span><span class="default">$string </span><span class="keyword">) {
<br />    </span><span class="comment"># Split at all position not after the start: ^
<br />    # and not before the end: $
<br />    </span><span class="keyword">return </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/(?&lt;!^)(?!$)/u'</span><span class="keyword">, </span><span class="default">$string </span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$string   </span><span class="keyword">= </span><span class="string">'火车票'</span><span class="keyword">;
<br /></span><span class="default">$charlist </span><span class="keyword">= </span><span class="default">mb_str_split</span><span class="keyword">( </span><span class="default">$string </span><span class="keyword">);
<br />
<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$charlist </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br /># Prints:
<br />Array
<br />(
<br />    [0] =&gt; 火
<br />    [1] =&gt; 车
<br />    [2] =&gt; 票
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="121330">  <div class="votes">
    <div id="Vu121330">
    <a href="/manual/vote-note.php?id=121330&amp;page=function.mb-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121330">
    <a href="/manual/vote-note.php?id=121330&amp;page=function.mb-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121330" title="62% like this...">
    2
    </div>
  </div>
  <a href="#121330" class="name">
  <strong class="user"><em>thflori at gmail</em></strong></a><a class="genanchor" href="#121330"> &para;</a><div class="date" title="2017-07-06 02:34"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121330">
<div class="phpcode"><code><span class="html">I agree that some people might want a mb_explode('', $string);<br /><br />this is my solution for it:<br /><br /><span class="default">&lt;?php<br /><br />$string </span><span class="keyword">= </span><span class="string">'Hallöle'</span><span class="keyword">;<br /><br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function (</span><span class="default">$i</span><span class="keyword">) use (</span><span class="default">$string</span><span class="keyword">) { <br />    return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); <br />}, </span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) -</span><span class="default">1</span><span class="keyword">));<br /><br /></span><span class="default">expect</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)-&gt;</span><span class="default">toEqual</span><span class="keyword">([</span><span class="string">'H'</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'l'</span><span class="keyword">, </span><span class="string">'l'</span><span class="keyword">, </span><span class="string">'ö'</span><span class="keyword">, </span><span class="string">'l'</span><span class="keyword">, </span><span class="string">'e'</span><span class="keyword">]);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92665">  <div class="votes">
    <div id="Vu92665">
    <a href="/manual/vote-note.php?id=92665&amp;page=function.mb-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92665">
    <a href="/manual/vote-note.php?id=92665&amp;page=function.mb-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92665" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#92665" class="name">
  <strong class="user"><em>gert dot matern at web dot de</em></strong></a><a class="genanchor" href="#92665"> &para;</a><div class="date" title="2009-08-03 03:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92665">
<div class="phpcode"><code><span class="html">We are talking about Multi Byte ( e.g. UTF-8) strings here, so preg_split will fail for the following string: 
<br />
<br />'Weiße Rosen sind nicht grün!'
<br />
<br />And because I didn't find a regex to simulate a str_split I optimized the first solution from adjwilli a bit:
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="string">'Weiße Rosen sind nicht grün!'
<br /></span><span class="default">$stop   </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">( </span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="default">$result </span><span class="keyword">= array();
<br />
<br />for( </span><span class="default">$idx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$idx </span><span class="keyword">&lt; </span><span class="default">$stop</span><span class="keyword">; </span><span class="default">$idx</span><span class="keyword">++)
<br />{
<br />   </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">mb_substr</span><span class="keyword">( </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$idx</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Here is an example with adjwilli's function:
<br />
<br /><span class="default">&lt;?php
<br />mb_internal_encoding</span><span class="keyword">( </span><span class="string">'UTF-8'</span><span class="keyword">);
<br /></span><span class="default">mb_regex_encoding</span><span class="keyword">( </span><span class="string">'UTF-8'</span><span class="keyword">);  
<br />
<br />function </span><span class="default">mbStringToArray
<br /></span><span class="keyword">( </span><span class="default">$string
<br /></span><span class="keyword">)
<br />{
<br />  </span><span class="default">$stop   </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">( </span><span class="default">$string</span><span class="keyword">);
<br />  </span><span class="default">$result </span><span class="keyword">= array();
<br />
<br />  for( </span><span class="default">$idx </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$idx </span><span class="keyword">&lt; </span><span class="default">$stop</span><span class="keyword">; </span><span class="default">$idx</span><span class="keyword">++)
<br />  {
<br />     </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">mb_substr</span><span class="keyword">( </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$idx</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />  }
<br />
<br />  return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br />
<br />echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">, 
<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">mbStringToArray</span><span class="keyword">( </span><span class="string">'Weiße Rosen sind nicht grün!'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">)), </span><span class="default">PHP_EOL</span><span class="keyword">,
<br /></span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">; 
<br /></span><span class="default">?&gt;
<br /></span>
<br />Let me know [by personal email], if someone found a regex to simulate a str_split with mb_split.</span></code></div>
  </div>
 </div>
  <div class="note" id="96969">  <div class="votes">
    <div id="Vu96969">
    <a href="/manual/vote-note.php?id=96969&amp;page=function.mb-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96969">
    <a href="/manual/vote-note.php?id=96969&amp;page=function.mb-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96969" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#96969" class="name">
  <strong class="user"><em>qdb at kukmara dot ru</em></strong></a><a class="genanchor" href="#96969"> &para;</a><div class="date" title="2010-03-25 02:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96969">
<div class="phpcode"><code><span class="html">an other way to str_split multibyte string:<br /><span class="default">&lt;?php<br />$s</span><span class="keyword">=</span><span class="string">'әӘөүҗңһ'</span><span class="keyword">;<br /><br /></span><span class="comment">//$temp_s=iconv('UTF-8','UTF-16',$s);<br /></span><span class="default">$temp_s</span><span class="keyword">=</span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'UTF-16'</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br /></span><span class="default">$temp_a</span><span class="keyword">=</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$temp_s</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$temp_a_len</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$temp_a</span><span class="keyword">);<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$temp_a_len</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />    </span><span class="comment">//$temp_a[$i]=iconv('UTF-16','UTF-8',$temp_a[$i]);<br />    </span><span class="default">$temp_a</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]=</span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$temp_a</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],</span><span class="string">'UTF-8'</span><span class="keyword">,</span><span class="string">'UTF-16'</span><span class="keyword">);<br />}<br /><br />echo(</span><span class="string">'&lt;pre&gt;'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$temp_a</span><span class="keyword">);<br />echo(</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">);<br /><br /></span><span class="comment">//also possible to directly use UTF-16:<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'SLS'</span><span class="keyword">,</span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="string">'UTF-16'</span><span class="keyword">));<br /></span><span class="default">$temp_s</span><span class="keyword">=</span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">'UTF-16'</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br /></span><span class="default">$temp_a</span><span class="keyword">=</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$temp_s</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$temp_s</span><span class="keyword">=</span><span class="default">implode</span><span class="keyword">(</span><span class="default">SLS</span><span class="keyword">,</span><span class="default">$temp_a</span><span class="keyword">);<br /></span><span class="default">$temp_s</span><span class="keyword">=</span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$temp_s</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">,</span><span class="string">'UTF-16'</span><span class="keyword">);<br />echo(</span><span class="default">$temp_s</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mb-split&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-split.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
