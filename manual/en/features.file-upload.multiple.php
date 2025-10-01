<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Uploading multiple files - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.file-upload.multiple.php">
 <link rel="shorturl" href="https://www.php.net/file-upload.multiple">
 <link rel="alternate" href="https://www.php.net/file-upload.multiple" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.file-upload.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.file-upload.common-pitfalls.php">
 <link rel="next" href="https://www.php.net/manual/en/features.file-upload.put-method.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.file-upload.multiple.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.file-upload.multiple.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.file-upload.multiple.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.file-upload.multiple.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.file-upload.multiple.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.file-upload.multiple.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.file-upload.multiple.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.file-upload.multiple.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.file-upload.multiple.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.file-upload.multiple.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.file-upload.multiple.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Uploading multiple files" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Uploading multiple files - Manual" />
<meta name="twitter:description" content="Uploading multiple files" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Uploading multiple files - Manual" />
<meta itemprop="description" content="Uploading multiple files" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Uploading multiple files" />

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
        <a href="features.file-upload.put-method.php">
          PUT method support &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.file-upload.common-pitfalls.php">
          &laquo; Common Pitfalls        </a>
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
            <option value='en/features.file-upload.multiple.php' selected="selected">English</option>
            <option value='de/features.file-upload.multiple.php'>German</option>
            <option value='es/features.file-upload.multiple.php'>Spanish</option>
            <option value='fr/features.file-upload.multiple.php'>French</option>
            <option value='it/features.file-upload.multiple.php'>Italian</option>
            <option value='ja/features.file-upload.multiple.php'>Japanese</option>
            <option value='pt_BR/features.file-upload.multiple.php'>Brazilian Portuguese</option>
            <option value='ru/features.file-upload.multiple.php'>Russian</option>
            <option value='tr/features.file-upload.multiple.php'>Turkish</option>
            <option value='uk/features.file-upload.multiple.php'>Ukrainian</option>
            <option value='zh/features.file-upload.multiple.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.file-upload.multiple" class="sect1">
   <h2 class="title">Uploading multiple files</h2>
   <p class="simpara">
    Multiple files can be uploaded using different
    <code class="literal">name</code> for <code class="literal">input</code>.
   </p>
   <p class="simpara">
    It is also possible to upload multiple files simultaneously and
    have the information organized automatically in arrays for you. To
    do so, you need to use the same array submission syntax in the
    HTML form as you do with multiple selects and checkboxes:
   </p>
   <p class="para">
    <div class="example" id="example-536">
     <p><strong>Example #1 Uploading multiple files</strong></p>
     <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;form action=&quot;file-upload.php&quot; method=&quot;post&quot; enctype=&quot;multipart/form-data&quot;&gt;
  Send these files:&lt;br /&gt;
  &lt;input name=&quot;userfile[]&quot; type=&quot;file&quot; /&gt;&lt;br /&gt;
  &lt;input name=&quot;userfile[]&quot; type=&quot;file&quot; /&gt;&lt;br /&gt;
  &lt;input type=&quot;submit&quot; value=&quot;Send files&quot; /&gt;
&lt;/form&gt;</pre>
</div>
     </div>

    </div>
   </p>
   <p class="simpara">
    When the above form is submitted, the arrays
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']</a></var>,
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['name']</a></var>, and
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['size']</a></var> will be
    initialized.
   </p>
   <p class="simpara">
    For instance, assume that the filenames
    <var class="filename">/home/test/review.html</var> and
    <var class="filename">/home/test/xwp.out</var> are submitted.  In this
    case, <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['name'][0]</a></var>
    would contain the value <var class="filename">review.html</var>, and
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['name'][1]</a></var> would
    contain the value <var class="filename">xwp.out</var>. Similarly,
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['size'][0]</a></var> would
    contain <var class="filename">review.html</var>&#039;s file size, and so forth.
   </p>
   <p class="simpara">
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['name'][0]</a></var>,
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['tmp_name'][0]</a></var>,
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['size'][0]</a></var>, and
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['type'][0]</a></var> are
    also set.
   </p>
   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     The
     <a href="ini.core.php#ini.max-file-uploads" class="link">max_file_uploads</a>
     configuration setting acts as a limit on the number of files that can be
     uploaded in one request. You will need to ensure that your form does not
     try to upload more files in one request than this limit.
    </p>
   </div>
   <p class="para">
    <div class="example" id="example-537">
     <p><strong>Example #2 Uploading an entire directory</strong></p>
     <div class="example-contents"><p>
      In HTML file upload fields, it is possible to upload an entire directory with the <code class="literal">webkitdirectory</code> attribute.
      This feature is supported in most modern browsers.
     </p></div>
     <div class="example-contents"><p>
      With the <code class="literal">full_path</code> information, it is possible to store the relative paths,
      or reconstruct the same directory in the server.
     </p></div>
     <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;form action=&quot;file-upload.php&quot; method=&quot;post&quot; enctype=&quot;multipart/form-data&quot;&gt;
  Send this directory:&lt;br /&gt;
  &lt;input name=&quot;userfile[]&quot; type=&quot;file&quot; webkitdirectory multiple /&gt;
  &lt;input type=&quot;submit&quot; value=&quot;Send files&quot; /&gt;
&lt;/form&gt;</pre>
</div>
     </div>

    </div>

    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      The <code class="literal">webkitdirectory</code> attribute is non-standard and is not on a standards track.
      Do not use it on production sites facing the Web: it will not work for every user.
      There may also be large incompatibilities between implementations and the behavior may change in the future.
     </p>
     <p class="simpara">
      PHP only parses the relative path information submitted by the browser/user-agent,
      and passes that information to the <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES</a></var> array.
      There is no guarantee that the values in the <code class="literal">full_path</code> array contains a real directory structure,
      and the PHP application must not trust this information.
     </p>
    </div>
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.file-upload.multiple%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.file-upload.multiple&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.multiple.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="53240">  <div class="votes">
    <div id="Vu53240">
    <a href="/manual/vote-note.php?id=53240&amp;page=features.file-upload.multiple&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53240">
    <a href="/manual/vote-note.php?id=53240&amp;page=features.file-upload.multiple&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53240" title="64% like this...">
    357
    </div>
  </div>
  <a href="#53240" class="name">
  <strong class="user"><em>phpuser at gmail dot com</em></strong></a><a class="genanchor" href="#53240"> &para;</a><div class="date" title="2005-05-26 08:09"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53240">
<div class="phpcode"><code><span class="html">When uploading multiple files, the $_FILES variable is created in the form:<br /><br />Array<br />(<br />    [name] =&gt; Array<br />        (<br />            [0] =&gt; foo.txt<br />            [1] =&gt; bar.txt<br />        )<br /><br />    [type] =&gt; Array<br />        (<br />            [0] =&gt; text/plain<br />            [1] =&gt; text/plain<br />        )<br /><br />    [tmp_name] =&gt; Array<br />        (<br />            [0] =&gt; /tmp/phpYzdqkD<br />            [1] =&gt; /tmp/phpeEwEWG<br />        )<br /><br />    [error] =&gt; Array<br />        (<br />            [0] =&gt; 0<br />            [1] =&gt; 0<br />        )<br /><br />    [size] =&gt; Array<br />        (<br />            [0] =&gt; 123<br />            [1] =&gt; 456<br />        )<br />)<br /><br />I found it made for a little cleaner code if I had the uploaded files array in the form<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [name] =&gt; foo.txt<br />            [type] =&gt; text/plain<br />            [tmp_name] =&gt; /tmp/phpYzdqkD<br />            [error] =&gt; 0<br />            [size] =&gt; 123<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [name] =&gt; bar.txt<br />            [type] =&gt; text/plain<br />            [tmp_name] =&gt; /tmp/phpeEwEWG<br />            [error] =&gt; 0<br />            [size] =&gt; 456<br />        )<br />)<br /><br />I wrote a quick function that would convert the $_FILES array to the cleaner (IMHO) array.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">reArrayFiles</span><span class="keyword">(&amp;</span><span class="default">$file_post</span><span class="keyword">) {<br /><br />    </span><span class="default">$file_ary </span><span class="keyword">= array();<br />    </span><span class="default">$file_count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$file_post</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]);<br />    </span><span class="default">$file_keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$file_post</span><span class="keyword">);<br /><br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$file_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        foreach (</span><span class="default">$file_keys </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">) {<br />            </span><span class="default">$file_ary</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$file_post</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">];<br />        }<br />    }<br /><br />    return </span><span class="default">$file_ary</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Now I can do the following:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'upload'</span><span class="keyword">]) {<br />    </span><span class="default">$file_ary </span><span class="keyword">= </span><span class="default">reArrayFiles</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'ufile'</span><span class="keyword">]);<br /><br />    foreach (</span><span class="default">$file_ary </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {<br />        print </span><span class="string">'File Name: ' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">];<br />        print </span><span class="string">'File Type: ' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">];<br />        print </span><span class="string">'File Size: ' </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">];<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125035">  <div class="votes">
    <div id="Vu125035">
    <a href="/manual/vote-note.php?id=125035&amp;page=features.file-upload.multiple&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125035">
    <a href="/manual/vote-note.php?id=125035&amp;page=features.file-upload.multiple&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125035" title="76% like this...">
    20
    </div>
  </div>
  <a href="#125035" class="name">
  <strong class="user"><em>i.g.e.o@ya (dot) ru</em></strong></a><a class="genanchor" href="#125035"> &para;</a><div class="date" title="2020-05-22 05:10"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125035">
<div class="phpcode"><code><span class="html">A bit update to 14 year ago note from "phpuser at gmail dot com".<br />That update converts to a really more friendly array form incoming _POST info for uploaded files. <br />And that variants works identical for non-multiple uploads and multiple uploads:<br /><span class="default">&lt;?php<br /></span><span class="comment">//Функция переформатирует массив поданных POST'ом файлов<br /></span><span class="keyword">function </span><span class="default">reArrayFiles</span><span class="keyword">(&amp;</span><span class="default">$file_post</span><span class="keyword">){<br />    </span><span class="default">$isMulti    </span><span class="keyword">= </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$file_post</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]);<br />    </span><span class="default">$file_count    </span><span class="keyword">= </span><span class="default">$isMulti</span><span class="keyword">?</span><span class="default">count</span><span class="keyword">(</span><span class="default">$file_post</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]):</span><span class="default">1</span><span class="keyword">;<br />    </span><span class="default">$file_keys    </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$file_post</span><span class="keyword">);<br /><br />    </span><span class="default">$file_ary    </span><span class="keyword">= [];    </span><span class="comment">//Итоговый массив<br />    </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$file_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />        foreach(</span><span class="default">$file_keys </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">)<br />            if(</span><span class="default">$isMulti</span><span class="keyword">)<br />                </span><span class="default">$file_ary</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$file_post</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">];<br />            else<br />                </span><span class="default">$file_ary</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">]    = </span><span class="default">$file_post</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br /><br />    return </span><span class="default">$file_ary</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114235">  <div class="votes">
    <div id="Vu114235">
    <a href="/manual/vote-note.php?id=114235&amp;page=features.file-upload.multiple&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114235">
    <a href="/manual/vote-note.php?id=114235&amp;page=features.file-upload.multiple&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114235" title="58% like this...">
    51
    </div>
  </div>
  <a href="#114235" class="name">
  <strong class="user"><em>wizzard351 at yahoo dot com</em></strong></a><a class="genanchor" href="#114235"> &para;</a><div class="date" title="2014-01-27 06:12"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114235">
<div class="phpcode"><code><span class="html">This is also needed for &lt;input type=file multiple&gt; elements.<br /><br />So, if you have an input element like this:<br />&lt;input type="file" multiple="multiple" name="foobar" /&gt;<br />This should be written as<br />&lt;input type="file" multiple="multiple" name="foobar[]" /&gt;<br />else you'll only be able to get one of the files.</span></code></div>
  </div>
 </div>
  <div class="note" id="96983">  <div class="votes">
    <div id="Vu96983">
    <a href="/manual/vote-note.php?id=96983&amp;page=features.file-upload.multiple&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96983">
    <a href="/manual/vote-note.php?id=96983&amp;page=features.file-upload.multiple&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96983" title="56% like this...">
    13
    </div>
  </div>
  <a href="#96983" class="name">
  <strong class="user"><em>Corey Ballou</em></strong></a><a class="genanchor" href="#96983"> &para;</a><div class="date" title="2010-03-25 01:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96983">
<div class="phpcode"><code><span class="html">Here is a function to fix the indices of a multi-dimensional for easier parsing when dealing with file uploads.  It takes a single $_FILES field array as a parameter and separates each individual uploaded file by numeric key.  This allows for iterating like:<br /><br /><span class="default">&lt;?php<br />fixFilesArray</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'array_of_files'</span><span class="keyword">]);<br />foreach (</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'array_of_files'</span><span class="keyword">] as </span><span class="default">$position </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="comment">// should output array with indices name, type, tmp_name, error, size<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Here's the code:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Fixes the odd indexing of multiple file uploads from the format:<br /> *<br /> * $_FILES['field']['key']['index']<br /> *<br /> * To the more standard and appropriate:<br /> *<br /> * $_FILES['field']['index']['key']<br /> *<br /> * @param array $files<br /> * @author Corey Ballou<br /> * @link <a href="http://www.jqueryin.com" rel="nofollow" target="_blank">http://www.jqueryin.com</a><br /> */<br /></span><span class="keyword">function </span><span class="default">fixFilesArray</span><span class="keyword">(&amp;</span><span class="default">$files</span><span class="keyword">)<br />{<br />    </span><span class="default">$names </span><span class="keyword">= array( </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'type' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'tmp_name' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'error' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'size' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);<br /><br />    foreach (</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$part</span><span class="keyword">) {<br />        </span><span class="comment">// only deal with valid keys and multiple files<br />        </span><span class="default">$key </span><span class="keyword">= (string) </span><span class="default">$key</span><span class="keyword">;<br />        if (isset(</span><span class="default">$names</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) &amp;&amp; </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">)) {<br />            foreach (</span><span class="default">$part </span><span class="keyword">as </span><span class="default">$position </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                </span><span class="default">$files</span><span class="keyword">[</span><span class="default">$position</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />            </span><span class="comment">// remove old key reference<br />            </span><span class="keyword">unset(</span><span class="default">$files</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106565">  <div class="votes">
    <div id="Vu106565">
    <a href="/manual/vote-note.php?id=106565&amp;page=features.file-upload.multiple&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106565">
    <a href="/manual/vote-note.php?id=106565&amp;page=features.file-upload.multiple&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106565" title="53% like this...">
    13
    </div>
  </div>
  <a href="#106565" class="name">
  <strong class="user"><em>timspeelman at live dot nl</em></strong></a><a class="genanchor" href="#106565"> &para;</a><div class="date" title="2011-11-18 03:48"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106565">
<div class="phpcode"><code><span class="html">The cleanest way to rearrange the $_FILES<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rearrange</span><span class="keyword">( </span><span class="default">$arr </span><span class="keyword">){<br />    foreach( </span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$all </span><span class="keyword">){<br />        foreach( </span><span class="default">$all </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$val </span><span class="keyword">){<br />            </span><span class="default">$new</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;    <br />        }    <br />    }<br />    return </span><span class="default">$new</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119143">  <div class="votes">
    <div id="Vu119143">
    <a href="/manual/vote-note.php?id=119143&amp;page=features.file-upload.multiple&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119143">
    <a href="/manual/vote-note.php?id=119143&amp;page=features.file-upload.multiple&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119143" title="51% like this...">
    5
    </div>
  </div>
  <a href="#119143" class="name">
  <strong class="user"><em>lookphp at gmail dot com</em></strong></a><a class="genanchor" href="#119143"> &para;</a><div class="date" title="2016-04-10 05:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119143">
<div class="phpcode"><code><span class="html">This is a very simple example:<br /><br />Part I : HTML<br /><br />&lt;!doctype html&gt;<br />&lt;html lang="en"&gt;<br />&lt;head&gt;<br />    &lt;meta charset="UTF-8"&gt;<br />    &lt;title&gt;Document&lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />    &lt;form action="upload.php" method="post" multipart="" enctype="multipart/form-data"&gt;<br />        &lt;input type="file" name="img[]" multiple&gt;<br />        &lt;input type="submit"&gt;<br />    &lt;/form&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;<br /><br />Part II : PHP<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;<br /></span><span class="default">$img </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'img'</span><span class="keyword">];<br /><br />if(!empty(</span><span class="default">$img</span><span class="keyword">))<br />{<br />    </span><span class="default">$img_desc </span><span class="keyword">= </span><span class="default">reArrayFiles</span><span class="keyword">(</span><span class="default">$img</span><span class="keyword">);<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$img_desc</span><span class="keyword">);<br />    <br />    foreach(</span><span class="default">$img_desc </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">)<br />    {<br />        </span><span class="default">$newname </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">'YmdHis'</span><span class="keyword">,</span><span class="default">time</span><span class="keyword">()).</span><span class="default">mt_rand</span><span class="keyword">().</span><span class="string">'.jpg'</span><span class="keyword">;<br />        </span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">],</span><span class="string">'./uploads/'</span><span class="keyword">.</span><span class="default">$newname</span><span class="keyword">);<br />    }<br />}<br /><br />function </span><span class="default">reArrayFiles</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)<br />{<br />    </span><span class="default">$file_ary </span><span class="keyword">= array();<br />    </span><span class="default">$file_count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]);<br />    </span><span class="default">$file_key </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    <br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$file_count</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        foreach(</span><span class="default">$file_key </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">)<br />        {<br />            </span><span class="default">$file_ary</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$val</span><span class="keyword">] = </span><span class="default">$file</span><span class="keyword">[</span><span class="default">$val</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">];<br />        }<br />    }<br />    return </span><span class="default">$file_ary</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129014">  <div class="votes">
    <div id="Vu129014">
    <a href="/manual/vote-note.php?id=129014&amp;page=features.file-upload.multiple&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129014">
    <a href="/manual/vote-note.php?id=129014&amp;page=features.file-upload.multiple&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129014" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129014" class="name">
  <strong class="user"><em>steam dot bakyt2 at gmail dot com</em></strong></a><a class="genanchor" href="#129014"> &para;</a><div class="date" title="2023-11-07 08:29"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129014">
<div class="phpcode"><code><span class="html">Just combine temporary path with the filename which will result an array like:<br /><br />array(2) {<br />  ["/tmp/phpAYCvcc"]=&gt; string(10) "file1.jpg"<br />  ["/tmp/phpCDg79o"]=&gt; string(10) "file2.jpg"<br />}<br /><br />The code:<br /><br />$files = array_combine(<br />     $_FILES['receipt']['tmp_name'], <br />     $_FILES['receipt']['name']<br />);<br /><br />foreach ($files as $key =&gt; $value) {<br />    // save your files locally<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125338">  <div class="votes">
    <div id="Vu125338">
    <a href="/manual/vote-note.php?id=125338&amp;page=features.file-upload.multiple&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125338">
    <a href="/manual/vote-note.php?id=125338&amp;page=features.file-upload.multiple&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125338" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#125338" class="name">
  <strong class="user"><em>sabryabdelmohsen at gmail dot com</em></strong></a><a class="genanchor" href="#125338"> &para;</a><div class="date" title="2020-09-08 05:48"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125338">
<div class="phpcode"><code><span class="html">function reArrayImages($file_post) {<br />    $file_ary = [];<br />    $file_keys = array_keys($file_post);<br />    foreach ($file_post as $key =&gt; $value) {<br />      foreach ($value as $key2 =&gt; $value2) {<br />        $file_ary[$key2][$key] = $value2;<br />      }<br />    }<br />    return $file_ary;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.file-upload.multiple&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.multiple.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="features.file-upload.common-pitfalls.php" title="Common Pitfalls">Common Pitfalls</a>
                        </li>
                                                <li class="current">
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
