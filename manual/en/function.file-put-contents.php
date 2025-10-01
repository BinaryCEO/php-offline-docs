<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: file_put_contents - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.file-put-contents.php">
 <link rel="shorturl" href="https://www.php.net/file-put-contents">
 <link rel="alternate" href="https://www.php.net/file-put-contents" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.file-get-contents.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fileatime.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.file-put-contents.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.file-put-contents.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.file-put-contents.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.file-put-contents.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.file-put-contents.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.file-put-contents.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.file-put-contents.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.file-put-contents.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.file-put-contents.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.file-put-contents.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.file-put-contents.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Write data to a file" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: file_put_contents - Manual" />
<meta name="twitter:description" content="Write data to a file" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: file_put_contents - Manual" />
<meta itemprop="description" content="Write data to a file" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Write data to a file" />

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
        <a href="function.fileatime.php">
          fileatime &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.file-get-contents.php">
          &laquo; file_get_contents        </a>
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
            <option value='en/function.file-put-contents.php' selected="selected">English</option>
            <option value='de/function.file-put-contents.php'>German</option>
            <option value='es/function.file-put-contents.php'>Spanish</option>
            <option value='fr/function.file-put-contents.php'>French</option>
            <option value='it/function.file-put-contents.php'>Italian</option>
            <option value='ja/function.file-put-contents.php'>Japanese</option>
            <option value='pt_BR/function.file-put-contents.php'>Brazilian Portuguese</option>
            <option value='ru/function.file-put-contents.php'>Russian</option>
            <option value='tr/function.file-put-contents.php'>Turkish</option>
            <option value='uk/function.file-put-contents.php'>Ukrainian</option>
            <option value='zh/function.file-put-contents.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.file-put-contents" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">file_put_contents</h1> 
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">file_put_contents</span> &mdash; <span class="dc-title">Write data to a file</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.file-put-contents-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>file_put_contents</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment"> 
   This function is identical to calling <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>, 
   <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span> and <span class="function"><a href="function.fclose.php" class="function">fclose()</a></span> successively
   to write data to a file.
  </p>
  <p class="para">
   If <code class="parameter">filename</code> does not exist, the file is created.
   Otherwise, the existing file is overwritten, unless the 
   <strong><code><a href="filesystem.constants.php#constant.file-append">FILE_APPEND</a></code></strong> flag is set.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.file-put-contents-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the file where to write the data.
      </p>
     </dd>
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The data to write. Can be either a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, an
       <span class="type"><a href="language.types.array.php" class="type array">array</a></span> or a <span class="type">stream</span> resource.
      </p>
      <p class="para">
       If <code class="parameter">data</code> is a <span class="type">stream</span> resource, the
       remaining buffer of that stream will be copied to the specified file.
       This is similar with using <span class="function"><a href="function.stream-copy-to-stream.php" class="function">stream_copy_to_stream()</a></span>.
      </p>
      <p class="para">
       You can also specify the <code class="parameter">data</code> parameter as a single
       dimension array. This is equivalent to
       <code class="literal">file_put_contents($filename, implode(&#039;&#039;, $array))</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The value of <code class="parameter">flags</code> can be any combination of 
       the following flags, joined with the binary OR (<code class="literal">|</code>)
       operator.
      </p>
      <p class="para">
       <table class="doctable table">
        <caption><strong>Available flags</strong></caption>
        
         <thead>
          <tr>
           <th>Flag</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>
            <strong><code><a href="filesystem.constants.php#constant.file-use-include-path">FILE_USE_INCLUDE_PATH</a></code></strong>
           </td>
           <td>
            Search for <code class="parameter">filename</code> in the include directory.
            See <a href="ini.core.php#ini.include-path" class="link">include_path</a> for more
            information.
           </td>
          </tr>

          <tr>
           <td>
            <strong><code><a href="filesystem.constants.php#constant.file-append">FILE_APPEND</a></code></strong>
           </td>
           <td>
            If file <code class="parameter">filename</code> already exists, append 
            the data to the file instead of overwriting it.
           </td>
          </tr>

          <tr>
           <td>
            <strong><code><a href="filesystem.constants.php#constant.lock-ex">LOCK_EX</a></code></strong>
           </td>
           <td>
            Acquire an exclusive lock on the file while proceeding to the 
            writing. In other words, a <span class="function"><a href="function.flock.php" class="function">flock()</a></span> call happens
            between the <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> call and the 
            <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span> call. This is not identical to an 
            <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> call with mode &quot;x&quot;.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">context</code></dt>
     <dd>
      <p class="para">
       A valid context resource created with 
       <span class="function"><a href="function.stream-context-create.php" class="function">stream_context_create()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.file-put-contents-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   This function returns the number of bytes that were written to the file, or
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>


 <div class="refsect1 examples" id="refsect1-function.file-put-contents-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2356">
    <p><strong>Example #1 Simple usage example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'people.txt'</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Open the file to get existing content<br /></span><span style="color: #0000BB">$current </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Append a new person to the file<br /></span><span style="color: #0000BB">$current </span><span style="color: #007700">.= </span><span style="color: #DD0000">"John Smith\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Write the contents back to the file<br /></span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">, </span><span style="color: #0000BB">$current</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-2357">
    <p><strong>Example #2 Using flags</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'people.txt'</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// The new person to add to the file<br /></span><span style="color: #0000BB">$person </span><span style="color: #007700">= </span><span style="color: #DD0000">"John Smith\n"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Write the contents to the file, <br />// using the FILE_APPEND flag to append the content to the end of the file<br />// and the LOCK_EX flag to prevent anyone else writing to the file at the same time<br /></span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">, </span><span style="color: #0000BB">$person</span><span style="color: #007700">, </span><span style="color: #0000BB">FILE_APPEND </span><span style="color: #007700">| </span><span style="color: #0000BB">LOCK_EX</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

  
 <div class="refsect1 notes" id="refsect1-function.file-put-contents-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
  <div class="tip"><strong class="tip">Tip</strong><p class="simpara">A URL can be used as a
filename with this function if the <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">fopen wrappers</a> have been enabled.
See <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span> for more details on how to specify the
filename. See the <a href="wrappers.php" class="xref">Supported Protocols and Wrappers</a> for links to information
about what abilities the various wrappers have, notes on their usage,
and information on any predefined variables they may
provide.</p></div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.file-put-contents-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.fopen.php" class="function" rel="rdfs-seeAlso">fopen()</a> - Opens file or URL</span></li>
    <li><span class="function"><a href="function.fwrite.php" class="function" rel="rdfs-seeAlso">fwrite()</a> - Binary-safe file write</span></li>
    <li><span class="function"><a href="function.file-get-contents.php" class="function" rel="rdfs-seeAlso">file_get_contents()</a> - Reads entire file into a string</span></li>
    <li><span class="function"><a href="function.stream-context-create.php" class="function" rel="rdfs-seeAlso">stream_context_create()</a> - Creates a stream context</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/file-put-contents.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.file-put-contents%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.file-put-contents&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.file-put-contents.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="84180">  <div class="votes">
    <div id="Vu84180">
    <a href="/manual/vote-note.php?id=84180&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84180">
    <a href="/manual/vote-note.php?id=84180&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84180" title="63% like this...">
    131
    </div>
  </div>
  <a href="#84180" class="name">
  <strong class="user"><em>TrentTompkins at gmail dot com</em></strong></a><a class="genanchor" href="#84180"> &para;</a><div class="date" title="2008-07-02 05:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84180">
<div class="phpcode"><code><span class="html">File put contents fails if you try to put a file in a directory that doesn't exist. This creates the directory.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">file_force_contents</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">){<br />        </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">);<br />        </span><span class="default">$file </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">);<br />        </span><span class="default">$dir </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        foreach(</span><span class="default">$parts </span><span class="keyword">as </span><span class="default">$part</span><span class="keyword">)<br />            if(!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">.= </span><span class="string">"/</span><span class="default">$part</span><span class="string">"</span><span class="keyword">)) </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />        </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dir</span><span class="string">/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105421">  <div class="votes">
    <div id="Vu105421">
    <a href="/manual/vote-note.php?id=105421&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105421">
    <a href="/manual/vote-note.php?id=105421&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105421" title="63% like this...">
    58
    </div>
  </div>
  <a href="#105421" class="name">
  <strong class="user"><em>justin dot carlson at gmail dot com</em></strong></a><a class="genanchor" href="#105421"> &para;</a><div class="date" title="2011-08-16 08:28"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105421">
<div class="phpcode"><code><span class="html">It should be obvious that this should only be used if you're making one write, if you are writing multiple times to the same file you should handle it yourself with fopen and fwrite, the fclose when you are done writing.<br /><br />Benchmark below:<br /><br />file_put_contents() for 1,000,000 writes - average of 3 benchmarks:<br /><br /> real 0m3.932s<br /> user 0m2.487s<br /> sys 0m1.437s<br /><br />fopen() fwrite() for 1,000,000 writes, fclose() -  average of 3 benchmarks:<br /><br /> real 0m2.265s<br /> user 0m1.819s<br /> sys 0m0.445s</span></code></div>
  </div>
 </div>
  <div class="note" id="123657">  <div class="votes">
    <div id="Vu123657">
    <a href="/manual/vote-note.php?id=123657&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123657">
    <a href="/manual/vote-note.php?id=123657&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123657" title="63% like this...">
    21
    </div>
  </div>
  <a href="#123657" class="name">
  <strong class="user"><em>maksam07 at gmail dot com</em></strong></a><a class="genanchor" href="#123657"> &para;</a><div class="date" title="2019-03-05 10:47"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123657">
<div class="phpcode"><code><span class="html">A slightly simplified version of the method: <a href="http://php.net/manual/ru/function.file-put-contents.php#84180" rel="nofollow" target="_blank">http://php.net/manual/ru/function.file-put-contents.php#84180</a><br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">file_force_contents</span><span class="keyword">( </span><span class="default">$fullPath</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">){<br />    </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">( </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$fullPath </span><span class="keyword">);<br />    </span><span class="default">array_pop</span><span class="keyword">( </span><span class="default">$parts </span><span class="keyword">);<br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">( </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$parts </span><span class="keyword">);<br />    <br />    if( !</span><span class="default">is_dir</span><span class="keyword">( </span><span class="default">$dir </span><span class="keyword">) )<br />        </span><span class="default">mkdir</span><span class="keyword">( </span><span class="default">$dir</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);<br />    <br />    </span><span class="default">file_put_contents</span><span class="keyword">( </span><span class="default">$fullPath</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">);<br />}<br /><br /></span><span class="default">file_force_contents</span><span class="keyword">( </span><span class="default">ROOT</span><span class="keyword">.</span><span class="string">'/newpath/file.txt'</span><span class="keyword">, </span><span class="string">'message'</span><span class="keyword">, </span><span class="default">LOCK_EX </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112831">  <div class="votes">
    <div id="Vu112831">
    <a href="/manual/vote-note.php?id=112831&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112831">
    <a href="/manual/vote-note.php?id=112831&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112831" title="60% like this...">
    21
    </div>
  </div>
  <a href="#112831" class="name">
  <strong class="user"><em>chris at ocportal dot com</em></strong></a><a class="genanchor" href="#112831"> &para;</a><div class="date" title="2013-07-28 11:13"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112831">
<div class="phpcode"><code><span class="html">It's important to understand that LOCK_EX will not prevent reading the file unless you also explicitly acquire a read lock (shared locked) with the PHP 'flock' function.<br /><br />i.e. in concurrent scenarios file_get_contents may return empty if you don't wrap it like this:<br /><br /><span class="default">&lt;?php<br />$myfile</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'test.txt'</span><span class="keyword">,</span><span class="string">'rt'</span><span class="keyword">);<br /></span><span class="default">flock</span><span class="keyword">(</span><span class="default">$myfile</span><span class="keyword">,</span><span class="default">LOCK_SH</span><span class="keyword">);<br /></span><span class="default">$read</span><span class="keyword">=</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'test.txt'</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$myfile</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />If you have code that does a file_get_contents on a file, changes the string, then re-saves using file_put_contents, you better be sure to do this correctly or your file will randomly wipe itself out.</span></code></div>
  </div>
 </div>
  <div class="note" id="96217">  <div class="votes">
    <div id="Vu96217">
    <a href="/manual/vote-note.php?id=96217&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96217">
    <a href="/manual/vote-note.php?id=96217&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96217" title="57% like this...">
    25
    </div>
  </div>
  <a href="#96217" class="name">
  <strong class="user"><em>deqode at felosity dot nl</em></strong></a><a class="genanchor" href="#96217"> &para;</a><div class="date" title="2010-02-15 12:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96217">
<div class="phpcode"><code><span class="html">Please note that when saving using an FTP host, an additional stream context must be passed through telling PHP to overwrite the file.
<br />
<br /><span class="default">&lt;?php
<br /> </span><span class="comment">/* set the FTP hostname */
<br /> </span><span class="default">$user </span><span class="keyword">= </span><span class="string">"test"</span><span class="keyword">;
<br /> </span><span class="default">$pass </span><span class="keyword">= </span><span class="string">"myFTP"</span><span class="keyword">;
<br /> </span><span class="default">$host </span><span class="keyword">= </span><span class="string">"example.com"</span><span class="keyword">;
<br /> </span><span class="default">$file </span><span class="keyword">= </span><span class="string">"test.txt"</span><span class="keyword">;
<br /> </span><span class="default">$hostname </span><span class="keyword">= </span><span class="default">$user </span><span class="keyword">. </span><span class="string">":" </span><span class="keyword">. </span><span class="default">$pass </span><span class="keyword">. </span><span class="string">"@" </span><span class="keyword">. </span><span class="default">$host </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">;
<br />
<br /> </span><span class="comment">/* the file content */
<br /> </span><span class="default">$content </span><span class="keyword">= </span><span class="string">"this is just a test."</span><span class="keyword">;
<br /> 
<br /> </span><span class="comment">/* create a stream context telling PHP to overwrite the file */
<br /> </span><span class="default">$options </span><span class="keyword">= array(</span><span class="string">'ftp' </span><span class="keyword">=&gt; array(</span><span class="string">'overwrite' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">));
<br /> </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$options</span><span class="keyword">);
<br /> 
<br /> </span><span class="comment">/* and finally, put the contents */
<br /> </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$stream</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68329">  <div class="votes">
    <div id="Vu68329">
    <a href="/manual/vote-note.php?id=68329&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68329">
    <a href="/manual/vote-note.php?id=68329&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68329" title="57% like this...">
    7
    </div>
  </div>
  <a href="#68329" class="name">
  <strong class="user"><em>egingell at sisna dot com</em></strong></a><a class="genanchor" href="#68329"> &para;</a><div class="date" title="2006-07-23 04:11"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68329">
<div class="phpcode"><code><span class="html">In reply to the previous note:<br /><br />If you want to emulate this function in PHP4, you need to return the bytes written as well as support for arrays, flags.<br /><br />I can only figure out the FILE_APPEND flag and array support. If I could figure out "resource context" and the other flags, I would include those too.<br /><br />&lt;?<br /><br />define('FILE_APPEND', 1);<br />function file_put_contents($n, $d, $flag = false) {<br />    $mode = ($flag == FILE_APPEND || strtoupper($flag) == 'FILE_APPEND') ? 'a' : 'w';<br />    $f = @fopen($n, $mode);<br />    if ($f === false) {<br />        return 0;<br />    } else {<br />        if (is_array($d)) $d = implode($d);<br />        $bytes_written = fwrite($f, $d);<br />        fclose($f);<br />        return $bytes_written;<br />    }<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="120709">  <div class="votes">
    <div id="Vu120709">
    <a href="/manual/vote-note.php?id=120709&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120709">
    <a href="/manual/vote-note.php?id=120709&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120709" title="55% like this...">
    8
    </div>
  </div>
  <a href="#120709" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120709"> &para;</a><div class="date" title="2017-02-26 10:20"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120709">
<div class="phpcode"><code><span class="html">Make sure not to corrupt anything in case of failure.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">file_put_contents_atomically</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$context </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />    if (</span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">.</span><span class="string">"~"</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">) === </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$contents</span><span class="keyword">)) {<br />        return </span><span class="default">rename</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">.</span><span class="string">"~"</span><span class="keyword">,</span><span class="default">$filename</span><span class="keyword">,</span><span class="default">$context</span><span class="keyword">);<br />    }<br /><br />    @</span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">.</span><span class="string">"~"</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br />    return </span><span class="default">FALSE</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="42551">  <div class="votes">
    <div id="Vu42551">
    <a href="/manual/vote-note.php?id=42551&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42551">
    <a href="/manual/vote-note.php?id=42551&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42551" title="56% like this...">
    7
    </div>
  </div>
  <a href="#42551" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#42551"> &para;</a><div class="date" title="2004-05-20 07:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42551">
<div class="phpcode"><code><span class="html">This functionality is now implemented in the PEAR package PHP_Compat.<br /><br />More information about using this function without upgrading your version of PHP can be found on the below link:<br /><br /><a href="http://pear.php.net/package/PHP_Compat" rel="nofollow" target="_blank">http://pear.php.net/package/PHP_Compat</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120817">  <div class="votes">
    <div id="Vu120817">
    <a href="/manual/vote-note.php?id=120817&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120817">
    <a href="/manual/vote-note.php?id=120817&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120817" title="54% like this...">
    2
    </div>
  </div>
  <a href="#120817" class="name">
  <strong class="user"><em>vaneatona at gmail dot com</em></strong></a><a class="genanchor" href="#120817"> &para;</a><div class="date" title="2017-03-15 09:09"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120817">
<div class="phpcode"><code><span class="html">I'm updating a function that was posted, as it would fail if there was no directory. It also returns the final value so you can determine if the actual file was written.<br /><br />    public static function file_force_contents($dir, $contents){<br />        $parts = explode('/', $dir);<br />        $file = array_pop($parts);<br />        $dir = '';<br /><br />        foreach($parts as $part) {<br />            if (! is_dir($dir .= "{$part}/")) mkdir($dir);<br />        }<br /><br />        return file_put_contents("{$dir}{$file}", $contents);<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="127040">  <div class="votes">
    <div id="Vu127040">
    <a href="/manual/vote-note.php?id=127040&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127040">
    <a href="/manual/vote-note.php?id=127040&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127040" title="52% like this...">
    1
    </div>
  </div>
  <a href="#127040" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#127040"> &para;</a><div class="date" title="2022-05-08 07:34"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127040">
<div class="phpcode"><code><span class="html">A more simplified version of the method that creates subdirectories:<br /><br />function path_put_contents($filePath, $contents, $flags = 0) {<br /><br />    if (! is_dir($dir = implode('/', explode('/', $filePath, -1))))<br />        mkdir($dir, 0777, true);<br />    file_put_contents($filePath, $contents, $flags);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="104814">  <div class="votes">
    <div id="Vu104814">
    <a href="/manual/vote-note.php?id=104814&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104814">
    <a href="/manual/vote-note.php?id=104814&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104814" title="51% like this...">
    4
    </div>
  </div>
  <a href="#104814" class="name">
  <strong class="user"><em>Brandon Lockaby</em></strong></a><a class="genanchor" href="#104814"> &para;</a><div class="date" title="2011-07-08 10:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104814">
<div class="phpcode"><code><span class="html">Calling file_put_contents within a destructor will cause the file to be written in SERVER_ROOT...</span></code></div>
  </div>
 </div>
  <div class="note" id="101408">  <div class="votes">
    <div id="Vu101408">
    <a href="/manual/vote-note.php?id=101408&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101408">
    <a href="/manual/vote-note.php?id=101408&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101408" title="52% like this...">
    2
    </div>
  </div>
  <a href="#101408" class="name">
  <strong class="user"><em>ravianshmsr08 at gmail dot com</em></strong></a><a class="genanchor" href="#101408"> &para;</a><div class="date" title="2010-12-15 01:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101408">
<div class="phpcode"><code><span class="html">To upload file from your localhost to any FTP server.
<br />pease note 'ftp_chdir' has been used instead of putting direct remote file path....in ftp_put ...remoth file should be only file name
<br />
<br /><span class="default">&lt;?php
<br />$host </span><span class="keyword">= </span><span class="string">'*****'</span><span class="keyword">;
<br /></span><span class="default">$usr </span><span class="keyword">= </span><span class="string">'*****'</span><span class="keyword">;
<br /></span><span class="default">$pwd </span><span class="keyword">= </span><span class="string">'**********'</span><span class="keyword">;         
<br /></span><span class="default">$local_file </span><span class="keyword">= </span><span class="string">'./orderXML/order200.xml'</span><span class="keyword">;
<br /></span><span class="default">$ftp_path </span><span class="keyword">= </span><span class="string">'order200.xml'</span><span class="keyword">;
<br /></span><span class="default">$conn_id </span><span class="keyword">= </span><span class="default">ftp_connect</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">21</span><span class="keyword">) or die (</span><span class="string">"Cannot connect to host"</span><span class="keyword">);      
<br /></span><span class="default">ftp_pasv</span><span class="keyword">(</span><span class="default">$resource</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">ftp_login</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$usr</span><span class="keyword">, </span><span class="default">$pwd</span><span class="keyword">) or die(</span><span class="string">"Cannot login"</span><span class="keyword">);
<br /></span><span class="comment">// perform file upload
<br /></span><span class="default">ftp_chdir</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">'/public_html/abc/'</span><span class="keyword">); 
<br /></span><span class="default">$upload </span><span class="keyword">= </span><span class="default">ftp_put</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$ftp_path</span><span class="keyword">, </span><span class="default">$local_file</span><span class="keyword">, </span><span class="default">FTP_ASCII</span><span class="keyword">);
<br />if(</span><span class="default">$upload</span><span class="keyword">) { </span><span class="default">$ftpsucc</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; } else { </span><span class="default">$ftpsucc</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; }
<br /></span><span class="comment">// check upload status:
<br /></span><span class="keyword">print (!</span><span class="default">$upload</span><span class="keyword">) ? </span><span class="string">'Cannot upload' </span><span class="keyword">: </span><span class="string">'Upload complete'</span><span class="keyword">;
<br />print </span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="comment">// close the FTP stream
<br /></span><span class="default">ftp_close</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101349">  <div class="votes">
    <div id="Vu101349">
    <a href="/manual/vote-note.php?id=101349&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101349">
    <a href="/manual/vote-note.php?id=101349&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101349" title="51% like this...">
    1
    </div>
  </div>
  <a href="#101349" class="name">
  <strong class="user"><em>error at example dot com</em></strong></a><a class="genanchor" href="#101349"> &para;</a><div class="date" title="2010-12-11 12:47"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101349">
<div class="phpcode"><code><span class="html">It's worth noting that you must make sure to use the correct path when working with this function. I was using it to help with logging in an error handler and sometimes it would work - while other times it wouldn't. In the end it was because sometimes it was called from different paths resulting in a failure to write to the log file.<br /><br />__DIR__ is your friend.</span></code></div>
  </div>
 </div>
  <div class="note" id="115952">  <div class="votes">
    <div id="Vu115952">
    <a href="/manual/vote-note.php?id=115952&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115952">
    <a href="/manual/vote-note.php?id=115952&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115952" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115952" class="name">
  <strong class="user"><em>gurjindersingh at SPAM dot hotmail dot com</em></strong></a><a class="genanchor" href="#115952"> &para;</a><div class="date" title="2014-10-18 06:03"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115952">
<div class="phpcode"><code><span class="html">File put contents fails if you try to put a file in a directory that doesn't exist. This function creates the directory.<br /> <br />i have updated code of "TrentTompkins at gmail dot com". thanks<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @param string $filename &lt;p&gt;file name including folder. <br /> * example :: /path/to/file/filename.ext or filename.ext&lt;/p&gt;<br /> * @param string $data &lt;p&gt; The data to write.<br /> * &lt;/p&gt;<br /> * @param int $flags same flags used for file_put_contents.<br /> * more info: <a href="http://php.net/manual/en/function.file-put-contents.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.file-put-contents.php</a><br /> * @return bool &lt;b&gt;TRUE&lt;/b&gt; file created succesfully &lt;br&gt; &lt;b&gt;FALSE&lt;/b&gt; failed to create file.<br /> */<br /></span><span class="keyword">function </span><span class="default">file_force_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">){<br />    if(!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)))<br />        </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">).</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />    return </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">,</span><span class="default">$flags</span><span class="keyword">);<br />}<br /></span><span class="comment">// usage<br /><br /></span><span class="default">file_force_contents</span><span class="keyword">(</span><span class="string">'test1.txt'</span><span class="keyword">,</span><span class="string">'test1 content'</span><span class="keyword">);  </span><span class="comment">// test1.txt created<br /><br /></span><span class="default">file_force_contents</span><span class="keyword">(</span><span class="string">'test2/test2.txt'</span><span class="keyword">,</span><span class="string">'test2 content'</span><span class="keyword">); <br /></span><span class="comment">// test2/test2.txt created "test2" folder.  <br /><br /></span><span class="default">file_force_contents</span><span class="keyword">(</span><span class="string">'~/test3/test3.txt'</span><span class="keyword">,</span><span class="string">'test3 content'</span><span class="keyword">); <br /></span><span class="comment">// /path/to/user/directory/test3/test3.txt created "test3" folder in user directory (check on linux "ll ~/ | grep test3").  <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92569">  <div class="votes">
    <div id="Vu92569">
    <a href="/manual/vote-note.php?id=92569&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92569">
    <a href="/manual/vote-note.php?id=92569&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92569" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92569" class="name">
  <strong class="user"><em>John Galt</em></strong></a><a class="genanchor" href="#92569"> &para;</a><div class="date" title="2009-07-29 12:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92569">
<div class="phpcode"><code><span class="html">I use file_put_contents() as a method of very simple hit counters. These are two different examples of extremely simple hit counters, put on one line of code, each.<br /><br />Keep in mind that they're not all that efficient. You must have a file called counter.txt with the initial value of 0.<br /><br />For a text hit counter:<br /><span class="default">&lt;?php<br /> $counter </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"counter.txt"</span><span class="keyword">); </span><span class="default">$counter</span><span class="keyword">++; </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">"counter.txt"</span><span class="keyword">, </span><span class="default">$counter</span><span class="keyword">); echo </span><span class="default">$counter</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Or a graphic hit counter:<br /><span class="default">&lt;?php<br /> $counter </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"counter.txt"</span><span class="keyword">); </span><span class="default">$counter</span><span class="keyword">++; </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">"counter.txt"</span><span class="keyword">, </span><span class="default">$counter</span><span class="keyword">); for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$counter</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) echo </span><span class="string">"&lt;img src=\"counter/"</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$counter</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">).</span><span class="string">".gif\" alt=\""</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$counter</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">).</span><span class="string">"\" /&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91793">  <div class="votes">
    <div id="Vu91793">
    <a href="/manual/vote-note.php?id=91793&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91793">
    <a href="/manual/vote-note.php?id=91793&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91793" title="48% like this...">
    -2
    </div>
  </div>
  <a href="#91793" class="name">
  <strong class="user"><em>wjsams at gmail dot com</em></strong></a><a class="genanchor" href="#91793"> &para;</a><div class="date" title="2009-06-25 08:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91793">
<div class="phpcode"><code><span class="html">file_put_contents() strips the last line ending<br /><br />If you really want an extra line ending at the end of a file when writing with file_put_contents(), you must append an extra PHP_EOL to the end of the line as follows.<br /><br /><span class="default">&lt;?php<br />$a_str </span><span class="keyword">= array(</span><span class="string">"these"</span><span class="keyword">,</span><span class="string">"are"</span><span class="keyword">,</span><span class="string">"new"</span><span class="keyword">,</span><span class="string">"lines"</span><span class="keyword">);<br /></span><span class="default">$contents </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">$a_str</span><span class="keyword">);<br /></span><span class="default">$contents </span><span class="keyword">.= </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">"newfile.txt"</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">);<br />print(</span><span class="string">"|</span><span class="default">$contents</span><span class="string">|"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You can see that when you print $contents you get two extra line endings, but if you view the file newfile.txt, you only get one.</span></code></div>
  </div>
 </div>
  <div class="note" id="119363">  <div class="votes">
    <div id="Vu119363">
    <a href="/manual/vote-note.php?id=119363&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119363">
    <a href="/manual/vote-note.php?id=119363&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119363" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#119363" class="name">
  <strong class="user"><em>aabaev arroba gmail coma com</em></strong></a><a class="genanchor" href="#119363"> &para;</a><div class="date" title="2016-05-20 11:02"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119363">
<div class="phpcode"><code><span class="html">I suggest to expand file_force_contents() function of TrentTompkins at gmail dot com by adding verification if patch is like: "../foo/bar/file"<br /><br />if (strpos($dir, "../") === 0)<br />    $dir = str_replace("..", substr(__DIR__, 0, strrpos(__DIR__, "/")), $dir);</span></code></div>
  </div>
 </div>
  <div class="note" id="107221">  <div class="votes">
    <div id="Vu107221">
    <a href="/manual/vote-note.php?id=107221&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107221">
    <a href="/manual/vote-note.php?id=107221&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107221" title="45% like this...">
    -5
    </div>
  </div>
  <a href="#107221" class="name">
  <strong class="user"><em>vahkos at mail dot ru</em></strong></a><a class="genanchor" href="#107221"> &para;</a><div class="date" title="2012-01-22 08:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107221">
<div class="phpcode"><code><span class="html">file_put_contents does not issue an error message if file name is incorrect(for example has improper symbols on the end of it /n,/t)
<br />that is why use trim() for file name.
<br />$name=trim($name);
<br />file_put_contents($name,$content);</span></code></div>
  </div>
 </div>
  <div class="note" id="129183">  <div class="votes">
    <div id="Vu129183">
    <a href="/manual/vote-note.php?id=129183&amp;page=function.file-put-contents&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129183">
    <a href="/manual/vote-note.php?id=129183&amp;page=function.file-put-contents&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129183" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#129183" class="name">
  <strong class="user"><em>curda222 at gmail dot com</em></strong></a><a class="genanchor" href="#129183"> &para;</a><div class="date" title="2024-01-22 01:22"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129183">
<div class="phpcode"><code><span class="html">An improved and enraptured code from TrentTompkins at gmail dot com  <br /><br />Note: Added error response <br />Note: Added directory detection<br />Note: Added root detection<br />Note: Added permissions when creating folder<br /><br />function file_force_contents($dir, $contents, $flags = 0){<br />    if (strpos($dir, "../") === 0){<br />        $dir = str_replace("..", substr(__DIR__, 0, strrpos(__DIR__, "/")), $dir);<br />    }<br />    $parts = explode('/', $dir);<br />    if(is_array($parts)){<br />        $file = array_pop($parts);<br />        $dir = '';<br />        foreach($parts as $part)<br />            if(!is_dir($dir .= "/$part")){<br />                mkdir($dir, 0777, true);<br />            }<br />            if(file_put_contents("$dir/$file", $contents, $flags) === false ){<br />            return false;<br />        }<br />    }else{<br />        if(file_put_contents("$dir", $contents, $flags) === false ){<br />            return false;<br />        } <br />    }<br />}<br /><br />-Oliver Leuyim Angel</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.file-put-contents&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.file-put-contents.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
