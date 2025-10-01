<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: chunk_split - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.chunk-split.php">
 <link rel="shorturl" href="https://www.php.net/chunk-split">
 <link rel="alternate" href="https://www.php.net/chunk-split" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.chr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.convert-cyr-string.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.chunk-split.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.chunk-split.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.chunk-split.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.chunk-split.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.chunk-split.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.chunk-split.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.chunk-split.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.chunk-split.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.chunk-split.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.chunk-split.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.chunk-split.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Split a string into smaller chunks" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: chunk_split - Manual" />
<meta name="twitter:description" content="Split a string into smaller chunks" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: chunk_split - Manual" />
<meta itemprop="description" content="Split a string into smaller chunks" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Split a string into smaller chunks" />

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
        <a href="function.convert-cyr-string.php">
          convert_cyr_string &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.chr.php">
          &laquo; chr        </a>
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
            <option value='en/function.chunk-split.php' selected="selected">English</option>
            <option value='de/function.chunk-split.php'>German</option>
            <option value='es/function.chunk-split.php'>Spanish</option>
            <option value='fr/function.chunk-split.php'>French</option>
            <option value='it/function.chunk-split.php'>Italian</option>
            <option value='ja/function.chunk-split.php'>Japanese</option>
            <option value='pt_BR/function.chunk-split.php'>Brazilian Portuguese</option>
            <option value='ru/function.chunk-split.php'>Russian</option>
            <option value='tr/function.chunk-split.php'>Turkish</option>
            <option value='uk/function.chunk-split.php'>Ukrainian</option>
            <option value='zh/function.chunk-split.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.chunk-split" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">chunk_split</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">chunk_split</span> &mdash; <span class="dc-title">Split a string into smaller chunks</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.chunk-split-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>chunk_split</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code><span class="initializer"> = 76</span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$separator</code><span class="initializer"> = &quot;\r\n&quot;</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Can be used to split a string into smaller chunks which is useful for
   e.g. converting <span class="function"><a href="function.base64-encode.php" class="function">base64_encode()</a></span> output to match RFC
   2045 semantics. It inserts <code class="parameter">separator</code> every 
   <code class="parameter">length</code> characters.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.chunk-split-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The string to be chunked.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The chunk length.
      </p>
     </dd>
    
    
     <dt><code class="parameter">separator</code></dt>
     <dd>
      <p class="para">
       The line ending sequence.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.chunk-split-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the chunked string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.chunk-split-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5058">
    <p><strong>Example #1 <span class="function"><strong>chunk_split()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$data </span><span style="color: #007700">= </span><span style="color: #DD0000">'This is quite a long string, which will get broken up because the line is going to be too long after base64 encoding it.'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// format $data using RFC 2045 semantics<br /></span><span style="color: #0000BB">$new_string </span><span style="color: #007700">= </span><span style="color: #0000BB">chunk_split</span><span style="color: #007700">(</span><span style="color: #0000BB">base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />echo </span><span style="color: #0000BB">$new_string</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.chunk-split-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.str-split.php" class="function" rel="rdfs-seeAlso">str_split()</a> - Convert a string to an array</span></li>
    <li><span class="function"><a href="function.explode.php" class="function" rel="rdfs-seeAlso">explode()</a> - Split a string by a string</span></li>
    <li><span class="function"><a href="function.wordwrap.php" class="function" rel="rdfs-seeAlso">wordwrap()</a> - Wraps a string to a given number of characters</span></li>
    <li><a href="https://datatracker.ietf.org/doc/html/rfc2045" class="link external">&raquo;&nbsp;RFC 2045</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/chunk-split.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.chunk-split%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.chunk-split&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.chunk-split.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118887">  <div class="votes">
    <div id="Vu118887">
    <a href="/manual/vote-note.php?id=118887&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118887">
    <a href="/manual/vote-note.php?id=118887&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118887" title="67% like this...">
    22
    </div>
  </div>
  <a href="#118887" class="name">
  <strong class="user"><em>vijit at mail dot ru</em></strong></a><a class="genanchor" href="#118887"> &para;</a><div class="date" title="2016-02-23 06:22"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118887">
<div class="phpcode"><code><span class="html">As an alternative for  qeremy [atta] gmail [dotta] com<br />There is much shorter way for binarysafe chunking of multibyte string:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">word_chunk</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$len </span><span class="keyword">= </span><span class="default">76</span><span class="keyword">, </span><span class="default">$end </span><span class="keyword">= </span><span class="string">"\n"</span><span class="keyword">) {<br />    </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'~.{1,' </span><span class="keyword">. </span><span class="default">$len </span><span class="keyword">. </span><span class="string">'}~u'</span><span class="keyword">; </span><span class="comment">// like "~.{1,76}~u"<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="string">'$0' </span><span class="keyword">. </span><span class="default">$end</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />    return </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">'русский'</span><span class="keyword">;<br />echo </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">word_chunk</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />р�<br />�с<br />с�<br />�и<br />й<br /><br />рус<br />ски<br />й</span></code></div>
  </div>
 </div>
  <div class="note" id="107711">  <div class="votes">
    <div id="Vu107711">
    <a href="/manual/vote-note.php?id=107711&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107711">
    <a href="/manual/vote-note.php?id=107711&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107711" title="61% like this...">
    23
    </div>
  </div>
  <a href="#107711" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#107711"> &para;</a><div class="date" title="2012-02-28 03:35"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107711">
<div class="phpcode"><code><span class="html">An alternative for unicode strings;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">chunk_split_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$l </span><span class="keyword">= </span><span class="default">76</span><span class="keyword">, </span><span class="default">$e </span><span class="keyword">= </span><span class="string">"\r\n"</span><span class="keyword">) {<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">array_chunk</span><span class="keyword">(<br />        </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"//u"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">), </span><span class="default">$l</span><span class="keyword">);<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    foreach (</span><span class="default">$tmp </span><span class="keyword">as </span><span class="default">$t</span><span class="keyword">) {<br />        </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">join</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">, </span><span class="default">$t</span><span class="keyword">) . </span><span class="default">$e</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$str</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"Yarım kilo çay, yarım kilo şeker"</span><span class="keyword">;<br />echo </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="default">chunk_split_unicode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Yar�<br />�m k<br />ilo <br />çay<br />, ya<br />rım<br /> kil<br />o ş<br />eker<br /><br />Yarı<br />m ki<br />lo ç<br />ay, <br />yarı<br />m ki<br />lo ş<br />eker</span></code></div>
  </div>
 </div>
  <div class="note" id="68881">  <div class="votes">
    <div id="Vu68881">
    <a href="/manual/vote-note.php?id=68881&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68881">
    <a href="/manual/vote-note.php?id=68881&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68881" title="64% like this...">
    11
    </div>
  </div>
  <a href="#68881" class="name">
  <strong class="user"><em>chris AT w3style.co DOT uk</em></strong></a><a class="genanchor" href="#68881"> &para;</a><div class="date" title="2006-08-14 12:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68881">
<div class="phpcode"><code><span class="html">I'm not sure what versions this also occurs in but the output of chunk_split() in PHP 5.0.4 does not match the output in other versions of PHP.<br /><br />In all versions of PHP I have used, apart from 5.0.4 chunk_split() adds the separator (\r\n) to the end of the string.  But in PHP 5.0.4 this does not happen.  This had a fairly serious impact on a library I maintain so it may also affect others who are not aware of this.</span></code></div>
  </div>
 </div>
  <div class="note" id="121013">  <div class="votes">
    <div id="Vu121013">
    <a href="/manual/vote-note.php?id=121013&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121013">
    <a href="/manual/vote-note.php?id=121013&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121013" title="65% like this...">
    7
    </div>
  </div>
  <a href="#121013" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#121013"> &para;</a><div class="date" title="2017-04-24 07:48"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121013">
<div class="phpcode"><code><span class="html">The description of the function is slightly inaccurate. A trailing $end is also added.</span></code></div>
  </div>
 </div>
  <div class="note" id="39321">  <div class="votes">
    <div id="Vu39321">
    <a href="/manual/vote-note.php?id=39321&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39321">
    <a href="/manual/vote-note.php?id=39321&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39321" title="59% like this...">
    10
    </div>
  </div>
  <a href="#39321" class="name">
  <strong class="user"><em>mv@NOSPAM</em></strong></a><a class="genanchor" href="#39321"> &para;</a><div class="date" title="2004-01-24 07:39"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39321">
<div class="phpcode"><code><span class="html">the best way to solve the problem with the last string added by chunk_split() is:
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="string">'1234'</span><span class="keyword">;
<br /></span><span class="default">substr</span><span class="keyword">(</span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="string">':'</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);
<br /></span><span class="comment">// will return 12:34
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72503">  <div class="votes">
    <div id="Vu72503">
    <a href="/manual/vote-note.php?id=72503&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72503">
    <a href="/manual/vote-note.php?id=72503&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72503" title="66% like this...">
    4
    </div>
  </div>
  <a href="#72503" class="name">
  <strong class="user"><em>hansvane at yahoo dot com dot ar</em></strong></a><a class="genanchor" href="#72503"> &para;</a><div class="date" title="2007-01-21 10:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72503">
<div class="phpcode"><code><span class="html">This function is very simple and many other functions make this on PHP 5 and even some ones in 4 the good think about this one is that work on php 3.0.6 and 4 <br /><br />function split_hjms_chars($xstr, $xlenint, $xlaststr)<br />{<br />    $texttoshow = chunk_split($xstr,$xlenint,"\r\n"); <br />    $texttoshow  = split("\r\n",$texttoshow);<br />    $texttoshow = $texttoshow[0].$xlaststr;<br />    return $texttoshow;<br />}<br /><br />// For use <br /><br />echo split_hjms_chars("This is your text",6,"...");<br /><br />// Will return<br /><br />This i...<br /><br />It is useful to cut long text on preview lists and if the server it's old.<br /><br />Hope it helps some one. Hans Svane</span></code></div>
  </div>
 </div>
  <div class="note" id="114423">  <div class="votes">
    <div id="Vu114423">
    <a href="/manual/vote-note.php?id=114423&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114423">
    <a href="/manual/vote-note.php?id=114423&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114423" title="62% like this...">
    4
    </div>
  </div>
  <a href="#114423" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#114423"> &para;</a><div class="date" title="2014-02-19 01:57"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114423">
<div class="phpcode"><code><span class="html">Important note is the maximum line length and the recommended one. The standard says:<br />"Lines in a message MUST be a maximum of 998 characters excluding the CRLF, but it is RECOMMENDED that lines be limited to 78 characters excluding the CRLF. "<br /><br />See PHP manual for chunk_split() Which is set to 76 characters long chunk and "\r\n" at the end of line by default.</span></code></div>
  </div>
 </div>
  <div class="note" id="82964">  <div class="votes">
    <div id="Vu82964">
    <a href="/manual/vote-note.php?id=82964&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82964">
    <a href="/manual/vote-note.php?id=82964&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82964" title="60% like this...">
    5
    </div>
  </div>
  <a href="#82964" class="name">
  <strong class="user"><em>neos at blizzz dot ru</em></strong></a><a class="genanchor" href="#82964"> &para;</a><div class="date" title="2008-05-03 11:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82964">
<div class="phpcode"><code><span class="html">"version" of chunk_split for cyrillic characters in UTF-8<br /><br />public function UTFChunk($Text,$Len = 10,$End = "\r\n")<br />{<br />    if(mb_detect_encoding($Text) == "UTF-8")<br />    {<br />        return mb_convert_encoding(<br />                chunk_split(<br />                    mb_convert_encoding($Text, "KOI8-R","UTF-8"), $Len,$End<br />                ),<br />                "UTF-8", "KOI8-R"<br />            );<br />    } else<br />    {<br />        return chunk_split($Text,$Len,$End);<br />    }<br />}<br /><br />this is example for russian language</span></code></div>
  </div>
 </div>
  <div class="note" id="82546">  <div class="votes">
    <div id="Vu82546">
    <a href="/manual/vote-note.php?id=82546&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82546">
    <a href="/manual/vote-note.php?id=82546&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82546" title="62% like this...">
    4
    </div>
  </div>
  <a href="#82546" class="name">
  <strong class="user"><em>Royce</em></strong></a><a class="genanchor" href="#82546"> &para;</a><div class="date" title="2008-04-16 12:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82546">
<div class="phpcode"><code><span class="html">Here's a version of Chunk Split I wrote that will not split html entities. Useful if you need to inject something in html (in my case, &lt;wbr/&gt; tags to allow for long text wrapping).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">HtmlEntitySafeSplit</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">,</span><span class="default">$size</span><span class="keyword">,</span><span class="default">$delim</span><span class="keyword">)<br />{<br />  </span><span class="default">$pos</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />  {<br />    if(</span><span class="default">$pos </span><span class="keyword">&gt;= </span><span class="default">$size </span><span class="keyword">&amp;&amp; !</span><span class="default">$unsafe</span><span class="keyword">)<br />    {<br />      </span><span class="default">$out</span><span class="keyword">.=</span><span class="default">$delim</span><span class="keyword">;<br />      </span><span class="default">$unsafe</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />      </span><span class="default">$pos</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    }<br />    </span><span class="default">$c</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />    if(</span><span class="default">$c </span><span class="keyword">== </span><span class="string">"&amp;"</span><span class="keyword">)<br />      </span><span class="default">$unsafe</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />    elseif(</span><span class="default">$c </span><span class="keyword">== </span><span class="string">";"</span><span class="keyword">)<br />      </span><span class="default">$unsafe</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$out</span><span class="keyword">.=</span><span class="default">$c</span><span class="keyword">;<br />    </span><span class="default">$pos</span><span class="keyword">++;<br />  }<br />  return </span><span class="default">$out</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="67173">  <div class="votes">
    <div id="Vu67173">
    <a href="/manual/vote-note.php?id=67173&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67173">
    <a href="/manual/vote-note.php?id=67173&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67173" title="62% like this...">
    4
    </div>
  </div>
  <a href="#67173" class="name">
  <strong class="user"><em>xamine at gmail dot com</em></strong></a><a class="genanchor" href="#67173"> &para;</a><div class="date" title="2006-06-04 11:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67173">
<div class="phpcode"><code><span class="html">In reply to "adrian at zhp dot inet dot pl" digit grouping function:<br /><span class="default">&lt;?php<br />    $number </span><span class="keyword">= </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">chunk_split </span><span class="keyword">(</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">), </span><span class="default">3</span><span class="keyword">,</span><span class="string">' '</span><span class="keyword">));<br />    </span><span class="comment">//If $number is '1234567', result is '1 234 567'.<br /></span><span class="default">?&gt;<br /></span><br />There is a much more simple way of doing this, by using the built-in number_format() function. <br /><br /><span class="default">&lt;?php <br />   $number </span><span class="keyword">= </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">);<br /><br />   </span><span class="comment">//This will round $number to 2 decimals, use the dot (".")<br />   //as decimal point, and the space (" ") as thousand sepparator.<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57428">  <div class="votes">
    <div id="Vu57428">
    <a href="/manual/vote-note.php?id=57428&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57428">
    <a href="/manual/vote-note.php?id=57428&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57428" title="60% like this...">
    5
    </div>
  </div>
  <a href="#57428" class="name">
  <strong class="user"><em>kevin @t hyguard,com</em></strong></a><a class="genanchor" href="#57428"> &para;</a><div class="date" title="2005-10-03 07:08"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57428">
<div class="phpcode"><code><span class="html">Not quite completely obvious, but... <br /><br />you can un_chunk_split() by:<br /><br />$long_str = str_replace( "\r\n", "", $chunked_str );</span></code></div>
  </div>
 </div>
  <div class="note" id="55324">  <div class="votes">
    <div id="Vu55324">
    <a href="/manual/vote-note.php?id=55324&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55324">
    <a href="/manual/vote-note.php?id=55324&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55324" title="61% like this...">
    3
    </div>
  </div>
  <a href="#55324" class="name">
  <strong class="user"><em>harish at thespitbox dot net</em></strong></a><a class="genanchor" href="#55324"> &para;</a><div class="date" title="2005-07-30 05:45"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55324">
<div class="phpcode"><code><span class="html">another way to group thousands in a number, which is much simpler, is built into PHP :)<br /><br />www.php.net/number_format</span></code></div>
  </div>
 </div>
  <div class="note" id="74423">  <div class="votes">
    <div id="Vu74423">
    <a href="/manual/vote-note.php?id=74423&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74423">
    <a href="/manual/vote-note.php?id=74423&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74423" title="59% like this...">
    4
    </div>
  </div>
  <a href="#74423" class="name">
  <strong class="user"><em>mark [at] d0gz [dot] net</em></strong></a><a class="genanchor" href="#74423"> &para;</a><div class="date" title="2007-04-10 10:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74423">
<div class="phpcode"><code><span class="html">When using ssmtp for simple command line mailing:<br /><br />$mail_to = "destination@emailbox.com";<br />$msg = "this would be an actual base64_encoded gzip msg";<br />$date = date(r);<br />$mail  = "X-FROM: root@sender.org \n";<br />$mail .= "X-TO: ".$mail_to. " \n";<br />$mail .= "To: ".$mail_to. " \n";<br />$mail .= "Date: $date \n";<br />$mail .= "From: root@sender.org \n";<br />$mail .= "Subject: lifecheck \n";<br />$mail .= $msg." \n";<br />exec("echo '$mail' | /usr/sbin/ssmtp ".$mail_to);<br /><br />be sure to invoke chunk_split() on your message body - ssmtp becomes unhappy with long lines and will subsequently trash  your message.</span></code></div>
  </div>
 </div>
  <div class="note" id="94728">  <div class="votes">
    <div id="Vu94728">
    <a href="/manual/vote-note.php?id=94728&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94728">
    <a href="/manual/vote-note.php?id=94728&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94728" title="57% like this...">
    4
    </div>
  </div>
  <a href="#94728" class="name">
  <strong class="user"><em>dampee at earthlink dot net</em></strong></a><a class="genanchor" href="#94728"> &para;</a><div class="date" title="2009-11-20 09:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94728">
<div class="phpcode"><code><span class="html">I've found this quite useful for simulating various kinds of shuffles with cards.  It is humorous but can imitate multiple deck cuts and other (imperfectly) random events.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">truffle_shuffle</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">, </span><span class="default">$chunklen </span><span class="keyword">= </span><span class="default">76</span><span class="keyword">, </span><span class="default">$end </span><span class="keyword">= </span><span class="string">"\r\n"</span><span class="keyword">)
<br />{
<br />     </span><span class="default">$chunk </span><span class="keyword">= </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">$body</span><span class="keyword">, </span><span class="default">$chunklen</span><span class="keyword">, </span><span class="string">"-=blender=-"</span><span class="keyword">);
<br />     </span><span class="default">$truffle </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"-=blender=-"</span><span class="keyword">,</span><span class="default">$chunk</span><span class="keyword">);
<br />     </span><span class="default">$shuffle </span><span class="keyword">= </span><span class="default">shuffle</span><span class="keyword">(</span><span class="default">$truffle</span><span class="keyword">);
<br />     </span><span class="default">$huknc </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">,</span><span class="default">$shuffle</span><span class="keyword">);
<br />     return </span><span class="default">$huknc</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38176">  <div class="votes">
    <div id="Vu38176">
    <a href="/manual/vote-note.php?id=38176&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38176">
    <a href="/manual/vote-note.php?id=38176&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38176" title="57% like this...">
    3
    </div>
  </div>
  <a href="#38176" class="name">
  <strong class="user"><em>Danilo</em></strong></a><a class="genanchor" href="#38176"> &para;</a><div class="date" title="2003-12-10 02:51"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38176">
<div class="phpcode"><code><span class="html">&gt;&gt; chunk_split will also add the break _after_ the last occurence.<br /><br />this should be not the problem <br /><br />substr(chunk_split('FF99FF', 2, ':'),0,8);<br />will return FF:99:FF</span></code></div>
  </div>
 </div>
  <div class="note" id="99316">  <div class="votes">
    <div id="Vu99316">
    <a href="/manual/vote-note.php?id=99316&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99316">
    <a href="/manual/vote-note.php?id=99316&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99316" title="53% like this...">
    2
    </div>
  </div>
  <a href="#99316" class="name">
  <strong class="user"><em>belal dot nabeh at gmail dot com</em></strong></a><a class="genanchor" href="#99316"> &para;</a><div class="date" title="2010-08-10 08:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99316">
<div class="phpcode"><code><span class="html">If you are using UTF-8 charset you will face a problem with Arabic language
<br />to solve this problem i used this function
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">chunk_split_</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">,</span><span class="default">$string_end</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">,</span><span class="string">"windows-1256"</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">);
<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);
<br />    foreach(</span><span class="default">$text </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">$a </span><span class="keyword">!== </span><span class="default">$val</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;
<br />            </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        }else{
<br />            </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;
<br />            </span><span class="default">$x</span><span class="keyword">++;
<br />        }
<br />        if(</span><span class="default">$x </span><span class="keyword">&gt; </span><span class="default">$length</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$new_text </span><span class="keyword">.= </span><span class="default">$val</span><span class="keyword">.</span><span class="default">$string_end</span><span class="keyword">;
<br />            </span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        }else
<br />        {
<br />             </span><span class="default">$new_text </span><span class="keyword">.= </span><span class="default">$val</span><span class="keyword">;
<br />        }
<br />        
<br />    }
<br />    </span><span class="default">$new_text </span><span class="keyword">= </span><span class="default">iconv</span><span class="keyword">(</span><span class="string">"windows-1256"</span><span class="keyword">,</span><span class="string">"UTF-8"</span><span class="keyword">,</span><span class="default">$new_text</span><span class="keyword">);
<br />    return </span><span class="default">$new_text</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54165">  <div class="votes">
    <div id="Vu54165">
    <a href="/manual/vote-note.php?id=54165&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54165">
    <a href="/manual/vote-note.php?id=54165&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54165" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#54165" class="name">
  <strong class="user"><em>Kevin</em></strong></a><a class="genanchor" href="#54165"> &para;</a><div class="date" title="2005-06-25 04:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54165">
<div class="phpcode"><code><span class="html">To phpkid:<br /><br />This is a much simpler solution.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">longWordWrap</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">"\n "</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); </span><span class="comment">// add a space after newline characters, so that 2 words only seperated by \n are not considered as 1 word<br />    </span><span class="default">$words </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">); </span><span class="comment">// now split by space<br />    </span><span class="keyword">foreach (</span><span class="default">$words </span><span class="keyword">as </span><span class="default">$word</span><span class="keyword">) {<br />        </span><span class="default">$outstring </span><span class="keyword">.= </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">) . </span><span class="string">" "</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$outstring</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83053">  <div class="votes">
    <div id="Vu83053">
    <a href="/manual/vote-note.php?id=83053&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83053">
    <a href="/manual/vote-note.php?id=83053&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83053" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#83053" class="name">
  <strong class="user"><em>tim at weird spots in my crotch dot com</em></strong></a><a class="genanchor" href="#83053"> &para;</a><div class="date" title="2008-05-08 02:29"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83053">
<div class="phpcode"><code><span class="html">@Royce<br /><br />I think this is better, since you can still use the ampersand in your text:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">HtmlEntitySafeSplit</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">,</span><span class="default">$size</span><span class="keyword">,</span><span class="default">$delim</span><span class="keyword">)<br />{<br />  </span><span class="default">$pos</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />  {<br />    if(</span><span class="default">$pos </span><span class="keyword">&gt;= </span><span class="default">$size </span><span class="keyword">&amp;&amp; !</span><span class="default">$unsafe</span><span class="keyword">)<br />    {<br />      </span><span class="default">$out</span><span class="keyword">.=</span><span class="default">$delim</span><span class="keyword">;<br />      </span><span class="default">$unsafe</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />      </span><span class="default">$pos</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    }<br />    </span><span class="default">$c</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$html</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />    if(</span><span class="default">$c </span><span class="keyword">== </span><span class="string">"&amp;"</span><span class="keyword">)<br />      </span><span class="default">$unsafe</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />    elseif(</span><span class="default">$c </span><span class="keyword">== </span><span class="string">";"</span><span class="keyword">)<br />      </span><span class="default">$unsafe</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    elseif(</span><span class="default">$c </span><span class="keyword">== </span><span class="string">" "</span><span class="keyword">)<br />      </span><span class="default">$unsafe</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$out</span><span class="keyword">.=</span><span class="default">$c</span><span class="keyword">;<br />    </span><span class="default">$pos</span><span class="keyword">++;<br />  }<br />  return </span><span class="default">$out</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53315">  <div class="votes">
    <div id="Vu53315">
    <a href="/manual/vote-note.php?id=53315&amp;page=function.chunk-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53315">
    <a href="/manual/vote-note.php?id=53315&amp;page=function.chunk-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53315" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#53315" class="name">
  <strong class="user"><em>phpkid</em></strong></a><a class="genanchor" href="#53315"> &para;</a><div class="date" title="2005-05-28 10:47"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53315">
<div class="phpcode"><code><span class="html">Well I have been having issues with a shoutbox I am coding it would keep expanding the &lt;TD&gt; if there were large words in it but I fixed it with this:<br /><br />function PadString($String){<br />    $Exploded = explode(" ", $String);<br />    $Max_Parts = count($Exploded);<br />    <br />    $CurArray = 0;<br />    $OutString = '';<br />    while($CurArray&lt;=$Max_Parts)<br />    {<br />        $Peice_Size = strlen($Exploded[$CurArray]);<br />        if($Peice_Size&gt;15)<br />        {<br />            $OutString .= chunk_split($Exploded[$CurArray], 12, " ");<br />            $CurArray++;<br />        } else {<br />            $OutString .= " ".$Exploded[$CurArray];<br />            $CurArray++;<br />        }<br />    }<br />    <br />    return $OutString;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.chunk-split&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.chunk-split.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
