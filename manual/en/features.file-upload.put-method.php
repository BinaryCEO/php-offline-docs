<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PUT method support - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.file-upload.put-method.php">
 <link rel="shorturl" href="https://www.php.net/file-upload.put-method">
 <link rel="alternate" href="https://www.php.net/file-upload.put-method" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.file-upload.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.file-upload.multiple.php">
 <link rel="next" href="https://www.php.net/manual/en/features.file-upload.errors.seealso.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.file-upload.put-method.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.file-upload.put-method.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.file-upload.put-method.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.file-upload.put-method.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.file-upload.put-method.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.file-upload.put-method.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.file-upload.put-method.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.file-upload.put-method.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.file-upload.put-method.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.file-upload.put-method.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.file-upload.put-method.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="PUT method support" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PUT method support - Manual" />
<meta name="twitter:description" content="PUT method support" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PUT method support - Manual" />
<meta itemprop="description" content="PUT method support" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="PUT method support" />

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
        <a href="features.file-upload.errors.seealso.php">
          See Also &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.file-upload.multiple.php">
          &laquo; Uploading multiple files        </a>
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
            <option value='en/features.file-upload.put-method.php' selected="selected">English</option>
            <option value='de/features.file-upload.put-method.php'>German</option>
            <option value='es/features.file-upload.put-method.php'>Spanish</option>
            <option value='fr/features.file-upload.put-method.php'>French</option>
            <option value='it/features.file-upload.put-method.php'>Italian</option>
            <option value='ja/features.file-upload.put-method.php'>Japanese</option>
            <option value='pt_BR/features.file-upload.put-method.php'>Brazilian Portuguese</option>
            <option value='ru/features.file-upload.put-method.php'>Russian</option>
            <option value='tr/features.file-upload.put-method.php'>Turkish</option>
            <option value='uk/features.file-upload.put-method.php'>Ukrainian</option>
            <option value='zh/features.file-upload.put-method.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.file-upload.put-method" class="sect1">
   <h2 class="title">PUT method support</h2>
   <p class="para">
    PHP provides support for the HTTP PUT method used by some clients to store
    files on a server.
    PUT requests are much simpler than a file upload using POST requests
    and they look something like this:
    <div class="informalexample">
     <div class="example-contents">
<div class="HTTPcode"><pre class="HTTPcode">PUT /path/filename.html HTTP/1.1</pre>
</div>
     </div>

    </div>
   </p>
   <p class="para">
    This would normally mean that the remote client would like to save
    the content that follows as: <var class="filename">/path/filename.html</var> in your web tree.
    It is obviously not a good idea for Apache or PHP to automatically
    let everybody overwrite any files in your web tree.  So, to handle
    such a request you have to first tell your web server that you
    want a certain PHP script to handle the request.  In Apache you do
    this with the <em>Script</em> directive.  It can be
    placed almost anywhere in your Apache configuration file.  A
    common place is inside a <code class="literal">&lt;Directory&gt;</code> block or perhaps inside
    a <code class="literal">&lt;VirtualHost&gt;</code> block.  A line like this would do the trick:
    <div class="informalexample">
     <div class="example-contents">
<div class="cdata"><pre>
Script PUT /put.php
</pre></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    This tells Apache to send all PUT requests for URIs that match the
    context in which you put this line to the <var class="filename">put.php</var> script. This
    assumes, of course, that you have PHP enabled for the <var class="filename">.php</var>
    extension and PHP is active. The destination resource for all PUT 
    requests to this script has to be the script itself, not a filename the
    uploaded file should have.
   </p>
   <p class="simpara">
    With PHP you would then do something like the following in
    your put.php. This would copy the contents of the uploaded file to the
    file <var class="filename">myputfile.ext</var> on the server.
    You would probably want to perform some checks and/or
    authenticate the user before performing this file copy.
   </p>
   <p class="para">
    <div class="example" id="example-538">
     <p><strong>Example #1 Saving HTTP PUT files</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* PUT data comes in on the stdin stream */<br /></span><span style="color: #0000BB">$putdata </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://input"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Open a file for writing */<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"myputfile.ext"</span><span style="color: #007700">, </span><span style="color: #DD0000">"w"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Read the data 1 KB at a time<br />   and write to the file */<br /></span><span style="color: #007700">while (</span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$putdata</span><span style="color: #007700">, </span><span style="color: #0000BB">1024</span><span style="color: #007700">))<br />  </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Close the streams */<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$putdata</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.file-upload.put-method%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.file-upload.put-method&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.put-method.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128596">  <div class="votes">
    <div id="Vu128596">
    <a href="/manual/vote-note.php?id=128596&amp;page=features.file-upload.put-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128596">
    <a href="/manual/vote-note.php?id=128596&amp;page=features.file-upload.put-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128596" title="100% like this...">
    5
    </div>
  </div>
  <a href="#128596" class="name">
  <strong class="user"><em>arnaud at caramia dot Fr</em></strong></a><a class="genanchor" href="#128596"> &para;</a><div class="date" title="2023-06-08 06:27"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128596">
<div class="phpcode"><code><span class="html">We resolved our problem with <a href="https://pecl.php.net/package/apfd." rel="nofollow" target="_blank">https://pecl.php.net/package/apfd.</a><br /><br />It parses multipart/form-data body (files and payload) with PUT and PATCH http requests, witch was only possible before with POST http request.</span></code></div>
  </div>
 </div>
  <div class="note" id="99863">  <div class="votes">
    <div id="Vu99863">
    <a href="/manual/vote-note.php?id=99863&amp;page=features.file-upload.put-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99863">
    <a href="/manual/vote-note.php?id=99863&amp;page=features.file-upload.put-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99863" title="63% like this...">
    36
    </div>
  </div>
  <a href="#99863" class="name">
  <strong class="user"><em>micronix at gmx dot net</em></strong></a><a class="genanchor" href="#99863"> &para;</a><div class="date" title="2010-09-10 07:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99863">
<div class="phpcode"><code><span class="html">Hello PHP World After many Hours of worryness :=)
<br />
<br />I have found the Solution for Resume or Pause Uploads
<br />In this Code Snippet it is the Server Side not Client on any Desktop Programm you must use byte ranges to calculate the uploaded bytes and missing of total bytes.
<br />
<br />Here the PHP Code
<br />
<br /><span class="default">&lt;?php
<br />$CHUNK </span><span class="keyword">= </span><span class="default">8192</span><span class="keyword">;
<br />
<br />        try {
<br />            if (!(</span><span class="default">$putData </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"php://input"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">)))
<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Can't get PUT data."</span><span class="keyword">);
<br />
<br />            </span><span class="comment">// now the params can be used like any other variable
<br />            // see below after input has finished
<br />
<br />            </span><span class="default">$tot_write </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />            </span><span class="default">$tmpFileName </span><span class="keyword">= </span><span class="string">"/var/dev/tmp/PUT_FILE"</span><span class="keyword">;
<br />            </span><span class="comment">// Create a temp file
<br />            </span><span class="keyword">if (!</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$tmpFileName</span><span class="keyword">)) {
<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$tmpFileName</span><span class="keyword">, </span><span class="string">"x"</span><span class="keyword">)); </span><span class="comment">//create the file and close it
<br />                // Open the file for writing
<br />                </span><span class="keyword">if (!(</span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$tmpFileName</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">)))
<br />                    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Can't write to tmp file"</span><span class="keyword">);
<br />
<br />                </span><span class="comment">// Read the data a chunk at a time and write to the file
<br />                </span><span class="keyword">while (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$putData</span><span class="keyword">, </span><span class="default">$CHUNK</span><span class="keyword">)) {
<br />                    </span><span class="default">$chunk_read </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />                    if ((</span><span class="default">$block_write </span><span class="keyword">= </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">)) != </span><span class="default">$chunk_read</span><span class="keyword">)
<br />                        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Can't write more to tmp file"</span><span class="keyword">);
<br />
<br />                    </span><span class="default">$tot_write </span><span class="keyword">+= </span><span class="default">$block_write</span><span class="keyword">;
<br />                }
<br />
<br />                if (!</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))
<br />                    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Can't close tmp file"</span><span class="keyword">);
<br />
<br />                unset(</span><span class="default">$putData</span><span class="keyword">);
<br />            } else {
<br />                </span><span class="comment">// Open the file for writing
<br />                </span><span class="keyword">if (!(</span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$tmpFileName</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">)))
<br />                    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Can't write to tmp file"</span><span class="keyword">);
<br />
<br />                </span><span class="comment">// Read the data a chunk at a time and write to the file
<br />                </span><span class="keyword">while (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$putData</span><span class="keyword">, </span><span class="default">$CHUNK</span><span class="keyword">)) {
<br />                    </span><span class="default">$chunk_read </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br />                    if ((</span><span class="default">$block_write </span><span class="keyword">= </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">)) != </span><span class="default">$chunk_read</span><span class="keyword">)
<br />                        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Can't write more to tmp file"</span><span class="keyword">);
<br />
<br />                    </span><span class="default">$tot_write </span><span class="keyword">+= </span><span class="default">$block_write</span><span class="keyword">;
<br />                }
<br />
<br />                if (!</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))
<br />                    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Can't close tmp file"</span><span class="keyword">);
<br />
<br />                unset(</span><span class="default">$putData</span><span class="keyword">);
<br />            }
<br />
<br />            </span><span class="comment">// Check file length and MD5
<br />            </span><span class="keyword">if (</span><span class="default">$tot_write </span><span class="keyword">!= </span><span class="default">$file_size</span><span class="keyword">)
<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Wrong file size"</span><span class="keyword">);
<br />
<br />            </span><span class="default">$md5_arr </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"md5sum </span><span class="default">$tmpFileName</span><span class="string">"</span><span class="keyword">));
<br />            </span><span class="default">$md5 </span><span class="keyword">= </span><span class="default">$md5sum_arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />            if (</span><span class="default">$md5 </span><span class="keyword">!= </span><span class="default">$md5sum</span><span class="keyword">)
<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Wrong md5"</span><span class="keyword">);
<br />        } catch (</span><span class="default">Exception $e</span><span class="keyword">) {
<br />            echo </span><span class="string">''</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">(), </span><span class="string">"\n"</span><span class="keyword">;
<br />        }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128423">  <div class="votes">
    <div id="Vu128423">
    <a href="/manual/vote-note.php?id=128423&amp;page=features.file-upload.put-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128423">
    <a href="/manual/vote-note.php?id=128423&amp;page=features.file-upload.put-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128423" title="75% like this...">
    2
    </div>
  </div>
  <a href="#128423" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#128423"> &para;</a><div class="date" title="2023-04-23 09:11"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128423">
<div class="phpcode"><code><span class="html">I was confused with file uploads using the PUT method.<br />My concern was why can't we upload multiple files using the PUT method with streams<br />PUT data comes in on the stdin stream<br />$putdata = fopen("php://input", "r");<br />Note the $putdata is a file pointer to the file content that is being uploaded.<br />The data is received on the server on the fly (which means available as it is received)<br /><br />Secondly, when we are using parse_str(file_get_contents("php://input")).<br />This means the data is completely received on the server end and is then made available to the script.<br /><br />When using fopen() one cant parse the data. This can be used when uploading a large file.<br />The file may range from 100's of MBs to Gigs where streams plays a major role.<br /><br />Streams make the file data available to script in chunks instead of first saving in the temp folder.<br />Hence, when using $putdata = fopen("php://input", "r"); one can't pass the payload as well.<br />If someone wants to pass the payload the only option is in the URL query string.</span></code></div>
  </div>
 </div>
  <div class="note" id="126681">  <div class="votes">
    <div id="Vu126681">
    <a href="/manual/vote-note.php?id=126681&amp;page=features.file-upload.put-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126681">
    <a href="/manual/vote-note.php?id=126681&amp;page=features.file-upload.put-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126681" title="75% like this...">
    2
    </div>
  </div>
  <a href="#126681" class="name">
  <strong class="user"><em>Oscar Fernandez Sierra</em></strong></a><a class="genanchor" href="#126681"> &para;</a><div class="date" title="2021-12-14 09:27"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126681">
<div class="phpcode"><code><span class="html">This is what worked for me. There are many examples in the web that don't work. I found in <a href="https://lornajane.net/posts/2009/putting-data-fields-with-php-curl." rel="nofollow" target="_blank">https://lornajane.net/posts/2009/putting-data-fields-with-php-curl.</a><br /><br />IMPORTANT: You should not use the code<br /><br />       curl_setopt($ch, CURLOPT_PUT, true);<br /><br />even if it seems to be the right option (it would be the right option for a POST request, with CURLOPT_POST, but it does not work for a PUT request).<br /><br />Notice that the constant CURLOPT_CUSTOMREQUEST is used instead of CURLOPT_PUT, and that the value used is "PUT" instead of true.<br /><br /><span class="default">&lt;?php<br /><br />        $url </span><span class="keyword">= </span><span class="string">"....."</span><span class="keyword">; </span><span class="comment">// put your URL here<br /><br />        </span><span class="default">$data </span><span class="keyword">= array(</span><span class="string">"a" </span><span class="keyword">=&gt; </span><span class="default">$a</span><span class="keyword">);<br /><br />        </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_CUSTOMREQUEST</span><span class="keyword">, </span><span class="string">"PUT"</span><span class="keyword">);<br />        </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">http_build_query</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));<br /><br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />        if ( ! </span><span class="default">$response</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114665">  <div class="votes">
    <div id="Vu114665">
    <a href="/manual/vote-note.php?id=114665&amp;page=features.file-upload.put-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114665">
    <a href="/manual/vote-note.php?id=114665&amp;page=features.file-upload.put-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114665" title="55% like this...">
    7
    </div>
  </div>
  <a href="#114665" class="name">
  <strong class="user"><em>San</em></strong></a><a class="genanchor" href="#114665"> &para;</a><div class="date" title="2014-03-19 09:33"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114665">
<div class="phpcode"><code><span class="html">Instead of using fread fwrite to save uploaded content to a file.<br />stream_copy_to_stream is much cleaner.</span></code></div>
  </div>
 </div>
  <div class="note" id="126641">  <div class="votes">
    <div id="Vu126641">
    <a href="/manual/vote-note.php?id=126641&amp;page=features.file-upload.put-method&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126641">
    <a href="/manual/vote-note.php?id=126641&amp;page=features.file-upload.put-method&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126641" title="55% like this...">
    1
    </div>
  </div>
  <a href="#126641" class="name">
  <strong class="user"><em>willy at kochkonsult dot no</em></strong></a><a class="genanchor" href="#126641"> &para;</a><div class="date" title="2021-11-25 01:35"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126641">
<div class="phpcode"><code><span class="html">All the example code I found for using PUT with PHP always used a default hard-coded file extension for the incoming stream.<br /><br />The filename from the incoming file PUT request can't be found anywhere from the incoming request (at least I couldn't find it) but mimetype can be found in the $_SERVER global variable.<br /><br />I used this code to get the correct file extension:<br /><br />$mimeType = $_SERVER['HTTP_CONTENT_TYPE'];<br /><br />if ($mimeType!='application/pdf') <br />    {   <br />    header('HTTP/1.1 405 Only PDF files allowed');<br />    echo("Only PDF files are allowed for upload - this file is ".$mimeType);<br />    die();<br />    }<br />else $fileExtension = 'pdf';<br /><br />If you have an Apache Tika server available, that would be the best option to analyze the file content to get the mimetype, but that might not be in scope for everyone :-)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.file-upload.put-method&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.file-upload.put-method.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="features.file-upload.multiple.php" title="Uploading multiple files">Uploading multiple files</a>
                        </li>
                                                <li class="current">
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
