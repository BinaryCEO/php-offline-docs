<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Common Pitfalls - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.file-upload.common-pitfalls.php">
 <link rel="shorturl" href="https://www.php.net/file-upload.common-pitfalls">
 <link rel="alternate" href="https://www.php.net/file-upload.common-pitfalls" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.file-upload.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.file-upload.errors.php">
 <link rel="next" href="https://www.php.net/manual/en/features.file-upload.multiple.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.file-upload.common-pitfalls.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.file-upload.common-pitfalls.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.file-upload.common-pitfalls.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.file-upload.common-pitfalls.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.file-upload.common-pitfalls.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.file-upload.common-pitfalls.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.file-upload.common-pitfalls.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.file-upload.common-pitfalls.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.file-upload.common-pitfalls.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.file-upload.common-pitfalls.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.file-upload.common-pitfalls.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Common Pitfalls" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Common Pitfalls - Manual" />
<meta name="twitter:description" content="Common Pitfalls" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Common Pitfalls - Manual" />
<meta itemprop="description" content="Common Pitfalls" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Common Pitfalls" />

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
        <a href="features.file-upload.multiple.php">
          Uploading multiple files &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.file-upload.errors.php">
          &laquo; Error Messages Explained        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      <li><a href='features.file-upload.php'>Handling file uploads</a></li>      </ul>
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
            <option value='en/features.file-upload.common-pitfalls.php' selected="selected">English</option>
            <option value='de/features.file-upload.common-pitfalls.php'>German</option>
            <option value='es/features.file-upload.common-pitfalls.php'>Spanish</option>
            <option value='fr/features.file-upload.common-pitfalls.php'>French</option>
            <option value='it/features.file-upload.common-pitfalls.php'>Italian</option>
            <option value='ja/features.file-upload.common-pitfalls.php'>Japanese</option>
            <option value='pt_BR/features.file-upload.common-pitfalls.php'>Brazilian Portuguese</option>
            <option value='ru/features.file-upload.common-pitfalls.php'>Russian</option>
            <option value='tr/features.file-upload.common-pitfalls.php'>Turkish</option>
            <option value='uk/features.file-upload.common-pitfalls.php'>Ukrainian</option>
            <option value='zh/features.file-upload.common-pitfalls.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.file-upload.common-pitfalls" class="sect1">
   <h2 class="title">Common Pitfalls</h2>
   <p class="simpara">
    The <code class="literal">MAX_FILE_SIZE</code> item cannot specify a file size 
    greater than the file size that has been set in the <a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a> in
    the <var class="filename">php.ini</var> file. The default is 2 megabytes.
   </p>
   <p class="simpara">
    If a memory limit is enabled, a larger <a href="ini.core.php#ini.memory-limit" class="link">memory_limit</a> may be needed. Make
    sure you set <a href="ini.core.php#ini.memory-limit" class="link">memory_limit</a>
    large enough.
   </p>
   <p class="simpara">
    If <a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a>
    is set too small, script execution may be exceeded by the value. Make
    sure you set <code class="literal">max_execution_time</code> large enough.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     <a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a> only
     affects the execution time of the script itself.  Any time spent
     on activity that happens outside the execution of the script
     such as system calls using <span class="function"><a href="function.system.php" class="function">system()</a></span>, the
     <span class="function"><a href="function.sleep.php" class="function">sleep()</a></span> function, database queries, time taken by
     the file upload process, etc. is not included when determining the maximum
     time that the script has been running.
    </span>
   </p></blockquote>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     <a href="info.configuration.php#ini.max-input-time" class="link">max_input_time</a> sets the maximum
     time, in seconds, the script is allowed to receive input; this includes
     file uploads.  For large or multiple files, or users on slower connections,
     the default of <code class="literal">60</code> seconds may be exceeded.
    </p>
   </div>
   <p class="simpara">
    If <a href="ini.core.php#ini.post-max-size" class="link">post_max_size</a> is set too
    small, large files cannot be uploaded.  Make sure you set
    <code class="literal">post_max_size</code> large enough.
   </p>
   <p class="simpara">
    The
    <a href="ini.core.php#ini.max-file-uploads" class="link">max_file_uploads</a> configuration
    setting controls the maximum number of files that can uploaded in one
    request. If more files are uploaded than the limit, then
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES</a></var> will stop processing files once the limit is
    reached. For example, if
    <a href="ini.core.php#ini.max-file-uploads" class="link">max_file_uploads</a> is set to
    <code class="literal">10</code>, then <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES</a></var> will never contain
    more than 10 items.
   </p>
   <p class="simpara">
    Not validating which file you operate on may mean that users can access
    sensitive information in other directories.
   </p>
   <p class="simpara">
    Due to the large amount of directory listing styles we cannot guarantee
    that files with exotic names (like containing spaces) are handled properly.
   </p>
   <p class="simpara">
    A developer may not mix normal <code class="literal">input</code> fields and file upload fields in the same
    form variable (by using an <code class="literal">input</code> name like <code class="literal">foo[]</code>).
   </p>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/file-upload.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.file-upload.common-pitfalls%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.file-upload.common-pitfalls&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.common-pitfalls.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="44626">  <div class="votes">
    <div id="Vu44626">
    <a href="/manual/vote-note.php?id=44626&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44626">
    <a href="/manual/vote-note.php?id=44626&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44626" title="66% like this...">
    16
    </div>
  </div>
  <a href="#44626" class="name">
  <strong class="user"><em>amalcon _a_t_ eudoramail _d_o_t_ com</em></strong></a><a class="genanchor" href="#44626"> &para;</a><div class="date" title="2004-08-11 02:35"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44626">
<div class="phpcode"><code><span class="html">Note that, when you want to upload VERY large files (or you want to set the limiters VERY high for test purposes), all of the upload file size limiters are stored in signed 32-bit ints.  This means that setting a limit higher than about 2.1 GB will result in PHP seeing a large negative number.  I have not found any way around this.</span></code></div>
  </div>
 </div>
  <div class="note" id="95075">  <div class="votes">
    <div id="Vu95075">
    <a href="/manual/vote-note.php?id=95075&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95075">
    <a href="/manual/vote-note.php?id=95075&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95075" title="61% like this...">
    7
    </div>
  </div>
  <a href="#95075" class="name">
  <strong class="user"><em>Nirmal Natarajan</em></strong></a><a class="genanchor" href="#95075"> &para;</a><div class="date" title="2009-12-11 08:23"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95075">
<div class="phpcode"><code><span class="html">If using IIS 7.0 or above, the Request Filtering is enabled by default and the max allowed content length is set to 30 MB.<br /><br />One must change this value if they want to allow file uploads of more than 30 MB.<br /><br />Sample web.config entry:<br /><br />&lt;configuration&gt;<br />    &lt;/system.webServer&gt;<br />        &lt;security&gt;<br />            &lt;requestFiltering&gt;<br />                &lt;requestLimits maxAllowedContentLength="314572800"/&gt;<br />            &lt;/requestFiltering&gt;<br />        &lt;/security&gt;<br />    &lt;/system.webServer&gt;<br />&lt;/configuration&gt;<br /><br />The above setting will allow 300 MB of data to be sent as a request. Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="119869">  <div class="votes">
    <div id="Vu119869">
    <a href="/manual/vote-note.php?id=119869&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119869">
    <a href="/manual/vote-note.php?id=119869&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119869" title="64% like this...">
    4
    </div>
  </div>
  <a href="#119869" class="name">
  <strong class="user"><em>adrien.nizon+phpnet at gmail dot com</em></strong></a><a class="genanchor" href="#119869"> &para;</a><div class="date" title="2016-09-09 07:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119869">
<div class="phpcode"><code><span class="html">[Editor's note: to be more precise, MAX_FILE_SIZE can't exceed PHP_INT_MAX before PHP 7.1.]
<br />
<br />Please note that the field MAX_FILE_SIZE cannot exceed 2147483647. Any greater value will lead to an upload error that will be displayed at the end of the upload
<br />
<br />This is explained by the related C code :
<br />if (!strcasecmp(param, "MAX_FILE_SIZE")) {
<br />    max_file_size = atol(value);
<br />}
<br />
<br />The string is converted into a long int, which max value is... 2147483647
<br />
<br />Seems to be corrected since php-7.1.0beta3 (<a href="https://github.com/php/php-src/commit/cb4c195f0b85ca5d91fee1ebe90105b8bb68356c" rel="nofollow" target="_blank">https://github.com/php/php-src/commit/cb4c195f0b85ca5d91fee1ebe90105b8bb68356c</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="29151">  <div class="votes">
    <div id="Vu29151">
    <a href="/manual/vote-note.php?id=29151&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29151">
    <a href="/manual/vote-note.php?id=29151&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29151" title="60% like this...">
    4
    </div>
  </div>
  <a href="#29151" class="name">
  <strong class="user"><em>admin at creationfarm dot com</em></strong></a><a class="genanchor" href="#29151"> &para;</a><div class="date" title="2003-02-04 08:16"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29151">
<div class="phpcode"><code><span class="html">The macintosh OS (not sure about OSx) uses a dual forked file system, unlike the rest of the world ;-). Every macintosh file has a data fork and a resource fork. When a dual forked file hits a single forked file system, something has to go, and it is the resource fork. This was recognized as a problem (bad idea to begin with) and apple started recomending that developers avoid sticking vital file info in the resource fork portion of a file, but some files are still very sensitive to this. The main ones to watch out for are macintosh font files and executables, once the resource fork is gone from a mac font or an executable it is useless. To protect the files they should be stuffed or zipped prior to upload to protect the resource fork. <br /><br />Most mac ftp clients (like fetch) allow files to be uploaded in Macbinhex, which will also protect the resource fork when transfering files via ftp. I have not seen this equivilent in any mac browser (but I haven't done too much digging either).<br /><br />FYI, apple does have an old utility called ResEdit that lets you manipulate the resource fork portion of a file.</span></code></div>
  </div>
 </div>
  <div class="note" id="94987">  <div class="votes">
    <div id="Vu94987">
    <a href="/manual/vote-note.php?id=94987&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94987">
    <a href="/manual/vote-note.php?id=94987&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94987" title="60% like this...">
    1
    </div>
  </div>
  <a href="#94987" class="name">
  <strong class="user"><em>dg at artegic dot de</em></strong></a><a class="genanchor" href="#94987"> &para;</a><div class="date" title="2009-12-06 11:57"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94987">
<div class="phpcode"><code><span class="html">In case of non-deterministic occurence of the UPLOAD_ERR_PARTIAL error:  The HTTPD (e.g. Apache) should respond with a 'Accept-Ranges: none' header field.</span></code></div>
  </div>
 </div>
  <div class="note" id="127627">  <div class="votes">
    <div id="Vu127627">
    <a href="/manual/vote-note.php?id=127627&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127627">
    <a href="/manual/vote-note.php?id=127627&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127627" title="100% like this...">
    2
    </div>
  </div>
  <a href="#127627" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#127627"> &para;</a><div class="date" title="2022-09-14 09:06"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127627">
<div class="phpcode"><code><span class="html">Please be advised that setting a large post_max_size or upload_max_filesize for a complete server or a complete virtual host is not a good idea as it may lead to increased security risks.<br /><br />The risk is that an attacker may send very large POST requests and overloading your server memory and CPU as it has to parse and process those requests before handling them to your PHP script.<br /><br />So it's best to limit changing this setting to some files or directories. For example if I want to /admin/files/ and /admin/images/ I can use:<br /><br />&lt;If "%{REQUEST_URI} =~ m!^/admin/(files|images)/! &amp;&amp; -n %{HTTP_COOKIE}"&gt;<br />    php_value post_max_size 256M<br />    php_value upload_max_filesize 256M<br />&lt;/If&gt;<br /><br />I also require the request to have a cookie to avoid basic attacks. This will not protect you against attacks coming from non-authenticated users, but may delay any attack.<br /><br />This setting can be used in Apache server configuration files, and .htaccess files as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="36754">  <div class="votes">
    <div id="Vu36754">
    <a href="/manual/vote-note.php?id=36754&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36754">
    <a href="/manual/vote-note.php?id=36754&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36754" title="55% like this...">
    1
    </div>
  </div>
  <a href="#36754" class="name">
  <strong class="user"><em>morganaj at coleggwent dot ac dot uk</em></strong></a><a class="genanchor" href="#36754"> &para;</a><div class="date" title="2003-10-21 09:53"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36754">
<div class="phpcode"><code><span class="html">Here is another that may make your upload fall over.  If you are using Squid or similar proxy server make sure that this is not limiting the size of the HTTP headers. This took me weeks to figure out!</span></code></div>
  </div>
 </div>
  <div class="note" id="78182">  <div class="votes">
    <div id="Vu78182">
    <a href="/manual/vote-note.php?id=78182&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78182">
    <a href="/manual/vote-note.php?id=78182&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78182" title="53% like this...">
    1
    </div>
  </div>
  <a href="#78182" class="name">
  <strong class="user"><em>anders jenbo pc dk</em></strong></a><a class="genanchor" href="#78182"> &para;</a><div class="date" title="2007-10-02 03:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78182">
<div class="phpcode"><code><span class="html">A responce to admin at creationfarm dot com, Mac OS X and Windows running on a NTFS disk also uses a multi stream file system. Still only the data stream in transfared on http upload. It is preferable to pack Mac OS X files in .dmg files rathere then zip but the avarage user will find zip much easir and they are supported on more platforms.</span></code></div>
  </div>
 </div>
  <div class="note" id="53051">  <div class="votes">
    <div id="Vu53051">
    <a href="/manual/vote-note.php?id=53051&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53051">
    <a href="/manual/vote-note.php?id=53051&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53051" title="50% like this...">
    0
    </div>
  </div>
  <a href="#53051" class="name">
  <strong class="user"><em>tjaart at siam-data-services dot com</em></strong></a><a class="genanchor" href="#53051"> &para;</a><div class="date" title="2005-05-22 01:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53051">
<div class="phpcode"><code><span class="html">Took me a while to figure this one out...<br /><br />I think this is actually a header problem, but it only<br />happens when doing a file upload.<br /><br />If you attept a header("location:<a href="http://..." rel="nofollow" target="_blank">http://...</a>) redirect after<br />processing a $_POST[''] from a form doing a file upload<br />(i.e. having enctype="multipart/form-data"), the redirect<br />doesn't work in IE if you don't have a space between<br />location: &amp; http, i.e.<br />header("location:<a href="http://..." rel="nofollow" target="_blank">http://...</a>)  vs<br />header("location: <a href="http://..." rel="nofollow" target="_blank">http://...</a>)<br /><br />===================================<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'submit'</span><span class="keyword">]==</span><span class="string">'Upload'</span><span class="keyword">) {<br />    </span><span class="comment">// Process File and the redirect...<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"location: <a href="http://" rel="nofollow" target="_blank">http://</a>"</span><span class="keyword">...</span><span class="string">"/somewhere.php"</span><span class="keyword">);<br />    exit;<br />}<br /></span><span class="default">?&gt;<br /></span>&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;<br />&lt;form enctype="multipart/form-data" action="upload.php" method="POST"&gt;<br />    &lt;input type="hidden" name="MAX_FILE_SIZE" value="20000"&gt;<br />    Your file: &lt;input name="filename" type="file"&gt;<br />    &lt;input name="submit" type="submit" value="Upload"&gt;<br />&lt;/form&gt;<br />&lt;/body&gt;&lt;/html&gt;<br />===================================<br /><br />This only happens if all of the following are true:<br />header("location:<a href="http://..." rel="nofollow" target="_blank">http://...</a>) with no space<br />Form being processed has enctype="multipart/form-data"<br />Browser=IE<br /><br />To fix the problem, simply add the space.<br /><br />Hope this helps someone else.</span></code></div>
  </div>
 </div>
  <div class="note" id="32855">  <div class="votes">
    <div id="Vu32855">
    <a href="/manual/vote-note.php?id=32855&amp;page=features.file-upload.common-pitfalls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32855">
    <a href="/manual/vote-note.php?id=32855&amp;page=features.file-upload.common-pitfalls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32855" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#32855" class="name">
  <strong class="user"><em>tomcashman at unitekgroup dot com</em></strong></a><a class="genanchor" href="#32855"> &para;</a><div class="date" title="2003-06-09 06:59"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32855">
<div class="phpcode"><code><span class="html">For apache, also check the LimitRequestBody directive.<br />If you're running a Red Hat install, this might be set in /etc/httpd/conf.d/php.conf.<br />By default, mine was set to 512 KB.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.file-upload.common-pitfalls&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.common-pitfalls.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.file-upload.php">Handling file uploads</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.file-upload.post-method.php" title="POST method uploads">POST method uploads</a>
                        </li>
                                                <li class="">
                            <a href="features.file-upload.errors.php" title="Error Messages Explained">Error Messages Explained</a>
                        </li>
                                                <li class="current">
                            <a href="features.file-upload.common-pitfalls.php" title="Common Pitfalls">Common Pitfalls</a>
                        </li>
                                                <li class="">
                            <a href="features.file-upload.multiple.php" title="Uploading multiple files">Uploading multiple files</a>
                        </li>
                                                <li class="">
                            <a href="features.file-upload.put-method.php" title="PUT method support">PUT method support</a>
                        </li>
                                                <li class="">
                            <a href="features.file-upload.errors.seealso.php" title="See Also">See Also</a>
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
