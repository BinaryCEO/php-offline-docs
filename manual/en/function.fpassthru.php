<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fpassthru - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fpassthru.php">
 <link rel="shorturl" href="https://www.php.net/fpassthru">
 <link rel="alternate" href="https://www.php.net/fpassthru" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fopen.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fputcsv.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fpassthru.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fpassthru.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fpassthru.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fpassthru.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fpassthru.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fpassthru.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fpassthru.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fpassthru.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fpassthru.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fpassthru.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fpassthru.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Output all remaining data on a file pointer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fpassthru - Manual" />
<meta name="twitter:description" content="Output all remaining data on a file pointer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fpassthru - Manual" />
<meta itemprop="description" content="Output all remaining data on a file pointer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Output all remaining data on a file pointer" />

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
        <a href="function.fputcsv.php">
          fputcsv &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fopen.php">
          &laquo; fopen        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.filesystem.php'>Filesystem</a></li>      <li><a href='ref.filesystem.php'>Filesystem Functions</a></li>      </ul>
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
            <option value='en/function.fpassthru.php' selected="selected">English</option>
            <option value='de/function.fpassthru.php'>German</option>
            <option value='es/function.fpassthru.php'>Spanish</option>
            <option value='fr/function.fpassthru.php'>French</option>
            <option value='it/function.fpassthru.php'>Italian</option>
            <option value='ja/function.fpassthru.php'>Japanese</option>
            <option value='pt_BR/function.fpassthru.php'>Brazilian Portuguese</option>
            <option value='ru/function.fpassthru.php'>Russian</option>
            <option value='tr/function.fpassthru.php'>Turkish</option>
            <option value='uk/function.fpassthru.php'>Ukrainian</option>
            <option value='zh/function.fpassthru.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fpassthru" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fpassthru</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">fpassthru</span> &mdash; <span class="dc-title">Output all remaining data on a file pointer</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.fpassthru-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fpassthru</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$stream</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Reads to EOF on the given file pointer from the current position and
   writes the results to the output buffer.
  </p>
  <p class="para">
   You may need to call <span class="function"><a href="function.rewind.php" class="function">rewind()</a></span> to reset the file
   pointer to the beginning of the file if you have already written data
   to the file.
  </p>
  <p class="para">
   If you just want to dump the contents of a file to the output buffer,
   without first modifying it or seeking to a particular offset, you may
   want to use the <span class="function"><a href="function.readfile.php" class="function">readfile()</a></span>, which saves you
   the <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> call.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.fpassthru-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stream</code></dt>
     <dd>
      <p class="para">The file pointer must be valid, and must point to
a file successfully opened by <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> or
<span class="function"><a href="function.fsockopen.php" class="function">fsockopen()</a></span> (and not yet closed by
<span class="function"><a href="function.fclose.php" class="function">fclose()</a></span>).</p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.fpassthru-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the number of characters read from <code class="parameter">stream</code>
   and passed through to the output.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.fpassthru-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2372">
    <p><strong>Example #1 Using <span class="function"><strong>fpassthru()</strong></span> with binary files</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// open the file in a binary mode<br /></span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #DD0000">'./img/ok.png'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #DD0000">'rb'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// send the right headers<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: image/png"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Length: " </span><span style="color: #007700">. </span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">// dump the picture and stop the script<br /></span><span style="color: #0000BB">fpassthru</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />exit;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.fpassthru-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When using <span class="function"><strong>fpassthru()</strong></span> on a binary file on Windows
    systems, you should make sure to open the file in binary mode by
    appending a <code class="literal">b</code> to the mode used in the call to
    <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>.
   </p>
   <p class="para">
    You are encouraged to use the <code class="literal">b</code> flag when dealing
    with binary files, even if your system does not require it, so that
    your scripts will be more portable.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.fpassthru-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.readfile.php" class="function" rel="rdfs-seeAlso">readfile()</a> - Outputs a file</span></li>
    <li><span class="function"><a href="function.fopen.php" class="function" rel="rdfs-seeAlso">fopen()</a> - Opens file or URL</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.fsockopen.php" class="function" rel="rdfs-seeAlso">fsockopen()</a> - Open Internet or Unix domain socket connection</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/fpassthru.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fpassthru%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fpassthru&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fpassthru.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="2100">  <div class="votes">
    <div id="Vu2100">
    <a href="/manual/vote-note.php?id=2100&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd2100">
    <a href="/manual/vote-note.php?id=2100&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V2100" title="93% like this...">
    14
    </div>
  </div>
  <a href="#2100" class="name">
  <strong class="user"><em>cgriffin at websales dot com</em></strong></a><a class="genanchor" href="#2100"> &para;</a><div class="date" title="1999-10-30 04:56"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom2100">
<div class="phpcode"><code><span class="html">If you open a new file, write to it and then call fpassthru() it doesn't work. You need to call rewind() first to set the file pointer to the begining of the file.</span></code></div>
  </div>
 </div>
  <div class="note" id="112360">  <div class="votes">
    <div id="Vu112360">
    <a href="/manual/vote-note.php?id=112360&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112360">
    <a href="/manual/vote-note.php?id=112360&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112360" title="73% like this...">
    21
    </div>
  </div>
  <a href="#112360" class="name">
  <strong class="user"><em>RaulentRoi</em></strong></a><a class="genanchor" href="#112360"> &para;</a><div class="date" title="2013-06-06 02:55"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112360">
<div class="phpcode"><code><span class="html">Passthru didn't work for me for files greater than about 5Mb. Just adding "ob_end_clean()", all works fine now, including &gt; 50Mb files.<br /><br />$ToProtectedFile=$pathUnder.$filename<br />$handle = @fopen($ToProtectedFile, "rb");<br /><br />@header("Cache-Control: no-cache, must-revalidate"); <br />@header("Pragma: no-cache"); //keeps ie happy<br />@header("Content-Disposition: attachment; filename= ".$NomFichier);<br />@header("Content-type: application/octet-stream");<br />@header("Content-Length: ".$SizeOfFile);<br />@header('Content-Transfer-Encoding: binary');<br /><br />ob_end_clean();//required here or large files will not work<br />@fpassthru($handle);//works fine now</span></code></div>
  </div>
 </div>
  <div class="note" id="25758">  <div class="votes">
    <div id="Vu25758">
    <a href="/manual/vote-note.php?id=25758&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25758">
    <a href="/manual/vote-note.php?id=25758&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25758" title="90% like this...">
    9
    </div>
  </div>
  <a href="#25758" class="name">
  <strong class="user"><em>mikek at muonics dot nospam dot c dot o</em></strong></a><a class="genanchor" href="#25758"> &para;</a><div class="date" title="2002-10-04 08:48"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom25758">
<div class="phpcode"><code><span class="html">If your downloaded files are getting corrupted, one of the scripts included/required in your download script or page may have whitespace around the <span class="default">&lt;?php ?&gt;</span> tags.  A common enough problem, but most often recognized when header() fails, due to headers already being sent, but one worth mention here.<br /><br />This one bit me just recently with my download script.  Somewhere along the way adding functionality to my website, I wound up with a space (not a blank line, which I usually spot right away, but a single space character) after the closing ?&gt; tag in one of the require()'d files.  Oddly enough, all the downloads seemed to work ok, but the files were corrupted: that space character wound up at the beginning of each file.</span></code></div>
  </div>
 </div>
  <div class="note" id="37526">  <div class="votes">
    <div id="Vu37526">
    <a href="/manual/vote-note.php?id=37526&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37526">
    <a href="/manual/vote-note.php?id=37526&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37526" title="100% like this...">
    3
    </div>
  </div>
  <a href="#37526" class="name">
  <strong class="user"><em>spam at flatwan dot net</em></strong></a><a class="genanchor" href="#37526"> &para;</a><div class="date" title="2003-11-18 04:07"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37526">
<div class="phpcode"><code><span class="html">This might save someone some time. I created a program to list some rather large files and create links for the end user to click on in order to download them (using the php function fpassthru()).<br /><br />The problem I was having was it would make it half way through the download (about 377 megs) and the script would terminate and the download would stop.<br /><br />After doing some shotgun troubleshooting I discovered the php config option 'max_execution_time = 30'. Upon changing it to 'max_execution_time = -1' the files &gt;370 megs can be downloaded without the script aborting.<br /><br />Jon</span></code></div>
  </div>
 </div>
  <div class="note" id="42557">  <div class="votes">
    <div id="Vu42557">
    <a href="/manual/vote-note.php?id=42557&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42557">
    <a href="/manual/vote-note.php?id=42557&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42557" title="83% like this...">
    8
    </div>
  </div>
  <a href="#42557" class="name">
  <strong class="user"><em>nexz2004 at yahoo dot com</em></strong></a><a class="genanchor" href="#42557"> &para;</a><div class="date" title="2004-05-21 12:30"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42557">
<div class="phpcode"><code><span class="html">also it is possible to make your php script resume downloads, to do this you need to check $_SERVER['HTTP_RANGE'] which may contain something like this<br /> "bytes=10-" - resume from position 10, and to end of file<br /><br />when sending response it is also needed to send with headers<br />Accept-Ranges: bytes<br />Content-Length: {filesize}<br />Content-Range: bytes 10-{filesize-1}/{ffilesize}<br /><br />hope its usefull</span></code></div>
  </div>
 </div>
  <div class="note" id="25087">  <div class="votes">
    <div id="Vu25087">
    <a href="/manual/vote-note.php?id=25087&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25087">
    <a href="/manual/vote-note.php?id=25087&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25087" title="77% like this...">
    5
    </div>
  </div>
  <a href="#25087" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#25087"> &para;</a><div class="date" title="2002-09-10 05:17"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25087">
<div class="phpcode"><code><span class="html">Note that the above comment about the "Connection: close" header is incorrect: it does not guarantee that the connection will be closed immediately after the transfer is complete. Instead, it informs the client that it can no longer use the existing HTTP connection to perform other HTTP requests on the same server, and that the client MUST close the connection as soon as it has finished handling the current request.<br /><br />If the client (for example an old HTTP proxy) is using HTTP/1.0, it may not recognize this header, and could could the connection open; the web server should detect this and close the connection and ignore any further request attempt on that connection.<br /><br />HTTP/1.1 clients MUST honor this header and close their connection as soon as they detect the end of the answer.<br /><br />In any case, the web server will initiate a watchdog after script completion, and will force the deconnection after about 15 to 30 seconds if the client does not honor this header.<br /><br />The exact time to wait for the "socket closed by remote" event is configurable in the web server.<br /><br />It is generally smaller when the "Connection: close" header has been sent by the server, than when no "Connection:close" has been sent (in which case the connection persists for longer time, to let the client navigate on the server without enduring new connection costs in terms of: connection delays, number of socket control blocks in final wait state, number of used ports).<br /><br />Don't abuse "Connection: close" on your server for every hosted page: this creates more incoming TCP connection attempts than necessary, and slows the navigation on your site. Use it only if your script cannot generate explicit content length in the result header, as the client will have difficulties to determine the end of the results.<br /><br />If you want to save connection resources to your server, always send an Explicit "Content-Length" header within your script, or use the "chunked" transfer-encoding to explicitly send the result by delimited fragments (if the client is using HTTP/1.1, it MUST support this chunked transfer encoding, per specification). See RFC2616 for details.</span></code></div>
  </div>
 </div>
  <div class="note" id="20474">  <div class="votes">
    <div id="Vu20474">
    <a href="/manual/vote-note.php?id=20474&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20474">
    <a href="/manual/vote-note.php?id=20474&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20474" title="80% like this...">
    3
    </div>
  </div>
  <a href="#20474" class="name">
  <strong class="user"><em>php at brayra dot com</em></strong></a><a class="genanchor" href="#20474"> &para;</a><div class="date" title="2002-04-04 12:25"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20474">
<div class="phpcode"><code><span class="html">Here is a final working copy that won't freak out Microsoft Explorer if you are using sessions. Thanks to everyone else who came before. This is not as simple as I thought it would be.<br /><br />the user would pass a call to the page:<br /><a href="http://mysite/getfile.php?file=products.pdf" rel="nofollow" target="_blank">http://mysite/getfile.php?file=products.pdf</a><br /><br />include 'base.inc'; // inlcude base code, start session  and manage users<br /><br />// This loads the file global from the post/get variables<br />// For security reasons register globals is disabled<br />LoadPostGet('file');<br /><br />$filename = '/data/files/' . $file;<br />if(file_exists($filename)){<br />  $FILECMD = '/usr/bin/file';<br />  $contentType = '';<br />  $fp=popen("$FILECMD -bin $filename", 'r');<br />  if (!$fp) $contentType='application/octet-stream';<br />  else {<br />    while($string=fgets($fp, 1024)) $contentType .= $string;<br />    pclose($fp);<br />  }<br />  if(strpos($HTTP_SERVER_VARS['HTTP_USER_AGENT'], 'MSIE')){<br />    // IE cannot download from sessions without a cache<br />    header('Cache-Control: public');<br />  }<br />  header("Content-type: $contentType");<br />  header("Content-Disposition:inline; filename=\"".$file."\"");<br />  header("Content-length:".(string)(filesize($filename)));<br />  $fd=fopen($filename,'rb');<br />  while(!feof($fd)) {<br />    print fread($fd, 4096);<br />  }<br />  fclose($fd);<br />}else{<br />  print "File Not Found";<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="26414">  <div class="votes">
    <div id="Vu26414">
    <a href="/manual/vote-note.php?id=26414&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26414">
    <a href="/manual/vote-note.php?id=26414&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26414" title="72% like this...">
    5
    </div>
  </div>
  <a href="#26414" class="name">
  <strong class="user"><em>claude_minette at hotmail dot com</em></strong></a><a class="genanchor" href="#26414"> &para;</a><div class="date" title="2002-10-30 03:51"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26414">
<div class="phpcode"><code><span class="html">This code works fine with a download manager... maybe not the best solution, but the only one that works with IE!!!!!<br /><br />It forces download, but gif file don't want to be downloaded!!! so I need to simply display them in browser...<br /><br />NB $file is the result of a query on the file table...<br /><br />require_once("auth.inc.php");<br />$attachment = (strstr($HTTP_USER_AGENT, "MSIE")) ? "" : " attachment"; // IE 5.5 fix.<br />//Content of file<br />if (!headers_sent()){<br />   $ficexp=explode('.',$file["orig_name"]);<br />   $ext=$ficexp[sizeof($ficexp)-1];<br />   if ($ext!='gif'){<br />           header('Cache-Control: no-cache, must-revalidate');<br />           header('Pragma: no-cache');<br />           header("Content-Type: application/force-download");<br />           header("Content-Length: ".filesize("files/".$file["save_name"]));<br />           header("Content-Disposition: ".$attachment."; filename=".$file["orig_name"]);<br />   }<br />   $fn=fopen("files/".$file["save_name"], "rb");<br />   fpassthru($fn);<br />}<br />else {<br />    MessageBox('Headers already sent, cannot force download!');<br />}<br /><br />Min's</span></code></div>
  </div>
 </div>
  <div class="note" id="39916">  <div class="votes">
    <div id="Vu39916">
    <a href="/manual/vote-note.php?id=39916&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39916">
    <a href="/manual/vote-note.php?id=39916&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39916" title="75% like this...">
    2
    </div>
  </div>
  <a href="#39916" class="name">
  <strong class="user"><em>axx at axxess dot ca</em></strong></a><a class="genanchor" href="#39916"> &para;</a><div class="date" title="2004-02-15 01:04"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39916">
<div class="phpcode"><code><span class="html">I have also perused this list of examples which I am sure work for that person, but, as others have mentioned here, do not work for me or (anyone else).<br /><br />So what I did was try out all of these examples, check other sources of information, and put together what I think to be an example of what works on 'more than a few' systems.  The following example works for me wherever I need to create a download using fpassthru(), which works with IE6 (among other browsers):<br /><br />&lt;?<br />/*/<br />Download a file using fpassthru()<br />/*/<br />$fileDir = "/home/pathto/myfiles"; // supply a path name.<br />$fileName = "myfile.zip"; // supply a file name.<br />$fileString=$fileDir.'/'.$fileName; // combine the path and file<br />// translate file name properly for Internet Explorer.<br />if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE")){<br />  $fileName = preg_replace('/\./', '%2e', $fileName, substr_count($fileName, '.') - 1);<br />}<br />// make sure the file exists before sending headers<br />if(!$fdl=@fopen($fileString,'r')){<br />    die("Cannot Open File!");<br />} else {<br />  header("Cache-Control: ");// leave blank to avoid IE errors<br />  header("Pragma: ");// leave blank to avoid IE errors<br />  header("Content-type: application/octet-stream");<br />  header("Content-Disposition: attachment; filename=\"".$fileName."\"");<br />  header("Content-length:".(string)(filesize($fileString)));<br />    sleep(1);<br />    fpassthru($fdl);<br />}<br />?&gt;<br /><br />All that should require editing is the $fileDir and $fileName variables.  Upload the file and point to it with your browser to see if the script will prompt you for a download.<br /><br />NOTE : Regarding File Types : Leaving the 'Content-type' header as-is should allow you to download pretty much any file.  I have tested it on some of the more popular file types including zip, css, php, inc, htm, png, gif and jpg.  During these tests, I did note that if I selected 'cancel' or 'open' when prompted to download either a gif or jpg, that it would indeed cancel or open in my image browser as it should, but subsequent attempts at 'downloading only' yielded a web page view of the image.  Closing the window and opening a new one reset this, allowing me save a jpeg or gif to the hard drive directly.  I believe the problem lies in the way the caching headers are treated, since if any info is specified in the 'cache-control' header, the browser download fails completely (in IE, anyways).<br /><br />Enjoy! Mail me if it works!  ;-)</span></code></div>
  </div>
 </div>
  <div class="note" id="31899">  <div class="votes">
    <div id="Vu31899">
    <a href="/manual/vote-note.php?id=31899&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31899">
    <a href="/manual/vote-note.php?id=31899&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31899" title="66% like this...">
    3
    </div>
  </div>
  <a href="#31899" class="name">
  <strong class="user"><em>DarkAngela_ at hotmail dot com</em></strong></a><a class="genanchor" href="#31899"> &para;</a><div class="date" title="2003-05-08 04:48"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31899">
<div class="phpcode"><code><span class="html">Just a little thing more from the ssharma's script (thx to him for his great help ...) :<br /><br />Don't forget to put the fopen with the "rb" argument and not just with the "r" <br />or you won't be able to make the script work with all pdf file.<br /><br />My final script (working for Open and Save on a 1.9 Mb complex PDF file) :<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//The filename is stored in the $produitFilename variable in my script (the only thing you need)<br /><br />// You need to specify the REAL path for your file and not the URL<br /></span><span class="default">$fullPath    </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">().</span><span class="string">"./directory_where_the_file_is/"</span><span class="keyword">.</span><span class="default">$produitFilename</span><span class="keyword">;<br /><br />if (</span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">(</span><span class="default">$fullPath</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">)) {<br />    </span><span class="default">$fsize    </span><span class="keyword">=</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$fullPath</span><span class="keyword">);<br />    </span><span class="default">$fname     </span><span class="keyword">= </span><span class="default">basename </span><span class="keyword">(</span><span class="default">$fullPath</span><span class="keyword">);<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Pragma: "</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: "</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: application/octet-stream"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=\""</span><span class="keyword">.</span><span class="default">$fname</span><span class="keyword">.</span><span class="string">"\""</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-length: </span><span class="default">$fsize</span><span class="string">"</span><span class="keyword">);<br /><br />    </span><span class="default">fpassthru</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Have fun and thx u all 4 ur great help ...<br /><br />Simon (from Paris - France)</span></code></div>
  </div>
 </div>
  <div class="note" id="32066">  <div class="votes">
    <div id="Vu32066">
    <a href="/manual/vote-note.php?id=32066&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32066">
    <a href="/manual/vote-note.php?id=32066&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32066" title="66% like this...">
    2
    </div>
  </div>
  <a href="#32066" class="name">
  <strong class="user"><em>arabold AT nero DOT com</em></strong></a><a class="genanchor" href="#32066"> &para;</a><div class="date" title="2003-05-15 04:11"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32066">
<div class="phpcode"><code><span class="html">Here's a summary the different headers you need to set to make downloads *always* work with IE and Mozilla:<br /><br />[SNIP]<br />  $disposition = "inline"; // "inline" to view file in browser or "attachment" to download to hard disk<br />  $mime = "image/jpeg"; // or whatever the mime type is<br />  $name = "foo.jpg"; // file name<br />  $path = "/path/to/foo.jpg"; // full path and file name<br /> <br />  if (isset($_SERVER["HTTPS"])) {<br />      /**<br />       * We need to set the following headers to make downloads work using IE in HTTPS mode.<br />       */<br />      header("Pragma: ");<br />      header("Cache-Control: ");<br />      header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");<br />      header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");<br />      header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1<br />      header("Cache-Control: post-check=0, pre-check=0", false);<br />  }<br />      else if ($disposition == "attachment") {<br />          header("Cache-control: private");<br />  }<br />  else {<br />      header("Cache-Control: no-cache, must-revalidate");<br />      header("Pragma: no-cache");<br />  }<br />  header("Content-Type: $mime");<br />  header("Content-Disposition:$disposition; filename=\"".trim(htmlentities($name))."\"");<br />  header("Content-Description: ".trim(htmlentities($name)));<br />  header("Content-Length: ".(string)(filesize($path)));<br />  header("Connection: close");<br />[/SNIP]<br /><br />This way all kinds of download work for me. Hope that helps</span></code></div>
  </div>
 </div>
  <div class="note" id="23681">  <div class="votes">
    <div id="Vu23681">
    <a href="/manual/vote-note.php?id=23681&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23681">
    <a href="/manual/vote-note.php?id=23681&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23681" title="66% like this...">
    2
    </div>
  </div>
  <a href="#23681" class="name">
  <strong class="user"><em>-</em></strong></a><a class="genanchor" href="#23681"> &para;</a><div class="date" title="2002-07-24 04:37"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23681">
<div class="phpcode"><code><span class="html">If you trying to output a user-written file on a page for verifying, editing, etc, you'll want to use fopen(), fread(), htmlentities() to avoid malicious code. Text from fpassthru, while not parsed per se can still mess up the display of a page (or at least it did for me!) --mt.</span></code></div>
  </div>
 </div>
  <div class="note" id="47937">  <div class="votes">
    <div id="Vu47937">
    <a href="/manual/vote-note.php?id=47937&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47937">
    <a href="/manual/vote-note.php?id=47937&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47937" title="66% like this...">
    1
    </div>
  </div>
  <a href="#47937" class="name">
  <strong class="user"><em>webmaster at hardcorehoneyz dot com</em></strong></a><a class="genanchor" href="#47937"> &para;</a><div class="date" title="2004-12-06 05:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47937">
<div class="phpcode"><code><span class="html">I believe the following problem is a result of using sessions and fpassthru together.<br /><br />I have a subscription based site which protects large video files (WMV format between 100-120MB) by storing them beneath web root. Downloading a video file requires the user to click a HTML link which requests a PHP script e.g. download-video.php?video_id=123. If the user is valid (session vars created from sucessful login) the script then creates the necessary headers to trigger a 'Save As' download box, opens the file from beneath web root and sends it using fpassthru.<br /><br />The problem is as follows:<br /><br />The user should be able to click other links on the site whilst a file is downloading. But when they do so, the requested page won't load until the download is complete.<br /><br />As this download script is a seperate PHP request, the user should be able to load other pages on the site whilst the file is downloading.<br /><br />At time of writing, I've tried almost everything to remove this bug. There must be a problem with using a PHP script rather than a direct web server link to download files.</span></code></div>
  </div>
 </div>
  <div class="note" id="27066">  <div class="votes">
    <div id="Vu27066">
    <a href="/manual/vote-note.php?id=27066&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27066">
    <a href="/manual/vote-note.php?id=27066&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27066" title="66% like this...">
    1
    </div>
  </div>
  <a href="#27066" class="name">
  <strong class="user"><em>john at bvstudios dot com</em></strong></a><a class="genanchor" href="#27066"> &para;</a><div class="date" title="2002-11-21 12:05"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27066">
<div class="phpcode"><code><span class="html">In reply to:<br /><br />"3. Through no amount of futzing of headers was I able to get the filename to be set properly when the actual transfer was initiated via a refresh (META or via headers).  I don't know if this is also an MSIE only issue or not.  If 'download.php?dl=now' (for example) had a refresh back to 'download.php', such that it was intended to show some information (e.g. install instructions) as well as launch the download, then the MSIE insisted that the downloaded file was supposed to be named 'download.php?dl=now' or 'download.php', ignoring the filename in the headers."<br /><br />I recently had the exact same issue.  What I found is that this was due to my session initialization on the page.  For some reason doing a session_start() caused the script to try and download itself, not what I was indicating through various header() calls.<br /><br />The solution was to move the download portion above the session initialization.  At first glance this may seem dangerous, but I only process it if there are POST vars and the script is reloading itself.  This way I know the form was submitted by that page and before they can submit it, they have to have a session!  Adding an .htaccess rule to deny all for the directory where the files are stored also helps because then only my script can access the files.</span></code></div>
  </div>
 </div>
  <div class="note" id="30740">  <div class="votes">
    <div id="Vu30740">
    <a href="/manual/vote-note.php?id=30740&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30740">
    <a href="/manual/vote-note.php?id=30740&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30740" title="62% like this...">
    2
    </div>
  </div>
  <a href="#30740" class="name">
  <strong class="user"><em>Omega2k at web dot de</em></strong></a><a class="genanchor" href="#30740"> &para;</a><div class="date" title="2003-03-27 05:07"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30740">
<div class="phpcode"><code><span class="html">To throttle download-speed of specific files this works fine in my board hosted on my local machine:<br /><br />//#######################################<br /> $big_file=filesize($completeFilePath)/1024; //size of file in kb<br /> header('Content-Type: '.$mime_type);<br /> header('Content-disposition: '.$content_disp.'filename="'.$attachment_name.'"');<br /> header('Cache-Control: no-cache');<br /> header('Pragma: no-cache');<br /> header('Expires: 0');<br /> header('Content-Length: '.(string)(filesize($completeFilePath))); <br /> $fp=fopen($completeFilePath,'r');<br /> while(!feof($fp)) {<br />     $buffer = fread($fp, 1024*6); //speed-limit 6kb/s<br />     if ($big_file&gt;32 &amp;&amp; <br />     $extension!="jpg" &amp;&amp; <br />     $extension!="jpeg" &amp;&amp; <br />     $extension!="gif" &amp;&amp; <br />     $extension!="png" &amp;&amp; <br />     $extension!="txt")<br />     sleep(1); //if filesize&gt;32kb and no smallfile like jpg,gif or so - wait 1 second<br />     print $buffer;<br /> }<br /> fclose($fp);<br /> header ("Connection: close");<br />//#######################################<br /><br />I think it's the easiest way to slow down downloading files without using a loop or for-next - this really saves performace of php and is quite exact by using 1024*number_of_kb in one second...<br /><br />Thats all<br /><br />Greetings, omega2k.dynu.com</span></code></div>
  </div>
 </div>
  <div class="note" id="48244">  <div class="votes">
    <div id="Vu48244">
    <a href="/manual/vote-note.php?id=48244&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48244">
    <a href="/manual/vote-note.php?id=48244&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48244" title="60% like this...">
    2
    </div>
  </div>
  <a href="#48244" class="name">
  <strong class="user"><em>webmaster at hardcorehoneyz dot com</em></strong></a><a class="genanchor" href="#48244"> &para;</a><div class="date" title="2004-12-16 05:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48244">
<div class="phpcode"><code><span class="html">In relation to using sessions and fpassthru together.<br /><br />Try adding: session_write_close()<br /><br />somewhere near the top of the download script, before you start sending the video, and that should take care of it.<br /><br />I've implemented and tested session_write_close() and it works like a dream. Other links can now be clicked and loaded whilst a big file is being passed using fpassthru.<br /><br />Big thanks to Greg for this tip. What a helpful community we live in :0)</span></code></div>
  </div>
 </div>
  <div class="note" id="29162">  <div class="votes">
    <div id="Vu29162">
    <a href="/manual/vote-note.php?id=29162&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29162">
    <a href="/manual/vote-note.php?id=29162&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29162" title="60% like this...">
    1
    </div>
  </div>
  <a href="#29162" class="name">
  <strong class="user"><em>brett at NOSPAM dot brettbrewer dot com</em></strong></a><a class="genanchor" href="#29162"> &para;</a><div class="date" title="2003-02-04 02:49"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29162">
<div class="phpcode"><code><span class="html">The above method worked for me after trying everything else imaginable to get Explorer to download a file via PHP. However, I had to change the content-length line. No need to "stringify" the $size variable as in the above post. The method below works for both small and very large file (tested on files larger than 30MB with no probs)...<br /><br /><span class="default">&lt;?php<br />$distribution</span><span class="keyword">=</span><span class="string">"/path/to/a/file.exe"<br /></span><span class="keyword">if (</span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen </span><span class="keyword">(</span><span class="default">$distribution</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">)){<br /><br />          </span><span class="default">$size</span><span class="keyword">=</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$distribution</span><span class="keyword">);<br />          </span><span class="default">$fname </span><span class="keyword">= </span><span class="default">basename </span><span class="keyword">(</span><span class="default">$distribution</span><span class="keyword">);<br /><br /></span><span class="comment">//This is some really weak code I used just to redirect to the file before I fixed<br />//this problem...it makes the browser handle the download via Apache instead of PHP<br />//but it would be really easy to then find out the true location of the file<br /><br />               //header("Location: $distribution");<br />             //fclose ($fd);<br />             //exit;<br /><br />//below is a much better way to do it...<br /><br />     </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Pragma: "</span><span class="keyword">);<br />      </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: "</span><span class="keyword">);<br />     </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: application/octet-stream"</span><span class="keyword">);<br />      </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=\""</span><span class="keyword">.</span><span class="default">$fname</span><span class="keyword">.</span><span class="string">"\""</span><span class="keyword">);<br />      </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-length: </span><span class="default">$size</span><span class="string">"</span><span class="keyword">);<br /><br />          while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">)) {<br />               </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">2048</span><span class="keyword">);<br />               print </span><span class="default">$buffer</span><span class="keyword">;<br />          }<br />          </span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br />          exit;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Good luck.<br />Brett Brewer.</span></code></div>
  </div>
 </div>
  <div class="note" id="27274">  <div class="votes">
    <div id="Vu27274">
    <a href="/manual/vote-note.php?id=27274&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27274">
    <a href="/manual/vote-note.php?id=27274&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27274" title="60% like this...">
    1
    </div>
  </div>
  <a href="#27274" class="name">
  <strong class="user"><em>shaun at nospam dot phplabs dot com</em></strong></a><a class="genanchor" href="#27274"> &para;</a><div class="date" title="2002-11-29 04:41"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27274">
<div class="phpcode"><code><span class="html">Note that if you use these two headers from a previous example:<br /><br />header('Cache-Control: no-cache, must-revalidate');<br />header('Pragma: no-cache');<br /><br />before sending a file to the browser, the "Open" option on Internet Explorer's file download dialog will not work properly. If the user clicks "Open" instead of "Save," the target application will open an empty file, because the downloaded file was not cached. The user will have to save the file to their hard drive in order to use it. <br /><br />Make sure to leave these headers out if you'd like your visitors to be able to use IE's "Open" option.</span></code></div>
  </div>
 </div>
  <div class="note" id="18445">  <div class="votes">
    <div id="Vu18445">
    <a href="/manual/vote-note.php?id=18445&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18445">
    <a href="/manual/vote-note.php?id=18445&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18445" title="60% like this...">
    1
    </div>
  </div>
  <a href="#18445" class="name">
  <strong class="user"><em>mirko at mcaserta dot com</em></strong></a><a class="genanchor" href="#18445"> &para;</a><div class="date" title="2002-01-23 05:07"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18445">
<div class="phpcode"><code><span class="html">Update to the above. This also sets the correct mime type for the file you're sending. It's a small hack since it relies on the "file" system command but it should work well.<br /><br />&lt;?<br />// full path to the file command<br />$FILECMD='/usr/bin/file';<br />// directory where the file resides<br />$fileDir='/home/mcaserta';<br />// full file name<br />$fileName='test.sh';<br /><br />// END CONFIG<br /><br />$completeFilePath=$fileDir.'/'.$fileName;<br />$fp=popen("$FILECMD -bin $completeFilePath", 'r');<br /><br />if (! $fp) $contentType='application/octet-stream';<br />else {<br />  while($string=fgets($fp, 1024)) $contentType .= $string;<br />  pclose($fp);<br />}<br /><br />header('Content-type: '.($contentType));<br />header('Content-Disposition: inline; filename="'.($fileName).'"');<br />header('Content-length: '.(string)(filesize($completeFilePath)));<br />$fd=fopen($completeFilePath,'r');<br />fpassthru($fd); <br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="24649">  <div class="votes">
    <div id="Vu24649">
    <a href="/manual/vote-note.php?id=24649&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24649">
    <a href="/manual/vote-note.php?id=24649&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24649" title="57% like this...">
    1
    </div>
  </div>
  <a href="#24649" class="name">
  <strong class="user"><em>mikek at muonics dot nospam dot c dot o dot m</em></strong></a><a class="genanchor" href="#24649"> &para;</a><div class="date" title="2002-08-24 09:14"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24649">
<div class="phpcode"><code><span class="html">A few notes on using fpassthru() to php-driven download links that pop up a "Save As.." dialog:<br /><br />1. I found that the download progress dialog was remaining up for several seconds after the transfer was completed, before telling the user it was complete.  This was fixed by adding the following header:<br /><br />header ("Connection: close");<br /><br />This will cause the connection to be closed as soon as the transfer is complete, rather than waiting for a timeout.<br /><br />2. If you have multiple periods in the filename, you might wind up with a filename with numbers in brackets (such as myfile-[1][0]-windows.zip when you put myfile-1.0-windows.zip in the headers) with MSIE.  According to Microsoft's KB, his is a "known" bug having to due with MSIE's cache and there's no workaround that I was able to find.<br /><br />3. Through no amount of futzing of headers was I able to get the filename to be set properly when the actual transfer was initiated via a refresh (META or via headers).  I don't know if this is also an MSIE only issue or not.  If 'download.php?dl=now' (for example) had a refresh back to 'download.php', such that it was intended to show some information (e.g. install instructions) as well as launch the download, then the MSIE insisted that the downloaded file was supposed to be named 'download.php?dl=now' or 'download.php', ignoring the filename in the headers.</span></code></div>
  </div>
 </div>
  <div class="note" id="58042">  <div class="votes">
    <div id="Vu58042">
    <a href="/manual/vote-note.php?id=58042&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58042">
    <a href="/manual/vote-note.php?id=58042&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58042" title="55% like this...">
    1
    </div>
  </div>
  <a href="#58042" class="name">
  <strong class="user"><em>file downloads verified by session vars</em></strong></a><a class="genanchor" href="#58042"> &para;</a><div class="date" title="2005-10-21 08:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58042">
<div class="phpcode"><code><span class="html">here is my code, i tried several combinations, but most of them didnt work, and had all kinds of unnecessary headers in them, etc. this has additional good features, such as it stops sending the file if the connection stops (hopefully it does anyways), and it fixes IE filename problems when sending files that contain more than one dot in them by using a simple  preg_replace (IE likes to terminate the filename and messes everything up):<br /><br />&lt;?<br />function send_file($path) {<br />    session_write_close();<br />    ob_end_clean();<br />    if (!is_file($path) || connection_status()!=0)<br />        return(FALSE);<br /><br />    //to prevent long file from getting cut off from     //max_execution_time<br /><br />    set_time_limit(0);<br /><br />    $name=basename($path);<br /><br />    //filenames in IE containing dots will screw up the<br />    //filename unless we add this<br /><br />    if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE"))<br />        $name = preg_replace('/\./', '%2e', $name, substr_count($name, '.') - 1);<br /><br />    //required, or it might try to send the serving     //document instead of the file<br /><br />    header("Cache-Control: ");<br />    header("Pragma: ");<br />    header("Content-Type: application/octet-stream");<br />    header("Content-Length: " .(string)(filesize($path)) );<br />    header('Content-Disposition: attachment; filename="'.$name.'"');<br />    header("Content-Transfer-Encoding: binary\n");<br /><br />    if($file = fopen($path, 'rb')){<br />        while( (!feof($file)) &amp;&amp; (connection_status()==0) ){<br />            print(fread($file, 1024*8));<br />            flush();<br />        }<br />        fclose($file);<br />    }<br />    return((connection_status()==0) and !connection_aborted());<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="39097">  <div class="votes">
    <div id="Vu39097">
    <a href="/manual/vote-note.php?id=39097&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39097">
    <a href="/manual/vote-note.php?id=39097&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39097" title="100% like this...">
    2
    </div>
  </div>
  <a href="#39097" class="name">
  <strong class="user"><em>mm at tbwachiat dot com</em></strong></a><a class="genanchor" href="#39097"> &para;</a><div class="date" title="2004-01-16 05:00"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39097">
<div class="phpcode"><code><span class="html">I've tried all of these renditions of this elusive task.  NONE of them have worked for me.  And when i say work, i mean where i can click some sort of link and have a file Save As... dialog box come up on MSIE 6.0.  In every other browser i've tried (Safari,Firebird,Netscape pc and mac) all have worked where it downloads to my desktop or asks me to save it in a certain place.<br /><br />on MSIE 6.0.  the file i'm trying to download appears in it's own window. it's an image. BUT, the only thing i can do with it is SAVE IT AS A BMP. ugh.<br /><br />I'm using the fpassthru function because i have files that must not be served by the webserver.</span></code></div>
  </div>
 </div>
  <div class="note" id="25801">  <div class="votes">
    <div id="Vu25801">
    <a href="/manual/vote-note.php?id=25801&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25801">
    <a href="/manual/vote-note.php?id=25801&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25801" title="100% like this...">
    2
    </div>
  </div>
  <a href="#25801" class="name">
  <strong class="user"><em>mikek at muonics dot nospam dot c dot o</em></strong></a><a class="genanchor" href="#25801"> &para;</a><div class="date" title="2002-10-07 03:44"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom25801">
<div class="phpcode"><code><span class="html">Found a workaround for the MSIE cache bug that puts brackets around dotted items I posted about a while back (e.g. "somefile1.0-xyz.zip" becoming "somefile[1][0]-xyz.zip").<br /><br />It turns out if you encode all but the last dot as %2e, then MSIE won't do this.  If you encode all of them (including the last dot), then MSIE sticks an extra bracketed number at the end of the file (e.g. "somefile1.0-xyz.zip[1]").  Unfortunately, however, some other browsers then want to save the file with the %2e in the filename instead of the dots.<br /><br />if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE"))<br />{<br />    $fileName = preg_replace('/\./', '%2e', $fileName,<br />        substr_count($fileName, '.') - 1);<br />}<br /><br />Viola.  Properly named files.  This works at least with MSIE 6.0.</span></code></div>
  </div>
 </div>
  <div class="note" id="25085">  <div class="votes">
    <div id="Vu25085">
    <a href="/manual/vote-note.php?id=25085&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25085">
    <a href="/manual/vote-note.php?id=25085&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25085" title="100% like this...">
    2
    </div>
  </div>
  <a href="#25085" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#25085"> &para;</a><div class="date" title="2002-09-10 04:38"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25085">
<div class="phpcode"><code><span class="html">fpassthru() works best for small files. In download manager scripts, it's best to determine the URL of the file to download (you may generate it locally in your session data if you need so), and then use HTTP __temporary__ redirects (302 status code, with a "Location:" header specifying the effective download URL).<br /><br />This saves your web server from maintaining PHP scripts running for long times during the file downloadn and instead the download will be managed directly by the web server without scripting support (consequence: less memory resources used by parallel downloads)...</span></code></div>
  </div>
 </div>
  <div class="note" id="18224">  <div class="votes">
    <div id="Vu18224">
    <a href="/manual/vote-note.php?id=18224&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18224">
    <a href="/manual/vote-note.php?id=18224&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18224" title="100% like this...">
    2
    </div>
  </div>
  <a href="#18224" class="name">
  <strong class="user"><em>straz at -removethispart-mac dot com</em></strong></a><a class="genanchor" href="#18224"> &para;</a><div class="date" title="2002-01-15 12:22"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18224">
<div class="phpcode"><code><span class="html">I wrote a page which authenticates the user, then calls fpassthru() to download an Acrobat document. It worked great up to about 1MB, but for larger files, the script was dying in the middle. My ISP told me they were killing my script because it was a memory hog. I tried readfile() instead, to no avail.<br /><br />I replaced the fpassthru() with this workaround. It works great:<br /><br /> while(!feof($fn)) {<br />   $buffer = fread($fn, 4096);<br />   print $buffer;<br /> }</span></code></div>
  </div>
 </div>
  <div class="note" id="47411">  <div class="votes">
    <div id="Vu47411">
    <a href="/manual/vote-note.php?id=47411&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47411">
    <a href="/manual/vote-note.php?id=47411&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47411" title="100% like this...">
    1
    </div>
  </div>
  <a href="#47411" class="name">
  <strong class="user"><em>lbaudrillard at hotmail dot com</em></strong></a><a class="genanchor" href="#47411"> &para;</a><div class="date" title="2004-11-15 12:45"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47411">
<div class="phpcode"><code><span class="html">The way the PHP page is generated (buffered or not, and how if buffered) has an impact of the download function made using fpassthru (or fread, ...). I mean a download function may work just fine when it is called from a simple php file (no buffering here): <br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">download</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) { ... }<br />    <br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"/tmp/test.zip"</span><span class="keyword">;<br />    </span><span class="default">download</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">?&gt;</span>    <br /><br />but may fails "in the real life" when the page is buffered:<br /><br /><span class="default">&lt;?php<br />    ob_start</span><span class="keyword">(</span><span class="string">"ob_gzhandler"</span><span class="keyword">);<br />    ...<br />    require_once(</span><span class="default">download</span><span class="keyword">.</span><span class="default">php</span><span class="keyword">);<br />    ...<br />    </span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"/files/file.zip"</span><span class="keyword">;<br />    </span><span class="default">download</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />In my particular case, only Firefox 1.0 English did not perform the download, because of the ob_start("ob_gzhandler"). Replacing it by ob_start() solved the problem.<br /><br />Hope that helps <br />Laurent from Paris, France</span></code></div>
  </div>
 </div>
  <div class="note" id="47110">  <div class="votes">
    <div id="Vu47110">
    <a href="/manual/vote-note.php?id=47110&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47110">
    <a href="/manual/vote-note.php?id=47110&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47110" title="100% like this...">
    1
    </div>
  </div>
  <a href="#47110" class="name">
  <strong class="user"><em>phpnet at -remove-me-uchange dot co dot uk</em></strong></a><a class="genanchor" href="#47110"> &para;</a><div class="date" title="2004-11-03 05:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47110">
<div class="phpcode"><code><span class="html">I've modified the example given by straz at -removethispart-mac dot com to count each byte of the file out.  This can then be compared with the filesize once the file sending is complete to determine whether the file was sent succesfully or not.<br /><br />Of course, this doesn't guarantee that the user actually recieved the file successfully though will let us know if something goes wrong half way through reading/sending the file at our end.<br /><br />&lt;?<br />/* fpassthru is apparantly a memory-hog. Use this instead */<br />    while(!feof($fp)) {<br />        $buf = fread($fp, 4096);<br />        echo $buf;<br />        $bytesSent+=strlen($buf);    /* We know how many bytes were sent to the user */<br />    }<br />?&gt;<br /><br />I've then got this code to update my database to say that the file was downloaded successfully.<br /><br />&lt;?<br />    if($bytesSent==filesize($file)) {<br />        /* Do some cool stuff here! */<br />    }<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="74080">  <div class="votes">
    <div id="Vu74080">
    <a href="/manual/vote-note.php?id=74080&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74080">
    <a href="/manual/vote-note.php?id=74080&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74080" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74080" class="name">
  <strong class="user"><em>sarabas at itstudio dot pl</em></strong></a><a class="genanchor" href="#74080"> &para;</a><div class="date" title="2007-03-23 02:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74080">
<div class="phpcode"><code><span class="html">In case of multiple buffering possibility try running ob_end_clean() from the example below in a loop:<br /><br />while (@ob_end_clean());<br /><br />It will help for example in case of automatic gz compression of output.</span></code></div>
  </div>
 </div>
  <div class="note" id="55519">  <div class="votes">
    <div id="Vu55519">
    <a href="/manual/vote-note.php?id=55519&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55519">
    <a href="/manual/vote-note.php?id=55519&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55519" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55519" class="name">
  <strong class="user"><em>jonathan at corporacionlinux dot cl</em></strong></a><a class="genanchor" href="#55519"> &para;</a><div class="date" title="2005-08-05 08:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55519">
<div class="phpcode"><code><span class="html">While trying to "passthru" a file to the browser via PHP, but using the FEOF loop, the script tried to buffer the entire file before passing it to the browser. This is my original script. When calling it with a 15M PHP memory limit and a 16M file, apache killed the script.<br /><br /><span class="default">&lt;?php<br />    $name </span><span class="keyword">= </span><span class="default">$tempDir </span><span class="keyword">. </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"file"</span><span class="keyword">];<br />    </span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br />    <br />    if(</span><span class="default">$fd </span><span class="keyword">== </span><span class="default">false</span><span class="keyword">)<br />    <br />        die(</span><span class="string">"&lt;font color=red&gt;ERROR: File not found.&lt;/font&gt;"</span><span class="keyword">);<br />    <br />    </span><span class="comment">// send the right headers<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: "</span><span class="keyword">);</span><span class="comment">// leave blank to avoid IE errors<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Pragma: "</span><span class="keyword">);</span><span class="comment">// leave blank to avoid IE errors<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: application/octet-stream"</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=\"" </span><span class="keyword">. </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">"file"</span><span class="keyword">] . </span><span class="string">"\""</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-length:"</span><span class="keyword">.(string)(</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)));<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br />    </span><span class="default">session_write_close</span><span class="keyword">();<br />    </span><span class="default">ob_flush</span><span class="keyword">();<br />    </span><span class="default">flush</span><span class="keyword">();<br />    <br />         while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">)) {<br />     <br />               </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">2048</span><span class="keyword">);<br />               print </span><span class="default">$buffer</span><span class="keyword">;<br />         }<br />     <br />         </span><span class="default">fclose </span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br />         exit;<br /></span><span class="default">?&gt;<br /></span><br />Apache error log read:<br />Allowed memory size of 15728640 bytes exhausted (tried to allocate 10240 bytes)<br /><br />I tried everything, including a flush() inside the loop. But the solution was forcing the flush other way: <br /><br /><span class="default">&lt;?php<br /><br />    $buffer </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">32 </span><span class="keyword">* </span><span class="default">1024</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />voila... works just fine for me.</span></code></div>
  </div>
 </div>
  <div class="note" id="38896">  <div class="votes">
    <div id="Vu38896">
    <a href="/manual/vote-note.php?id=38896&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38896">
    <a href="/manual/vote-note.php?id=38896&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38896" title="50% like this...">
    0
    </div>
  </div>
  <a href="#38896" class="name">
  <strong class="user"><em>The Otter</em></strong></a><a class="genanchor" href="#38896"> &para;</a><div class="date" title="2004-01-10 09:57"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38896">
<div class="phpcode"><code><span class="html">In reply to spam at flatwan dot net<br />This might save someone some time. I created a program to list some rather large files and create links for the end user to click on in order to download them (using the php function fpassthru()).<br /><br />The problem I was having was it would make it half way through the download (about 377 megs) and the script would terminate and the download would stop.<br /><br />After doing some shotgun troubleshooting I discovered the php config option 'max_execution_time = 30'. Upon changing it to 'max_execution_time = -1' the files &gt;370 megs can be downloaded without the script aborting.<br /><br />The best way to do this would to be:<br /><span class="default">&lt;?php<br /></span><span class="keyword">@</span><span class="default">ignore_user_abort</span><span class="keyword">();<br />@</span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>This only changes these settings for the script that calls them. (Thanks to (I don't remember who) who wrote a form mail script that used these two lines)</span></code></div>
  </div>
 </div>
  <div class="note" id="26563">  <div class="votes">
    <div id="Vu26563">
    <a href="/manual/vote-note.php?id=26563&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26563">
    <a href="/manual/vote-note.php?id=26563&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26563" title="50% like this...">
    0
    </div>
  </div>
  <a href="#26563" class="name">
  <strong class="user"><em>mikek at nospam dot muonics dot c o m</em></strong></a><a class="genanchor" href="#26563"> &para;</a><div class="date" title="2002-11-05 02:07"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26563">
<div class="phpcode"><code><span class="html">Found a workaround to another headache that just cropped up tonight.  Apparently Opera 6.1 on Linux (unsure of other versions/platforms) has problems downloading files using the above methods if you have enabled compression via zlib.output_compression in php.ini.<br /><br />It seems that Opera sees that the actual transfer size is less than the size in the "Content-length" header for the download and decides that the transfer was incomplete or corrupted.  It then either continuously retries the download or else leaves you with a corrupted file.<br /><br />Solution:  Make sure your download script/section is off in its own directory. and add the following to your .htaccess file for that directory:<br /><br />php_flag zlib.output_compression off</span></code></div>
  </div>
 </div>
  <div class="note" id="24843">  <div class="votes">
    <div id="Vu24843">
    <a href="/manual/vote-note.php?id=24843&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24843">
    <a href="/manual/vote-note.php?id=24843&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24843" title="50% like this...">
    0
    </div>
  </div>
  <a href="#24843" class="name">
  <strong class="user"><em>me at gavinadams dot org</em></strong></a><a class="genanchor" href="#24843"> &para;</a><div class="date" title="2002-08-29 07:06"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24843">
<div class="phpcode"><code><span class="html">Interesting results using fpassthru() vs. fread() under UNIX.<br /><br />Using fread(fp, length) to read from a valid, open pointer, in which the filename has a special character (single quote, comma, open paren, etc) fails on the read (no debug statements written after that). However, using fpassthru() works like a champ.<br /><br />Thanks for the helpful notes on IE session info, have seen this before but didn't know what was causing it.</span></code></div>
  </div>
 </div>
  <div class="note" id="20967">  <div class="votes">
    <div id="Vu20967">
    <a href="/manual/vote-note.php?id=20967&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20967">
    <a href="/manual/vote-note.php?id=20967&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20967" title="50% like this...">
    0
    </div>
  </div>
  <a href="#20967" class="name">
  <strong class="user"><em>josh at trutwins dot homeip dot net</em></strong></a><a class="genanchor" href="#20967"> &para;</a><div class="date" title="2002-04-23 05:03"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20967">
<div class="phpcode"><code><span class="html">I could not get the above examples to work.  This is what I used instead:<br /><br />header("Content-Disposition: attachment; filename=$file");<br />header("Content-Description: Image File");<br />$fd = fopen($file,'r');<br />fpassthru($fd);</span></code></div>
  </div>
 </div>
  <div class="note" id="74373">  <div class="votes">
    <div id="Vu74373">
    <a href="/manual/vote-note.php?id=74373&amp;page=function.fpassthru&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74373">
    <a href="/manual/vote-note.php?id=74373&amp;page=function.fpassthru&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74373" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#74373" class="name">
  <strong class="user"><em>public at telcontar dot net</em></strong></a><a class="genanchor" href="#74373"> &para;</a><div class="date" title="2007-04-08 01:26"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74373">
<div class="phpcode"><code><span class="html">(Do not delete this, it is NOT a bug report. It is a *follow up* to vague comments on the page about fpassthru() using excessive memory, and a usage tip that if you want to use pass-through processing, PHP 5 is strongly advised. It may LOOK like a bug report because unlike earlier tips, I've tried to clarify the situation. It is not a bug report because the problem is RESOLVED in PHP 5. Rather, anyone still using PHP 4 (for example, for compatibility reasons) should simply be aware that the problem is now resolved.)<br /><br />In PHP 4 (4.4.4 tested as a CGI, Apache 2, Linux), use of both fpassthru() and fread() in a loop suffer the SAME memory "leakage". This is characterised by all data that is sent to the client also being kept inside PHP and not released. It would appear to be a failure to garbage collect the data.<br /><br />In PHP 5 (5.2.1 tested as a CGI, Apache 2, Linux) this flaw is resolved in both cases. Neither fpassthru() nor fread() in a loop "leak" memory during execution.<br /><br />The issue of which one to use appears not to be an issue of memory as both were equally flawed in PHP 4 and both are equally fixed in PHP 5.<br /><br />Speed, is left to a reader exercise to test in the latest PHPs.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.fpassthru&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fpassthru.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.filesystem.php">Filesystem Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.basename.php" title="basename">basename</a>
                        </li>
                                                <li class="">
                            <a href="function.chgrp.php" title="chgrp">chgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.chmod.php" title="chmod">chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.chown.php" title="chown">chown</a>
                        </li>
                                                <li class="">
                            <a href="function.clearstatcache.php" title="clearstatcache">clearstatcache</a>
                        </li>
                                                <li class="">
                            <a href="function.copy.php" title="copy">copy</a>
                        </li>
                                                <li class="">
                            <a href="function.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="function.dirname.php" title="dirname">dirname</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-free-space.php" title="disk_&#8203;free_&#8203;space">disk_&#8203;free_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.disk-total-space.php" title="disk_&#8203;total_&#8203;space">disk_&#8203;total_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.diskfreespace.php" title="diskfreespace">diskfreespace</a>
                        </li>
                                                <li class="">
                            <a href="function.fclose.php" title="fclose">fclose</a>
                        </li>
                                                <li class="">
                            <a href="function.fdatasync.php" title="fdatasync">fdatasync</a>
                        </li>
                                                <li class="">
                            <a href="function.feof.php" title="feof">feof</a>
                        </li>
                                                <li class="">
                            <a href="function.fflush.php" title="fflush">fflush</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetc.php" title="fgetc">fgetc</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetcsv.php" title="fgetcsv">fgetcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fgets.php" title="fgets">fgets</a>
                        </li>
                                                <li class="">
                            <a href="function.fgetss.php" title="fgetss">fgetss</a>
                        </li>
                                                <li class="">
                            <a href="function.file.php" title="file">file</a>
                        </li>
                                                <li class="">
                            <a href="function.file-exists.php" title="file_&#8203;exists">file_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.file-get-contents.php" title="file_&#8203;get_&#8203;contents">file_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.file-put-contents.php" title="file_&#8203;put_&#8203;contents">file_&#8203;put_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.fileatime.php" title="fileatime">fileatime</a>
                        </li>
                                                <li class="">
                            <a href="function.filectime.php" title="filectime">filectime</a>
                        </li>
                                                <li class="">
                            <a href="function.filegroup.php" title="filegroup">filegroup</a>
                        </li>
                                                <li class="">
                            <a href="function.fileinode.php" title="fileinode">fileinode</a>
                        </li>
                                                <li class="">
                            <a href="function.filemtime.php" title="filemtime">filemtime</a>
                        </li>
                                                <li class="">
                            <a href="function.fileowner.php" title="fileowner">fileowner</a>
                        </li>
                                                <li class="">
                            <a href="function.fileperms.php" title="fileperms">fileperms</a>
                        </li>
                                                <li class="">
                            <a href="function.filesize.php" title="filesize">filesize</a>
                        </li>
                                                <li class="">
                            <a href="function.filetype.php" title="filetype">filetype</a>
                        </li>
                                                <li class="">
                            <a href="function.flock.php" title="flock">flock</a>
                        </li>
                                                <li class="">
                            <a href="function.fnmatch.php" title="fnmatch">fnmatch</a>
                        </li>
                                                <li class="">
                            <a href="function.fopen.php" title="fopen">fopen</a>
                        </li>
                                                <li class="current">
                            <a href="function.fpassthru.php" title="fpassthru">fpassthru</a>
                        </li>
                                                <li class="">
                            <a href="function.fputcsv.php" title="fputcsv">fputcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.fputs.php" title="fputs">fputs</a>
                        </li>
                                                <li class="">
                            <a href="function.fread.php" title="fread">fread</a>
                        </li>
                                                <li class="">
                            <a href="function.fscanf.php" title="fscanf">fscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.fseek.php" title="fseek">fseek</a>
                        </li>
                                                <li class="">
                            <a href="function.fstat.php" title="fstat">fstat</a>
                        </li>
                                                <li class="">
                            <a href="function.fsync.php" title="fsync">fsync</a>
                        </li>
                                                <li class="">
                            <a href="function.ftell.php" title="ftell">ftell</a>
                        </li>
                                                <li class="">
                            <a href="function.ftruncate.php" title="ftruncate">ftruncate</a>
                        </li>
                                                <li class="">
                            <a href="function.fwrite.php" title="fwrite">fwrite</a>
                        </li>
                                                <li class="">
                            <a href="function.glob.php" title="glob">glob</a>
                        </li>
                                                <li class="">
                            <a href="function.is-dir.php" title="is_&#8203;dir">is_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.is-executable.php" title="is_&#8203;executable">is_&#8203;executable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-file.php" title="is_&#8203;file">is_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-link.php" title="is_&#8203;link">is_&#8203;link</a>
                        </li>
                                                <li class="">
                            <a href="function.is-readable.php" title="is_&#8203;readable">is_&#8203;readable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-uploaded-file.php" title="is_&#8203;uploaded_&#8203;file">is_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writable.php" title="is_&#8203;writable">is_&#8203;writable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-writeable.php" title="is_&#8203;writeable">is_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.lchgrp.php" title="lchgrp">lchgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.lchown.php" title="lchown">lchown</a>
                        </li>
                                                <li class="">
                            <a href="function.link.php" title="link">link</a>
                        </li>
                                                <li class="">
                            <a href="function.linkinfo.php" title="linkinfo">linkinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.lstat.php" title="lstat">lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.mkdir.php" title="mkdir">mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.move-uploaded-file.php" title="move_&#8203;uploaded_&#8203;file">move_&#8203;uploaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-file.php" title="parse_&#8203;ini_&#8203;file">parse_&#8203;ini_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-ini-string.php" title="parse_&#8203;ini_&#8203;string">parse_&#8203;ini_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.pathinfo.php" title="pathinfo">pathinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pclose.php" title="pclose">pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.popen.php" title="popen">popen</a>
                        </li>
                                                <li class="">
                            <a href="function.readfile.php" title="readfile">readfile</a>
                        </li>
                                                <li class="">
                            <a href="function.readlink.php" title="readlink">readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath.php" title="realpath">realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-get.php" title="realpath_&#8203;cache_&#8203;get">realpath_&#8203;cache_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.realpath-cache-size.php" title="realpath_&#8203;cache_&#8203;size">realpath_&#8203;cache_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.rename.php" title="rename">rename</a>
                        </li>
                                                <li class="">
                            <a href="function.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="function.rmdir.php" title="rmdir">rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.set-file-buffer.php" title="set_&#8203;file_&#8203;buffer">set_&#8203;file_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="function.symlink.php" title="symlink">symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.tempnam.php" title="tempnam">tempnam</a>
                        </li>
                                                <li class="">
                            <a href="function.tmpfile.php" title="tmpfile">tmpfile</a>
                        </li>
                                                <li class="">
                            <a href="function.touch.php" title="touch">touch</a>
                        </li>
                                                <li class="">
                            <a href="function.umask.php" title="umask">umask</a>
                        </li>
                                                <li class="">
                            <a href="function.unlink.php" title="unlink">unlink</a>
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
