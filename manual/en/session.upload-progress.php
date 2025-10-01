<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Session Upload Progress - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/session.upload-progress.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/session.upload-progress.php">
 <link rel="alternate" href="https://www.php.net/manual/en/session.upload-progress.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.session.php">
 <link rel="prev" href="https://www.php.net/manual/en/session.customhandler.php">
 <link rel="next" href="https://www.php.net/manual/en/session.security.php">

 <link rel="alternate" href="https://www.php.net/manual/en/session.upload-progress.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/session.upload-progress.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/session.upload-progress.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/session.upload-progress.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/session.upload-progress.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/session.upload-progress.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/session.upload-progress.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/session.upload-progress.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/session.upload-progress.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/session.upload-progress.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/session.upload-progress.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Session Upload Progress" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Session Upload Progress - Manual" />
<meta name="twitter:description" content="Session Upload Progress" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Session Upload Progress - Manual" />
<meta itemprop="description" content="Session Upload Progress" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Session Upload Progress" />

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
        <a href="session.security.php">
          Sessions and Security &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="session.customhandler.php">
          &laquo; Custom Session Handlers        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      </ul>
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
            <option value='en/session.upload-progress.php' selected="selected">English</option>
            <option value='de/session.upload-progress.php'>German</option>
            <option value='es/session.upload-progress.php'>Spanish</option>
            <option value='fr/session.upload-progress.php'>French</option>
            <option value='it/session.upload-progress.php'>Italian</option>
            <option value='ja/session.upload-progress.php'>Japanese</option>
            <option value='pt_BR/session.upload-progress.php'>Brazilian Portuguese</option>
            <option value='ru/session.upload-progress.php'>Russian</option>
            <option value='tr/session.upload-progress.php'>Turkish</option>
            <option value='uk/session.upload-progress.php'>Ukrainian</option>
            <option value='zh/session.upload-progress.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="session.upload-progress" class="chapter">
 <h1 class="title">Session Upload Progress</h1>


 <p class="para">
  When the
  <a href="session.configuration.php#ini.session.upload-progress.enabled" class="link">session.upload_progress.enabled</a>
  INI option is enabled, PHP will be able to track the upload progress of
  individual files being uploaded.
  This information isn&#039;t particularly useful for the actual upload request
  itself, but during the file upload an application can send a POST request
  to a separate endpoint (via <abbr>XHR</abbr> for example) to check the
  status.
 </p>
 <p class="para">
  The upload progress will be available in the <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var>
  superglobal when an upload is in progress, and when POSTing a variable of
  the same name as the
  <a href="session.configuration.php#ini.session.upload-progress.name" class="link">session.upload_progress.name</a>
  INI setting is set to.
  When PHP detects such POST requests, it will populate an array in the
  <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var>, where the index is a concatenated value of the
  <a href="session.configuration.php#ini.session.upload-progress.prefix" class="link">session.upload_progress.prefix</a>
  and
  <a href="session.configuration.php#ini.session.upload-progress.name" class="link">session.upload_progress.name</a>
  INI options.
  The key is typically retrieved by reading these INI settings, i.e.
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$key </span><span style="color: #007700">= </span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">"session.upload_progress.prefix"</span><span style="color: #007700">) . </span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">"session.upload_progress.name"</span><span style="color: #007700">)];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  It is also possible to <em>cancel</em> the currently in-progress file
  upload, by setting the <code class="literal">$_SESSION[$key][&quot;cancel_upload&quot;]</code> key to
  <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  When uploading multiple files in the same request, this will only cancel the
  currently in-progress file upload, and pending file uploads, but will not
  remove successfully completed uploads.
  When an upload is cancelled like this, the <code class="literal">error</code> key in
  <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES</a></var> array will be set to
  <strong><code><a href="filesystem.constants.php#constant.upload-err-extension">UPLOAD_ERR_EXTENSION</a></code></strong>.
 </p>
 <p class="para">
  The
  <a href="session.configuration.php#ini.session.upload-progress.freq" class="link">session.upload_progress.freq</a>
  and
  <a href="session.configuration.php#ini.session.upload-progress.min-freq" class="link">session.upload_progress.min_freq</a>
  INI options control how frequent the upload progress information should be
  recalculated.
  With a reasonable amount for these two settings, the overhead of this
  feature is almost non-existent.
 </p>
 <p class="para">
  <div class="example" id="example-5000">
   <p><strong>Example #1 Example information</strong></p>
   <div class="example-contents"><p>
    Example of the structure of the progress upload array.
   </p></div>
   <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;form action=&quot;upload.php&quot; method=&quot;POST&quot; enctype=&quot;multipart/form-data&quot;&gt;
 &lt;input type=&quot;hidden&quot; name=&quot;&lt;?php echo ini_get(&quot;session.upload_progress.name&quot;); ?&gt;&quot; value=&quot;123&quot; /&gt;
 &lt;input type=&quot;file&quot; name=&quot;file1&quot; /&gt;
 &lt;input type=&quot;file&quot; name=&quot;file2&quot; /&gt;
 &lt;input type=&quot;submit&quot; /&gt;
&lt;/form&gt;</pre>
</div>
   </div>

   <div class="example-contents"><p>
    The data stored in the session will look like this:
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$_SESSION</span><span style="color: #007700">[</span><span style="color: #DD0000">"upload_progress_123"</span><span style="color: #007700">] = array(<br /> </span><span style="color: #DD0000">"start_time" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1234567890</span><span style="color: #007700">,   </span><span style="color: #FF8000">// The request time<br /> </span><span style="color: #DD0000">"content_length" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">57343257</span><span style="color: #007700">, </span><span style="color: #FF8000">// POST content length<br /> </span><span style="color: #DD0000">"bytes_processed" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">453489</span><span style="color: #007700">,  </span><span style="color: #FF8000">// Amount of bytes received and processed<br /> </span><span style="color: #DD0000">"done" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">false</span><span style="color: #007700">,              </span><span style="color: #FF8000">// true when the POST handler has finished, successfully or not<br /> </span><span style="color: #DD0000">"files" </span><span style="color: #007700">=&gt; array(<br />  </span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; array(<br />   </span><span style="color: #DD0000">"field_name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"file1"</span><span style="color: #007700">,       </span><span style="color: #FF8000">// Name of the &lt;input/&gt; field<br />   // The following 3 elements equals those in $_FILES<br />   </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"foo.avi"</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"tmp_name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"/tmp/phpxxxxxx"</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"error" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"done" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">,                </span><span style="color: #FF8000">// True when the POST handler has finished handling this file<br />   </span><span style="color: #DD0000">"start_time" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1234567890</span><span style="color: #007700">,    </span><span style="color: #FF8000">// When this file has started to be processed<br />   </span><span style="color: #DD0000">"bytes_processed" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">57343250</span><span style="color: #007700">, </span><span style="color: #FF8000">// Number of bytes received and processed for this file<br />  </span><span style="color: #007700">),<br />  </span><span style="color: #FF8000">// An other file, not finished uploading, in the same request<br />  </span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; array(<br />   </span><span style="color: #DD0000">"field_name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"file2"</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"name" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"bar.avi"</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"tmp_name" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">NULL</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"error" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"done" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"start_time" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1234567899</span><span style="color: #007700">,<br />   </span><span style="color: #DD0000">"bytes_processed" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">54554</span><span style="color: #007700">,<br />  ),<br /> )<br />);</span></span></code></div>
   </div>

  </div>
 </p>
 <div class="warning"><strong class="warning">Warning</strong>
  <p class="para">
   The web server&#039;s request buffering has to be disabled for this to work
   properly, else PHP may see the file upload only once fully uploaded. Servers
   such as Nginx are known to buffer larger requests.
  </p>
 </div>
 <div class="caution"><strong class="caution">Caution</strong>
  <p class="para">
   The upload progress information is written to the session before any scripts
   are executed. Therefore changing the session name via <span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span>
   or <span class="function"><a href="function.session-name.php" class="function">session_name()</a></span> will give a session without the upload
   progress information.
  </p>
 </div>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/session/upload-progress.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsession.upload-progress%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=session.upload-progress&amp;repo=en&amp;redirect=https://www.php.net/manual/en/session.upload-progress.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109091">  <div class="votes">
    <div id="Vu109091">
    <a href="/manual/vote-note.php?id=109091&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109091">
    <a href="/manual/vote-note.php?id=109091&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109091" title="78% like this...">
    165
    </div>
  </div>
  <a href="#109091" class="name">
  <strong class="user"><em>s.zarges</em></strong></a><a class="genanchor" href="#109091"> &para;</a><div class="date" title="2012-06-19 09:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109091">
<div class="phpcode"><code><span class="html">Note, this feature doesn't work, when your webserver is runnig PHP via FastCGI. There will be no progress informations in the session array.<br />Unfortunately PHP gets the data only after the upload is completed and can't show any progress.<br /><br />I hope this informations helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="117030">  <div class="votes">
    <div id="Vu117030">
    <a href="/manual/vote-note.php?id=117030&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117030">
    <a href="/manual/vote-note.php?id=117030&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117030" title="76% like this...">
    62
    </div>
  </div>
  <a href="#117030" class="name">
  <strong class="user"><em>howtomakeaturn</em></strong></a><a class="genanchor" href="#117030"> &para;</a><div class="date" title="2015-04-04 07:18"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117030">
<div class="phpcode"><code><span class="html">ATTENTION:<br /><br />Put the upload progress session name input field BEFORE your file field in the form :<br /><br />  &lt;form action="upload.php" method="POST" enctype="multipart/form-data"&gt;<br />  &lt;input type="hidden" name="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"session.upload_progress.name"</span><span class="keyword">); </span><span class="default">?&gt;</span>" value="123" /&gt;<br />  &lt;input type="file" name="file1" /&gt;<br />  &lt;input type="file" name="file2" /&gt;<br />  &lt;input type="submit" /&gt;<br />  &lt;/form&gt;<br /><br />If you make it after your file field, you'll waste a lot of time figuring why (just like me ...)<br /><br />The following form will make you crazy and waste really a lot of time:<br /><br />&lt;form action="upload.php" method="POST" enctype="multipart/form-data"&gt;<br /> &lt;input type="file" name="file1" /&gt;<br /> &lt;input type="file" name="file2" /&gt;<br /> &lt;input type="hidden" name="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">"session.upload_progress.name"</span><span class="keyword">); </span><span class="default">?&gt;</span>" value="123" /&gt;<br /> &lt;input type="submit" /&gt;<br />&lt;/form&gt;<br /><br />DON'T do this!</span></code></div>
  </div>
 </div>
  <div class="note" id="112406">  <div class="votes">
    <div id="Vu112406">
    <a href="/manual/vote-note.php?id=112406&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112406">
    <a href="/manual/vote-note.php?id=112406&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112406" title="69% like this...">
    24
    </div>
  </div>
  <a href="#112406" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112406"> &para;</a><div class="date" title="2013-06-12 03:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112406">
<div class="phpcode"><code><span class="html">While the example in the documentation is accurate, the description is a bit off. To clarify:<br /><br />PHP will populate an array in the $_SESSION, where the index is a concatenated value of the session.upload_progress.prefix and the VALUE of the POSTed session.upload_progress.name variable.</span></code></div>
  </div>
 </div>
  <div class="note" id="109915">  <div class="votes">
    <div id="Vu109915">
    <a href="/manual/vote-note.php?id=109915&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109915">
    <a href="/manual/vote-note.php?id=109915&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109915" title="60% like this...">
    14
    </div>
  </div>
  <a href="#109915" class="name">
  <strong class="user"><em>isius</em></strong></a><a class="genanchor" href="#109915"> &para;</a><div class="date" title="2012-09-03 05:11"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109915">
<div class="phpcode"><code><span class="html">If you're seeing<br />"PHP Warning:  Unknown: The session id is too long or contains illegal characters, valid characters are a-z, A-Z, 0-9 and '-,' in Unknown on line 0",<br />then a misplaced input could be the cause. It's worth mentioning again that the hidden element MUST be before the file elements.</span></code></div>
  </div>
 </div>
  <div class="note" id="113344">  <div class="votes">
    <div id="Vu113344">
    <a href="/manual/vote-note.php?id=113344&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113344">
    <a href="/manual/vote-note.php?id=113344&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113344" title="57% like this...">
    6
    </div>
  </div>
  <a href="#113344" class="name">
  <strong class="user"><em>jortsc at gmail dot com</em></strong></a><a class="genanchor" href="#113344"> &para;</a><div class="date" title="2013-09-29 06:47"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113344">
<div class="phpcode"><code><span class="html">Note that if you run that code and you print out the content of $_SESSSION[$key] you get an empty array due that session.upload_progress.cleanup is on by default and it  cleans the progress information as soon as all POST data has been read.<br /><br />Set it to Off or 0 to see the content of $_SESSION[$key].</span></code></div>
  </div>
 </div>
  <div class="note" id="109691">  <div class="votes">
    <div id="Vu109691">
    <a href="/manual/vote-note.php?id=109691&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109691">
    <a href="/manual/vote-note.php?id=109691&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109691" title="55% like this...">
    5
    </div>
  </div>
  <a href="#109691" class="name">
  <strong class="user"><em>nihaopaul at gmail dot com</em></strong></a><a class="genanchor" href="#109691"> &para;</a><div class="date" title="2012-08-10 06:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109691">
<div class="phpcode"><code><span class="html">it should be noted that the hidden element come before the file element otherwise you wont get any updates.</span></code></div>
  </div>
 </div>
  <div class="note" id="112094">  <div class="votes">
    <div id="Vu112094">
    <a href="/manual/vote-note.php?id=112094&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112094">
    <a href="/manual/vote-note.php?id=112094&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112094" title="54% like this...">
    3
    </div>
  </div>
  <a href="#112094" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112094"> &para;</a><div class="date" title="2013-05-02 08:01"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112094">
<div class="phpcode"><code><span class="html">dont't forget, that the session has to be initialized before the form is generated, otherwise the mentioned example above won't work.</span></code></div>
  </div>
 </div>
  <div class="note" id="129749">  <div class="votes">
    <div id="Vu129749">
    <a href="/manual/vote-note.php?id=129749&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129749">
    <a href="/manual/vote-note.php?id=129749&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129749" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129749" class="name">
  <strong class="user"><em>raptor98 at email dot cz</em></strong></a><a class="genanchor" href="#129749"> &para;</a><div class="date" title="2024-09-13 05:39"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129749">
<div class="phpcode"><code><span class="html">Warning:<br />Do not change session.save_path and session.name (in your application)!<br /><br />The request for upload info must by POST with same value and name of your hidden input (session.upload_progress.name).<br /><br />Info:<br />It works under IIS /FastCGI (at PHP 5.4 and PHP 8.2, other not tested).</span></code></div>
  </div>
 </div>
  <div class="note" id="119631">  <div class="votes">
    <div id="Vu119631">
    <a href="/manual/vote-note.php?id=119631&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119631">
    <a href="/manual/vote-note.php?id=119631&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119631" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119631" class="name">
  <strong class="user"><em>alice at librelamp dot com</em></strong></a><a class="genanchor" href="#119631"> &para;</a><div class="date" title="2016-07-20 11:49"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119631">
<div class="phpcode"><code><span class="html">There were two gotchas that got me with implementing this.<br /><br />The first - if you use session_name() to change the name of sessions, this will not work. I discovered this by looking at phpinfo() and seeing that is saw a different session name.<br /><br />At least in Apache, a better way to set the session is in your apache config use<br /><br />php_value session.name "your custom name"<br /><br />It goes within the Directory directive, might work in .htaccess - I don't know.<br /><br />-=-<br /><br />Secondly - in apache, don't use mod_mpm_prefork.so<br /><br />That was the problem I had, that's the default in CentOS 7.<br /><br />The problem is it causes Apache to wait with any additional requests until the upload is finished.<br /><br />Commenting that module out and using mod_mpm_worker.so instead fixed that problem, and the progress meter worked.</span></code></div>
  </div>
 </div>
  <div class="note" id="117188">  <div class="votes">
    <div id="Vu117188">
    <a href="/manual/vote-note.php?id=117188&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117188">
    <a href="/manual/vote-note.php?id=117188&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117188" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117188" class="name">
  <strong class="user"><em>ricki at rocker dot com</em></strong></a><a class="genanchor" href="#117188"> &para;</a><div class="date" title="2015-04-28 06:36"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117188">
<div class="phpcode"><code><span class="html">session.upload_progress updates completely ignore custom session handlers set via  session_set_save_handler()</span></code></div>
  </div>
 </div>
  <div class="note" id="115971">  <div class="votes">
    <div id="Vu115971">
    <a href="/manual/vote-note.php?id=115971&amp;page=session.upload-progress&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115971">
    <a href="/manual/vote-note.php?id=115971&amp;page=session.upload-progress&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115971" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115971" class="name">
  <strong class="user"><em>StrateGeyti</em></strong></a><a class="genanchor" href="#115971"> &para;</a><div class="date" title="2014-10-20 10:07"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115971">
<div class="phpcode"><code><span class="html">It seems like if you send a form with the field like :<br /><br /><span class="default">&lt;?php </span><span class="keyword">echo </span><span class="string">'&lt;input type="hidden" name="'</span><span class="keyword">.</span><span class="default">ini_get</span><span class="keyword">(</span><span class="string">'session.upload_progress.name'</span><span class="keyword">) .</span><span class="string">'" value="123" /&gt;'</span><span class="keyword">;  </span><span class="default">?&gt;<br /></span><br />without any field type "file", the server respons will be an 500 error.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=session.upload-progress&amp;repo=en&amp;redirect=https://www.php.net/manual/en/session.upload-progress.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.session.php">Sessions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.session.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="session.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="session.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="session.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="session.upload-progress.php" title="Session Upload Progress">Session Upload Progress</a>
                        </li>
                                                <li class="">
                            <a href="session.security.php" title="Sessions and Security">Sessions and Security</a>
                        </li>
                                                <li class="">
                            <a href="ref.session.php" title="Session Functions">Session Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.sessionhandler.php" title="SessionHandler">SessionHandler</a>
                        </li>
                                                <li class="">
                            <a href="class.sessionhandlerinterface.php" title="SessionHandlerInterface">SessionHandlerInterface</a>
                        </li>
                                                <li class="">
                            <a href="class.sessionidinterface.php" title="SessionIdInterface">SessionIdInterface</a>
                        </li>
                                                <li class="">
                            <a href="class.sessionupdatetimestamphandlerinterface.php" title="SessionUpdateTimestampHandlerInterface">SessionUpdateTimestampHandlerInterface</a>
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
