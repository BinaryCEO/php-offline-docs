<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: POST method uploads - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.file-upload.post-method.php">
 <link rel="shorturl" href="https://www.php.net/file-upload.post-method">
 <link rel="alternate" href="https://www.php.net/file-upload.post-method" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.file-upload.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.file-upload.php">
 <link rel="next" href="https://www.php.net/manual/en/features.file-upload.errors.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.file-upload.post-method.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.file-upload.post-method.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.file-upload.post-method.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.file-upload.post-method.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.file-upload.post-method.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.file-upload.post-method.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.file-upload.post-method.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.file-upload.post-method.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.file-upload.post-method.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.file-upload.post-method.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.file-upload.post-method.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="POST method uploads" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: POST method uploads - Manual" />
<meta name="twitter:description" content="POST method uploads" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: POST method uploads - Manual" />
<meta itemprop="description" content="POST method uploads" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="POST method uploads" />

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
        <a href="features.file-upload.errors.php">
          Error Messages Explained &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.file-upload.php">
          &laquo; Handling file uploads        </a>
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
            <option value='en/features.file-upload.post-method.php' selected="selected">English</option>
            <option value='de/features.file-upload.post-method.php'>German</option>
            <option value='es/features.file-upload.post-method.php'>Spanish</option>
            <option value='fr/features.file-upload.post-method.php'>French</option>
            <option value='it/features.file-upload.post-method.php'>Italian</option>
            <option value='ja/features.file-upload.post-method.php'>Japanese</option>
            <option value='pt_BR/features.file-upload.post-method.php'>Brazilian Portuguese</option>
            <option value='ru/features.file-upload.post-method.php'>Russian</option>
            <option value='tr/features.file-upload.post-method.php'>Turkish</option>
            <option value='uk/features.file-upload.post-method.php'>Ukrainian</option>
            <option value='zh/features.file-upload.post-method.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.file-upload.post-method" class="sect1">
   <h2 class="title">POST method uploads</h2>
   <p class="simpara">
    This feature lets people upload both text and binary files. 
    With PHP&#039;s authentication and file manipulation functions,
    you have full control over who is allowed to upload and
    what is to be done with the file once it has been uploaded.
   </p>
   <p class="simpara">
    PHP is capable of receiving file uploads from any RFC-1867
    compliant browser.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <strong>Related Configurations Note</strong><br />
    <p class="para">
     See also the <a href="ini.core.php#ini.file-uploads" class="link">file_uploads</a>, 
     <a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a>,
     <a href="ini.core.php#ini.upload-tmp-dir" class="link">upload_tmp_dir</a>,
     <a href="ini.core.php#ini.post-max-size" class="link">post_max_size</a> and
     <a href="info.configuration.php#ini.max-input-time" class="link">max_input_time</a> directives 
     in <var class="filename">php.ini</var>
    </p>
   </p></blockquote>

   <p class="para">
    PHP also supports PUT-method file uploads as used by
    <span class="productname">Netscape Composer</span> and W3C&#039;s 
    <span class="productname">Amaya</span> clients.  See the <a href="features.file-upload.put-method.php" class="link">PUT Method
    Support</a> for more details.
   </p>

   <p class="para">
    <div class="example" id="example-533">
     <p><strong>Example #1 File Upload Form</strong></p>
     <div class="example-contents"><p>
      A file upload screen can be built by creating a special form which
      looks something like this:
     </p></div>
     <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;!-- The data encoding type, enctype, MUST be specified as below --&gt;
&lt;form enctype=&quot;multipart/form-data&quot; action=&quot;__URL__&quot; method=&quot;POST&quot;&gt;
    &lt;!-- MAX_FILE_SIZE must precede the file input field --&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;MAX_FILE_SIZE&quot; value=&quot;30000&quot; /&gt;
    &lt;!-- Name of input element determines name in $_FILES array --&gt;
    Send this file: &lt;input name=&quot;userfile&quot; type=&quot;file&quot; /&gt;
    &lt;input type=&quot;submit&quot; value=&quot;Send File&quot; /&gt;
&lt;/form&gt;</pre>
</div>
     </div>

     <div class="example-contents"><p>
      The <code class="literal">__URL__</code> in the above example should be replaced,
      and point to a PHP file.
     </p></div>
     <div class="example-contents"><p>
      The <code class="literal">MAX_FILE_SIZE</code> hidden field (measured in bytes) must
      precede the file input field, and its value is the maximum filesize accepted by PHP.
      This form element should always be used as it saves users the trouble of
      waiting for a big file being transferred only to find that it was too
      large and the transfer failed.  Keep in mind: fooling this setting on the
      browser side is quite easy, so never rely on files with a greater size
      being blocked by this feature. It is merely a convenience feature for
      users on the client side of the application. The PHP settings (on the server
      side) for maximum-size, however, cannot be fooled.
     </p></div>
    </div>
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Be sure your file upload form has attribute <code class="literal">enctype=&quot;multipart/form-data&quot;</code>
     otherwise the file upload will not work.
    </p>
   </p></blockquote>

   <p class="para">
    The global <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES</a></var> will contain all the uploaded file information.
    Its contents from the example form is as follows. Note that this assumes the use of 
    the file upload name <em>userfile</em>, as used in the example 
    script above. This can be any name.
    <dl>
     
      <dt><var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['name']</a></var></dt>
      <dd>
       <p class="para">
        The original name of the file on the client machine.
       </p>
      </dd>
     
     
      <dt><var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['type']</a></var></dt>
      <dd>
       <p class="para">
        The mime type of the file, if the browser provided this
        information.  An example would be
        <code class="literal">&quot;image/gif&quot;</code>. This mime type is however
        not checked on the PHP side and therefore don&#039;t take its value
        for granted.
       </p>
      </dd>
     
     
      <dt><var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['size']</a></var></dt>
      <dd>
       <p class="para">
        The size, in bytes, of the uploaded file.
       </p>
      </dd>
     
     
      <dt><var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['tmp_name']</a></var></dt>
      <dd>
       <p class="para">
        The temporary filename of the file in which the uploaded file
        was stored on the server.
       </p>
      </dd>
     
     
      <dt><var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['error']</a></var></dt>
      <dd>
       <p class="para">
        The <a href="features.file-upload.errors.php" class="link">error code</a>
        associated with this file upload.
       </p>
      </dd>
     
     
      <dt><var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['full_path']</a></var></dt>
      <dd>
       <p class="para">
        The full path as submitted by the browser. This value does not always contain a real directory structure, and cannot be trusted.
        Available as of PHP 8.1.0.
       </p>
      </dd>
     
    </dl>
   </p>

   <p class="para">
    Files will, by default be stored in the server&#039;s default temporary
    directory, unless another location has been given with the <a href="ini.core.php#ini.upload-tmp-dir" class="link">upload_tmp_dir</a> directive in
    <var class="filename">php.ini</var>. The server&#039;s default directory can
    be changed by setting the environment variable
    <var class="envar">TMPDIR</var> in the environment in which PHP runs.
    Setting it using <span class="function"><a href="function.putenv.php" class="function">putenv()</a></span> from within a PHP
    script will not work. This environment variable can also be used
    to make sure that other operations are working on uploaded files,
    as well.
    <div class="example" id="example-534">
     <p><strong>Example #2 Validating file uploads</strong></p>
     <div class="example-contents"><p>
      See also the function entries for <span class="function"><a href="function.is-uploaded-file.php" class="function">is_uploaded_file()</a></span> 
      and <span class="function"><a href="function.move-uploaded-file.php" class="function">move_uploaded_file()</a></span> for further information. The
      following example will process the file upload that came from a form.
     </p></div>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$uploaddir </span><span style="color: #007700">= </span><span style="color: #DD0000">'/var/www/uploads/'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$uploadfile </span><span style="color: #007700">= </span><span style="color: #0000BB">$uploaddir </span><span style="color: #007700">. </span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'userfile'</span><span style="color: #007700">][</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br /><br />echo </span><span style="color: #DD0000">'&lt;pre&gt;'</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">move_uploaded_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'userfile'</span><span style="color: #007700">][</span><span style="color: #DD0000">'tmp_name'</span><span style="color: #007700">], </span><span style="color: #0000BB">$uploadfile</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"File is valid, and was successfully uploaded.\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"Possible file upload attack!\n"</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #DD0000">'Here is some more debugging info:'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">);<br /><br />print </span><span style="color: #DD0000">"&lt;/pre&gt;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    The PHP script which receives the uploaded file should implement
    whatever logic is necessary for determining what should be done
    with the uploaded file. You can, for example, use the
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['size']</a></var> variable
    to throw away any files that are either too small or too big.  You
    could use the
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['type']</a></var> variable
    to throw away any files that didn&#039;t match a certain type criteria, but
    use this only as first of a series of checks, because this value
    is completely under the control of the client and not checked on the PHP
    side.
    Also, you could use <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['error']</a></var> 
    and plan your logic according to the <a href="features.file-upload.errors.php" class="link">error codes</a>.
    Whatever the logic, you should either delete the file from the
    temporary directory or move it elsewhere.
   </p>
   <p class="simpara">
    If no file is selected for upload in your form, PHP will return
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['size']</a></var> as 0, and
    <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['tmp_name']</a></var> as none.
   </p>
   <p class="simpara">
    The file will be deleted from the temporary directory at the end
    of the request if it has not been moved away or renamed.
   </p>
    <div class="example" id="example-535">
     <p><strong>Example #3 Uploading array of files</strong></p>
     <div class="example-contents"><p>
      PHP supports <a href="faq.html.php#faq.html.arrays" class="link">HTML array feature</a>
      even with files.
     </p></div>
     <div class="example-contents">
<div class="htmlcode"><pre class="htmlcode">&lt;form action=&quot;&quot; method=&quot;post&quot; enctype=&quot;multipart/form-data&quot;&gt;
&lt;p&gt;Pictures:
&lt;input type=&quot;file&quot; name=&quot;pictures[]&quot; /&gt;
&lt;input type=&quot;file&quot; name=&quot;pictures[]&quot; /&gt;
&lt;input type=&quot;file&quot; name=&quot;pictures[]&quot; /&gt;
&lt;input type=&quot;submit&quot; value=&quot;Send&quot; /&gt;
&lt;/p&gt;
&lt;/form&gt;</pre>
</div>
     </div>

     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">"pictures"</span><span style="color: #007700">][</span><span style="color: #DD0000">"error"</span><span style="color: #007700">] as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$error</span><span style="color: #007700">) {<br />    if (</span><span style="color: #0000BB">$error </span><span style="color: #007700">== </span><span style="color: #0000BB">UPLOAD_ERR_OK</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$tmp_name </span><span style="color: #007700">= </span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">"pictures"</span><span style="color: #007700">][</span><span style="color: #DD0000">"tmp_name"</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />        </span><span style="color: #FF8000">// basename() may prevent filesystem traversal attacks;<br />        // further validation/sanitation of the filename may be appropriate<br />        </span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">"pictures"</span><span style="color: #007700">][</span><span style="color: #DD0000">"name"</span><span style="color: #007700">][</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />        </span><span style="color: #0000BB">move_uploaded_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$tmp_name</span><span style="color: #007700">, </span><span style="color: #DD0000">"data/</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   <p class="para">
    File upload progress bar can be implemented using <a href="session.upload-progress.php" class="link">Session Upload Progress</a>.
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.file-upload.post-method%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.file-upload.post-method&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.post-method.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91479">  <div class="votes">
    <div id="Vu91479">
    <a href="/manual/vote-note.php?id=91479&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91479">
    <a href="/manual/vote-note.php?id=91479&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91479" title="57% like this...">
    88
    </div>
  </div>
  <a href="#91479" class="name">
  <strong class="user"><em>daevid at daevid dot com</em></strong></a><a class="genanchor" href="#91479"> &para;</a><div class="date" title="2009-06-11 02:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91479">
<div class="phpcode"><code><span class="html">I think the way an array of attachments works is kind of cumbersome. Usually the PHP guys are right on the money, but this is just counter-intuitive. It should have been more like:<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [name] =&gt; facepalm.jpg<br />            [type] =&gt; image/jpeg<br />            [tmp_name] =&gt; /tmp/phpn3FmFr<br />            [error] =&gt; 0<br />            [size] =&gt; 15476<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [name] =&gt; <br />            [type] =&gt; <br />            [tmp_name] =&gt; <br />            [error] =&gt; 4<br />            [size] =&gt; <br />        )<br />)<br /><br />and not this<br />Array<br />(<br />    [name] =&gt; Array<br />        (<br />            [0] =&gt; facepalm.jpg<br />            [1] =&gt; <br />        )<br /><br />    [type] =&gt; Array<br />        (<br />            [0] =&gt; image/jpeg<br />            [1] =&gt; <br />        )<br /><br />    [tmp_name] =&gt; Array<br />        (<br />            [0] =&gt; /tmp/phpn3FmFr<br />            [1] =&gt; <br />        )<br /><br />    [error] =&gt; Array<br />        (<br />            [0] =&gt; 0<br />            [1] =&gt; 4<br />        )<br /><br />    [size] =&gt; Array<br />        (<br />            [0] =&gt; 15476<br />            [1] =&gt; 0<br />        )<br />)<br /><br />Anyways, here is a fuller example than the sparce one in the documentation above:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">"attachment"</span><span class="keyword">][</span><span class="string">"error"</span><span class="keyword">] as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$error</span><span class="keyword">)<br />{<br />       </span><span class="default">$tmp_name </span><span class="keyword">= </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">"attachment"</span><span class="keyword">][</span><span class="string">"tmp_name"</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">];<br />       if (!</span><span class="default">$tmp_name</span><span class="keyword">) continue;<br /><br />       </span><span class="default">$name </span><span class="keyword">= </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">"attachment"</span><span class="keyword">][</span><span class="string">"name"</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">]);<br /><br />    if (</span><span class="default">$error </span><span class="keyword">== </span><span class="default">UPLOAD_ERR_OK</span><span class="keyword">)<br />    {<br />        if ( </span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$tmp_name</span><span class="keyword">, </span><span class="string">"/tmp/"</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">) )<br />            </span><span class="default">$uploaded_array</span><span class="keyword">[] .= </span><span class="string">"Uploaded file '"</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="string">"'.&lt;br/&gt;\n"</span><span class="keyword">;<br />        else<br />            </span><span class="default">$errormsg </span><span class="keyword">.= </span><span class="string">"Could not move uploaded file '"</span><span class="keyword">.</span><span class="default">$tmp_name</span><span class="keyword">.</span><span class="string">"' to '"</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="string">"'&lt;br/&gt;\n"</span><span class="keyword">;<br />    }<br />    else </span><span class="default">$errormsg </span><span class="keyword">.= </span><span class="string">"Upload error. ["</span><span class="keyword">.</span><span class="default">$error</span><span class="keyword">.</span><span class="string">"] on file '"</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="string">"'&lt;br/&gt;\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119643">  <div class="votes">
    <div id="Vu119643">
    <a href="/manual/vote-note.php?id=119643&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119643">
    <a href="/manual/vote-note.php?id=119643&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119643" title="58% like this...">
    45
    </div>
  </div>
  <a href="#119643" class="name">
  <strong class="user"><em>mpyw</em></strong></a><a class="genanchor" href="#119643"> &para;</a><div class="date" title="2016-07-24 06:44"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119643">
<div class="phpcode"><code><span class="html">Do not use Coreywelch or Daevid's way, because their methods can handle only within two-dimensional structure. $_FILES can consist of any hierarchy, such as 3d or 4d structure.<br /><br />The following example form breaks their codes:<br /><br />&lt;form action="" method="post" enctype="multipart/form-data"&gt;<br />    &lt;input type="file" name="files[x][y][z]"&gt;<br />    &lt;input type="submit"&gt;<br />&lt;/form&gt;<br /><br />As the solution, you should use PSR-7 based zendframework/zend-diactoros.<br /><br />GitHub:<br /><br /><a href="https://github.com/zendframework/zend-diactoros" rel="nofollow" target="_blank">https://github.com/zendframework/zend-diactoros</a><br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">use </span><span class="default">Psr\Http\Message\UploadedFileInterface</span><span class="keyword">;<br />use </span><span class="default">Zend\Diactoros\ServerRequestFactory</span><span class="keyword">;<br /><br /></span><span class="default">$request </span><span class="keyword">= </span><span class="default">ServerRequestFactory</span><span class="keyword">::</span><span class="default">fromGlobals</span><span class="keyword">();<br /><br />if (</span><span class="default">$request</span><span class="keyword">-&gt;</span><span class="default">getMethod</span><span class="keyword">() !== </span><span class="string">'POST'</span><span class="keyword">) {<br />    </span><span class="default">http_response_code</span><span class="keyword">(</span><span class="default">405</span><span class="keyword">);<br />    exit(</span><span class="string">'Use POST method.'</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$uploaded_files </span><span class="keyword">= </span><span class="default">$request</span><span class="keyword">-&gt;</span><span class="default">getUploadedFiles</span><span class="keyword">();<br /><br />if (<br />    !isset(</span><span class="default">$uploaded_files</span><span class="keyword">[</span><span class="string">'files'</span><span class="keyword">][</span><span class="string">'x'</span><span class="keyword">][</span><span class="string">'y'</span><span class="keyword">][</span><span class="string">'z'</span><span class="keyword">]) ||<br />    !</span><span class="default">$uploaded_files</span><span class="keyword">[</span><span class="string">'files'</span><span class="keyword">][</span><span class="string">'x'</span><span class="keyword">][</span><span class="string">'y'</span><span class="keyword">][</span><span class="string">'z'</span><span class="keyword">] instanceof </span><span class="default">UploadedFileInterface<br /></span><span class="keyword">) {<br />    </span><span class="default">http_response_code</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">);<br />    exit(</span><span class="string">'Invalid request body.'</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">$uploaded_files</span><span class="keyword">[</span><span class="string">'files'</span><span class="keyword">][</span><span class="string">'x'</span><span class="keyword">][</span><span class="string">'y'</span><span class="keyword">][</span><span class="string">'z'</span><span class="keyword">];<br /><br />if (</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getError</span><span class="keyword">() !== </span><span class="default">UPLOAD_ERR_OK</span><span class="keyword">) {<br />    </span><span class="default">http_response_code</span><span class="keyword">(</span><span class="default">400</span><span class="keyword">);<br />    exit(</span><span class="string">'File uploading failed.'</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">moveTo</span><span class="keyword">(</span><span class="string">'/path/to/new/file'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124901">  <div class="votes">
    <div id="Vu124901">
    <a href="/manual/vote-note.php?id=124901&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124901">
    <a href="/manual/vote-note.php?id=124901&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124901" title="62% like this...">
    11
    </div>
  </div>
  <a href="#124901" class="name">
  <strong class="user"><em>fravadona at gmail dot com</em></strong></a><a class="genanchor" href="#124901"> &para;</a><div class="date" title="2020-04-11 11:13"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124901">
<div class="phpcode"><code><span class="html">mpyw is right, PSR-7 is awesome but a little overkill for simple projects (in my opinion).<br /><br />Here's an example of function that returns the file upload metadata in a (PSR-7 *like*) normalized tree. This function deals with whatever dimension of upload metadata.<br /><br />I kept the code extremely simple, it doesn't validate anything in $_FILES, etc... AND MOST IMPORTANTLY, it calls array_walk_recursive in an *undefined behaviour* way!!!<br /><br />You can test it against the examples of the PSR-7 spec ( <a href="https://www.php-fig.org/psr/psr-7/#16-uploaded-files" rel="nofollow" target="_blank">https://www.php-fig.org/psr/psr-7/#16-uploaded-files</a> ) and try to add your own checks that will detect the error in the last example ^^<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> *  THIS CODE IS ABSOLUTELY NOT MEANT FOR PRODUCTION !!! MAY ITS INSIGHTS HELP YOU !!!<br /> */<br /></span><span class="keyword">function </span><span class="default">getNormalizedFiles</span><span class="keyword">()<br />{<br />  </span><span class="default">$normalized </span><span class="keyword">= array();<br /><br />  if ( isset(</span><span class="default">$_FILES</span><span class="keyword">) ) { <br />    <br />    foreach ( </span><span class="default">$_FILES </span><span class="keyword">as </span><span class="default">$field </span><span class="keyword">=&gt; </span><span class="default">$metadata </span><span class="keyword">) {<br />      <br />      </span><span class="default">$normalized</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">] = array(); </span><span class="comment">// needs initialization for array_replace_recursive<br />      <br />      </span><span class="keyword">foreach ( </span><span class="default">$metadata </span><span class="keyword">as </span><span class="default">$meta </span><span class="keyword">=&gt; </span><span class="default">$data </span><span class="keyword">) { </span><span class="comment">// $meta is 'tmp_name', 'error', etc...<br />        <br />        </span><span class="keyword">if ( </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) ) {<br />          <br />          </span><span class="comment">// insert the current meta just before each leaf !!! WRONG USE OF ARRAY_WALK_RECURSIVE !!!<br />          </span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, function (&amp;</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$k</span><span class="keyword">) use (</span><span class="default">$meta</span><span class="keyword">) { </span><span class="default">$v </span><span class="keyword">= array( </span><span class="default">$meta </span><span class="keyword">=&gt; </span><span class="default">$v </span><span class="keyword">); });<br />          <br />          </span><span class="comment">// fuse the current metadata with the previous ones<br />          </span><span class="default">$normalized</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">] = </span><span class="default">array_replace_recursive</span><span class="keyword">(</span><span class="default">$normalized</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">], </span><span class="default">$data</span><span class="keyword">);<br />        <br />        } else {<br />          </span><span class="default">$normalized</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">][</span><span class="default">$meta</span><span class="keyword">] = </span><span class="default">$data</span><span class="keyword">;<br />        }<br />      } <br />    }<br />  } <br />  return </span><span class="default">$normalized</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118858">  <div class="votes">
    <div id="Vu118858">
    <a href="/manual/vote-note.php?id=118858&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118858">
    <a href="/manual/vote-note.php?id=118858&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118858" title="55% like this...">
    22
    </div>
  </div>
  <a href="#118858" class="name">
  <strong class="user"><em>coreywelch+phpnet at gmail dot com</em></strong></a><a class="genanchor" href="#118858"> &para;</a><div class="date" title="2016-02-17 10:29"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118858">
<div class="phpcode"><code><span class="html">The documentation doesn't have any details about how the HTML array feature formats the $_FILES array. <br /><br />Example $_FILES array:<br /><br />For single file -<br /><br />Array<br />(<br />    [document] =&gt; Array<br />        (<br />            [name] =&gt; sample-file.doc<br />            [type] =&gt; application/msword<br />            [tmp_name] =&gt; /tmp/path/phpVGCDAJ<br />            [error] =&gt; 0<br />            [size] =&gt; 0<br />        )<br />)<br /><br />Multi-files with HTML array feature -<br /><br />Array<br />(<br />    [documents] =&gt; Array<br />        (<br />            [name] =&gt; Array<br />                (<br />                    [0] =&gt; sample-file.doc<br />                    [1] =&gt; sample-file.doc<br />                )<br /><br />            [type] =&gt; Array<br />                (<br />                    [0] =&gt; application/msword<br />                    [1] =&gt; application/msword<br />                )<br /><br />            [tmp_name] =&gt; Array<br />                (<br />                    [0] =&gt; /tmp/path/phpVGCDAJ<br />                    [1] =&gt; /tmp/path/phpVGCDAJ<br />                )<br /><br />            [error] =&gt; Array<br />                (<br />                    [0] =&gt; 0<br />                    [1] =&gt; 0<br />                )<br /><br />            [size] =&gt; Array<br />                (<br />                    [0] =&gt; 0<br />                    [1] =&gt; 0<br />                )<br /><br />        )<br /><br />)<br /><br />The problem occurs when you have a form that uses both single file and HTML array feature. The array isn't normalized and tends to make coding for it really sloppy. I have included a nice method to normalize the $_FILES array.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">normalize_files_array</span><span class="keyword">(</span><span class="default">$files </span><span class="keyword">= []) {<br /><br />        </span><span class="default">$normalized_array </span><span class="keyword">= [];<br /><br />        foreach(</span><span class="default">$files </span><span class="keyword">as </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">) {<br /><br />            if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">])) {<br />                </span><span class="default">$normalized_array</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][] = </span><span class="default">$file</span><span class="keyword">;<br />                continue;<br />            }<br /><br />            foreach(</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">] as </span><span class="default">$idx </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">) {<br />                </span><span class="default">$normalized_array</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][</span><span class="default">$idx</span><span class="keyword">] = [<br />                    </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">$name</span><span class="keyword">,<br />                    </span><span class="string">'type' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">][</span><span class="default">$idx</span><span class="keyword">],<br />                    </span><span class="string">'tmp_name' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">][</span><span class="default">$idx</span><span class="keyword">],<br />                    </span><span class="string">'error' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'error'</span><span class="keyword">][</span><span class="default">$idx</span><span class="keyword">],<br />                    </span><span class="string">'size' </span><span class="keyword">=&gt; </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">][</span><span class="default">$idx</span><span class="keyword">]<br />                ];<br />            }<br /><br />        }<br /><br />        return </span><span class="default">$normalized_array</span><span class="keyword">;<br /><br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />The following is the output from the above method.<br /><br />Array<br />(<br />    [document] =&gt; Array<br />        (<br />            [0] =&gt; Array<br />                (<br />                [name] =&gt; sample-file.doc<br />                    [type] =&gt; application/msword<br />                    [tmp_name] =&gt; /tmp/path/phpVGCDAJ<br />                    [error] =&gt; 0<br />                    [size] =&gt; 0<br />                )<br /><br />        )<br /><br />    [documents] =&gt; Array<br />        (<br />            [0] =&gt; Array<br />                (<br />                    [name] =&gt; sample-file.doc<br />                    [type] =&gt; application/msword<br />                    [tmp_name] =&gt; /tmp/path/phpVGCDAJ<br />                    [error] =&gt; 0<br />                    [size] =&gt; 0<br />                )<br /><br />            [1] =&gt; Array<br />                (<br />                    [name] =&gt; sample-file.doc<br />                    [type] =&gt; application/msword<br />                    [tmp_name] =&gt; /tmp/path/phpVGCDAJ<br />                    [error] =&gt; 0<br />                    [size] =&gt; 0<br />                )<br /><br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="117613">  <div class="votes">
    <div id="Vu117613">
    <a href="/manual/vote-note.php?id=117613&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117613">
    <a href="/manual/vote-note.php?id=117613&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117613" title="56% like this...">
    15
    </div>
  </div>
  <a href="#117613" class="name">
  <strong class="user"><em>anon</em></strong></a><a class="genanchor" href="#117613"> &para;</a><div class="date" title="2015-07-08 10:19"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117613">
<div class="phpcode"><code><span class="html">For clarity; the reason you would NOT want to replace the example script with<br />$uploaddir = './';<br />is because if you have no coded file constraints a nerd could upload a php script with the same name of one of your scripts in the scripts directory.<br /><br />Given the right settings and permissions php-cgi is capable of replacing even php files.<br /><br />Imagine if it replaced the upload post processor file itself. The next "upload" could lead to some easy exploits.<br /><br />Even when replacements are not possible; uploading an .htaccess file could cause some problems, especially if it is sent after the nerd throws in a devious script to use htaccess to redirect to his upload.<br /><br />There are probably more ways of exploiting it. Don't let the nerds get you.<br /><br />More sensible to use a fresh directory for uploads with some form of unique naming algorithm; maybe even a cron job for sanitizing the directory so older files do not linger for too long.</span></code></div>
  </div>
 </div>
  <div class="note" id="89938">  <div class="votes">
    <div id="Vu89938">
    <a href="/manual/vote-note.php?id=89938&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89938">
    <a href="/manual/vote-note.php?id=89938&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89938" title="55% like this...">
    14
    </div>
  </div>
  <a href="#89938" class="name">
  <strong class="user"><em>eslindsey at gmail dot com</em></strong></a><a class="genanchor" href="#89938"> &para;</a><div class="date" title="2009-03-29 11:09"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89938">
<div class="phpcode"><code><span class="html">Also note that since MAX_FILE_SIZE hidden field is supplied by the browser doing the submitting, it is easily overridden from the clients' side.  You should always perform your own examination and error checking of the file after it reaches you, instead of relying on information submitted by the client.  This includes checks for file size (always check the length of the actual data versus the reported file size) as well as file type (the MIME type submitted by the browser can be inaccurate at best, and intentionally set to an incorrect value at worst).</span></code></div>
  </div>
 </div>
  <div class="note" id="100187">  <div class="votes">
    <div id="Vu100187">
    <a href="/manual/vote-note.php?id=100187&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100187">
    <a href="/manual/vote-note.php?id=100187&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100187" title="53% like this...">
    8
    </div>
  </div>
  <a href="#100187" class="name">
  <strong class="user"><em>Mark</em></strong></a><a class="genanchor" href="#100187"> &para;</a><div class="date" title="2010-09-29 04:12"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100187">
<div class="phpcode"><code><span class="html">$_FILES will be empty if a user attempts to upload a file greater than post_max_size in your php.ini<br /><br />post_max_size should be &gt;= upload_max_filesize in your php.ini.</span></code></div>
  </div>
 </div>
  <div class="note" id="89697">  <div class="votes">
    <div id="Vu89697">
    <a href="/manual/vote-note.php?id=89697&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89697">
    <a href="/manual/vote-note.php?id=89697&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89697" title="51% like this...">
    5
    </div>
  </div>
  <a href="#89697" class="name">
  <strong class="user"><em>claude dot pache at gmail dot com</em></strong></a><a class="genanchor" href="#89697"> &para;</a><div class="date" title="2009-03-19 09:26"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89697">
<div class="phpcode"><code><span class="html">Note that the MAX_FILE_SIZE hidden field is only used by the PHP script which receives the request, as an instruction to reject files larger than the given bound. This field has no significance for the browser, it does not provide a client-side check of the file-size, and it has nothing to do with web standards or browser features.</span></code></div>
  </div>
 </div>
  <div class="note" id="130036">  <div class="votes">
    <div id="Vu130036">
    <a href="/manual/vote-note.php?id=130036&amp;page=features.file-upload.post-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130036">
    <a href="/manual/vote-note.php?id=130036&amp;page=features.file-upload.post-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130036" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#130036" class="name">
  <strong class="user"><em>rrueda at silegonline dot com</em></strong></a><a class="genanchor" href="#130036"> &para;</a><div class="date" title="2025-02-17 08:34"><strong>7 months ago</strong></div>
  <div class="text" id="Hcom130036">
<div class="phpcode"><code><span class="html">It's not necessary to write multiple input fields in the form to upload multiple files, this way, with only one input also works:<br /><br />&lt;input type="file" name="nomfile[]" multiple&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.file-upload.post-method&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.post-method.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.file-upload.php">Handling file uploads</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="features.file-upload.post-method.php" title="POST method uploads">POST method uploads</a>
                        </li>
                                                <li class="">
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
