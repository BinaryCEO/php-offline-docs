<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ftp_chmod - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ftp-chmod.php">
 <link rel="shorturl" href="https://www.php.net/ftp-chmod">
 <link rel="alternate" href="https://www.php.net/ftp-chmod" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ftp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ftp-chdir.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ftp-close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ftp-chmod.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ftp-chmod.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ftp-chmod.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ftp-chmod.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ftp-chmod.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ftp-chmod.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ftp-chmod.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ftp-chmod.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ftp-chmod.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ftp-chmod.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ftp-chmod.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set permissions on a file via FTP" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ftp_chmod - Manual" />
<meta name="twitter:description" content="Set permissions on a file via FTP" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ftp_chmod - Manual" />
<meta itemprop="description" content="Set permissions on a file via FTP" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set permissions on a file via FTP" />

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
        <a href="function.ftp-close.php">
          ftp_close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ftp-chdir.php">
          &laquo; ftp_chdir        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ftp.php'>FTP</a></li>      <li><a href='ref.ftp.php'>FTP Functions</a></li>      </ul>
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
            <option value='en/function.ftp-chmod.php' selected="selected">English</option>
            <option value='de/function.ftp-chmod.php'>German</option>
            <option value='es/function.ftp-chmod.php'>Spanish</option>
            <option value='fr/function.ftp-chmod.php'>French</option>
            <option value='it/function.ftp-chmod.php'>Italian</option>
            <option value='ja/function.ftp-chmod.php'>Japanese</option>
            <option value='pt_BR/function.ftp-chmod.php'>Brazilian Portuguese</option>
            <option value='ru/function.ftp-chmod.php'>Russian</option>
            <option value='tr/function.ftp-chmod.php'>Turkish</option>
            <option value='uk/function.ftp-chmod.php'>Ukrainian</option>
            <option value='zh/function.ftp-chmod.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ftp-chmod" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ftp_chmod</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ftp_chmod</span> &mdash; <span class="dc-title">Set permissions on a file via FTP</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.ftp-chmod-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ftp_chmod</strong></span>(<span class="methodparam"><span class="type"><a href="class.ftp-connection.php" class="type FTP\Connection">FTP\Connection</a></span> <code class="parameter">$ftp</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permissions</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment"> 
   Sets the permissions on the specified remote file to 
   <code class="parameter">permissions</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.ftp-chmod-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ftp</code></dt>
     <dd>
       <p class="para">An <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span> instance.</p>
     </dd>
    
    
     <dt><code class="parameter">permissions</code></dt>
     <dd>
      <p class="para">
       The new permissions, given as an <em>octal</em> value.
      </p>
     </dd>
    
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The remote file.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.ftp-chmod-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the new file permissions on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ftp-chmod-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
 <td>8.1.0</td>
 <td>
  The <code class="parameter">ftp</code> parameter expects an <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.ftp-chmod-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4555">
    <p><strong>Example #1 <span class="function"><strong>ftp_chmod()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'public_html/index.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// set up basic connection<br /></span><span style="color: #0000BB">$ftp </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp_server</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// login with username and password<br /></span><span style="color: #0000BB">$login_result </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_login</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_name</span><span style="color: #007700">, </span><span style="color: #0000BB">$ftp_user_pass</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// try to chmod $file to 644<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">ftp_chmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #0000BB">0644</span><span style="color: #007700">, </span><span style="color: #0000BB">$file</span><span style="color: #007700">) !== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br /> echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$file</span><span style="color: #DD0000"> chmoded successfully to 644\n"</span><span style="color: #007700">;<br />} else {<br /> echo </span><span style="color: #DD0000">"could not chmod </span><span style="color: #0000BB">$file</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// close the connection<br /></span><span style="color: #0000BB">ftp_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.ftp-chmod-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.chmod.php" class="function" rel="rdfs-seeAlso">chmod()</a> - Changes file mode</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ftp/functions/ftp-chmod.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ftp-chmod%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ftp-chmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-chmod.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93684">  <div class="votes">
    <div id="Vu93684">
    <a href="/manual/vote-note.php?id=93684&amp;page=function.ftp-chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93684">
    <a href="/manual/vote-note.php?id=93684&amp;page=function.ftp-chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93684" title="75% like this...">
    2
    </div>
  </div>
  <a href="#93684" class="name">
  <strong class="user"><em>Maarten Wolzak</em></strong></a><a class="genanchor" href="#93684"> &para;</a><div class="date" title="2009-09-22 03:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93684">
<div class="phpcode"><code><span class="html">Using the excellent octdec and decoct functions you can make this easy:
<br />
<br /><span class="default">&lt;?php
<br />$mode </span><span class="keyword">= </span><span class="string">"644"</span><span class="keyword">;
<br /></span><span class="default">$mode </span><span class="keyword">= </span><span class="default">octdec</span><span class="keyword">( </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$mode</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="string">'0'</span><span class="keyword">,</span><span class="default">STR_PAD_LEFT</span><span class="keyword">) );
<br /></span><span class="default">ftp_chmod</span><span class="keyword">(</span><span class="default">$ftp_stream</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94656">  <div class="votes">
    <div id="Vu94656">
    <a href="/manual/vote-note.php?id=94656&amp;page=function.ftp-chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94656">
    <a href="/manual/vote-note.php?id=94656&amp;page=function.ftp-chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94656" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94656" class="name">
  <strong class="user"><em>DanN</em></strong></a><a class="genanchor" href="#94656"> &para;</a><div class="date" title="2009-11-16 11:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94656">
<div class="phpcode"><code><span class="html">Just wanted to contribute a quick note for those who are still experiencing issues with changing the permissions via FTP.<br /><br />If you are having trouble with PHP recognizing the mode as an integer, you can take the previous poster's method:<br /><br />$mode = octdec ( str_pad ( $mode, 4, '0', STR_PAD_LEFT ) );<br /><br />And add the following snippet right after:<br /><br />$mode = (int) $mode;<br /><br />This will force PHP to recognize the mode as an integer when you do:<br /><br />ftp_chmod ( $conn_id, $mode, $path );<br /><br />These together never seem to fail for me.</span></code></div>
  </div>
 </div>
  <div class="note" id="87794">  <div class="votes">
    <div id="Vu87794">
    <a href="/manual/vote-note.php?id=87794&amp;page=function.ftp-chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87794">
    <a href="/manual/vote-note.php?id=87794&amp;page=function.ftp-chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87794" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87794" class="name">
  <strong class="user"><em>rperea at vsourceweb dot com</em></strong></a><a class="genanchor" href="#87794"> &para;</a><div class="date" title="2008-12-21 09:26"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87794">
<div class="phpcode"><code><span class="html">It took me a while to figure out how to use this function in my situation because I needed the $mode to be passed to this function as a variable that was read from a database. Since the database returns the value as an integer without a leading zero, I could not get the operation to work because adding a leading zero in PHP turns the value into a string.<br /><br />For example, this does not work in my situation: <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Assume that this is the value returned from the database.<br /></span><span class="default">$mode </span><span class="keyword">= </span><span class="default">644</span><span class="keyword">; <br /><br /></span><span class="comment">// Now try to chmod using this value.<br /></span><span class="default">ftp_chmod</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="string">'test.txt'</span><span class="keyword">);<br /><br /></span><span class="comment">// The file now has permissions of 204 and not 644<br /></span><span class="default">?&gt;<br /></span><br />Adding a leading zero doesn't work either:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Assume that this is the value returned from the database.<br /></span><span class="default">$mode </span><span class="keyword">= </span><span class="default">644</span><span class="keyword">; <br /><br /></span><span class="comment">// Now try to chmod using this value.<br /></span><span class="default">ftp_chmod</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">'0'</span><span class="keyword">.</span><span class="default">$mode</span><span class="keyword">, </span><span class="string">'test.txt'</span><span class="keyword">);<br /><br /></span><span class="comment">// The file now has permissions of 204 and not 644<br /></span><span class="default">?&gt;<br /></span><br />I tried many ways to get it to work even converting it from oct to dec using octdec and then back to decoct and nothing worked. This is the only way I was able to get it to work, with an eval statement.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Assume that this is the value returned from the database.<br /></span><span class="default">$mode </span><span class="keyword">= </span><span class="default">644</span><span class="keyword">; <br /><br /></span><span class="comment">// Turn the mode into a string<br /></span><span class="default">$np </span><span class="keyword">= </span><span class="string">'0'</span><span class="keyword">.</span><span class="default">$mode</span><span class="keyword">;<br /><br /></span><span class="comment">// Now run chmod with the eval'd string parsed as an integer.<br /></span><span class="default">ftp_chmod</span><span class="keyword">(</span><span class="default">$conn_id</span><span class="keyword">, eval(</span><span class="string">"return(</span><span class="keyword">{</span><span class="default">$np</span><span class="keyword">}</span><span class="string">);"</span><span class="keyword">), </span><span class="string">'test.txt'</span><span class="keyword">);<br /><br /></span><span class="comment">// The file now has permissions of 644<br /></span><span class="default">?&gt;<br /></span><br />Of course, you will have to make sure that the value of $mode only contains 3 digits. Always do checking on your values before handing it off to eval().</span></code></div>
  </div>
 </div>
  <div class="note" id="79870">  <div class="votes">
    <div id="Vu79870">
    <a href="/manual/vote-note.php?id=79870&amp;page=function.ftp-chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79870">
    <a href="/manual/vote-note.php?id=79870&amp;page=function.ftp-chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79870" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79870" class="name">
  <strong class="user"><em>tiefenbrunner at obdev dot at</em></strong></a><a class="genanchor" href="#79870"> &para;</a><div class="date" title="2007-12-17 05:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79870">
<div class="phpcode"><code><span class="html">The "mode" parameter of the PHP5 ftp_chmod function is an integer value that is supposed to be given as an octal number, like the argument for the "chmod" command line tool.<br /><br />Thus the sprintf must use the %o formatting character, so that the passed integer value is really represented as an octal number to the CHMOD site command for the FTP server.<br /><br />So, IMHO, rabin's version is correct (it definitely worked for me).</span></code></div>
  </div>
 </div>
  <div class="note" id="66456">  <div class="votes">
    <div id="Vu66456">
    <a href="/manual/vote-note.php?id=66456&amp;page=function.ftp-chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66456">
    <a href="/manual/vote-note.php?id=66456&amp;page=function.ftp-chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66456" title="50% like this...">
    0
    </div>
  </div>
  <a href="#66456" class="name">
  <strong class="user"><em>rabin at rab dot in</em></strong></a><a class="genanchor" href="#66456"> &para;</a><div class="date" title="2006-05-23 03:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66456">
<div class="phpcode"><code><span class="html">As mentioned in the note below, the function posted by "hardy add mapscene dot com" works incorrectly if used with an octal mode, the way the php5 function is used.<br /><br />This function works exactly like the the php5 one:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'ftp_chmod'</span><span class="keyword">)) {<br />    function </span><span class="default">ftp_chmod</span><span class="keyword">(</span><span class="default">$ftp_stream</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">)<br />    {<br />        return </span><span class="default">ftp_site</span><span class="keyword">(</span><span class="default">$ftp_stream</span><span class="keyword">, </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'CHMOD %o %s'</span><span class="keyword">, </span><span class="default">$mode</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">));<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82679">  <div class="votes">
    <div id="Vu82679">
    <a href="/manual/vote-note.php?id=82679&amp;page=function.ftp-chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82679">
    <a href="/manual/vote-note.php?id=82679&amp;page=function.ftp-chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82679" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#82679" class="name">
  <strong class="user"><em>cspiegl at kwask dot de</em></strong></a><a class="genanchor" href="#82679"> &para;</a><div class="date" title="2008-04-21 12:30"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82679">
<div class="phpcode"><code><span class="html">Ok,<br />so if 2 people say that my way is wrong and the other is right, i will take mine back.<br />I posted it cause for me just the way i used it worked (i don't know why)<br /><br />AND: i would not say something like: "I would try before post", in my opinion that is realy unfriendly, cause i tryed!</span></code></div>
  </div>
 </div>
  <div class="note" id="77811">  <div class="votes">
    <div id="Vu77811">
    <a href="/manual/vote-note.php?id=77811&amp;page=function.ftp-chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77811">
    <a href="/manual/vote-note.php?id=77811&amp;page=function.ftp-chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77811" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#77811" class="name">
  <strong class="user"><em>Josh  at jcr dot com</em></strong></a><a class="genanchor" href="#77811"> &para;</a><div class="date" title="2007-09-13 10:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77811">
<div class="phpcode"><code><span class="html">rabin's code works just fine as a replacement for ftp_chmod().<br />I would try that before trying cspiegl's solution for pre-php 5 installations.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ftp-chmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-chmod.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ftp.php">FTP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ftp-alloc.php" title="ftp_&#8203;alloc">ftp_&#8203;alloc</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-append.php" title="ftp_&#8203;append">ftp_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-cdup.php" title="ftp_&#8203;cdup">ftp_&#8203;cdup</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-chdir.php" title="ftp_&#8203;chdir">ftp_&#8203;chdir</a>
                        </li>
                                                <li class="current">
                            <a href="function.ftp-chmod.php" title="ftp_&#8203;chmod">ftp_&#8203;chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-close.php" title="ftp_&#8203;close">ftp_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-connect.php" title="ftp_&#8203;connect">ftp_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-delete.php" title="ftp_&#8203;delete">ftp_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-exec.php" title="ftp_&#8203;exec">ftp_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-fget.php" title="ftp_&#8203;fget">ftp_&#8203;fget</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-fput.php" title="ftp_&#8203;fput">ftp_&#8203;fput</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-get.php" title="ftp_&#8203;get">ftp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-get-option.php" title="ftp_&#8203;get_&#8203;option">ftp_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-login.php" title="ftp_&#8203;login">ftp_&#8203;login</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mdtm.php" title="ftp_&#8203;mdtm">ftp_&#8203;mdtm</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mkdir.php" title="ftp_&#8203;mkdir">ftp_&#8203;mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-mlsd.php" title="ftp_&#8203;mlsd">ftp_&#8203;mlsd</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-continue.php" title="ftp_&#8203;nb_&#8203;continue">ftp_&#8203;nb_&#8203;continue</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-fget.php" title="ftp_&#8203;nb_&#8203;fget">ftp_&#8203;nb_&#8203;fget</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-fput.php" title="ftp_&#8203;nb_&#8203;fput">ftp_&#8203;nb_&#8203;fput</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-get.php" title="ftp_&#8203;nb_&#8203;get">ftp_&#8203;nb_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nb-put.php" title="ftp_&#8203;nb_&#8203;put">ftp_&#8203;nb_&#8203;put</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-nlist.php" title="ftp_&#8203;nlist">ftp_&#8203;nlist</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-pasv.php" title="ftp_&#8203;pasv">ftp_&#8203;pasv</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-put.php" title="ftp_&#8203;put">ftp_&#8203;put</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-pwd.php" title="ftp_&#8203;pwd">ftp_&#8203;pwd</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-quit.php" title="ftp_&#8203;quit">ftp_&#8203;quit</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-raw.php" title="ftp_&#8203;raw">ftp_&#8203;raw</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-rawlist.php" title="ftp_&#8203;rawlist">ftp_&#8203;rawlist</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-rename.php" title="ftp_&#8203;rename">ftp_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-rmdir.php" title="ftp_&#8203;rmdir">ftp_&#8203;rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-set-option.php" title="ftp_&#8203;set_&#8203;option">ftp_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-site.php" title="ftp_&#8203;site">ftp_&#8203;site</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-size.php" title="ftp_&#8203;size">ftp_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-ssl-connect.php" title="ftp_&#8203;ssl_&#8203;connect">ftp_&#8203;ssl_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ftp-systype.php" title="ftp_&#8203;systype">ftp_&#8203;systype</a>
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
