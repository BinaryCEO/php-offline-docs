<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ZipArchive::addEmptyDir - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ziparchive.addemptydir.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ziparchive.addemptydir.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.addemptydir.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.ziparchive.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.ziparchive.php">
 <link rel="next" href="https://www.php.net/manual/en/ziparchive.addfile.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.addemptydir.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ziparchive.addemptydir.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ziparchive.addemptydir.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ziparchive.addemptydir.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ziparchive.addemptydir.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ziparchive.addemptydir.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ziparchive.addemptydir.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ziparchive.addemptydir.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ziparchive.addemptydir.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ziparchive.addemptydir.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ziparchive.addemptydir.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add a new directory" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ZipArchive::addEmptyDir - Manual" />
<meta name="twitter:description" content="Add a new directory" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ZipArchive::addEmptyDir - Manual" />
<meta itemprop="description" content="Add a new directory" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add a new directory" />

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
        <a href="ziparchive.addfile.php">
          ZipArchive::addFile &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.ziparchive.php">
          &laquo; ZipArchive        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zip.php'>Zip</a></li>      <li><a href='class.ziparchive.php'>ZipArchive</a></li>      </ul>
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
            <option value='en/ziparchive.addemptydir.php' selected="selected">English</option>
            <option value='de/ziparchive.addemptydir.php'>German</option>
            <option value='es/ziparchive.addemptydir.php'>Spanish</option>
            <option value='fr/ziparchive.addemptydir.php'>French</option>
            <option value='it/ziparchive.addemptydir.php'>Italian</option>
            <option value='ja/ziparchive.addemptydir.php'>Japanese</option>
            <option value='pt_BR/ziparchive.addemptydir.php'>Brazilian Portuguese</option>
            <option value='ru/ziparchive.addemptydir.php'>Russian</option>
            <option value='tr/ziparchive.addemptydir.php'>Turkish</option>
            <option value='uk/ziparchive.addemptydir.php'>Ukrainian</option>
            <option value='zh/ziparchive.addemptydir.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ziparchive.addemptydir" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ZipArchive::addEmptyDir</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.8.0)</p><p class="refpurpose"><span class="refname">ZipArchive::addEmptyDir</span> &mdash; <span class="dc-title">Add a new directory</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-ziparchive.addemptydir-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ZipArchive::addEmptyDir</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dirname</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Adds an empty directory in the archive.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-ziparchive.addemptydir-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">dirname</code></dt>
     <dd>
      <p class="para">
       The directory to add.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Bitmask consisting of
       <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-guess">ZipArchive::FL_ENC_GUESS</a></code></strong>,
       <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-utf-8">ZipArchive::FL_ENC_UTF_8</a></code></strong>,
       <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-cp437">ZipArchive::FL_ENC_CP437</a></code></strong>.
       The behaviour of these constants is described on the
       <a href="zip.constants.php" class="link">ZIP constants</a> page.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-ziparchive.addemptydir-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-ziparchive.addemptydir-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.0.0, PECL zip 1.18.0</td>
       <td>
        <code class="parameter">flags</code> was added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-ziparchive.addemptydir-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-913">
   <p><strong>Example #1 Create a new directory in an archive</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$zip </span><span style="color: #007700">= new </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.zip'</span><span style="color: #007700">) === </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    if(</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addEmptyDir</span><span style="color: #007700">(</span><span style="color: #DD0000">'newDirectory'</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #DD0000">'Created a new root directory'</span><span style="color: #007700">;<br />    } else {<br />        echo </span><span style="color: #DD0000">'Could not create the directory'</span><span style="color: #007700">;<br />    }<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />} else {<br />    echo </span><span style="color: #DD0000">'failed'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/ziparchive/addemptydir.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fziparchive.addemptydir%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ziparchive.addemptydir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.addemptydir.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="98621">  <div class="votes">
    <div id="Vu98621">
    <a href="/manual/vote-note.php?id=98621&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98621">
    <a href="/manual/vote-note.php?id=98621&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98621" title="52% like this...">
    3
    </div>
  </div>
  <a href="#98621" class="name">
  <strong class="user"><em>hunter666 at abv dot bg</em></strong></a><a class="genanchor" href="#98621"> &para;</a><div class="date" title="2010-06-26 01:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98621">
<div class="phpcode"><code><span class="html">Add folder and sub-directories to zip archive.<br /><br /><span class="default">&lt;?php <br />$archive_name </span><span class="keyword">= </span><span class="string">"archive.zip"</span><span class="keyword">; </span><span class="comment">// name of zip file<br /></span><span class="default">$archive_folder </span><span class="keyword">= </span><span class="string">"folder"</span><span class="keyword">; </span><span class="comment">// the folder which you archivate<br /><br /></span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">; <br />if (</span><span class="default">$zip </span><span class="keyword">-&gt; </span><span class="default">open</span><span class="keyword">(</span><span class="default">$archive_name</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">) === </span><span class="default">TRUE</span><span class="keyword">) <br />{ <br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[\/]{2,}/'</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$archive_folder</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">); <br />    <br />    </span><span class="default">$dirs </span><span class="keyword">= array(</span><span class="default">$dir</span><span class="keyword">); <br />    while (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$dirs</span><span class="keyword">)) <br />    { <br />        </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$dirs</span><span class="keyword">); <br />        </span><span class="default">$zip </span><span class="keyword">-&gt; </span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">); <br />        <br />        </span><span class="default">$dh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">); <br />        while(</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">)) <br />        { <br />            if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'.' </span><span class="keyword">&amp;&amp; </span><span class="default">$file </span><span class="keyword">!= </span><span class="string">'..'</span><span class="keyword">) <br />            { <br />                if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) <br />                    </span><span class="default">$zip </span><span class="keyword">-&gt; </span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">); <br />                elseif (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) <br />                    </span><span class="default">$dirs</span><span class="keyword">[] = </span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">; <br />            } <br />        } <br />        </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">); <br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$dirs</span><span class="keyword">); <br />    } <br />    <br />    </span><span class="default">$zip </span><span class="keyword">-&gt; </span><span class="default">close</span><span class="keyword">(); <br />    echo </span><span class="string">'Archiving is sucessful!'</span><span class="keyword">; <br />} <br />else <br />{ <br />    echo </span><span class="string">'Error, can\'t create a zip file!'</span><span class="keyword">; <br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91221">  <div class="votes">
    <div id="Vu91221">
    <a href="/manual/vote-note.php?id=91221&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91221">
    <a href="/manual/vote-note.php?id=91221&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91221" title="55% like this...">
    1
    </div>
  </div>
  <a href="#91221" class="name">
  <strong class="user"><em>thomas dot rubbert at yahoo dot de</em></strong></a><a class="genanchor" href="#91221"> &para;</a><div class="date" title="2009-05-30 05:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91221">
<div class="phpcode"><code><span class="html">Here's a stack-based way to zip a directory. No recursion, no function, no class:
<br />
<br /><span class="default">&lt;?php
<br />$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();
<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'test.zip'</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);
<br />
<br /></span><span class="default">$dirName </span><span class="keyword">= </span><span class="string">'test'</span><span class="keyword">;
<br />
<br />if (!</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dirName</span><span class="keyword">)) {
<br />    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Directory ' </span><span class="keyword">. </span><span class="default">$dirName </span><span class="keyword">. </span><span class="string">' does not exist'</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$dirName </span><span class="keyword">= </span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$dirName</span><span class="keyword">);
<br />if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$dirName</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">) != </span><span class="string">'/'</span><span class="keyword">) {
<br />    </span><span class="default">$dirName</span><span class="keyword">.= </span><span class="string">'/'</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">/*
<br /> * NOTE BY danbrown AT php DOT net: A good method of making
<br /> * portable code in this case would be usage of the PHP constant
<br /> * DIRECTORY_SEPARATOR in place of the '/' (forward slash) above.
<br /> */
<br />
<br /></span><span class="default">$dirStack </span><span class="keyword">= array(</span><span class="default">$dirName</span><span class="keyword">);
<br /></span><span class="comment">//Find the index where the last dir starts
<br /></span><span class="default">$cutFrom </span><span class="keyword">= </span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$dirName</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">), </span><span class="string">'/'</span><span class="keyword">)+</span><span class="default">1</span><span class="keyword">;
<br />
<br />while (!empty(</span><span class="default">$dirStack</span><span class="keyword">)) {
<br />    </span><span class="default">$currentDir </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$dirStack</span><span class="keyword">);
<br />    </span><span class="default">$filesToAdd </span><span class="keyword">= array();
<br />
<br />    </span><span class="default">$dir </span><span class="keyword">= </span><span class="default">dir</span><span class="keyword">(</span><span class="default">$currentDir</span><span class="keyword">);
<br />    while (</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$node </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">())) {
<br />        if ((</span><span class="default">$node </span><span class="keyword">== </span><span class="string">'..'</span><span class="keyword">) || (</span><span class="default">$node </span><span class="keyword">== </span><span class="string">'.'</span><span class="keyword">)) {
<br />            continue;
<br />        }
<br />        if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$currentDir </span><span class="keyword">. </span><span class="default">$node</span><span class="keyword">)) {
<br />            </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$dirStack</span><span class="keyword">, </span><span class="default">$currentDir </span><span class="keyword">. </span><span class="default">$node </span><span class="keyword">. </span><span class="string">'/'</span><span class="keyword">);
<br />        }
<br />        if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$currentDir </span><span class="keyword">. </span><span class="default">$node</span><span class="keyword">)) {
<br />            </span><span class="default">$filesToAdd</span><span class="keyword">[] = </span><span class="default">$node</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    </span><span class="default">$localDir </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$currentDir</span><span class="keyword">, </span><span class="default">$cutFrom</span><span class="keyword">);
<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$localDir</span><span class="keyword">);
<br />    
<br />    foreach (</span><span class="default">$filesToAdd </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {
<br />        </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$currentDir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$localDir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">);
<br />    }
<br />}
<br />
<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129446">  <div class="votes">
    <div id="Vu129446">
    <a href="/manual/vote-note.php?id=129446&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129446">
    <a href="/manual/vote-note.php?id=129446&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129446" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129446" class="name">
  <strong class="user"><em>lea dot gris at noiraude dot net</em></strong></a><a class="genanchor" href="#129446"> &para;</a><div class="date" title="2024-04-30 09:02"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129446">
<div class="phpcode"><code><span class="html">The &lt;code&gt;addEmptyDir&lt;/code&gt; method does not handle permissions bits and directory &lt;code&gt;mtime&lt;/code&gt;. These need to be set separately after the directory has been created in the Zip Archive.<br /><br />Note that setting the &lt;code&gt;mtime&lt;/code&gt; is only available since PHP &gt;= 8.0, so it will stay the current timestamp of the &lt;code&gt;addEmptyDir&lt;/code&gt; call with PHP 7.4 and below.<br /><br />Here is a function to fix both permissions and &lt;code&gt;mtime&lt;/code&gt; of a directory in a Zip Archive.<br /><br />&lt;pre&gt;&lt;code lang="php"&gt;<br />function fixDirAttributes(ZipArchive $zip, string $path, string $name)<br />{<br />    // Gets the index of the directory in the Zip archive<br />    $indexInZip = $zip-&gt;locateName('/' === mb_substr($name, -1) ? $name : $name . '/');<br />    if (false !== $indexInZip) { // Name found<br />        if (method_exists($zip, 'setMtimeIndex')) {             // PHP &gt;= 8.0.0, PECL zip &gt;= 1.16.0<br />            $zip-&gt;setMtimeIndex($indexInZip, filemtime($path)); // Fixes the mtime of the directory<br />        }<br />        $filePerms = fileperms($path); // Gets permissions on the directory<br />        if (false !== $filePerms) { // filePerms supported<br />            $attr = $filePerms &lt;&lt; 16; // Left-shift permission to git the external attributes value<br />            $zip-&gt;setExternalAttributesIndex($indexInZip, \ZipArchive::OPSYS_UNIX, $attr);<br />        }<br />    }<br />}<br />&lt;/pre&gt;&lt;/code&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="128044">  <div class="votes">
    <div id="Vu128044">
    <a href="/manual/vote-note.php?id=128044&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128044">
    <a href="/manual/vote-note.php?id=128044&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128044" title="no votes...">
    0
    </div>
  </div>
  <a href="#128044" class="name">
  <strong class="user"><em>iunknownvb at gmail dot com</em></strong></a><a class="genanchor" href="#128044"> &para;</a><div class="date" title="2022-12-23 04:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128044">
<div class="phpcode"><code><span class="html">I have modified thomas dot rubbert at yahoo dot de a little bit<br /><br />$uploads_dir =storage_path().'/app/public/files/' ;<br />                    if(!file_exists($uploads_dir)){<br />                        mkdir($uploads_dir,0777,true);<br />                    }<br />                    $zip_file=$uploads_dir.'download.zip';<br />                    if(file_exists($zip_file)){<br />                        unlink($zip_file);<br />                    }<br />                    $zip = new \ZipArchive();<br />                    if (!$zip-&gt;open($zip_file, \ZIPARCHIVE::CREATE)) {<br />                        http_response_code(501);<br />                        echo 'Zip creation failed';<br />                        die();<br />                    }<br />                    $img=$uploads_dir.'img';<br />                    <br />                    $dirName = realpath($img);<br />                    if (substr($dirName, -1) != DIRECTORY_SEPARATOR) {<br />                        $dirName.= DIRECTORY_SEPARATOR;<br />                    }<br />                    $dirStack = array($dirName);<br />                    //Find the index where the last dir starts<br />                    $cutFrom = strrpos(substr($dirName, 0, -1), DIRECTORY_SEPARATOR)+1;    <br />                    while (!empty($dirStack)) {<br />                        $currentDir = array_pop($dirStack);<br />                        $filesToAdd = array();<br />                        $dir = dir($currentDir);<br />                        while (false !== ($node = $dir-&gt;read())) {<br />                            if (($node == '..') || ($node == '.')) {<br />                                continue;<br />                            }<br />                            if (is_dir($currentDir . $node)) {<br />                                array_push($dirStack, $currentDir . $node . DIRECTORY_SEPARATOR);<br />                            }<br />                            if (is_file($currentDir . $node)) {<br />                                $filesToAdd[] = $node;<br />                            }<br />                        }<br />                        $localDir =str_replace(DIRECTORY_SEPARATOR,'/',substr($currentDir, $cutFrom));<br />                        $zip-&gt;addEmptyDir($localDir);<br />                        foreach ($filesToAdd as $file) {<br />                            $zip-&gt;addFile($currentDir . $file, $localDir . $file);<br />                        }<br />                    }<br />// any additional files<br />                    $db=$uploads_dir.'databse.db'; <br />                    //$zip-&gt;addFromString(basename($db), file_get_contents($db));<br />                    $zip-&gt;addFile($db, basename($db));<br />                    $zip-&gt;close();</span></code></div>
  </div>
 </div>
  <div class="note" id="85688">  <div class="votes">
    <div id="Vu85688">
    <a href="/manual/vote-note.php?id=85688&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85688">
    <a href="/manual/vote-note.php?id=85688&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85688" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85688" class="name">
  <strong class="user"><em>pagetronic</em></strong></a><a class="genanchor" href="#85688"> &para;</a><div class="date" title="2008-09-12 03:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85688">
<div class="phpcode"><code><span class="html">addEmptyDir doesn't exist now,<br />use $zip-&gt;addFile($file, $dir.$fichier);<br /><br />nothing on the net about this, <br /><br />addEmptyDir work on Ubuntu but not on Debian Etch</span></code></div>
  </div>
 </div>
  <div class="note" id="84598">  <div class="votes">
    <div id="Vu84598">
    <a href="/manual/vote-note.php?id=84598&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84598">
    <a href="/manual/vote-note.php?id=84598&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84598" title="50% like this...">
    0
    </div>
  </div>
  <a href="#84598" class="name">
  <strong class="user"><em>benjamin dot seiller at antwerpes dot de</em></strong></a><a class="genanchor" href="#84598"> &para;</a><div class="date" title="2008-07-21 04:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84598">
<div class="phpcode"><code><span class="html">There is kind of a bug in the method<br />ZipArchive::addFile<br />which affects the class ZipFolder below.<br />It is related to the numer of max filehandles of the OS.<br /><br />As workaround add a file-counter to the class and close + reopen the archive if a certain number of files (directories count as files!) is reached.<br /><br />For more details see here:<br /><a href="http://de.php.net/manual/en/function.ziparchive-addfile.php" rel="nofollow" target="_blank">http://de.php.net/manual/en/function.ziparchive-addfile.php</a><br />or go directly here<br /><a href="http://bugs.php.net/bug.php?id=40494" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=40494</a><br />or here<br /><a href="http://pecl.php.net/bugs/bug.php?id=9443" rel="nofollow" target="_blank">http://pecl.php.net/bugs/bug.php?id=9443</a></span></code></div>
  </div>
 </div>
  <div class="note" id="116238">  <div class="votes">
    <div id="Vu116238">
    <a href="/manual/vote-note.php?id=116238&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116238">
    <a href="/manual/vote-note.php?id=116238&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116238" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#116238" class="name">
  <strong class="user"><em>tahazit dot co dot il at gmail dot com</em></strong></a><a class="genanchor" href="#116238"> &para;</a><div class="date" title="2014-11-28 01:25"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116238">
<div class="phpcode"><code><span class="html">On PHP &gt;5.4, This function will create a file, not a directory.<br /><br />For instance:<br /><br />   $zip-&gt;addEmptyDir ( 'path/to/dir/' );<br /><br />will create the folders "path/", and "path/to/", and a dummy 0-byte file named "dir" in the latter.<br />If then we add a file to that dir, say like this:<br /><br />   $zip-&gt;addFromString ( 'path/to/dir/file.txt', $data );  <br /><br />the result will be a SEPARATE folder named "dir" next to the dummy "dir" file. The "dir" folder will contain the file "file.txt".<br /><br />This was tested on an APACHE server running PHP 5.4</span></code></div>
  </div>
 </div>
  <div class="note" id="86188">  <div class="votes">
    <div id="Vu86188">
    <a href="/manual/vote-note.php?id=86188&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86188">
    <a href="/manual/vote-note.php?id=86188&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86188" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#86188" class="name">
  <strong class="user"><em>D.Jann</em></strong></a><a class="genanchor" href="#86188"> &para;</a><div class="date" title="2008-10-07 05:26"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86188">
<div class="phpcode"><code><span class="html">I've brought a little modification to dayjo's code, so it wouldn't re-create the whole structure of your working drive in the zip file:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// Function to recursively add a directory,
<br />// sub-directories and files to a zip archive
<br /></span><span class="keyword">function </span><span class="default">addFolderToZip</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$zipArchive</span><span class="keyword">, </span><span class="default">$zipdir </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">){
<br />    if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {
<br />        if (</span><span class="default">$dh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {
<br />
<br />            </span><span class="comment">//Add the directory
<br />            </span><span class="keyword">if(!empty(</span><span class="default">$zipdir</span><span class="keyword">)) </span><span class="default">$zipArchive</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$zipdir</span><span class="keyword">);
<br />           
<br />            </span><span class="comment">// Loop through all the files
<br />            </span><span class="keyword">while ((</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {
<br />           
<br />                </span><span class="comment">//If it's a folder, run the function again!
<br />                </span><span class="keyword">if(!</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">)){
<br />                    </span><span class="comment">// Skip parent and root directories
<br />                    </span><span class="keyword">if( (</span><span class="default">$file </span><span class="keyword">!== </span><span class="string">"."</span><span class="keyword">) &amp;&amp; (</span><span class="default">$file </span><span class="keyword">!== </span><span class="string">".."</span><span class="keyword">)){
<br />                        </span><span class="default">addFolderToZip</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file </span><span class="keyword">. </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$zipArchive</span><span class="keyword">, </span><span class="default">$zipdir </span><span class="keyword">. </span><span class="default">$file </span><span class="keyword">. </span><span class="string">"/"</span><span class="keyword">);
<br />                    }
<br />                   
<br />                }else{
<br />                    </span><span class="comment">// Add the files
<br />                    </span><span class="default">$zipArchive</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$zipdir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">);
<br />                   
<br />                }
<br />            }
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />If you don't specify the third parameter (zipdir), the directory you're adding will be added at the root of the zip file.
<br />
<br />D.Jann</span></code></div>
  </div>
 </div>
  <div class="note" id="85302">  <div class="votes">
    <div id="Vu85302">
    <a href="/manual/vote-note.php?id=85302&amp;page=ziparchive.addemptydir&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85302">
    <a href="/manual/vote-note.php?id=85302&amp;page=ziparchive.addemptydir&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85302" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#85302" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#85302"> &para;</a><div class="date" title="2008-08-24 03:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85302">
<div class="phpcode"><code><span class="html">Here's a simple recurring function to add a directory, all sub-directories and all files to an already created zip file;<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Function to recursively add a directory,<br />// sub-directories and files to a zip archive<br /></span><span class="keyword">function </span><span class="default">addFolderToZip</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$zipArchive</span><span class="keyword">){<br />    if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br />        if (</span><span class="default">$dh </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {<br /><br />            </span><span class="comment">//Add the directory<br />            </span><span class="default">$zipArchive</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">);<br />            <br />            </span><span class="comment">// Loop through all the files<br />            </span><span class="keyword">while ((</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dh</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />            <br />                </span><span class="comment">//If it's a folder, run the function again!<br />                </span><span class="keyword">if(!</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">)){<br />                    </span><span class="comment">// Skip parent and root directories<br />                    </span><span class="keyword">if( (</span><span class="default">$file </span><span class="keyword">!== </span><span class="string">"."</span><span class="keyword">) &amp;&amp; (</span><span class="default">$file </span><span class="keyword">!== </span><span class="string">".."</span><span class="keyword">)){<br />                        </span><span class="default">addFolderToZip</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file </span><span class="keyword">. </span><span class="string">"/"</span><span class="keyword">, </span><span class="default">$zipArchive</span><span class="keyword">);<br />                    }<br />                    <br />                }else{<br />                    </span><span class="comment">// Add the files<br />                    </span><span class="default">$zipArchive</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="default">$file</span><span class="keyword">);<br />                    <br />                }<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Would be nice to see more input on these functions :)<br /><br />Dayjo</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ziparchive.addemptydir&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.addemptydir.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.ziparchive.php">ZipArchive</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="ziparchive.addemptydir.php" title="addEmptyDir">addEmptyDir</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addfile.php" title="addFile">addFile</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addfromstring.php" title="addFromString">addFromString</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addglob.php" title="addGlob">addGlob</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addpattern.php" title="addPattern">addPattern</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.clearerror.php" title="clearError">clearError</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.deleteindex.php" title="deleteIndex">deleteIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.deletename.php" title="deleteName">deleteName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.extractto.php" title="extractTo">extractTo</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getarchivecomment.php" title="getArchiveComment">getArchiveComment</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getarchiveflag.php" title="getArchiveFlag">getArchiveFlag</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getcommentindex.php" title="getCommentIndex">getCommentIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getcommentname.php" title="getCommentName">getCommentName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getexternalattributesindex.php" title="getExternalAttributesIndex">getExternalAttributesIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getexternalattributesname.php" title="getExternalAttributesName">getExternalAttributesName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getfromindex.php" title="getFromIndex">getFromIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getfromname.php" title="getFromName">getFromName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getnameindex.php" title="getNameIndex">getNameIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstatusstring.php" title="getStatusString">getStatusString</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstream.php" title="getStream">getStream</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstreamindex.php" title="getStreamIndex">getStreamIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstreamname.php" title="getStreamName">getStreamName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.iscompressionmethoddupported.php" title="isCompressionMethodSupported">isCompressionMethodSupported</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.isencryptionmethoddupported.php" title="isEncryptionMethodSupported">isEncryptionMethodSupported</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.locatename.php" title="locateName">locateName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.open.php" title="open">open</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.registercancelcallback.php" title="registerCancelCallback">registerCancelCallback</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.registerprogresscallback.php" title="registerProgressCallback">registerProgressCallback</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.renameindex.php" title="renameIndex">renameIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.renamename.php" title="renameName">renameName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.replacefile.php" title="replaceFile">replaceFile</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setarchivecomment.php" title="setArchiveComment">setArchiveComment</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setarchiveflag.php" title="setArchiveFlag">setArchiveFlag</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcommentindex.php" title="setCommentIndex">setCommentIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcommentname.php" title="setCommentName">setCommentName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcompressionindex.php" title="setCompressionIndex">setCompressionIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcompressionname.php" title="setCompressionName">setCompressionName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setencryptionindex.php" title="setEncryptionIndex">setEncryptionIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setencryptionname.php" title="setEncryptionName">setEncryptionName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setexternalattributesindex.php" title="setExternalAttributesIndex">setExternalAttributesIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setexternalattributesname.php" title="setExternalAttributesName">setExternalAttributesName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setmtimeindex.php" title="setMtimeIndex">setMtimeIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setmtimename.php" title="setMtimeName">setMtimeName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setpassword.php" title="setPassword">setPassword</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.statindex.php" title="statIndex">statIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.statname.php" title="statName">statName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangeall.php" title="unchangeAll">unchangeAll</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangearchive.php" title="unchangeArchive">unchangeArchive</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangeindex.php" title="unchangeIndex">unchangeIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangename.php" title="unchangeName">unchangeName</a>
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
