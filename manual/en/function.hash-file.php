<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: hash_file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.hash-file.php">
 <link rel="shorturl" href="https://www.php.net/hash-file">
 <link rel="alternate" href="https://www.php.net/hash-file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.hash.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.hash-equals.php">
 <link rel="next" href="https://www.php.net/manual/en/function.hash-final.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.hash-file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.hash-file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.hash-file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.hash-file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.hash-file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.hash-file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.hash-file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.hash-file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.hash-file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.hash-file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.hash-file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generate a hash value using the contents of a given file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: hash_file - Manual" />
<meta name="twitter:description" content="Generate a hash value using the contents of a given file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: hash_file - Manual" />
<meta itemprop="description" content="Generate a hash value using the contents of a given file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generate a hash value using the contents of a given file" />

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
        <a href="function.hash-final.php">
          hash_final &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.hash-equals.php">
          &laquo; hash_equals        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.hash.php'>Hash</a></li>      <li><a href='ref.hash.php'>Hash Functions</a></li>      </ul>
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
            <option value='en/function.hash-file.php' selected="selected">English</option>
            <option value='de/function.hash-file.php'>German</option>
            <option value='es/function.hash-file.php'>Spanish</option>
            <option value='fr/function.hash-file.php'>French</option>
            <option value='it/function.hash-file.php'>Italian</option>
            <option value='ja/function.hash-file.php'>Japanese</option>
            <option value='pt_BR/function.hash-file.php'>Brazilian Portuguese</option>
            <option value='ru/function.hash-file.php'>Russian</option>
            <option value='tr/function.hash-file.php'>Turkish</option>
            <option value='uk/function.hash-file.php'>Ukrainian</option>
            <option value='zh/function.hash-file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.hash-file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">hash_file</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.2, PHP 7, PHP 8, PECL hash &gt;= 1.1)</p><p class="refpurpose"><span class="refname">hash_file</span> &mdash; <span class="dc-title">Generate a hash value using the contents of a given file</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.hash-file-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>hash_file</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$algo</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$binary</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


 </div>

 <div class="refsect1 parameters" id="refsect1-function.hash-file-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">algo</code></dt>
     <dd>
      <p class="para">
       Name of selected hashing algorithm (e.g. <code class="literal">&quot;sha256&quot;</code>).
       For a list of supported algorithms see <span class="function"><a href="function.hash-algos.php" class="function">hash_algos()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       URL describing location of file to be hashed; Supports <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> wrappers.
      </p>
     </dd>
    
    
     <dt><code class="parameter">binary</code></dt>
     <dd>
      <p class="para">
       When set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, outputs raw binary data.
       <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> outputs lowercase hexits.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An array of options for the various hashing algorithms.
       Currently, only the <code class="literal">&quot;seed&quot;</code> parameter is
       supported by the MurmurHash variants.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.hash-file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a string containing the calculated message digest as lowercase hexits
   unless <code class="parameter">binary</code> is set to true in which case the raw
   binary representation of the message digest is returned,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.hash-file-changelog">
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
       <td>8.1.0</td>
       <td>The <code class="parameter">options</code> parameter has been added.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.hash-file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-983">
    <p><strong>Example #1 Using <span class="function"><strong>hash_file()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Create a file to calculate hash of */<br /></span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'example.txt'</span><span style="color: #007700">, </span><span style="color: #DD0000">'The quick brown fox jumped over the lazy dog.'</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">hash_file</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha256'</span><span style="color: #007700">, </span><span style="color: #DD0000">'example.txt'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.hash-file-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.hash-init.php" class="function" rel="rdfs-seeAlso">hash_init()</a> - Initialize an incremental hashing context</span></li>
    <li><span class="function"><a href="function.hash-hmac-file.php" class="function" rel="rdfs-seeAlso">hash_hmac_file()</a> - Generate a keyed hash value using the HMAC method and the contents of a given file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/hash/functions/hash-file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.hash-file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.hash-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104836">  <div class="votes">
    <div id="Vu104836">
    <a href="/manual/vote-note.php?id=104836&amp;page=function.hash-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104836">
    <a href="/manual/vote-note.php?id=104836&amp;page=function.hash-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104836" title="69% like this...">
    9
    </div>
  </div>
  <a href="#104836" class="name">
  <strong class="user"><em>apm at domain itsmee.co.uk</em></strong></a><a class="genanchor" href="#104836"> &para;</a><div class="date" title="2011-07-10 04:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104836">
<div class="phpcode"><code><span class="html">I have verified that the output of the "crc32" is the ITU I.363.5 algorithm (a.k.a. AAL5 CRC - popularised by BZIP2 but also used in ATM transmissions - the algorithm is the same as that in POSIX 1003.2-1992 in Cksum but that stuffs the size into the CRC at the end for extra measure).  However, the output is expressed in reverse order to many CRC programs.  Using the "standard" crctest.txt (numbers 1 to 9 in sequence - google it, it's not hard to find), php will output 181989fc - many other (Intel little endian) programs would output this as fc891918, hence the confusion (that I have had, at least).<br /><br />The crc32b is the 32-bit Frame Check Sequence of ITU V.42 (used in Ethernet and popularised by PKZip).  The output from this CRC is popularised in Intel little endian format and would produce cbf43926 on the same file.</span></code></div>
  </div>
 </div>
  <div class="note" id="100061">  <div class="votes">
    <div id="Vu100061">
    <a href="/manual/vote-note.php?id=100061&amp;page=function.hash-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100061">
    <a href="/manual/vote-note.php?id=100061&amp;page=function.hash-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100061" title="68% like this...">
    9
    </div>
  </div>
  <a href="#100061" class="name">
  <strong class="user"><em>chernyshevsky at hotmail dot com</em></strong></a><a class="genanchor" href="#100061"> &para;</a><div class="date" title="2010-09-22 04:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100061">
<div class="phpcode"><code><span class="html">If you want to use hash_file() to get the CRC32 value of a file, use the following to unpack the hex string returned by the function to an integer (similar to crc32()):<br /><br />$hash = hash_file('crc32b', $filepath);<br />$array = unpack('N', pack('H*', $hash));<br />$crc32 = $array[1];</span></code></div>
  </div>
 </div>
  <div class="note" id="117484">  <div class="votes">
    <div id="Vu117484">
    <a href="/manual/vote-note.php?id=117484&amp;page=function.hash-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117484">
    <a href="/manual/vote-note.php?id=117484&amp;page=function.hash-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117484" title="61% like this...">
    10
    </div>
  </div>
  <a href="#117484" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#117484"> &para;</a><div class="date" title="2015-06-17 11:57"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117484">
<div class="phpcode"><code><span class="html">bench 476 Mo, win is 'haval160,4' : 0.037002<br /><br />ALGO: md2, time: 74.702272891998<br />ALGO: md4, time: 9.2155270576477<br />ALGO: md5, time: 9.0815191268921<br />ALGO: sha1, time: 9.0945210456848<br />ALGO: sha224, time: 9.1465229988098<br />ALGO: sha256, time: 9.143522977829<br />ALGO: sha384, time: 14.065804004669<br />ALGO: sha512, time: 13.990800857544<br />ALGO: ripemd128, time: 9.3185329437256<br />ALGO: ripemd160, time: 9.3165328502655<br />ALGO: ripemd256, time: 9.2495288848877<br />ALGO: ripemd320, time: 9.2395279407501<br />ALGO: whirlpool, time: 27.779588937759<br />ALGO: tiger128,3, time: 9.3075330257416<br />ALGO: tiger160,3, time: 9.1875250339508<br />ALGO: tiger192,3, time: 9.3875370025635<br />ALGO: tiger128,4, time: 9.1755249500275<br />ALGO: tiger160,4, time: 9.355535030365<br />ALGO: tiger192,4, time: 9.2025260925293<br />ALGO: snefru, time: 42.781446218491<br />ALGO: snefru256, time: 42.613437175751<br />ALGO: gost, time: 18.606064081192<br />ALGO: gost-crypto, time: 18.664067983627<br />ALGO: adler32, time: 9.1535229682922<br />ALGO: crc32, time: 10.126579999924<br />ALGO: crc32b, time: 10.01757311821<br />ALGO: fnv132, time: 9.7505569458008<br />ALGO: fnv1a32, time: 9.7935597896576<br />ALGO: fnv164, time: 9.8945660591125<br />ALGO: fnv1a64, time: 9.3025319576263<br />ALGO: joaat, time: 9.7175559997559<br />ALGO: haval128,3, time: 9.6855540275574<br />ALGO: haval160,3, time: 10.10857796669<br />ALGO: haval192,3, time: 9.6765530109406<br />ALGO: haval224,3, time: 20.636180877686<br />ALGO: haval256,3, time: 10.641607999802<br />ALGO: haval128,4, time: 7.5594329833984<br />ALGO: haval160,4, time: 7.2884171009064<br />ALGO: haval192,4, time: 7.2934169769287<br />ALGO: haval224,4, time: 7.2964169979095<br />ALGO: haval256,4, time: 7.3034179210663<br />ALGO: haval128,5, time: 8.3244760036469<br />ALGO: haval160,5, time: 8.3174757957458<br />ALGO: haval192,5, time: 8.3204758167267<br />ALGO: haval224,5, time: 8.3234758377075<br />ALGO: haval256,5, time: 8.3254759311676<br /><br />bench 13,0 Mo, win is 'adler32'  : 0.037002<br /><br />ALGO: md2, time: 2.0341160297394<br />ALGO: md4, time: 0.062004089355469<br />ALGO: md5, time: 0.071003913879395<br />ALGO: sha1, time: 0.086004972457886<br />ALGO: sha224, time: 0.18301010131836<br />ALGO: sha256, time: 0.18301105499268<br />ALGO: sha384, time: 0.36102104187012<br />ALGO: sha512, time: 0.3610200881958<br />ALGO: ripemd128, time: 0.15900897979736<br />ALGO: ripemd160, time: 0.20701193809509<br />ALGO: ripemd256, time: 0.16500997543335<br />ALGO: ripemd320, time: 0.22501301765442<br />ALGO: whirlpool, time: 0.74204206466675<br />ALGO: tiger128,3, time: 0.12200689315796<br />ALGO: tiger160,3, time: 0.12100696563721<br />ALGO: tiger192,3, time: 0.12200713157654<br />ALGO: tiger128,4, time: 0.15700888633728<br />ALGO: tiger160,4, time: 0.15700888633728<br />ALGO: tiger192,4, time: 0.15600895881653<br />ALGO: snefru, time: 1.1520659923553<br />ALGO: snefru256, time: 1.151065826416<br />ALGO: gost, time: 0.48902797698975<br />ALGO: gost-crypto, time: 0.49202799797058<br />ALGO: adler32, time: 0.037002086639404<br />ALGO: crc32, time: 0.10300588607788<br />ALGO: crc32b, time: 0.093006134033203<br />ALGO: fnv132, time: 0.043002128601074<br />ALGO: fnv1a32, time: 0.045002937316895<br />ALGO: fnv164, time: 0.12800693511963<br />ALGO: fnv1a64, time: 0.12800693511963<br />ALGO: joaat, time: 0.070003986358643<br />ALGO: haval128,3, time: 0.12900686264038<br />ALGO: haval160,3, time: 0.12800693511963<br />ALGO: haval192,3, time: 0.12900805473328<br />ALGO: haval224,3, time: 0.12800693511963<br />ALGO: haval256,3, time: 0.12800693511963<br />ALGO: haval128,4, time: 0.19901204109192<br />ALGO: haval160,4, time: 0.1990110874176<br />ALGO: haval192,4, time: 0.20001196861267<br />ALGO: haval224,4, time: 0.20001101493835<br />ALGO: haval256,4, time: 0.20001220703125<br />ALGO: haval128,5, time: 0.22601294517517<br />ALGO: haval160,5, time: 0.2270131111145<br />ALGO: haval192,5, time: 0.2270131111145<br />ALGO: haval224,5, time: 0.2270131111145<br />ALGO: haval256,5, time: 0.22701287269592</span></code></div>
  </div>
 </div>
  <div class="note" id="122549">  <div class="votes">
    <div id="Vu122549">
    <a href="/manual/vote-note.php?id=122549&amp;page=function.hash-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122549">
    <a href="/manual/vote-note.php?id=122549&amp;page=function.hash-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122549" title="58% like this...">
    3
    </div>
  </div>
  <a href="#122549" class="name">
  <strong class="user"><em>Lawrence Cherone</em></strong></a><a class="genanchor" href="#122549"> &para;</a><div class="date" title="2018-03-26 12:23"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122549">
<div class="phpcode"><code><span class="html">It's sometimes necessary to hash the same file with different algos, <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">hash_file_multi</span><span class="keyword">(</span><span class="default">$algos </span><span class="keyword">= [], </span><span class="default">$filename</span><span class="keyword">) {<br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$algos</span><span class="keyword">)) {<br />        throw new </span><span class="default">\InvalidArgumentException</span><span class="keyword">(</span><span class="string">'First argument must be an array'</span><span class="keyword">);<br />    }<br /><br />    if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)) {<br />        throw new </span><span class="default">\InvalidArgumentException</span><span class="keyword">(</span><span class="string">'Second argument must be a string'</span><span class="keyword">);<br />    }<br /><br />    if (!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)) {<br />        throw new </span><span class="default">\InvalidArgumentException</span><span class="keyword">(</span><span class="string">'Second argument, file not found'</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$result </span><span class="keyword">= [];<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />    if (</span><span class="default">$fp</span><span class="keyword">) {<br />        </span><span class="comment">// ini hash contexts<br />        </span><span class="keyword">foreach (</span><span class="default">$algos </span><span class="keyword">as </span><span class="default">$algo</span><span class="keyword">) {<br />            </span><span class="default">$ctx</span><span class="keyword">[</span><span class="default">$algo</span><span class="keyword">] = </span><span class="default">hash_init</span><span class="keyword">(</span><span class="default">$algo</span><span class="keyword">);<br />        }<br /><br />        </span><span class="comment">// calculate hash<br />        </span><span class="keyword">while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {<br />            </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">65536</span><span class="keyword">);<br />            foreach (</span><span class="default">$ctx </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$context</span><span class="keyword">) {<br />                </span><span class="default">hash_update</span><span class="keyword">(</span><span class="default">$ctx</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$buffer</span><span class="keyword">);<br />            }<br />        }<br /><br />        </span><span class="comment">// finalise hash and store in return<br />        </span><span class="keyword">foreach (</span><span class="default">$algos </span><span class="keyword">as </span><span class="default">$algo</span><span class="keyword">) {<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$algo</span><span class="keyword">] = </span><span class="default">hash_final</span><span class="keyword">(</span><span class="default">$ctx</span><span class="keyword">[</span><span class="default">$algo</span><span class="keyword">]);<br />        }<br /><br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />    } else {<br />        throw new </span><span class="default">\InvalidArgumentException</span><span class="keyword">(</span><span class="string">'Could not open file for reading'</span><span class="keyword">);<br />    }   <br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Which would be used like:<br /><br /><span class="default">&lt;?php<br />$result </span><span class="keyword">= </span><span class="default">hash_file_multi</span><span class="keyword">([</span><span class="string">'md5'</span><span class="keyword">, </span><span class="string">'sha1'</span><span class="keyword">, </span><span class="string">'sha256'</span><span class="keyword">], </span><span class="string">'path/to/file.ext'</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'md5'</span><span class="keyword">] === </span><span class="default">hash_file</span><span class="keyword">(</span><span class="string">'md5'</span><span class="keyword">, </span><span class="string">'path/to/file.ext'</span><span class="keyword">)); </span><span class="comment">//true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'sha1'</span><span class="keyword">] === </span><span class="default">hash_file</span><span class="keyword">(</span><span class="string">'sha1'</span><span class="keyword">, </span><span class="string">'path/to/file.ext'</span><span class="keyword">)); </span><span class="comment">//true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'sha256'</span><span class="keyword">] === </span><span class="default">hash_file</span><span class="keyword">(</span><span class="string">'sha256'</span><span class="keyword">, </span><span class="string">'path/to/file.ext'</span><span class="keyword">)); </span><span class="comment">//true</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85672">  <div class="votes">
    <div id="Vu85672">
    <a href="/manual/vote-note.php?id=85672&amp;page=function.hash-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85672">
    <a href="/manual/vote-note.php?id=85672&amp;page=function.hash-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85672" title="61% like this...">
    3
    </div>
  </div>
  <a href="#85672" class="name">
  <strong class="user"><em>Keisial at gmail dot com</em></strong></a><a class="genanchor" href="#85672"> &para;</a><div class="date" title="2008-09-11 11:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85672">
<div class="phpcode"><code><span class="html">The 'octets reversed' you are seeing is the bug 45028 which has been fixed. <a href="http://bugs.php.net/bug.php?id=45028" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=45028</a><br /><br />The difference between crc32 and crc32b is explained on mhash man page. crc32 is the one used on ethernet, while crc32b is the one used on zip, png... They differ on the table used.</span></code></div>
  </div>
 </div>
  <div class="note" id="109259">  <div class="votes">
    <div id="Vu109259">
    <a href="/manual/vote-note.php?id=109259&amp;page=function.hash-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109259">
    <a href="/manual/vote-note.php?id=109259&amp;page=function.hash-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109259" title="57% like this...">
    3
    </div>
  </div>
  <a href="#109259" class="name">
  <strong class="user"><em>holdoffhunger at gmail dot com</em></strong></a><a class="genanchor" href="#109259"> &para;</a><div class="date" title="2012-06-30 01:03"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109259">
<div class="phpcode"><code><span class="html">The Hash_File() function returns the same value as if the function Hash() had been performed on the same exact piece of data.  At first, I was uncertain if Hash_File() used the filename, or even the permission settings, when defining the data to be hashed for the given algorithm.  If it did work that way, then that means the same exact files would have different HASH values when you moved or renamed them on your system.  Anyway, fortunately, it does not work that way.  Hash() and Hash_File() produce identical results for the same pieces of data.  This is also true for the relationship between the Hash_HMAC() and Hash_HMAC_File() functions: the same pieces of data, the same keys, produce identical results.  It was a wise, design principle.<br /><br />Some sample code to demonstrate this principle :<br /><br /><span class="default">&lt;?php<br /><br />            </span><span class="comment">// Author: holdoffhunger@gmail.com<br /><br />        // Preset Data<br />        // ------------------------------------------------<br />        <br />    </span><span class="default">$test_data </span><span class="keyword">= </span><span class="string">"php-hashing"</span><span class="keyword">;<br />    </span><span class="default">$test_file </span><span class="keyword">= </span><span class="string">"test.txt"</span><span class="keyword">;<br />    </span><span class="default">$test_file_read </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$test_file</span><span class="keyword">);<br />    <br />        </span><span class="comment">// Hash Data<br />        // ------------------------------------------------<br />    <br />    </span><span class="default">$test_data_hash </span><span class="keyword">= </span><span class="default">hash</span><span class="keyword">(</span><span class="string">"md2"</span><span class="keyword">, </span><span class="default">$test_data</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">);<br />    </span><span class="default">$test_file_hash </span><span class="keyword">= </span><span class="default">hash_file</span><span class="keyword">(</span><span class="string">"md2"</span><span class="keyword">, </span><span class="default">$test_file</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">);<br />    <br />        </span><span class="comment">// Print Hash Results<br />        // ------------------------------------------------<br />    <br />    </span><span class="keyword">print(</span><span class="string">"Data Hash (</span><span class="default">$test_data</span><span class="string">): </span><span class="default">$test_data_hash</span><span class="string">&lt;br&gt;&lt;br&gt;"</span><span class="keyword">);<br />    print(</span><span class="string">"File Hash (</span><span class="default">$test_file_read</span><span class="string">): </span><span class="default">$test_file_hash</span><span class="string">"</span><span class="keyword">);<br />    <br /></span><span class="default">?&gt;<br /></span><br />    Expected Results<br />    ..................................<br />    <br />Data Hash (php-hashing): 457d84e1d69e519a7b73348db21477d3<br /><br />File Hash (php-hashing): 457d84e1d69e519a7b73348db21477d3</span></code></div>
  </div>
 </div>
  <div class="note" id="121609">  <div class="votes">
    <div id="Vu121609">
    <a href="/manual/vote-note.php?id=121609&amp;page=function.hash-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121609">
    <a href="/manual/vote-note.php?id=121609&amp;page=function.hash-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121609" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#121609" class="name">
  <strong class="user"><em>lnker dot ua at gmail dot com</em></strong></a><a class="genanchor" href="#121609"> &para;</a><div class="date" title="2017-09-05 02:28"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121609">
<div class="phpcode"><code><span class="html">Link id : 6r1j-d2gs<br />Code description : hash_file() performance check; Table head columns are sortable by clicking;<br /><br />Open the code with PhpFiddle - <a href="http://phpfiddle.org/main/code/6r1j-d2gs" rel="nofollow" target="_blank">http://phpfiddle.org/main/code/6r1j-d2gs</a><br />Open the code with PhpFiddle Lite - <a href="http://phpfiddle.org/lite/code/6r1j-d2gs" rel="nofollow" target="_blank">http://phpfiddle.org/lite/code/6r1j-d2gs</a><br /><br />So do not care a lot about performance! Just use what you need!</span></code></div>
  </div>
 </div>
  <div class="note" id="103656">  <div class="votes">
    <div id="Vu103656">
    <a href="/manual/vote-note.php?id=103656&amp;page=function.hash-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103656">
    <a href="/manual/vote-note.php?id=103656&amp;page=function.hash-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103656" title="42% like this...">
    -5
    </div>
  </div>
  <a href="#103656" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#103656"> &para;</a><div class="date" title="2011-04-26 09:55"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103656">
<div class="phpcode"><code><span class="html">Please take note that hash-file will throw error on files &gt;=2GB.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.hash-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.hash-file.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.hash.php">Hash Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.hash.php" title="hash">hash</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-algos.php" title="hash_&#8203;algos">hash_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-copy.php" title="hash_&#8203;copy">hash_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-equals.php" title="hash_&#8203;equals">hash_&#8203;equals</a>
                        </li>
                                                <li class="current">
                            <a href="function.hash-file.php" title="hash_&#8203;file">hash_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-final.php" title="hash_&#8203;final">hash_&#8203;final</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hkdf.php" title="hash_&#8203;hkdf">hash_&#8203;hkdf</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac.php" title="hash_&#8203;hmac">hash_&#8203;hmac</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac-algos.php" title="hash_&#8203;hmac_&#8203;algos">hash_&#8203;hmac_&#8203;algos</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-hmac-file.php" title="hash_&#8203;hmac_&#8203;file">hash_&#8203;hmac_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-init.php" title="hash_&#8203;init">hash_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-pbkdf2.php" title="hash_&#8203;pbkdf2">hash_&#8203;pbkdf2</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update.php" title="hash_&#8203;update">hash_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update-file.php" title="hash_&#8203;update_&#8203;file">hash_&#8203;update_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.hash-update-stream.php" title="hash_&#8203;update_&#8203;stream">hash_&#8203;update_&#8203;stream</a>
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
