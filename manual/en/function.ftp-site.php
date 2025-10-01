<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ftp_site - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ftp-site.php">
 <link rel="shorturl" href="https://www.php.net/ftp-site">
 <link rel="alternate" href="https://www.php.net/ftp-site" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ftp.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ftp-set-option.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ftp-size.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ftp-site.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ftp-site.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ftp-site.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ftp-site.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ftp-site.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ftp-site.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ftp-site.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ftp-site.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ftp-site.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ftp-site.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ftp-site.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sends a SITE command to the server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ftp_site - Manual" />
<meta name="twitter:description" content="Sends a SITE command to the server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ftp_site - Manual" />
<meta itemprop="description" content="Sends a SITE command to the server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sends a SITE command to the server" />

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
        <a href="function.ftp-size.php">
          ftp_size &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ftp-set-option.php">
          &laquo; ftp_set_option        </a>
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
            <option value='en/function.ftp-site.php' selected="selected">English</option>
            <option value='de/function.ftp-site.php'>German</option>
            <option value='es/function.ftp-site.php'>Spanish</option>
            <option value='fr/function.ftp-site.php'>French</option>
            <option value='it/function.ftp-site.php'>Italian</option>
            <option value='ja/function.ftp-site.php'>Japanese</option>
            <option value='pt_BR/function.ftp-site.php'>Brazilian Portuguese</option>
            <option value='ru/function.ftp-site.php'>Russian</option>
            <option value='tr/function.ftp-site.php'>Turkish</option>
            <option value='uk/function.ftp-site.php'>Ukrainian</option>
            <option value='zh/function.ftp-site.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ftp-site" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ftp_site</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ftp_site</span> &mdash; <span class="dc-title">Sends a SITE command to the server</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.ftp-site-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ftp_site</strong></span>(<span class="methodparam"><span class="type"><a href="class.ftp-connection.php" class="type FTP\Connection">FTP\Connection</a></span> <code class="parameter">$ftp</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$command</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>ftp_site()</strong></span> sends the given <code class="literal">SITE</code> 
   command to the FTP server.
  </p>
  <p class="para">
   <code class="literal">SITE</code> commands are not standardized, and vary from server
   to server. They are useful for handling such things as file permissions and 
   group membership.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.ftp-site-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ftp</code></dt>
     <dd>
       <p class="para">An <span class="classname"><a href="class.ftp-connection.php" class="classname">FTP\Connection</a></span> instance.</p>
     </dd>
    
    
     <dt><code class="parameter">command</code></dt>
     <dd>
      <p class="para">
       The SITE command. Note that this parameter isn&#039;t escaped so there may
       be some issues with filenames containing spaces and other characters.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.ftp-site-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ftp-site-changelog">
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

 
 <div class="refsect1 examples" id="refsect1-function.ftp-site-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4585">
    <p><strong>Example #1 Sending a SITE command to an ftp server</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Connect to FTP server<br /></span><span style="color: #0000BB">$ftp </span><span style="color: #007700">= </span><span style="color: #0000BB">ftp_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'ftp.example.com'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">) die(</span><span style="color: #DD0000">'Unable to connect to ftp.example.com'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Login as "user" with password "pass"<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">ftp_login</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #DD0000">'user'</span><span style="color: #007700">, </span><span style="color: #DD0000">'pass'</span><span style="color: #007700">)) die(</span><span style="color: #DD0000">'Error logging into ftp.example.com'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Issue: "SITE CHMOD 0600 /home/user/privatefile" command to ftp server<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">ftp_site</span><span style="color: #007700">(</span><span style="color: #0000BB">$ftp</span><span style="color: #007700">, </span><span style="color: #DD0000">'CHMOD 0600 /home/user/privatefile'</span><span style="color: #007700">)) {<br />   echo </span><span style="color: #DD0000">"Command executed successfully.\n"</span><span style="color: #007700">;<br />} else {<br />   die(</span><span style="color: #DD0000">'Command failed.'</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.ftp-site-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ftp-raw.php" class="function" rel="rdfs-seeAlso">ftp_raw()</a> - Sends an arbitrary command to an FTP server</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ftp/functions/ftp-site.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ftp-site%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ftp-site&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-site.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86838">  <div class="votes">
    <div id="Vu86838">
    <a href="/manual/vote-note.php?id=86838&amp;page=function.ftp-site&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86838">
    <a href="/manual/vote-note.php?id=86838&amp;page=function.ftp-site&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86838" title="60% like this...">
    1
    </div>
  </div>
  <a href="#86838" class="name">
  <strong class="user"><em>www.bossftp.com</em></strong></a><a class="genanchor" href="#86838"> &para;</a><div class="date" title="2008-11-05 06:30"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86838">
<div class="phpcode"><code><span class="html">To send a SITE command and get the result, you can try this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ftpsite</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$cmd</span><span class="keyword">) {
<br />    return </span><span class="default">ftp_raw</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"SITE </span><span class="default">$cmd</span><span class="string">"</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="34735">  <div class="votes">
    <div id="Vu34735">
    <a href="/manual/vote-note.php?id=34735&amp;page=function.ftp-site&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34735">
    <a href="/manual/vote-note.php?id=34735&amp;page=function.ftp-site&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34735" title="50% like this...">
    0
    </div>
  </div>
  <a href="#34735" class="name">
  <strong class="user"><em>Marc</em></strong></a><a class="genanchor" href="#34735"> &para;</a><div class="date" title="2003-08-05 07:02"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34735">
<div class="phpcode"><code><span class="html">Use ftp_raw() (PHP 5+) instead of ftp_site() if you need the results of the remote command.</span></code></div>
  </div>
 </div>
  <div class="note" id="27047">  <div class="votes">
    <div id="Vu27047">
    <a href="/manual/vote-note.php?id=27047&amp;page=function.ftp-site&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27047">
    <a href="/manual/vote-note.php?id=27047&amp;page=function.ftp-site&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27047" title="50% like this...">
    0
    </div>
  </div>
  <a href="#27047" class="name">
  <strong class="user"><em>to at mail dot isec dot pt</em></strong></a><a class="genanchor" href="#27047"> &para;</a><div class="date" title="2002-11-21 05:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27047">
<div class="phpcode"><code><span class="html">Hya, <br />  Recently I had to work with FTP over PHP, since I didn't found any help about this topic I decided to post this here. If you need to chmod one file, I tested this on the ftp server using a ftp client and after I knew that the ftp server supported chmod I used the following commands:<br />$upload = ftp_put($conn_id, "/home/to/public_html/index.php", $source_file, FTP_ASCII);<br />$ch=@ftp_site($conn_id,"chmod 755 /home/to/public_html/index.php");<br /><br />Hope this help!<br /><br />T?</span></code></div>
  </div>
 </div>
  <div class="note" id="13703">  <div class="votes">
    <div id="Vu13703">
    <a href="/manual/vote-note.php?id=13703&amp;page=function.ftp-site&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13703">
    <a href="/manual/vote-note.php?id=13703&amp;page=function.ftp-site&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13703" title="50% like this...">
    0
    </div>
  </div>
  <a href="#13703" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#13703"> &para;</a><div class="date" title="2001-06-29 09:36"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13703">
<div class="phpcode"><code><span class="html">site commands are extra-functionality provided by some ftp servers, and depend on the server : 
<br />e.g. trying "ftp&gt; site help" (with an interactive ftp client) on a proftp server would give :
<br /> 
<br />214-The following SITE extensions are recognized:
<br /> RATIO -- show all ratios in effect
<br /> The following SITE commands are recognized (* =&gt;'s unimplemented).
<br /> HELP    CHMOD
<br />214 Direct comments to admin@ftp.blahblah.fr
<br />
<br />while with wu-ftpd on can typically get :
<br />
<br />214-The following SITE commands are recognized (* =&gt;'s unimplemented).
<br />   UMASK           GROUP           INDEX           GROUPS
<br />   IDLE            GPASS           EXEC            CHECKMETHOD
<br />   CHMOD           NEWER           ALIAS           CHECKSUM
<br />   HELP            MINFO           CDPATH                   
<br />214 blabla
<br />
<br />Unfortunately, ftp_site only returns true or false. It would be nice to have a way to get the server's reply in full : ftp_site('help') return 1, which pretty much useless.
<br />
<br />Hope that helps,
<br />
<br />Ivan</span></code></div>
  </div>
 </div>
  <div class="note" id="26907">  <div class="votes">
    <div id="Vu26907">
    <a href="/manual/vote-note.php?id=26907&amp;page=function.ftp-site&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26907">
    <a href="/manual/vote-note.php?id=26907&amp;page=function.ftp-site&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26907" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#26907" class="name">
  <strong class="user"><em>daemorhedron</em></strong></a><a class="genanchor" href="#26907"> &para;</a><div class="date" title="2002-11-17 05:32"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26907">
<div class="phpcode"><code><span class="html">I'd like to follow up with Ivan's observation there. Unless I am missing the obvious, which is entirely possible of course, this command is quite useless unless it returns the data from the SITE &lt;foo&gt; request.<br /><br />Besides the obvious SITE HELP command, another one that would require catching the feedback would be the SITE LOCATE | SITE SEARCH commands. I completely recognize that SITE &lt;foo&gt; commands are indeed insanely proprietary, but the fact still remains that changing this to return the results, or at least having the option to do so (such as exec() and the like) would be vastly preferred to the current method of returning true/false values.<br /><br />Thanks.</span></code></div>
  </div>
 </div>
  <div class="note" id="33169">  <div class="votes">
    <div id="Vu33169">
    <a href="/manual/vote-note.php?id=33169&amp;page=function.ftp-site&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33169">
    <a href="/manual/vote-note.php?id=33169&amp;page=function.ftp-site&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33169" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#33169" class="name">
  <strong class="user"><em>webmaster at beezm dot net</em></strong></a><a class="genanchor" href="#33169"> &para;</a><div class="date" title="2003-06-17 11:52"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33169">
<div class="phpcode"><code><span class="html">I wrote some functions for an ftp server for windows called GuildFTPd.<br /><br />Here they are, they are pretty much so self explanitory:<br />&lt;?<br />function guildftpd_adduser($ftp_stream,$group,$username,$password){<br />    ftp_site($ftp_stream,"SITE ADDUSER $group $username $password");<br />}<br />function guildftpd_addgroup($ftp_stream,$groupname){<br />    ftp_site($ftp_stream,"SITE ADDGROUP $groupname");<br />}<br />function guildftpd_deluser($ftp_stream,$username){<br />    ftp_site($ftp_stream,"SITE DELUSER $username");<br />}<br />function guildftpd_addpath($ftp_stream,$username,$path,$vpath){<br />    ftp_site($ftp_stream,"SITE ADDPATH $username $path $vpath");<br />}<br />function guildftpd_delpath($ftp_stream,$username,$path,$vpath){<br />    ftp_site($ftp_stream,"SITE DELPATH $username $path $vpath");<br />}<br />function guildftpd_anon($ftp_stream){<br />    ftp_site($ftp_stream,"SITE ANON ALLOW");<br />}<br />function guildftpd_anond($ftp_stream){<br />    ftp_site($ftp_stream,"SITE ANON DENY");<br />}<br />function guildftpd_chpass($ftp_stream,$user,$pass){<br />    ftp_site($ftp_stream,"SITE CHPASS $user $pass");<br />}<br />function guildftpd_disable($ftp_stream,$user){<br />    ftp_site($ftp_stream,"SITE DISABLE $user");<br />}<br />function guildftpd_enable($ftp_stream,$user){<br />    ftp_site($ftp_stream,"SITE ENABLE $user");<br />}<br />function guildftpd_who($ftp_stream){<br />    $who = ftp_site($ftp_stream,"SITE WHO");<br />}<br />function guildftpd_kick($ftp_stream,$user);<br />    ftp_site($ftp_stream,"SITE KICK $user");<br />}<br />function guildftpd_msg($ftp_stream,$text);<br />    ftp_site($ftp_stream,"SITE MSG $text");<br />}<br />?&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ftp-site&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ftp-site.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
