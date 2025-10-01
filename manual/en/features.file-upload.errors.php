<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Error Messages Explained - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.file-upload.errors.php">
 <link rel="shorturl" href="https://www.php.net/file-upload.errors">
 <link rel="alternate" href="https://www.php.net/file-upload.errors" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.file-upload.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.file-upload.post-method.php">
 <link rel="next" href="https://www.php.net/manual/en/features.file-upload.common-pitfalls.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.file-upload.errors.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.file-upload.errors.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.file-upload.errors.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.file-upload.errors.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.file-upload.errors.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.file-upload.errors.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.file-upload.errors.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.file-upload.errors.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.file-upload.errors.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.file-upload.errors.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.file-upload.errors.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Error Messages Explained" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Error Messages Explained - Manual" />
<meta name="twitter:description" content="Error Messages Explained" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Error Messages Explained - Manual" />
<meta itemprop="description" content="Error Messages Explained" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Error Messages Explained" />

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
        <a href="features.file-upload.common-pitfalls.php">
          Common Pitfalls &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.file-upload.post-method.php">
          &laquo; POST method uploads        </a>
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
            <option value='en/features.file-upload.errors.php' selected="selected">English</option>
            <option value='de/features.file-upload.errors.php'>German</option>
            <option value='es/features.file-upload.errors.php'>Spanish</option>
            <option value='fr/features.file-upload.errors.php'>French</option>
            <option value='it/features.file-upload.errors.php'>Italian</option>
            <option value='ja/features.file-upload.errors.php'>Japanese</option>
            <option value='pt_BR/features.file-upload.errors.php'>Brazilian Portuguese</option>
            <option value='ru/features.file-upload.errors.php'>Russian</option>
            <option value='tr/features.file-upload.errors.php'>Turkish</option>
            <option value='uk/features.file-upload.errors.php'>Ukrainian</option>
            <option value='zh/features.file-upload.errors.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.file-upload.errors" class="sect1">
   <h2 class="title">Error Messages Explained</h2>
   <p class="simpara">
    PHP returns an appropriate error code along with the 
    file array.  The error code can be found in the 
    <code class="literal">error</code> segment of the file array that is created 
    during the file upload by PHP. In other words, the error might be 
    found in <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['error']</a></var>.
   </p>
   <p class="simpara">
    The value of this error code is one of the
    <strong><code><a href="filesystem.constants.php#constant.upload-err-cant-write">UPLOAD_ERR_<span class="replaceable">*</span></a></code></strong>
    constants.
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.file-upload.errors%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.file-upload.errors&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.errors.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115746">  <div class="votes">
    <div id="Vu115746">
    <a href="/manual/vote-note.php?id=115746&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115746">
    <a href="/manual/vote-note.php?id=115746&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115746" title="82% like this...">
    271
    </div>
  </div>
  <a href="#115746" class="name">
  <strong class="user"><em>Viktor</em></strong></a><a class="genanchor" href="#115746"> &para;</a><div class="date" title="2014-09-17 09:14"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115746">
<div class="phpcode"><code><span class="html">Update to Adams old comment.<br /><br />This is probably useful to someone.<br /><br /><span class="default">&lt;?php<br /><br />$phpFileUploadErrors </span><span class="keyword">= array(<br />    </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'There is no error, the file uploaded with success'</span><span class="keyword">,<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'The uploaded file exceeds the upload_max_filesize directive in php.ini'</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form'</span><span class="keyword">,<br />    </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="string">'The uploaded file was only partially uploaded'</span><span class="keyword">,<br />    </span><span class="default">4 </span><span class="keyword">=&gt; </span><span class="string">'No file was uploaded'</span><span class="keyword">,<br />    </span><span class="default">6 </span><span class="keyword">=&gt; </span><span class="string">'Missing a temporary folder'</span><span class="keyword">,<br />    </span><span class="default">7 </span><span class="keyword">=&gt; </span><span class="string">'Failed to write file to disk.'</span><span class="keyword">,<br />    </span><span class="default">8 </span><span class="keyword">=&gt; </span><span class="string">'A PHP extension stopped the file upload.'</span><span class="keyword">,<br />);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89374">  <div class="votes">
    <div id="Vu89374">
    <a href="/manual/vote-note.php?id=89374&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89374">
    <a href="/manual/vote-note.php?id=89374&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89374" title="72% like this...">
    178
    </div>
  </div>
  <a href="#89374" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#89374"> &para;</a><div class="date" title="2009-03-04 06:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89374">
<div class="phpcode"><code><span class="html">[EDIT BY danbrown AT php DOT net: This code is a fixed version of a note originally submitted by (Thalent, Michiel Thalen) on 04-Mar-2009.]
<br />
<br />
<br />This is a handy exception to use when handling upload errors:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">UploadException </span><span class="keyword">extends </span><span class="default">Exception
<br /></span><span class="keyword">{
<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">) {
<br />        </span><span class="default">$message </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">codeToMessage</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">);
<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);
<br />    }
<br />
<br />    private function </span><span class="default">codeToMessage</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">)
<br />    {
<br />        switch (</span><span class="default">$code</span><span class="keyword">) {
<br />            case </span><span class="default">UPLOAD_ERR_INI_SIZE</span><span class="keyword">:
<br />                </span><span class="default">$message </span><span class="keyword">= </span><span class="string">"The uploaded file exceeds the upload_max_filesize directive in php.ini"</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">UPLOAD_ERR_FORM_SIZE</span><span class="keyword">:
<br />                </span><span class="default">$message </span><span class="keyword">= </span><span class="string">"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form"</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">UPLOAD_ERR_PARTIAL</span><span class="keyword">:
<br />                </span><span class="default">$message </span><span class="keyword">= </span><span class="string">"The uploaded file was only partially uploaded"</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">UPLOAD_ERR_NO_FILE</span><span class="keyword">:
<br />                </span><span class="default">$message </span><span class="keyword">= </span><span class="string">"No file was uploaded"</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">UPLOAD_ERR_NO_TMP_DIR</span><span class="keyword">:
<br />                </span><span class="default">$message </span><span class="keyword">= </span><span class="string">"Missing a temporary folder"</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">UPLOAD_ERR_CANT_WRITE</span><span class="keyword">:
<br />                </span><span class="default">$message </span><span class="keyword">= </span><span class="string">"Failed to write file to disk"</span><span class="keyword">;
<br />                break;
<br />            case </span><span class="default">UPLOAD_ERR_EXTENSION</span><span class="keyword">:
<br />                </span><span class="default">$message </span><span class="keyword">= </span><span class="string">"File upload stopped by extension"</span><span class="keyword">;
<br />                break;
<br />
<br />            default:
<br />                </span><span class="default">$message </span><span class="keyword">= </span><span class="string">"Unknown upload error"</span><span class="keyword">;
<br />                break;
<br />        }
<br />        return </span><span class="default">$message</span><span class="keyword">;
<br />    }
<br />}
<br />
<br /></span><span class="comment">// Use
<br /> </span><span class="keyword">if (</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">] === </span><span class="default">UPLOAD_ERR_OK</span><span class="keyword">) {
<br /></span><span class="comment">//uploading successfully done
<br /></span><span class="keyword">} else {
<br />throw new </span><span class="default">UploadException</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">]);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57193">  <div class="votes">
    <div id="Vu57193">
    <a href="/manual/vote-note.php?id=57193&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57193">
    <a href="/manual/vote-note.php?id=57193&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57193" title="76% like this...">
    55
    </div>
  </div>
  <a href="#57193" class="name">
  <strong class="user"><em>stephen at poppymedia dot co dot uk</em></strong></a><a class="genanchor" href="#57193"> &para;</a><div class="date" title="2005-09-26 03:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57193">
<div class="phpcode"><code><span class="html">if post is greater than post_max_size set in php.ini
<br />
<br />$_FILES and $_POST will return empty</span></code></div>
  </div>
 </div>
  <div class="note" id="53278">  <div class="votes">
    <div id="Vu53278">
    <a href="/manual/vote-note.php?id=53278&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53278">
    <a href="/manual/vote-note.php?id=53278&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53278" title="71% like this...">
    70
    </div>
  </div>
  <a href="#53278" class="name">
  <strong class="user"><em>adam at gotlinux dot us</em></strong></a><a class="genanchor" href="#53278"> &para;</a><div class="date" title="2005-05-27 07:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53278">
<div class="phpcode"><code><span class="html">This is probably useful to someone.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">array(
<br />        </span><span class="default">0</span><span class="keyword">=&gt;</span><span class="string">"There is no error, the file uploaded with success"</span><span class="keyword">, 
<br />        </span><span class="default">1</span><span class="keyword">=&gt;</span><span class="string">"The uploaded file exceeds the upload_max_filesize directive in php.ini"</span><span class="keyword">, 
<br />        </span><span class="default">2</span><span class="keyword">=&gt;</span><span class="string">"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form"
<br />        </span><span class="default">3</span><span class="keyword">=&gt;</span><span class="string">"The uploaded file was only partially uploaded"</span><span class="keyword">,
<br />        </span><span class="default">4</span><span class="keyword">=&gt;</span><span class="string">"No file was uploaded"</span><span class="keyword">,
<br />        </span><span class="default">6</span><span class="keyword">=&gt;</span><span class="string">"Missing a temporary folder" 
<br /></span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128619">  <div class="votes">
    <div id="Vu128619">
    <a href="/manual/vote-note.php?id=128619&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128619">
    <a href="/manual/vote-note.php?id=128619&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128619" title="77% like this...">
    5
    </div>
  </div>
  <a href="#128619" class="name">
  <strong class="user"><em>Sohaib Essam</em></strong></a><a class="genanchor" href="#128619"> &para;</a><div class="date" title="2023-06-16 08:35"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128619">
<div class="phpcode"><code><span class="html">switch ($_FILES["image"]["error"]) {<br />        case UPLOAD_ERR_PARTIAL:<br />            exit('File only partially uploaded');<br />            break;<br />        case UPLOAD_ERR_NO_FILE:<br />            exit('No file was uploaded');<br />            break;<br />        case UPLOAD_ERR_EXTENSION:<br />            exit('File upload stopped by a PHP extension');<br />            break;<br />        case UPLOAD_ERR_FORM_SIZE:<br />            exit('File exceeds MAX_FILE_SIZE in the HTML form');<br />            break;<br />        case UPLOAD_ERR_INI_SIZE:<br />            exit('File exceeds upload_max_filesize in php.ini');<br />            break;<br />        case UPLOAD_ERR_NO_TMP_DIR:<br />            exit('Temporary folder not found');<br />            break;<br />        case UPLOAD_ERR_CANT_WRITE:<br />            exit('Failed to write file');<br />            break;<br />        default:<br />            exit('Unknown upload error');<br />            break;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="122536">  <div class="votes">
    <div id="Vu122536">
    <a href="/manual/vote-note.php?id=122536&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122536">
    <a href="/manual/vote-note.php?id=122536&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122536" title="63% like this...">
    5
    </div>
  </div>
  <a href="#122536" class="name">
  <strong class="user"><em>roland at REMOVE_ME dot mxchange dot org</em></strong></a><a class="genanchor" href="#122536"> &para;</a><div class="date" title="2018-03-22 05:03"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122536">
<div class="phpcode"><code><span class="html">I have expanded @adam at gotlinux dot us's example a bit with proper UPLOAD_FOO constants and gettext support. Also UPLOAD_ERR_EXTENSION is added (was missing in his version). Hope this helps someone.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Some </span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Upload error codes<br />     * @var array<br />     */<br />    </span><span class="keyword">private static </span><span class="default">$upload_errors </span><span class="keyword">= [];<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">() {<br />        </span><span class="comment">// Init upload errors<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">$upload_errors </span><span class="keyword">= [<br />            </span><span class="default">UPLOAD_ERR_OK </span><span class="keyword">=&gt; </span><span class="default">_</span><span class="keyword">(</span><span class="string">'There is no error, the file uploaded with success.'</span><span class="keyword">),<br />            </span><span class="default">UPLOAD_ERR_INI_SIZE </span><span class="keyword">=&gt; </span><span class="default">_</span><span class="keyword">(</span><span class="string">'The uploaded file exceeds the upload_max_filesize directive in php.ini.'</span><span class="keyword">),<br />            </span><span class="default">UPLOAD_ERR_FORM_SIZE </span><span class="keyword">=&gt; </span><span class="default">_</span><span class="keyword">(</span><span class="string">'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.'</span><span class="keyword">),<br />            </span><span class="default">UPLOAD_ERR_PARTIAL </span><span class="keyword">=&gt; </span><span class="default">_</span><span class="keyword">(</span><span class="string">'The uploaded file was only partially uploaded.'</span><span class="keyword">),<br />            </span><span class="default">UPLOAD_ERR_NO_FILE </span><span class="keyword">=&gt; </span><span class="default">_</span><span class="keyword">(</span><span class="string">'No file was uploaded.'</span><span class="keyword">),<br />            </span><span class="default">UPLOAD_ERR_NO_TMP_DIR </span><span class="keyword">=&gt; </span><span class="default">_</span><span class="keyword">(</span><span class="string">'Missing a temporary folder.'</span><span class="keyword">),<br />            </span><span class="default">UPLOAD_ERR_CANT_WRITE </span><span class="keyword">=&gt; </span><span class="default">_</span><span class="keyword">(</span><span class="string">'Cannot write to target directory. Please fix CHMOD.'</span><span class="keyword">),<br />            </span><span class="default">UPLOAD_ERR_EXTENSION </span><span class="keyword">=&gt; </span><span class="default">_</span><span class="keyword">(</span><span class="string">'A PHP extension stopped the file upload.'</span><span class="keyword">),<br />        ];<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124697">  <div class="votes">
    <div id="Vu124697">
    <a href="/manual/vote-note.php?id=124697&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124697">
    <a href="/manual/vote-note.php?id=124697&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124697" title="62% like this...">
    2
    </div>
  </div>
  <a href="#124697" class="name">
  <strong class="user"><em>jalcort at att dot net</em></strong></a><a class="genanchor" href="#124697"> &para;</a><div class="date" title="2020-02-07 03:57"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124697">
<div class="phpcode"><code><span class="html">When uploading a file, it is common to visit the php.ini and set up upload_tmp_dir = /temp but in the case of some web hostess as fatcow you need to direct not only /tmp but upload_tmp_dir = /hermes/walnaweb13a/b345/moo.youruser/tmp<br /><br />If not the $_FILES show you an error #6 "Missing a temporary folder</span></code></div>
  </div>
 </div>
  <div class="note" id="74693">  <div class="votes">
    <div id="Vu74693">
    <a href="/manual/vote-note.php?id=74693&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74693">
    <a href="/manual/vote-note.php?id=74693&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74693" title="62% like this...">
    12
    </div>
  </div>
  <a href="#74693" class="name">
  <strong class="user"><em>svenr at selfhtml dot org</em></strong></a><a class="genanchor" href="#74693"> &para;</a><div class="date" title="2007-04-23 03:15"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74693">
<div class="phpcode"><code><span class="html">Clarification on the MAX_FILE_SIZE hidden form field and the UPLOAD_ERR_FORM_SIZE error code:<br /><br />PHP has the somewhat strange feature of checking multiple "maximum file sizes".<br /><br />The two widely known limits are the php.ini settings "post_max_size" and "upload_max_size", which in combination impose a hard limit on the maximum amount of data that can be received.<br /><br />In addition to this PHP somehow got implemented a soft limit feature. It checks the existance of a form field names "max_file_size" (upper case is also OK), which should contain an integer with the maximum number of bytes allowed. If the uploaded file is bigger than the integer in this field, PHP disallows this upload and presents an error code in the $_FILES-Array.<br /><br />The PHP documentation also makes (or made - see bug #40387 - <a href="http://bugs.php.net/bug.php?id=40387" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=40387</a>) vague references to "allows browsers to check the file size before uploading". This, however, is not true and has never been. Up til today there has never been a RFC proposing the usage of such named form field, nor has there been a browser actually checking its existance or content, or preventing anything. The PHP documentation implies that a browser may alert the user that his upload is too big - this is simply wrong.<br /><br />Please note that using this PHP feature is not a good idea. A form field can easily be changed by the client. If you have to check the size of a file, do it conventionally within your script, using a script-defined integer, not an arbitrary number you got from the HTTP client (which always must be mistrusted from a security standpoint).</span></code></div>
  </div>
 </div>
  <div class="note" id="91082">  <div class="votes">
    <div id="Vu91082">
    <a href="/manual/vote-note.php?id=91082&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91082">
    <a href="/manual/vote-note.php?id=91082&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91082" title="60% like this...">
    7
    </div>
  </div>
  <a href="#91082" class="name">
  <strong class="user"><em>jille at quis dot cx</em></strong></a><a class="genanchor" href="#91082"> &para;</a><div class="date" title="2009-05-24 08:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91082">
<div class="phpcode"><code><span class="html">UPLOAD_ERR_PARTIAL is given when the mime boundary is not found after the file data. A possibly cause for this is that the upload was cancelled by the user (pressed ESC, etc).</span></code></div>
  </div>
 </div>
  <div class="note" id="99304">  <div class="votes">
    <div id="Vu99304">
    <a href="/manual/vote-note.php?id=99304&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99304">
    <a href="/manual/vote-note.php?id=99304&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99304" title="55% like this...">
    6
    </div>
  </div>
  <a href="#99304" class="name">
  <strong class="user"><em>Jeff Miner  mrjminer AT gmail DOT com</em></strong></a><a class="genanchor" href="#99304"> &para;</a><div class="date" title="2010-08-10 01:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99304">
<div class="phpcode"><code><span class="html">One thing that is annoying is that the way these constant values are handled requires processing no error with the equality, which wastes a little bit of space.  Even though "no error" is 0, which typically evaluates to "false" in an if statement, it will always evaluate to true in this context.
<br />
<br />So, instead of this:
<br />-----
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">]) {
<br />  </span><span class="comment">// handle the error
<br /></span><span class="keyword">} else {
<br />  </span><span class="comment">// process
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;
<br /></span>-----
<br />You have to do this:
<br />-----
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">]==</span><span class="default">0</span><span class="keyword">) {
<br />  </span><span class="comment">// process
<br /></span><span class="keyword">} else {
<br />  </span><span class="comment">// handle the error
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;
<br /></span>-----
<br />Also, ctype_digit fails, but is_int works.  If you're wondering... no, it doesn't make any sense.
<br />
<br />To Schoschie:
<br />
<br />You ask the question:  Why make stuff complicated when you can make it easy?  I ask the same question since the version of the code you / Anonymous / Thalent (per danbrown) have posted is unnecessary overhead and would result in a function call, as well as a potentially lengthy switch statement.  In a loop, that would be deadly... try this instead:
<br />
<br />-----
<br /><span class="default">&lt;?php
<br />$error_types </span><span class="keyword">= array(
<br /></span><span class="default">1</span><span class="keyword">=&gt;</span><span class="string">'The uploaded file exceeds the upload_max_filesize directive in php.ini.'</span><span class="keyword">,
<br /></span><span class="string">'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.'</span><span class="keyword">,
<br /></span><span class="string">'The uploaded file was only partially uploaded.'</span><span class="keyword">,
<br /></span><span class="string">'No file was uploaded.'</span><span class="keyword">,
<br /></span><span class="default">6</span><span class="keyword">=&gt;</span><span class="string">'Missing a temporary folder.'</span><span class="keyword">,
<br /></span><span class="string">'Failed to write file to disk.'</span><span class="keyword">,
<br /></span><span class="string">'A PHP extension stopped the file upload.'
<br /></span><span class="keyword">);
<br />
<br /></span><span class="comment">// Outside a loop...
<br /></span><span class="keyword">if(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">]==</span><span class="default">0</span><span class="keyword">) {
<br />  </span><span class="comment">// process
<br /></span><span class="keyword">} else {
<br />  </span><span class="default">$error_message </span><span class="keyword">= </span><span class="default">$error_types</span><span class="keyword">[</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">]];
<br />  </span><span class="comment">// do whatever with the error message
<br /></span><span class="keyword">}
<br />
<br /></span><span class="comment">// In a loop...
<br /></span><span class="keyword">for(</span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">]);</span><span class="default">$x</span><span class="keyword">&lt;</span><span class="default">$y</span><span class="keyword">;++</span><span class="default">$x</span><span class="keyword">) {
<br />  if(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">][</span><span class="default">$x</span><span class="keyword">]==</span><span class="default">0</span><span class="keyword">) {
<br />    </span><span class="comment">// process
<br />  </span><span class="keyword">} else {
<br />    </span><span class="default">$error_message </span><span class="keyword">= </span><span class="default">$error_types</span><span class="keyword">[</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">][</span><span class="default">$x</span><span class="keyword">]];
<br />    </span><span class="comment">// Do whatever with the error message
<br />  </span><span class="keyword">}
<br />}
<br />
<br /></span><span class="comment">// When you're done... if you aren't doing all of this in a function that's about to end / complete all the processing and want to reclaim the memory
<br /></span><span class="keyword">unset(</span><span class="default">$error_types</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99292">  <div class="votes">
    <div id="Vu99292">
    <a href="/manual/vote-note.php?id=99292&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99292">
    <a href="/manual/vote-note.php?id=99292&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99292" title="54% like this...">
    4
    </div>
  </div>
  <a href="#99292" class="name">
  <strong class="user"><em>Tom</em></strong></a><a class="genanchor" href="#99292"> &para;</a><div class="date" title="2010-08-09 03:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99292">
<div class="phpcode"><code><span class="html">Note: something that might surprise you, PHP also provides a value in the $_FILES array, if the input element has no value at all, stating an error UPLOAD_ERR_NO_FILE.<br /><br />So UPLOAD_ERR_NO_FILE is not an error, but a note that the input element just had no value. Thus you can't rely on the $_FILES array to see if a file was provided. Instead you have to walk the array and check every single damn entry - which can be quite difficult since the values may be nested if you use input elements named like "foo[bar][bla]".<br /><br />Seems like PHP just introduced you to yet another common pitfall.</span></code></div>
  </div>
 </div>
  <div class="note" id="47129">  <div class="votes">
    <div id="Vu47129">
    <a href="/manual/vote-note.php?id=47129&amp;page=features.file-upload.errors&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47129">
    <a href="/manual/vote-note.php?id=47129&amp;page=features.file-upload.errors&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47129" title="53% like this...">
    2
    </div>
  </div>
  <a href="#47129" class="name">
  <strong class="user"><em>tyler at fishmas dot org</em></strong></a><a class="genanchor" href="#47129"> &para;</a><div class="date" title="2004-11-03 07:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47129">
<div class="phpcode"><code><span class="html">In regards to the dud filename being sent, a very simple way to check for this is to check the file size as well as the file name.  For example, to check the file size simple use the size attribute in your file info array:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">"file_id"</span><span class="keyword">][</span><span class="string">"size"</span><span class="keyword">]  == </span><span class="default">0</span><span class="keyword">)
<br />{
<br />         </span><span class="comment">// ...PROCESS ERROR
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.file-upload.errors&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.errors.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.file-upload.php">Handling file uploads</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.file-upload.post-method.php" title="POST method uploads">POST method uploads</a>
                        </li>
                                                <li class="current">
                            <a href="features.file-upload.errors.php" title="Error Messages Explained">Error Messages Explained</a>
                        </li>
                                                <li class="">
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
