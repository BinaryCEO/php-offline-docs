<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: is_uploaded_file - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.is-uploaded-file.php">
 <link rel="shorturl" href="https://www.php.net/is-uploaded-file">
 <link rel="alternate" href="https://www.php.net/is-uploaded-file" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.is-readable.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-writable.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.is-uploaded-file.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.is-uploaded-file.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.is-uploaded-file.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.is-uploaded-file.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.is-uploaded-file.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.is-uploaded-file.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.is-uploaded-file.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.is-uploaded-file.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.is-uploaded-file.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.is-uploaded-file.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.is-uploaded-file.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Tells whether the file was uploaded via HTTP POST" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: is_uploaded_file - Manual" />
<meta name="twitter:description" content="Tells whether the file was uploaded via HTTP POST" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: is_uploaded_file - Manual" />
<meta itemprop="description" content="Tells whether the file was uploaded via HTTP POST" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Tells whether the file was uploaded via HTTP POST" />

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
        <a href="function.is-writable.php">
          is_writable &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.is-readable.php">
          &laquo; is_readable        </a>
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
            <option value='en/function.is-uploaded-file.php' selected="selected">English</option>
            <option value='de/function.is-uploaded-file.php'>German</option>
            <option value='es/function.is-uploaded-file.php'>Spanish</option>
            <option value='fr/function.is-uploaded-file.php'>French</option>
            <option value='it/function.is-uploaded-file.php'>Italian</option>
            <option value='ja/function.is-uploaded-file.php'>Japanese</option>
            <option value='pt_BR/function.is-uploaded-file.php'>Brazilian Portuguese</option>
            <option value='ru/function.is-uploaded-file.php'>Russian</option>
            <option value='tr/function.is-uploaded-file.php'>Turkish</option>
            <option value='uk/function.is-uploaded-file.php'>Ukrainian</option>
            <option value='zh/function.is-uploaded-file.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.is-uploaded-file" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">is_uploaded_file</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_uploaded_file</span> &mdash; <span class="dc-title">Tells whether the file was uploaded via HTTP POST</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.is-uploaded-file-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>is_uploaded_file</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the file named by <code class="parameter">filename</code> was
   uploaded via HTTP POST. This is useful to help ensure that a
   malicious user hasn&#039;t tried to trick the script into working on
   files upon which it should not be working--for instance,
   <var class="filename">/etc/passwd</var>.
  </p>
  <p class="para">
   This sort of check is especially important if there is any chance
   that anything done with uploaded files could reveal their
   contents to the user, or even to other users on the same
   system.
  </p>
  <p class="para">
   For proper working, the function <span class="function"><strong>is_uploaded_file()</strong></span> needs
   an argument like <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['tmp_name']</a></var>, - the name of the uploaded
   file on the client&#039;s machine <var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES['userfile']['name']</a></var> does not work.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.is-uploaded-file-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The filename being checked.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.is-uploaded-file-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.is-uploaded-file-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2392">
    <p><strong>Example #1 <span class="function"><strong>is_uploaded_file()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">is_uploaded_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'userfile'</span><span style="color: #007700">][</span><span style="color: #DD0000">'tmp_name'</span><span style="color: #007700">])) {<br />   echo </span><span style="color: #DD0000">"File "</span><span style="color: #007700">. </span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'userfile'</span><span style="color: #007700">][</span><span style="color: #DD0000">'name'</span><span style="color: #007700">] .</span><span style="color: #DD0000">" uploaded successfully.\n"</span><span style="color: #007700">;<br />   echo </span><span style="color: #DD0000">"Displaying contents\n"</span><span style="color: #007700">;<br />   </span><span style="color: #0000BB">readfile</span><span style="color: #007700">(</span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'userfile'</span><span style="color: #007700">][</span><span style="color: #DD0000">'tmp_name'</span><span style="color: #007700">]);<br />} else {<br />   echo </span><span style="color: #DD0000">"Possible file upload attack: "</span><span style="color: #007700">;<br />   echo </span><span style="color: #DD0000">"filename '"</span><span style="color: #007700">. </span><span style="color: #0000BB">$_FILES</span><span style="color: #007700">[</span><span style="color: #DD0000">'userfile'</span><span style="color: #007700">][</span><span style="color: #DD0000">'tmp_name'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"'."</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.is-uploaded-file-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.move-uploaded-file.php" class="function" rel="rdfs-seeAlso">move_uploaded_file()</a> - Moves an uploaded file to a new location</span></li>
    <li><var class="varname"><a href="reserved.variables.files.php" class="classname">$_FILES</a></var></li>
    <li>See <a href="features.file-upload.php" class="link">Handling file uploads</a> for a simple usage example.</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/is-uploaded-file.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.is-uploaded-file%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.is-uploaded-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-uploaded-file.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113766">  <div class="votes">
    <div id="Vu113766">
    <a href="/manual/vote-note.php?id=113766&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113766">
    <a href="/manual/vote-note.php?id=113766&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113766" title="87% like this...">
    65
    </div>
  </div>
  <a href="#113766" class="name">
  <strong class="user"><em>nicoSWD</em></strong></a><a class="genanchor" href="#113766"> &para;</a><div class="date" title="2013-11-28 04:39"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113766">
<div class="phpcode"><code><span class="html">Note that calling this function before move_uploaded_file() is not necessary, as it does the exact same checks already. It provides no extra security. Only when you're trying to use an uploaded file for something other than moving it to a new location.<br /><br />Reference:<br /><a href="https://github.com/php/php-src/blob/master/ext/standard/basic_functions.c#L5796" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/master/ext/standard/basic_functions.c#L5796</a></span></code></div>
  </div>
 </div>
  <div class="note" id="118430">  <div class="votes">
    <div id="Vu118430">
    <a href="/manual/vote-note.php?id=118430&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118430">
    <a href="/manual/vote-note.php?id=118430&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118430" title="75% like this...">
    12
    </div>
  </div>
  <a href="#118430" class="name">
  <strong class="user"><em>Robert Lerner</em></strong></a><a class="genanchor" href="#118430"> &para;</a><div class="date" title="2015-12-04 03:42"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118430">
<div class="phpcode"><code><span class="html">To expand on what nicoSWD stated about this function.<br /><br />Any script working with the temporary file $_FILES[]['tmp_name'] should call this function.<br /><br />In any case where the script is modified to unlink(), rename() or otherwise modify the file that IS NOT move_uploaded_file() will not have the upload checked.<br /><br />Likewise, most file operations are cached in PHP, therefore there should be minimal performance hit running is_uploaded_file before move_uploaded_file, since it will usually used a cached result for the latter.<br /><br />The security benefits outweigh the microsecond difference in performance in any event, and should universally be used as soon as the $_FILES array is first entered into an application. While there may not be an immediate issue, code evolves and could quickly change this fact.</span></code></div>
  </div>
 </div>
  <div class="note" id="29635">  <div class="votes">
    <div id="Vu29635">
    <a href="/manual/vote-note.php?id=29635&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29635">
    <a href="/manual/vote-note.php?id=29635&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29635" title="73% like this...">
    19
    </div>
  </div>
  <a href="#29635" class="name">
  <strong class="user"><em>info at metaltoad dot net</em></strong></a><a class="genanchor" href="#29635"> &para;</a><div class="date" title="2003-02-19 01:03"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29635">
<div class="phpcode"><code><span class="html">As of PHP 4.2.0, rather than automatically assuming a failed file uploaded is a file attack, you can use the error code associated with the file upload to check and see why the upload failed.  This error code is stored in the userfile array (ex: $HTTP_POST_FILES['userfile']['error']). <br /><br />Here's an example of a switch:<br /><br />if (is_uploaded_file($userfile)) {<br />  <br />  //include code to copy tmp file to final location here...<br />  <br />}else{<br />  switch($HTTP_POST_FILES['userfile']['error']){<br />    case 0: //no error; possible file attack!<br />      echo "There was a problem with your upload.";<br />      break;<br />    case 1: //uploaded file exceeds the upload_max_filesize directive in php.ini<br />      echo "The file you are trying to upload is too big.";<br />      break;<br />    case 2: //uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form<br />      echo "The file you are trying to upload is too big.";<br />      break;<br />    case 3: //uploaded file was only partially uploaded<br />      echo "The file you are trying upload was only partially uploaded.";<br />      break;<br />    case 4: //no file was uploaded<br />      echo "You must select an image for upload.";<br />      break;<br />    default: //a default error, just in case!  :)<br />      echo "There was a problem with your upload.";<br />      break;<br />}<br /><br />Additionally, by testing the 'name' element of the file upload array, you can filter out unwanted file types (.exe, .zip, .bat, etc).  Here's an example of a filter that can be added before testing to see if the file was uploaded:<br /><br />//rejects all .exe, .com, .bat, .zip, .doc and .txt files<br />if(preg_match("/.exe$|.com$|.bat$|.zip$|.doc$|.txt$/i", $HTTP_POST_FILES['userfile']['name'])){<br />  exit("You cannot upload this type of file.");<br />}<br /><br />//if file is not rejected by the filter, continue normally<br />if (is_uploaded_file($userfile)) {<br /><br />/*rest of code*/</span></code></div>
  </div>
 </div>
  <div class="note" id="57662">  <div class="votes">
    <div id="Vu57662">
    <a href="/manual/vote-note.php?id=57662&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57662">
    <a href="/manual/vote-note.php?id=57662&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57662" title="63% like this...">
    6
    </div>
  </div>
  <a href="#57662" class="name">
  <strong class="user"><em>YLearn</em></strong></a><a class="genanchor" href="#57662"> &para;</a><div class="date" title="2005-10-10 10:42"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57662">
<div class="phpcode"><code><span class="html">Just looked at what I posted again and found several mistakes of the major and minor sort.  That's what I get for posting before I finish my coffee.  This should work better (i.e. should work in the first place):<br /><br /><span class="default">&lt;?php<br />   </span><span class="keyword">default: </span><span class="comment">//a default error, just in case!  :)<br />       </span><span class="keyword">echo </span><span class="string">"There was a problem with your upload."</span><span class="keyword">;<br />       </span><span class="default">$err_msg </span><span class="keyword">= </span><span class="string">"Unrecognized file POST error: "</span><span class="keyword">.</span><span class="default">$HTTP_POST_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">];<br />       if (!(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$err_msg</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">)) {<br />           </span><span class="default">$err_lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$err_msg</span><span class="keyword">);<br />           foreach (</span><span class="default">$err_lines </span><span class="keyword">as </span><span class="default">$msg</span><span class="keyword">) {<br />               </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />           }<br />       } else {<br />           </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$err_msg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />       }<br />       break;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77050">  <div class="votes">
    <div id="Vu77050">
    <a href="/manual/vote-note.php?id=77050&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77050">
    <a href="/manual/vote-note.php?id=77050&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77050" title="61% like this...">
    4
    </div>
  </div>
  <a href="#77050" class="name">
  <strong class="user"><em>uramihsayibok, gmail, com</em></strong></a><a class="genanchor" href="#77050"> &para;</a><div class="date" title="2007-08-12 09:18"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77050">
<div class="phpcode"><code><span class="html">It isn't mentioned anywhere that I've seen, but $filename *is* case-sensitive on Windows.<br />It means that while C:\Windows\TEMP\php123.tmp may have been uploaded, C:\Windows\Temp\php123.tmp was not.<br /><br />I found this out because I was using realpath() on the filename which 'fixed' the case (my Temp folder is in titlecase, not uppercase - thank you Vista).<br /><br />Anyways, the problem was that PHP used %TEMP% to determine the destination for the uploaded file, and %TEMP% used the all-capitals version of the path. Changing it to use titlecase instead + restarting Apache fixed the problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="27234">  <div class="votes">
    <div id="Vu27234">
    <a href="/manual/vote-note.php?id=27234&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27234">
    <a href="/manual/vote-note.php?id=27234&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27234" title="59% like this...">
    4
    </div>
  </div>
  <a href="#27234" class="name">
  <strong class="user"><em>itadmin at itmusicweb dot co dot uk</em></strong></a><a class="genanchor" href="#27234"> &para;</a><div class="date" title="2002-11-28 06:11"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27234">
<div class="phpcode"><code><span class="html">The example brought out does not work as supposed to:<br /><br />function is_uploaded_file($filename) {<br />    if (!$tmp_file = get_cfg_var('upload_tmp_dir')) {<br />        $tmp_file = dirname(tempnam('', ''));<br />    }<br />    $tmp_file .= '/' . basename($filename);<br />    /* User might have trailing slash in php.ini... */<br />    return (ereg_replace('/+', '/', $tmp_file) == $filename);<br />}<br /><br />It works only with files under ....4 or 5 kb, other files automatically get the size of 0 bytes. So something must be wrong here. Built-in is_uploaded_file() works good.</span></code></div>
  </div>
 </div>
  <div class="note" id="113405">  <div class="votes">
    <div id="Vu113405">
    <a href="/manual/vote-note.php?id=113405&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113405">
    <a href="/manual/vote-note.php?id=113405&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113405" title="55% like this...">
    3
    </div>
  </div>
  <a href="#113405" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#113405"> &para;</a><div class="date" title="2013-10-07 11:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113405">
<div class="phpcode"><code><span class="html">Here is my code for file handler, i hope it help to all:<br /><br />First a class to handler file upload:<br /><span class="default">&lt;?php<br />    define</span><span class="keyword">(</span><span class="string">'UPLOAD_PATH'</span><span class="keyword">, </span><span class="string">'upload/'</span><span class="keyword">);<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'MAXIMUM_FILESIZE'</span><span class="keyword">, </span><span class="string">'10485760'</span><span class="keyword">); </span><span class="comment">//10 MB<br />    </span><span class="keyword">class </span><span class="default">FileHandler<br />    </span><span class="keyword">{<br />        private </span><span class="default">$file_types </span><span class="keyword">= array(</span><span class="string">'xls'</span><span class="keyword">, </span><span class="string">'xlsx'</span><span class="keyword">);<br />        private </span><span class="default">$files </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        private </span><span class="default">$filename_sanitized </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        private </span><span class="default">$filename_original </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        <br />        <br />        public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">files </span><span class="keyword">= </span><span class="default">$files</span><span class="keyword">;    <br />        }<br />        <br />        public function </span><span class="default">setFileTypes</span><span class="keyword">(</span><span class="default">$fileTypes </span><span class="keyword">= array())<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_types </span><span class="keyword">= </span><span class="default">$fileTypes</span><span class="keyword">;<br />            return </span><span class="default">$this</span><span class="keyword">;<br />        }<br />        <br />        public function </span><span class="default">setFileNameOriginal</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filename_original </span><span class="keyword">= </span><span class="default">$filename</span><span class="keyword">;<br />        }<br />        <br />        public function </span><span class="default">fileNameOriginal</span><span class="keyword">()<br />        {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filename_original</span><span class="keyword">;<br />        }<br />        <br />        public function </span><span class="default">sanitize</span><span class="keyword">(</span><span class="default">$cursor </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setFileNameOriginal</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">files</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">][</span><span class="default">$cursor</span><span class="keyword">]);<br />            <br />            </span><span class="default">$safe_filename </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(<br />                    array(</span><span class="string">"/\s+/"</span><span class="keyword">, </span><span class="string">"/[^-\.\w]+/"</span><span class="keyword">),<br />                    array(</span><span class="string">"_"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">),<br />                    </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fileNameOriginal</span><span class="keyword">()));<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filename_sanitized  </span><span class="keyword">= </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$safe_filename</span><span class="keyword">.</span><span class="default">time</span><span class="keyword">()).</span><span class="default">$safe_filename</span><span class="keyword">;<br />            return </span><span class="default">$this</span><span class="keyword">;<br />        }<br />        <br />        public function </span><span class="default">fileSize</span><span class="keyword">(</span><span class="default">$cursor </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />        {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">files</span><span class="keyword">[</span><span class="string">'size'</span><span class="keyword">][</span><span class="default">$cursor</span><span class="keyword">];<br />        }<br />        <br />        public function </span><span class="default">extensionValid</span><span class="keyword">()<br />        {<br />            </span><span class="default">$fileTypes </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'|'</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file_types</span><span class="keyword">);<br />            </span><span class="default">$rEFileTypes </span><span class="keyword">= </span><span class="string">"/^\.(</span><span class="default">$fileTypes</span><span class="string">){1}$/i"</span><span class="keyword">;<br />            if(!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$rEFileTypes</span><span class="keyword">, </span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filename_sanitized</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">)))<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'No se pudo encontrar el tipo de archivo apropiado'</span><span class="keyword">);<br />            <br />            return </span><span class="default">$this</span><span class="keyword">;<br />        }<br />        <br />        public function </span><span class="default">isUploadedFile</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">)<br />        {<br />            if(!</span><span class="default">is_uploaded_file</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">files</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">][</span><span class="default">$cursor</span><span class="keyword">]))<br />            {<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"No se obtuvo la carga del archivo"</span><span class="keyword">);<br />            }<br />        }<br />        <br />        public function </span><span class="default">saveUploadedFile</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">)<br />        {<br />            if(!</span><span class="default">move_uploaded_file </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">files</span><span class="keyword">[</span><span class="string">'tmp_name'</span><span class="keyword">][</span><span class="default">$cursor</span><span class="keyword">],</span><span class="default">UPLOAD_PATH</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filename_sanitized</span><span class="keyword">))<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"No se consigui&amp;oacute; guardar el archivo"</span><span class="keyword">);<br />        }<br />        <br />        public function </span><span class="default">fileNameSanitized</span><span class="keyword">()<br />        {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">filename_sanitized</span><span class="keyword">;<br />        }<br />        <br />        public function </span><span class="default">uploadFile</span><span class="keyword">(</span><span class="default">$cursor </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">isUploadedFile</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">);<br />            if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sanitize</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">)-&gt;</span><span class="default">fileSize</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">) &lt;= </span><span class="default">MAXIMUM_FILESIZE</span><span class="keyword">)<br />            {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">extensionValid</span><span class="keyword">()-&gt;</span><span class="default">saveUploadedFile</span><span class="keyword">(</span><span class="default">$cursor</span><span class="keyword">);<br />            }<br />            else <br />            {<br />                throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"El archivo es demasiado grande."</span><span class="keyword">);<br />            }<br />            return </span><span class="default">$name</span><span class="keyword">;            <br />        }<br />        <br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />Next a part of code to use the class<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//form is submited  and detect that<br /></span><span class="keyword">if (</span><span class="default">$form_submited </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">)<br />{<br />    try<br />    {<br />                </span><span class="comment">//i assume de input file is:<br />                /*<br />                       &lt;input id="&lt;?php echo EXCEL_FILE;?&gt;[]" name="&lt;?php echo EXCEL_FILE;?&gt;[]" type="file"/&gt;<br />                       where EXCEL_FILE is the constant: <br />                       define('EXCEL_FILE', 'excel_file');<br />                */<br />        </span><span class="default">$file </span><span class="keyword">= new </span><span class="default">FileHandler</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'excel_file'</span><span class="keyword">]);<br />        </span><span class="default">$inputFileName </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">uploadFile</span><span class="keyword">()-&gt;</span><span class="default">fileNameSanitized</span><span class="keyword">();  </span><span class="comment">// File to read<br />                </span><span class="keyword">...<br />        <br />    }<br />    catch(</span><span class="default">Exception $e</span><span class="keyword">)<br />    {<br />        die(</span><span class="string">'Error cargando archivo "'</span><span class="keyword">.(</span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">fileNameOriginal</span><span class="keyword">()).</span><span class="string">'": '</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">());<br />    }<br />    <br />    <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56895">  <div class="votes">
    <div id="Vu56895">
    <a href="/manual/vote-note.php?id=56895&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56895">
    <a href="/manual/vote-note.php?id=56895&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56895" title="56% like this...">
    2
    </div>
  </div>
  <a href="#56895" class="name">
  <strong class="user"><em>juk</em></strong></a><a class="genanchor" href="#56895"> &para;</a><div class="date" title="2005-09-18 03:26"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56895">
<div class="phpcode"><code><span class="html">If your $_FILES and $_POST are empty, this can be due to<br />- the limit set by post_max_size in php.ini<br />- the limit set by upload_max_filesize in php.ini<br /><br />Unfortunately the first limit is not reported back as an error code in $_FILES['error'].</span></code></div>
  </div>
 </div>
  <div class="note" id="25989">  <div class="votes">
    <div id="Vu25989">
    <a href="/manual/vote-note.php?id=25989&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25989">
    <a href="/manual/vote-note.php?id=25989&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25989" title="50% like this...">
    0
    </div>
  </div>
  <a href="#25989" class="name">
  <strong class="user"><em>troels at NO dot SPAM dot webcode dot dk</em></strong></a><a class="genanchor" href="#25989"> &para;</a><div class="date" title="2002-10-14 12:44"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom25989">
<div class="phpcode"><code><span class="html">to get the example to work on windows, youll have to add a line, that replaces backslashes with slashes. eg.: $filename = str_replace ("\\", "/", $filename);<br /><br />also, as someone mentioned, globalizing $HTTP_POST_FILES is a good idea ...<br /><br />&lt;pre&gt;<br />/* Userland test for uploaded file. */<br />function is_uploaded_file($filename)<br />{<br />    global $HTTP_POST_FILES;<br />    if (!$tmp_file = get_cfg_var("upload_tmp_dir")) {<br />        $tmp_file = dirname(tempnam("", ""));<br />    }<br />    $tmp_file .= "/" . basename($filename);<br />    /* User might have trailing slash in php.ini... */<br />    // fix for win platform<br />    $filename = str_replace ("\\", "/", $filename);<br />    return (ereg_replace("/+", "/", $tmp_file) == $filename);<br />}<br />&lt;/pre&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="49726">  <div class="votes">
    <div id="Vu49726">
    <a href="/manual/vote-note.php?id=49726&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49726">
    <a href="/manual/vote-note.php?id=49726&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49726" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#49726" class="name">
  <strong class="user"><em>lots2learn at gmail dot com</em></strong></a><a class="genanchor" href="#49726"> &para;</a><div class="date" title="2005-02-06 09:13"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49726">
<div class="phpcode"><code><span class="html">if files are not getting uploaded and $_FILE array is empty ..and your code looks fine..then check php.ini file..the file_uploads option should be turned 'On' to allow file uploads. Turn it on and restart apache to have effect .</span></code></div>
  </div>
 </div>
  <div class="note" id="52189">  <div class="votes">
    <div id="Vu52189">
    <a href="/manual/vote-note.php?id=52189&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52189">
    <a href="/manual/vote-note.php?id=52189&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52189" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#52189" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#52189"> &para;</a><div class="date" title="2005-04-23 12:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52189">
<div class="phpcode"><code><span class="html">make use u got the enctype="multipart/form-data" in ur form tag otrherwise nothing works... took me two hours to find that out.......</span></code></div>
  </div>
 </div>
  <div class="note" id="51928">  <div class="votes">
    <div id="Vu51928">
    <a href="/manual/vote-note.php?id=51928&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51928">
    <a href="/manual/vote-note.php?id=51928&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51928" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#51928" class="name">
  <strong class="user"><em>beer UNDRSCR nomaed AT hotmail DOT com</em></strong></a><a class="genanchor" href="#51928"> &para;</a><div class="date" title="2005-04-15 04:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51928">
<div class="phpcode"><code><span class="html">Regarding the comment of info at metaltoad dot net<br />@ 19-Feb-2003 04:03<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// ... yada yada yada...<br /></span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.exe$|.com$|.bat$|.zip$|.doc$|.txt$/i"</span><span class="keyword">, </span><span class="default">$HTTP_POST_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]))<br /></span><span class="comment">// ... yada yada yada...<br /></span><span class="default">?&gt;<br /></span><br />This will not work. It will, but not correctly.<br />You shuld escape the . (dot) for the preg function,<br />and escape the $ (dollar) sign for PHP, or use<br />single-quoted string...<br /><br />The syntax should be (much shorter and neater):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// ... yada yada yada...<br /></span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\\.(exe|com|bat|zip|doc|txt)$/i'</span><span class="keyword">, </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]))<br /></span><span class="comment">// ... yada yada yada...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57660">  <div class="votes">
    <div id="Vu57660">
    <a href="/manual/vote-note.php?id=57660&amp;page=function.is-uploaded-file&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57660">
    <a href="/manual/vote-note.php?id=57660&amp;page=function.is-uploaded-file&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57660" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#57660" class="name">
  <strong class="user"><em>YLearn</em></strong></a><a class="genanchor" href="#57660"> &para;</a><div class="date" title="2005-10-10 09:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57660">
<div class="phpcode"><code><span class="html">Regarding topcat's suggested change, I am split on doing that.  I don't like showing users errors that may give them more information than they should have (or show that I haven't provided for that particular error).  But I want to know when there are errors that fall to the default case so I can fix my code.  What I will typically do is write them to the error log something like this modification to metaltoad's post (takes into account the possibility of multi-line errors which error_log doesn't handle well):<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">default: </span><span class="comment">//a default error, just in case!  :)<br />        </span><span class="keyword">echo </span><span class="string">"There was a problem with your upload."</span><span class="keyword">;<br />        </span><span class="default">$err_msg </span><span class="keyword">= </span><span class="string">"Unrecognized file POST error: "</span><span class="keyword">.</span><span class="default">$HTTP_POST_FILES</span><span class="keyword">[</span><span class="string">'userfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">];<br />        if ((</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$err_msg</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$err_lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$err_msg</span><span class="keyword">);<br />            foreach (</span><span class="default">$err_lines </span><span class="keyword">as </span><span class="default">$msg</span><span class="keyword">) {<br />                </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />            }<br />        } else {<br />            </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$err_msg</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)<br />        }<br />        break;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.is-uploaded-file&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-uploaded-file.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
