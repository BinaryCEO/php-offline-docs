<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: popen - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.popen.php">
 <link rel="shorturl" href="https://www.php.net/popen">
 <link rel="alternate" href="https://www.php.net/popen" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pclose.php">
 <link rel="next" href="https://www.php.net/manual/en/function.readfile.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.popen.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.popen.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.popen.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.popen.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.popen.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.popen.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.popen.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.popen.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.popen.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.popen.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.popen.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Opens process file pointer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: popen - Manual" />
<meta name="twitter:description" content="Opens process file pointer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: popen - Manual" />
<meta itemprop="description" content="Opens process file pointer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Opens process file pointer" />

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
        <a href="function.readfile.php">
          readfile &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pclose.php">
          &laquo; pclose        </a>
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
            <option value='en/function.popen.php' selected="selected">English</option>
            <option value='de/function.popen.php'>German</option>
            <option value='es/function.popen.php'>Spanish</option>
            <option value='fr/function.popen.php'>French</option>
            <option value='it/function.popen.php'>Italian</option>
            <option value='ja/function.popen.php'>Japanese</option>
            <option value='pt_BR/function.popen.php'>Brazilian Portuguese</option>
            <option value='ru/function.popen.php'>Russian</option>
            <option value='tr/function.popen.php'>Turkish</option>
            <option value='uk/function.popen.php'>Ukrainian</option>
            <option value='zh/function.popen.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.popen" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">popen</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">popen</span> &mdash; <span class="dc-title">Opens process file pointer</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.popen-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>popen</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$command</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$mode</code></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Opens a pipe to a process executed by forking the command given
   by <code class="parameter">command</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.popen-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">command</code></dt>
     <dd>
      <p class="para">
       The command
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       The mode. Either <code class="literal">&#039;r&#039;</code> for reading, or <code class="literal">&#039;w&#039;</code>
       for writing.
      </p>
      <p class="para">
       On Windows, <span class="function"><strong>popen()</strong></span> defaults to text mode, i.e. any <code class="literal">\n</code>
       characters written to or read from the pipe will be translated to <code class="literal">\r\n</code>.
       If this is not desired, binary mode can be enforced by setting <code class="parameter">mode</code>
       to <code class="literal">&#039;rb&#039;</code> and <code class="literal">&#039;wb&#039;</code>, respectively.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.popen-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a file pointer identical to that returned by
   <span class="function"><a href="function.fopen.php" class="function">fopen()</a></span>, except that it is unidirectional (may
   only be used for reading or writing) and must be closed with
   <span class="function"><a href="function.pclose.php" class="function">pclose()</a></span>. This pointer may be used with
   <span class="function"><a href="function.fgets.php" class="function">fgets()</a></span>, <span class="function"><a href="function.fgetss.php" class="function">fgetss()</a></span>, and
   <span class="function"><a href="function.fwrite.php" class="function">fwrite()</a></span>. When the mode is &#039;r&#039;, the returned
   file pointer equals to the STDOUT of the command, when the mode
   is &#039;w&#039;, the returned file pointer equals to the STDIN of the
   command.
  </p>
  <p class="para">
   If an error occurs, returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.popen-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2412">
    <p><strong>Example #1 <span class="function"><strong>popen()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">popen</span><span style="color: #007700">(</span><span style="color: #DD0000">"/bin/ls"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   If the command to be executed could not be found, a valid
   resource is returned. This may seem odd, but makes sense; it
   allows you to access any error message returned by the shell:
   <div class="example" id="example-2413">
    <p><strong>Example #2 <span class="function"><strong>popen()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">E_ALL</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Add redirection so we can get stderr. */<br /></span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">popen</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/executable 2&gt;&amp;1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"'</span><span style="color: #0000BB">$handle</span><span style="color: #DD0000">'; " </span><span style="color: #007700">. </span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$read </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">, </span><span style="color: #0000BB">2096</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$read</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">pclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.popen-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If you&#039;re looking for bi-directional support (two-way), use
    <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span>.
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.popen-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pclose.php" class="function" rel="rdfs-seeAlso">pclose()</a> - Closes process file pointer</span></li>
    <li><span class="function"><a href="function.fopen.php" class="function" rel="rdfs-seeAlso">fopen()</a> - Opens file or URL</span></li>
    <li><span class="function"><a href="function.proc-open.php" class="function" rel="rdfs-seeAlso">proc_open()</a> - Execute a command and open file pointers for input/output</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/popen.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.popen%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.popen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.popen.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">23 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92413">  <div class="votes">
    <div id="Vu92413">
    <a href="/manual/vote-note.php?id=92413&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92413">
    <a href="/manual/vote-note.php?id=92413&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92413" title="75% like this...">
    28
    </div>
  </div>
  <a href="#92413" class="name">
  <strong class="user"><em>webmaster at php-idee dot de</em></strong></a><a class="genanchor" href="#92413"> &para;</a><div class="date" title="2009-07-23 06:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92413">
<div class="phpcode"><code><span class="html">If you try to execute a command under Windows the PHP script normally waits until the process has been terminated. Executing long-term processes pauses a PHP script even if you don't want to wait for the end of the process.
<br />
<br />It wasn't easy to find this beautiful example how to start a process under Windows without waiting for its termination:
<br />
<br /><span class="default">&lt;?php
<br />$commandString </span><span class="keyword">= </span><span class="string">'start /b c:\\programToRun.exe -attachment "c:\\temp\file1.txt"'</span><span class="keyword">;
<br /></span><span class="default">pclose</span><span class="keyword">(</span><span class="default">popen</span><span class="keyword">(</span><span class="default">$commandString</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119718">  <div class="votes">
    <div id="Vu119718">
    <a href="/manual/vote-note.php?id=119718&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119718">
    <a href="/manual/vote-note.php?id=119718&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119718" title="66% like this...">
    5
    </div>
  </div>
  <a href="#119718" class="name">
  <strong class="user"><em>jlh</em></strong></a><a class="genanchor" href="#119718"> &para;</a><div class="date" title="2016-08-10 07:20"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119718">
<div class="phpcode"><code><span class="html">Don't expect this function to return false when the executable doesn't exist in the first place. A stream will be opened anyway but nothing can be read from it. An error similar to "sh: 1: asdfasdfasdf: not found" will be printed to STDERR.<br /><br />Solution 1: Look at the return value of pclose(), it will be the exit status of the shell that runs the command. On Linux it will be 127 if the executable wasn't found. Otherwise it's the exit status of the executable itself.<br /><br />Solution 2: Use proc_open() instead, which allows to also capture STDERR and then parse it for errors.<br /><br />You probably should do both.</span></code></div>
  </div>
 </div>
  <div class="note" id="116948">  <div class="votes">
    <div id="Vu116948">
    <a href="/manual/vote-note.php?id=116948&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116948">
    <a href="/manual/vote-note.php?id=116948&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116948" title="64% like this...">
    7
    </div>
  </div>
  <a href="#116948" class="name">
  <strong class="user"><em>anonymous at anon dot com</em></strong></a><a class="genanchor" href="#116948"> &para;</a><div class="date" title="2015-03-25 10:28"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116948">
<div class="phpcode"><code><span class="html">As a side note to the code provided by anonymous at anon dot com:<br /><br />  $cmd = "php longscript.php";<br /><br />  function execInBackground($cmd) {  <br />    if (substr(php_uname(), 0, 7) == "Windows"){<br />        pclose(popen("start /B ". $cmd, "r")); <br />    } else { <br />        exec($cmd . " &gt; /dev/null &amp;");   <br />    } <br />  } <br /><br />I had a problem where Windows would close the call too fast before the entire script was interpreted, but I didn't want my main script to hang until it would be fully loaded.<br /><br />As a workaround, I called a tiny .php script which would then call the larger script.<br /><br />myfile.php:<br /><span class="default">&lt;?php<br />  $cmd </span><span class="keyword">= </span><span class="string">"php timewrapper.php"</span><span class="keyword">;<br /><br />  function </span><span class="default">execInBackground</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">) {  <br />    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">php_uname</span><span class="keyword">(), </span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">) == </span><span class="string">"Windows"</span><span class="keyword">){<br />        </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">popen</span><span class="keyword">(</span><span class="string">"start /B "</span><span class="keyword">. </span><span class="default">$cmd</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">)); <br />    } else { <br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" &gt; /dev/null &amp;"</span><span class="keyword">);   <br />    } <br />  } <br /></span><span class="default">?&gt;<br /></span><br />timewrapper.php:<br /><span class="default">&lt;?php<br />  $cmd </span><span class="keyword">= </span><span class="string">"php longscript.php"</span><span class="keyword">;<br />  </span><span class="default">$timer </span><span class="keyword">= </span><span class="default">popen</span><span class="keyword">(</span><span class="string">"start /B "</span><span class="keyword">. </span><span class="default">$cmd</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">); <br />  </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">30</span><span class="keyword">);<br />  </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$timer</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This way my main script would continue to run without having to pause, while the tiny script pauses while it loads the larger file.</span></code></div>
  </div>
 </div>
  <div class="note" id="102308">  <div class="votes">
    <div id="Vu102308">
    <a href="/manual/vote-note.php?id=102308&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102308">
    <a href="/manual/vote-note.php?id=102308&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102308" title="59% like this...">
    7
    </div>
  </div>
  <a href="#102308" class="name">
  <strong class="user"><em>anonymous at anon dot com</em></strong></a><a class="genanchor" href="#102308"> &para;</a><div class="date" title="2011-02-08 01:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102308">
<div class="phpcode"><code><span class="html">If, on windows, you need to start a batch file that needs administrator privileges, then you can make a shortcut to the batch file, click properties, check to on "run as administrator" on one of the property pages, and then double-click the shortcut once (to initialize that "run as administrator" business).<br /><br />using popen("/path/to/shortcut.lnk") will then run your batch file with administrator privileges.<br /><br />handy for when you want to use cli php to do some long running tasks and that php-cli needs to use sessions..</span></code></div>
  </div>
 </div>
  <div class="note" id="77723">  <div class="votes">
    <div id="Vu77723">
    <a href="/manual/vote-note.php?id=77723&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77723">
    <a href="/manual/vote-note.php?id=77723&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77723" title="58% like this...">
    4
    </div>
  </div>
  <a href="#77723" class="name">
  <strong class="user"><em>rockytriton</em></strong></a><a class="genanchor" href="#77723"> &para;</a><div class="date" title="2007-09-10 11:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77723">
<div class="phpcode"><code><span class="html">Note, when using this with a batch file in windows, you must put an "exit" at the end of your batch file or you will get a new cmd.exe stuck in your process list every time you execute the page.</span></code></div>
  </div>
 </div>
  <div class="note" id="88673">  <div class="votes">
    <div id="Vu88673">
    <a href="/manual/vote-note.php?id=88673&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88673">
    <a href="/manual/vote-note.php?id=88673&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88673" title="53% like this...">
    2
    </div>
  </div>
  <a href="#88673" class="name">
  <strong class="user"><em>Marbug at gmail dot com</em></strong></a><a class="genanchor" href="#88673"> &para;</a><div class="date" title="2009-02-03 03:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88673">
<div class="phpcode"><code><span class="html">If you want to download files from a linux server with a filesize bigger than 2GB you can use the following:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">serveFile</span><span class="keyword">( </span><span class="default">$file </span><span class="keyword">, </span><span class="default">$as </span><span class="keyword">){
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Expires: Mon, 1 Apr 1974 05:00:00 GMT' </span><span class="keyword">);
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Pragma: no-cache' </span><span class="keyword">);
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Cache-Control: must-revalidate, post-check=0, pre-check=0' </span><span class="keyword">);
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Description: File Download' </span><span class="keyword">);
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Type: application/octet-stream' </span><span class="keyword">);
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Length: '</span><span class="keyword">.</span><span class="default">trim</span><span class="keyword">(`</span><span class="string">stat -c%s "</span><span class="default">$file</span><span class="string">"</span><span class="keyword">`) );
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Disposition: attachment; filename="'</span><span class="keyword">. </span><span class="default">$as </span><span class="keyword">.</span><span class="string">'"' </span><span class="keyword">);
<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">'Content-Transfer-Encoding: binary' </span><span class="keyword">);
<br />    </span><span class="comment">//@readfile( $file );
<br />
<br />    </span><span class="default">flush</span><span class="keyword">();
<br />    </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">popen</span><span class="keyword">(</span><span class="string">"tail -c "</span><span class="keyword">.</span><span class="default">trim</span><span class="keyword">(`</span><span class="string">stat -c%s "</span><span class="default">$file</span><span class="string">"</span><span class="keyword">`).</span><span class="string">" "</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">' 2&gt;&amp;1'</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br />    while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))
<br />    {
<br />        </span><span class="comment">// send the current file part to the browser
<br />        </span><span class="keyword">print </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);
<br />        </span><span class="comment">// flush the content to the browser
<br />        </span><span class="default">flush</span><span class="keyword">();
<br />    }
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53997">  <div class="votes">
    <div id="Vu53997">
    <a href="/manual/vote-note.php?id=53997&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53997">
    <a href="/manual/vote-note.php?id=53997&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53997" title="55% like this...">
    1
    </div>
  </div>
  <a href="#53997" class="name">
  <strong class="user"><em>atampone at NOSPAMFORME dot trdsupra dot com</em></strong></a><a class="genanchor" href="#53997"> &para;</a><div class="date" title="2005-06-20 06:26"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53997">
<div class="phpcode"><code><span class="html">If you want to fork a process under windows, this is the function to use.  I created a batch file called runcmd.bat with the following line
<br />
<br />start %1 %2 %3 %4
<br />
<br />then I have the folowing function
<br />
<br /><span class="default">&lt;?php
<br />define</span><span class="keyword">(</span><span class="string">'RUNCMDPATH'</span><span class="keyword">, </span><span class="string">'c:\\htdocs\\nonwebspace\\runcmd.bat'</span><span class="keyword">);
<br />
<br />function </span><span class="default">runCmd</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">) {
<br />    </span><span class="default">$externalProcess</span><span class="keyword">=</span><span class="default">popen</span><span class="keyword">(</span><span class="default">RUNCMDPATH</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$cmd</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);
<br />    </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$externalProcess</span><span class="keyword">);
<br />}    
<br /></span><span class="default">?&gt;
<br /></span>
<br />with this, doing something like
<br />
<br /><span class="default">&lt;?php runCmd</span><span class="keyword">(</span><span class="string">'php.exe printWorkOrder.php 3498'</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>will launch php.exe outside of apache and allow the script calling the runCmd() function to continue without waiting for the command line process to return.  The process will run under the same user account that Apache (or whatever webserver you're running) is running under, so make sure it has permissions to do whatever you need to do.  Also, make sure that the batch file has enough %n s in order to pass all the command line variables that you might need to pass.
<br />
<br />Special thanks to kicken from the devshed forums for coming up with the idea.</span></code></div>
  </div>
 </div>
  <div class="note" id="26740">  <div class="votes">
    <div id="Vu26740">
    <a href="/manual/vote-note.php?id=26740&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26740">
    <a href="/manual/vote-note.php?id=26740&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26740" title="55% like this...">
    1
    </div>
  </div>
  <a href="#26740" class="name">
  <strong class="user"><em>http://vmlinuz.nl/about/contact/</em></strong></a><a class="genanchor" href="#26740"> &para;</a><div class="date" title="2002-11-11 08:58"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26740">
<div class="phpcode"><code><span class="html">From the popen linux programmers manual:
<br />
<br />"The  command  argument  is  a pointer to a null-terminated string containing a shell command line.  This  command  is passed  to  /bin/sh  using the -c flag."
<br />
<br />Since php uses this popen function, you need to be sure /bin/sh exists. This file may not exist in chroot()ed environments.</span></code></div>
  </div>
 </div>
  <div class="note" id="59010">  <div class="votes">
    <div id="Vu59010">
    <a href="/manual/vote-note.php?id=59010&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59010">
    <a href="/manual/vote-note.php?id=59010&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59010" title="53% like this...">
    1
    </div>
  </div>
  <a href="#59010" class="name">
  <strong class="user"><em>rjl at xs4all dot nl</em></strong></a><a class="genanchor" href="#59010"> &para;</a><div class="date" title="2005-11-23 01:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59010">
<div class="phpcode"><code><span class="html">Truncated output from ps command?
<br />
<br />The solution lies in the way ps displays it's info
<br />specifically the -w option which:
<br />'uses 132 columns to display information,
<br />instead of the default which is your window size.'....
<br />somehow with fgets in php that results in 74 characters
<br />regardless off the init length parameter
<br />
<br />a bit of code:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">echo </span><span class="string">'&lt;table width="99%"&gt;&lt;tr&gt;&lt;td&gt;cron&lt;/td&gt;&lt;/tr&gt;' </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">$fp</span><span class="keyword">=</span><span class="default">popen</span><span class="keyword">(</span><span class="string">"/bin/ps -waux"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {
<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);
<br />    </span><span class="default">$croninf </span><span class="keyword">.= </span><span class="string">'&lt;tr&gt;&lt;td&gt;' </span><span class="keyword">. </span><span class="default">$buffer </span><span class="keyword">. </span><span class="string">'&lt;/td&gt;&lt;/tr&gt;' </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />}
<br /></span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br />echo </span><span class="default">$croninf</span><span class="keyword">;
<br />echo </span><span class="string">'&lt;/table&gt;&lt;br&gt;&lt;br&gt;' </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Ciao,
<br />
<br />Rene =&lt;&gt;=</span></code></div>
  </div>
 </div>
  <div class="note" id="97431">  <div class="votes">
    <div id="Vu97431">
    <a href="/manual/vote-note.php?id=97431&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97431">
    <a href="/manual/vote-note.php?id=97431&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97431" title="52% like this...">
    1
    </div>
  </div>
  <a href="#97431" class="name">
  <strong class="user"><em>hacklor [AT] NOSPAM [DOT] com</em></strong></a><a class="genanchor" href="#97431"> &para;</a><div class="date" title="2010-04-19 09:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97431">
<div class="phpcode"><code><span class="html">There is a simple way to start a process in the background but still find out what the process result is. I combined the information from some users below with some of my own coming up with the following:<br /><br /><span class="default">&lt;?php<br />$bat_filename </span><span class="keyword">= </span><span class="string">"C:\\my_bat_file.bat"</span><span class="keyword">;<br /></span><span class="default">$bat_log_filename </span><span class="keyword">= </span><span class="string">"C:\\my_bat_file_bat.log"</span><span class="keyword">;<br /></span><span class="default">$bat_file </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$bat_filename</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br />if(</span><span class="default">$bat_file</span><span class="keyword">) {<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$bat_file</span><span class="keyword">, </span><span class="string">"@echo off"</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$bat_file</span><span class="keyword">, </span><span class="string">"echo Starting proces &gt;&gt; "</span><span class="keyword">.</span><span class="default">$bat_log_filename</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$bat_file</span><span class="keyword">, </span><span class="string">"php c:\\my_php_process.php &gt;&gt; "</span><span class="keyword">.</span><span class="default">$bat_log_filename</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$bat_file</span><span class="keyword">, </span><span class="string">"echo End proces &gt;&gt; "</span><span class="keyword">.</span><span class="default">$bat_log_filename</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$bat_file</span><span class="keyword">, </span><span class="string">"EXIT"</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$bat_file</span><span class="keyword">);<br />}<br />            <br /></span><span class="comment">//<br />// Start the process in the background<br />//<br /></span><span class="default">$exe </span><span class="keyword">= </span><span class="string">"start /b "</span><span class="keyword">.</span><span class="default">$bat_filename</span><span class="keyword">;<br />if( </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">popen</span><span class="keyword">(</span><span class="default">$exe</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">)) ) {<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br />return </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />In my case the file names of the .bat and .log files weren't always the same, so I needed a dynamic way to create the .bat file. The output from the php command is saved to the log file with the &gt;&gt; command. All prints and errors are stored there. At a later time you can open the log file and see what happened.</span></code></div>
  </div>
 </div>
  <div class="note" id="126430">  <div class="votes">
    <div id="Vu126430">
    <a href="/manual/vote-note.php?id=126430&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126430">
    <a href="/manual/vote-note.php?id=126430&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126430" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126430" class="name">
  <strong class="user"><em>antman3351</em></strong></a><a class="genanchor" href="#126430"> &para;</a><div class="date" title="2021-09-17 09:20"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126430">
<div class="phpcode"><code><span class="html">Note for Windows users using popen with start to run an external script without having php wait.<br /><br />e.g.:<br />pclose( popen(  'start /b php someLongScript.php *&gt; nul', 'rb' ) );<br /><br />If start can't find the exe it will open a popup message and pclose hangs until the popup is closed.</span></code></div>
  </div>
 </div>
  <div class="note" id="123184">  <div class="votes">
    <div id="Vu123184">
    <a href="/manual/vote-note.php?id=123184&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123184">
    <a href="/manual/vote-note.php?id=123184&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123184" title="100% like this...">
    1
    </div>
  </div>
  <a href="#123184" class="name">
  <strong class="user"><em>erco at seriss dot com</em></strong></a><a class="genanchor" href="#123184"> &para;</a><div class="date" title="2018-10-01 10:21"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123184">
<div class="phpcode"><code><span class="html">Another workaround for using popen() with "w" mode so that the stdout of the command reaches the browser:<br /><br />An easy solution is to have two php scripts; "real.php" with the popen($cmd, "w") command in it, the other being "wrapper.php", a one liner that simply invokes system("php real.php");<br /><br />Invoking "wrapper.php" from the browser allows the popen($cmd,"w") in "real.php" to work as expected, such that stdout of $cmd reaches the browser. If you try to skip the wrapper and just run "real.php", stdout of $cmd is lost to /dev/null.</span></code></div>
  </div>
 </div>
  <div class="note" id="52602">  <div class="votes">
    <div id="Vu52602">
    <a href="/manual/vote-note.php?id=52602&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52602">
    <a href="/manual/vote-note.php?id=52602&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52602" title="50% like this...">
    0
    </div>
  </div>
  <a href="#52602" class="name">
  <strong class="user"><em>PGP Dude</em></strong></a><a class="genanchor" href="#52602"> &para;</a><div class="date" title="2005-05-06 12:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52602">
<div class="phpcode"><code><span class="html">I should say, my host uses a modified form of safe mode, so I don't know if that might have caused a problem with "popen" as opposed to "proc_open".  With safe mode enabled, all words following the initial command string are treated as a single argument. Thus, echo y | echo x becomes echo "y | echo x".  [Because of this,] LinixDude010's srcipt did not work for me.  Seems wrong to read and write with popen, according to the manual.
<br />
<br />The script produced pgp text, but there was something wrong with the text and I could not decode it.
<br />
<br />This replacement script, using proc_open, which can read and write, DOES work:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">pgp_encrypt</span><span class="keyword">(</span><span class="default">$keyring_location</span><span class="keyword">, </span><span class="default">$public_key_id</span><span class="keyword">, </span><span class="default">$plain_text</span><span class="keyword">) {
<br />  </span><span class="default">$encrypted_text</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;
<br />  </span><span class="default">$key_id </span><span class="keyword">= </span><span class="default">EscapeShellArg</span><span class="keyword">(</span><span class="default">$public_key_id</span><span class="keyword">);
<br />  </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"PGPPATH=</span><span class="default">$keyring_location</span><span class="string">"</span><span class="keyword">);
<br />
<br />  </span><span class="comment">// encrypt the message
<br />  </span><span class="default">$descriptorspec </span><span class="keyword">= array(
<br />    </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">),  </span><span class="comment">// stdin
<br />    </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),  </span><span class="comment">// stdout
<br />    </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">)   </span><span class="comment">// stderr ?? instead of a file
<br />  </span><span class="keyword">);
<br />  </span><span class="default">$process </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="string">"pgpe -r </span><span class="default">$key_id</span><span class="string"> -af"</span><span class="keyword">, </span><span class="default">$descriptorspec</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);
<br />  if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">)) {
<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$plain_text</span><span class="keyword">);
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />    while(</span><span class="default">$s</span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">)) {
<br />          </span><span class="comment">// read from the pipe
<br />          </span><span class="default">$encrypted_text </span><span class="keyword">.= </span><span class="default">$s</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />    </span><span class="comment">// optional:
<br />    </span><span class="keyword">while(</span><span class="default">$s</span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">)) {
<br />      </span><span class="default">$encrypted_text</span><span class="keyword">.= </span><span class="string">"\n&lt;p&gt;Error: </span><span class="default">$s</span><span class="string">&lt;/p&gt;\n"</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />  }
<br />  return </span><span class="default">$encrypted_text</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$message </span><span class="keyword">= </span><span class="default">pgp_encrypt</span><span class="keyword">(</span><span class="string">"/home/username/.pgp"</span><span class="keyword">, </span><span class="string">"to@domain.com"</span><span class="keyword">, </span><span class="string">"dummy text to be encrypted"</span><span class="keyword">);
<br />print </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="22801">  <div class="votes">
    <div id="Vu22801">
    <a href="/manual/vote-note.php?id=22801&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22801">
    <a href="/manual/vote-note.php?id=22801&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22801" title="50% like this...">
    0
    </div>
  </div>
  <a href="#22801" class="name">
  <strong class="user"><em>cyberlot at cyberlot dot net</em></strong></a><a class="genanchor" href="#22801"> &para;</a><div class="date" title="2002-06-30 01:29"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22801">
<div class="phpcode"><code><span class="html">The below code works for both way processing ;) Have fun folks
<br />
<br /><span class="default">&lt;?php
<br />    system</span><span class="keyword">(</span><span class="string">"mkfifo pipeout"</span><span class="keyword">);
<br />   </span><span class="default">$pipe </span><span class="keyword">= </span><span class="default">popen</span><span class="keyword">(</span><span class="string">"./nwserver -module Chapter1E &gt; pipeout"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">);
<br />   </span><span class="default">$pipeout </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"pipeout"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br />   while (</span><span class="default">$s </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipeout</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">)) {
<br />    echo </span><span class="default">$s</span><span class="keyword">;
<br />   }
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="21730">  <div class="votes">
    <div id="Vu21730">
    <a href="/manual/vote-note.php?id=21730&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21730">
    <a href="/manual/vote-note.php?id=21730&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21730" title="50% like this...">
    0
    </div>
  </div>
  <a href="#21730" class="name">
  <strong class="user"><em>linuxdude010 at yahoo dot com</em></strong></a><a class="genanchor" href="#21730"> &para;</a><div class="date" title="2002-05-24 11:49"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21730">
<div class="phpcode"><code><span class="html">I had all kinds of trouble encrypting a message with PGP, but I finanlly got it to work.  The trick was to 'chmod o+r pubring.pkr' so that the apache server could read the public keys!!!  Then, this function worked fine:<br /><br /><span class="default">&lt;?PHP<br /></span><span class="keyword">function </span><span class="default">pgp_encrypt</span><span class="keyword">(</span><span class="default">$keyring_location</span><span class="keyword">, </span><span class="default">$public_key_id</span><span class="keyword">, </span><span class="default">$plain_text</span><span class="keyword">) {<br /><br />        </span><span class="default">$key_id </span><span class="keyword">= </span><span class="default">EscapeShellArg</span><span class="keyword">(</span><span class="default">$public_key_id</span><span class="keyword">);<br />        </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"PGPPATH=</span><span class="default">$keyring_location</span><span class="string">"</span><span class="keyword">);<br /><br />        </span><span class="comment">// encrypt the message<br />        </span><span class="default">$pipe </span><span class="keyword">= </span><span class="default">popen</span><span class="keyword">(</span><span class="string">"pgpe -r </span><span class="default">$key_id</span><span class="string"> -af"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);               <br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">, </span><span class="default">$plain_text</span><span class="keyword">);<br />        </span><span class="default">$encrypted_text </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        while(</span><span class="default">$s </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">)) {<br />                </span><span class="comment">// read from the pipe<br />                </span><span class="default">$encrypted_text </span><span class="keyword">.= </span><span class="default">$s</span><span class="keyword">;<br />        }<br />        </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">);<br /><br />        return </span><span class="default">$encrypted_text</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$message </span><span class="keyword">= </span><span class="default">pgp_encrypt</span><span class="keyword">(</span><span class="string">"/home/username/.pgp"</span><span class="keyword">, </span><span class="string">"to@domain.com"</span><span class="keyword">, </span><span class="string">"dummy text to be encrypted"</span><span class="keyword">);<br />print </span><span class="default">nl2br</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99787">  <div class="votes">
    <div id="Vu99787">
    <a href="/manual/vote-note.php?id=99787&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99787">
    <a href="/manual/vote-note.php?id=99787&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99787" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#99787" class="name">
  <strong class="user"><em>mrjake2</em></strong></a><a class="genanchor" href="#99787"> &para;</a><div class="date" title="2010-09-06 04:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99787">
<div class="phpcode"><code><span class="html">If you are running in a chroot'ed environment on Debian "Squeeze", this command won't work; there is a problem with the kernel code that popen() eventually calls.<br /><br />Note that pecl makes heavy use of this command, so if you are running in this environment you will need to install the pecl extension from source instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="56604">  <div class="votes">
    <div id="Vu56604">
    <a href="/manual/vote-note.php?id=56604&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56604">
    <a href="/manual/vote-note.php?id=56604&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56604" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#56604" class="name">
  <strong class="user"><em>Cride5</em></strong></a><a class="genanchor" href="#56604"> &para;</a><div class="date" title="2005-09-08 05:39"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56604">
<div class="phpcode"><code><span class="html">Here is a nice little script for monitoring your http access log.<br /><br /><span class="default">&lt;?php<br /><br />$handle </span><span class="keyword">= </span><span class="default">popen</span><span class="keyword">(</span><span class="string">"tail -f /etc/httpd/logs/access.log 2&gt;&amp;1"</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">)) {<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br />    echo </span><span class="string">"</span><span class="default">$buffer</span><span class="string">&lt;br/&gt;\n"</span><span class="keyword">;<br />    </span><span class="default">ob_flush</span><span class="keyword">();<br />    </span><span class="default">flush</span><span class="keyword">();<br />}<br /></span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />----<br />www.eviltree.co.uk<br />www.solidsites.co.uk<br />www.mongbong.com</span></code></div>
  </div>
 </div>
  <div class="note" id="95767">  <div class="votes">
    <div id="Vu95767">
    <a href="/manual/vote-note.php?id=95767&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95767">
    <a href="/manual/vote-note.php?id=95767&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95767" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#95767" class="name">
  <strong class="user"><em>php at keithtyler dot net</em></strong></a><a class="genanchor" href="#95767"> &para;</a><div class="date" title="2010-01-20 06:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95767">
<div class="phpcode"><code><span class="html">Note that you *have* to do a read on the handle before you can feof(), even if the command outputs nothing! So..<br /><br /><span class="default">&lt;?php<br />$f</span><span class="keyword">=</span><span class="default">popen</span><span class="keyword">(</span><span class="string">"sleep 2"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);<br />while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">)) {}<br /></span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">);<br />print </span><span class="string">"done"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />will never finish.</span></code></div>
  </div>
 </div>
  <div class="note" id="59912">  <div class="votes">
    <div id="Vu59912">
    <a href="/manual/vote-note.php?id=59912&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59912">
    <a href="/manual/vote-note.php?id=59912&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59912" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#59912" class="name">
  <strong class="user"><em>don at digithink dot com</em></strong></a><a class="genanchor" href="#59912"> &para;</a><div class="date" title="2005-12-19 04:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59912">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">// The above import function can be easily extended using 
<br />// /usr/local/bin/xls2csv (part of catdoc ) and popen 
<br />// to read excell files directly. 
<br />// In our particular application the first line was the file heading.
<br /></span><span class="keyword">function </span><span class="default">importxls</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">$head</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">,</span><span class="default">$throwfirst</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">,</span><span class="default">$delim</span><span class="keyword">=</span><span class="string">","</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">=</span><span class="default">1000</span><span class="keyword">) {
<br />   </span><span class="default">$return </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />   </span><span class="default">$handle </span><span class="keyword">= </span><span class="default">popen</span><span class="keyword">(</span><span class="string">"/usr/local/bin/xls2csv </span><span class="default">$file</span><span class="string">"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br /></span><span class="comment">// or die if not there.
<br />   </span><span class="keyword">if (</span><span class="default">$throwfirst</span><span class="keyword">) {
<br />       </span><span class="default">$throw </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">, </span><span class="default">$delim</span><span class="keyword">);
<br />   }
<br />   if (</span><span class="default">$head</span><span class="keyword">) {
<br />       </span><span class="default">$header </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">, </span><span class="default">$delim</span><span class="keyword">);
<br />   }
<br />   while ((</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">, </span><span class="default">$delim</span><span class="keyword">)) !== </span><span class="default">FALSE</span><span class="keyword">) {
<br />       if (</span><span class="default">$head </span><span class="keyword">AND isset(</span><span class="default">$header</span><span class="keyword">)) {
<br />           foreach (</span><span class="default">$header </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$heading</span><span class="keyword">) {
<br />               </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$heading</span><span class="keyword">]=(isset(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) ? </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] : </span><span class="string">''</span><span class="keyword">;
<br />               print </span><span class="string">"&lt;li&gt;"</span><span class="keyword">. </span><span class="default">$heading </span><span class="keyword">.</span><span class="string">"=&gt;" </span><span class="keyword">. </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$heading</span><span class="keyword">].</span><span class="string">"&lt;/li&gt;"</span><span class="keyword">;
<br />           }
<br />           </span><span class="default">$return</span><span class="keyword">[]=</span><span class="default">$row</span><span class="keyword">;
<br />       } else {
<br />           </span><span class="default">$return</span><span class="keyword">[]=</span><span class="default">$data</span><span class="keyword">;
<br />       }
<br />   }
<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$handle</span><span class="keyword">);
<br />   return </span><span class="default">$return</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="24173">  <div class="votes">
    <div id="Vu24173">
    <a href="/manual/vote-note.php?id=24173&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24173">
    <a href="/manual/vote-note.php?id=24173&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24173" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#24173" class="name">
  <strong class="user"><em>ajv-php at erkle dot org</em></strong></a><a class="genanchor" href="#24173"> &para;</a><div class="date" title="2002-08-08 11:02"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24173">
<div class="phpcode"><code><span class="html">I noticed that some of the examples above seem to advocate passing unencrypted data to gpg via the pipe shell escape, in the absence of a bi-directional popen (on some OSes).
<br />
<br />The approach I've taken is similar to:
<br />
<br /><span class="default">&lt;?php
<br />  $prefix </span><span class="keyword">= </span><span class="string">'example'</span><span class="keyword">;
<br />  </span><span class="default">$command </span><span class="keyword">= </span><span class="string">'/usr/local/bin/gpg --encrypt --armor --no-tty --batch --no-secmem-warning --recipient "joe.soap@example.com"'</span><span class="keyword">;
<br />  </span><span class="default">$tmpfile </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">'/tmp'</span><span class="keyword">, </span><span class="default">$prefix</span><span class="keyword">);
<br />  </span><span class="default">$pipe </span><span class="keyword">= </span><span class="default">popen</span><span class="keyword">(</span><span class="string">"</span><span class="default">$command</span><span class="string"> 2&gt;&amp;1 &gt;</span><span class="default">$tmpfile</span><span class="string">"</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);
<br />  if (!</span><span class="default">$pipe</span><span class="keyword">) {
<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$tmpfile</span><span class="keyword">);
<br />  } else {
<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">, </span><span class="default">$plaintxt</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$plaintxt</span><span class="keyword">));
<br />    </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">);
<br />    </span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$tmpfile</span><span class="keyword">, </span><span class="string">"rb"</span><span class="keyword">);
<br />    </span><span class="default">$output </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$tmpfile</span><span class="keyword">));
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);
<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$tmpfile</span><span class="keyword">);
<br />  }
<br />  return </span><span class="default">$output</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />This means that unencrypted information is not passed via a (potentially readable) shell command, and only encrypted information gets stored on disc.</span></code></div>
  </div>
 </div>
  <div class="note" id="19729">  <div class="votes">
    <div id="Vu19729">
    <a href="/manual/vote-note.php?id=19729&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19729">
    <a href="/manual/vote-note.php?id=19729&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19729" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#19729" class="name">
  <strong class="user"><em>nricciardi at mindspring dot com</em></strong></a><a class="genanchor" href="#19729"> &para;</a><div class="date" title="2002-03-08 04:38"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19729">
<div class="phpcode"><code><span class="html">ive tried using popen using bidirectional pipes without working for obvious reasons, but i managed to create a simple script that managed to take care of the problem.  This example is for gpg encryption.
<br />
<br /><span class="default">&lt;?php
<br />   $message </span><span class="keyword">= </span><span class="string">"this is the text to encrypt with gpg"</span><span class="keyword">;
<br />   </span><span class="default">$sendto </span><span class="keyword">= </span><span class="string">'Dummy Key &lt;another@fake.email&gt;'</span><span class="keyword">;
<br />
<br />   </span><span class="default">system</span><span class="keyword">(</span><span class="string">"mkfifo pipein"</span><span class="keyword">);
<br />   </span><span class="default">system</span><span class="keyword">(</span><span class="string">"mkfifo pipeout"</span><span class="keyword">);
<br />   </span><span class="default">system</span><span class="keyword">(</span><span class="string">"gpg --encrypt -a -r '</span><span class="default">$sendto</span><span class="string">' &gt; pipeout &lt; pipein &amp;"</span><span class="keyword">);
<br />   </span><span class="default">$fo </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"pipeout"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);
<br />   </span><span class="default">$fi </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"pipein"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);
<br />   </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fi</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">));
<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fi</span><span class="keyword">);
<br />   while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fo</span><span class="keyword">)) {
<br />      </span><span class="default">$buf </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fo</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);
<br />   }
<br />   echo </span><span class="default">$buf</span><span class="keyword">;
<br />   </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">"pipein"</span><span class="keyword">);
<br />   </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">"pipeout"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />If anyone has a better way of doing this I would love to see it.</span></code></div>
  </div>
 </div>
  <div class="note" id="74500">  <div class="votes">
    <div id="Vu74500">
    <a href="/manual/vote-note.php?id=74500&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74500">
    <a href="/manual/vote-note.php?id=74500&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74500" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#74500" class="name">
  <strong class="user"><em>betchern0t</em></strong></a><a class="genanchor" href="#74500"> &para;</a><div class="date" title="2007-04-13 09:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74500">
<div class="phpcode"><code><span class="html">Care needs to be taken in the case of long running child processes. Say you want to run tail -f /var/log/messages or in my case burn dvds. If you have a busy wait, Apache2 can sit towards 100%cpu and steadily grow memory. In my case I crashed the server after about an hour and 90% of the dvd burned. During that time apache had consumed a gig of swap.
<br />
<br />Offending code - don't copy:
<br />
<br /><span class="default">&lt;?php
<br />        $ThisCommand </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%s %s"</span><span class="keyword">,</span><span class="default">COMMAND</span><span class="keyword">,</span><span class="default">$ThisFile</span><span class="keyword">);
<br />        </span><span class="default">$fp</span><span class="keyword">=</span><span class="default">popen</span><span class="keyword">(</span><span class="default">$ThisCommand</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">);
<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {
<br />                </span><span class="default">set_time_limit </span><span class="keyword">(</span><span class="default">20</span><span class="keyword">);
<br />                </span><span class="default">$results </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);
<br />                if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {
<br />                   </span><span class="comment">// stop the browser timing out
<br />                   </span><span class="keyword">echo </span><span class="string">" "</span><span class="keyword">;
<br />                   </span><span class="default">flush</span><span class="keyword">();
<br />                } else {
<br />                   </span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);
<br />                   while (</span><span class="default">$tok </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {
<br />                        echo </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%s\n"</span><span class="keyword">,</span><span class="default">$tok</span><span class="keyword">)).</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />                        </span><span class="default">flush</span><span class="keyword">();
<br />                        </span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">);
<br />                   }
<br />                }
<br />        }
<br />        </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />to go from zero memory and 100% cpu  to negligible memory and negligible cpu add a sleep.
<br />
<br /><span class="default">&lt;?php
<br />        </span><span class="keyword">while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {
<br />                </span><span class="default">set_time_limit </span><span class="keyword">(</span><span class="default">20</span><span class="keyword">);
<br />                </span><span class="default">$results </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">256</span><span class="keyword">);
<br />                if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {
<br />                   </span><span class="comment">// stop the browser timing out
<br />                   </span><span class="keyword">echo </span><span class="string">" "</span><span class="keyword">;
<br />                   </span><span class="default">flush</span><span class="keyword">();
<br />                } else {
<br />                   </span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$results</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);
<br />                   while (</span><span class="default">$tok </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {
<br />                        echo </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"%s\n"</span><span class="keyword">,</span><span class="default">$tok</span><span class="keyword">)).</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />                        </span><span class="default">flush</span><span class="keyword">();
<br />                        </span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">);
<br />                   }
<br />                }
<br />                </span><span class="comment">// avoid a busy wait
<br />                </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />
<br />        }
<br /></span><span class="default">?&gt;
<br /></span>
<br />I think the continued banging of the space to keep the browser awake triggered some issues in apache.</span></code></div>
  </div>
 </div>
  <div class="note" id="23228">  <div class="votes">
    <div id="Vu23228">
    <a href="/manual/vote-note.php?id=23228&amp;page=function.popen&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23228">
    <a href="/manual/vote-note.php?id=23228&amp;page=function.popen&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23228" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#23228" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#23228"> &para;</a><div class="date" title="2002-07-12 02:33"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23228">
<div class="phpcode"><code><span class="html">Here is a workaround for not having bidirectional pipes in php.
<br />
<br />If you have bidirectional pipe support, don't bother with this.
<br />
<br />The trick here is to send the input on the command line to the target application.  In particular I wanted to use openssl without using temp files or named pipes.  This solution should also be thread/process safe.
<br />
<br />This does work on Linux (RedHat 7).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">filterThroughCmd</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$commandLine</span><span class="keyword">) {
<br />  </span><span class="default">$pipe </span><span class="keyword">= </span><span class="default">popen</span><span class="keyword">(</span><span class="string">"echo \"</span><span class="default">$input</span><span class="string">\"|</span><span class="default">$commandLine</span><span class="string">" </span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);
<br />  if (!</span><span class="default">$pipe</span><span class="keyword">) {
<br />    print </span><span class="string">"pipe failed."</span><span class="keyword">;
<br />    return </span><span class="string">""</span><span class="keyword">;
<br />  }
<br />  </span><span class="default">$output </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />  while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">)) {
<br />    </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);
<br />  }
<br />  </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">);
<br />  return </span><span class="default">$output</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment"># example:
<br /></span><span class="keyword">print </span><span class="default">filterThroughCmd</span><span class="keyword">(</span><span class="string">"hello"</span><span class="keyword">, </span><span class="string">"cat"</span><span class="keyword">);
<br /></span><span class="comment"># Piping to cat has the effect of echoing your input.
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.popen&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.popen.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
