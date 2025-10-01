<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: zip_open - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.zip-open.php">
 <link rel="shorturl" href="https://www.php.net/zip-open">
 <link rel="alternate" href="https://www.php.net/zip-open" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.zip.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.zip-entry-read.php">
 <link rel="next" href="https://www.php.net/manual/en/function.zip-read.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.zip-open.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.zip-open.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.zip-open.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.zip-open.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.zip-open.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.zip-open.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.zip-open.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.zip-open.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.zip-open.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.zip-open.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.zip-open.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open a ZIP file archive" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: zip_open - Manual" />
<meta name="twitter:description" content="Open a ZIP file archive" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: zip_open - Manual" />
<meta itemprop="description" content="Open a ZIP file archive" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open a ZIP file archive" />

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
        <a href="function.zip-read.php">
          zip_read &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.zip-entry-read.php">
          &laquo; zip_entry_read        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zip.php'>Zip</a></li>      <li><a href='ref.zip.php'>Zip Functions</a></li>      </ul>
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
            <option value='en/function.zip-open.php' selected="selected">English</option>
            <option value='de/function.zip-open.php'>German</option>
            <option value='es/function.zip-open.php'>Spanish</option>
            <option value='fr/function.zip-open.php'>French</option>
            <option value='it/function.zip-open.php'>Italian</option>
            <option value='ja/function.zip-open.php'>Japanese</option>
            <option value='pt_BR/function.zip-open.php'>Brazilian Portuguese</option>
            <option value='ru/function.zip-open.php'>Russian</option>
            <option value='tr/function.zip-open.php'>Turkish</option>
            <option value='uk/function.zip-open.php'>Ukrainian</option>
            <option value='zh/function.zip-open.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.zip-open" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">zip_open</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_open</span> &mdash; <span class="dc-title">Open a ZIP file archive</span></p>

 </div>

 <div id="function.zip-open-refsynopsisdiv">
   <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 8.0.0. Relying on this function
is highly discouraged.</p></div>
 </div>

 <div class="refsect1 description" id="refsect1-function.zip-open-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="methodname"><strong>zip_open</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Opens a new zip archive for reading. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.zip-open-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The file name of the ZIP archive to open.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.zip-open-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a resource handle for later use with
   <span class="function"><a href="function.zip-read.php" class="function">zip_read()</a></span> and <span class="function"><a href="function.zip-close.php" class="function">zip_close()</a></span>
   or returns either <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> or the number of error if <code class="parameter">filename</code>
   does not exist or in case of other error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.zip-open-changelog">
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
       <td>8.0.0</td>
       <td>
        This function is deprecated in favor of the Object API,
        see <span class="methodname"><a href="ziparchive.open.php" class="methodname">ZipArchive::open()</a></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.zip-open-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.zip-read.php" class="function" rel="rdfs-seeAlso">zip_read()</a> - Read next entry in a ZIP file archive</span></li>
    <li><span class="function"><a href="function.zip-close.php" class="function" rel="rdfs-seeAlso">zip_close()</a> - Close a ZIP file archive</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/functions/zip-open.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.zip-open%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.zip-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.zip-open.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91630">  <div class="votes">
    <div id="Vu91630">
    <a href="/manual/vote-note.php?id=91630&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91630">
    <a href="/manual/vote-note.php?id=91630&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91630" title="69% like this...">
    27
    </div>
  </div>
  <a href="#91630" class="name">
  <strong class="user"><em>david at php dot net</em></strong></a><a class="genanchor" href="#91630"> &para;</a><div class="date" title="2009-06-20 03:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91630">
<div class="phpcode"><code><span class="html">Note that the Zip functions return an integer error number in the event of error. So:<br /><br /><span class="default">&lt;?php<br />$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br />if (</span><span class="default">$zip</span><span class="keyword">) {<br /></span><span class="default">?&gt;<br /></span><br />is incorrect. Instead use:<br /><br /><span class="default">&lt;?php<br />$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br /><br />if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)) {<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75840">  <div class="votes">
    <div id="Vu75840">
    <a href="/manual/vote-note.php?id=75840&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75840">
    <a href="/manual/vote-note.php?id=75840&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75840" title="77% like this...">
    5
    </div>
  </div>
  <a href="#75840" class="name">
  <strong class="user"><em>saulius at solmetra dot lt</em></strong></a><a class="genanchor" href="#75840"> &para;</a><div class="date" title="2007-06-18 08:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75840">
<div class="phpcode"><code><span class="html">Some older PHP versions used to return false if zip_open failed, and newer versions return the number of error (as integer), so instead of this:<br /><br />$zip = zip_open($zip_file);<br />if ($zip) {<br />  // consider zip file opened successfully<br />}<br /><br />use this:<br /><br />$zip = zip_open($zip_file);<br />if (is_resource($zip)) {<br />  // consider zip file opened successfully<br />}<br /><br />You may also use this function to get the error message by it's number:<br /><br />function zipFileErrMsg($errno) {<br />  // using constant name as a string to make this function PHP4 compatible<br />  $zipFileFunctionsErrors = array(<br />    'ZIPARCHIVE::ER_MULTIDISK' =&gt; 'Multi-disk zip archives not supported.',<br />    'ZIPARCHIVE::ER_RENAME' =&gt; 'Renaming temporary file failed.',<br />    'ZIPARCHIVE::ER_CLOSE' =&gt; 'Closing zip archive failed', <br />    'ZIPARCHIVE::ER_SEEK' =&gt; 'Seek error',<br />    'ZIPARCHIVE::ER_READ' =&gt; 'Read error',<br />    'ZIPARCHIVE::ER_WRITE' =&gt; 'Write error',<br />    'ZIPARCHIVE::ER_CRC' =&gt; 'CRC error',<br />    'ZIPARCHIVE::ER_ZIPCLOSED' =&gt; 'Containing zip archive was closed',<br />    'ZIPARCHIVE::ER_NOENT' =&gt; 'No such file.',<br />    'ZIPARCHIVE::ER_EXISTS' =&gt; 'File already exists',<br />    'ZIPARCHIVE::ER_OPEN' =&gt; 'Can\'t open file', <br />    'ZIPARCHIVE::ER_TMPOPEN' =&gt; 'Failure to create temporary file.', <br />    'ZIPARCHIVE::ER_ZLIB' =&gt; 'Zlib error',<br />    'ZIPARCHIVE::ER_MEMORY' =&gt; 'Memory allocation failure', <br />    'ZIPARCHIVE::ER_CHANGED' =&gt; 'Entry has been changed',<br />    'ZIPARCHIVE::ER_COMPNOTSUPP' =&gt; 'Compression method not supported.', <br />    'ZIPARCHIVE::ER_EOF' =&gt; 'Premature EOF',<br />    'ZIPARCHIVE::ER_INVAL' =&gt; 'Invalid argument',<br />    'ZIPARCHIVE::ER_NOZIP' =&gt; 'Not a zip archive',<br />    'ZIPARCHIVE::ER_INTERNAL' =&gt; 'Internal error',<br />    'ZIPARCHIVE::ER_INCONS' =&gt; 'Zip archive inconsistent', <br />    'ZIPARCHIVE::ER_REMOVE' =&gt; 'Can\'t remove file',<br />    'ZIPARCHIVE::ER_DELETED' =&gt; 'Entry has been deleted',<br />  );<br />  $errmsg = 'unknown';<br />  foreach ($zipFileFunctionsErrors as $constName =&gt; $errorMessage) {<br />    if (defined($constName) and constant($constName) === $errno) {<br />      return 'Zip File Function error: '.$errorMessage;<br />    }<br />  }<br />  return 'Zip File Function error: unknown';<br />}<br /><br />$zip = zip_open($zip_file);<br />if (!is_resource($zip)) {<br />  die(zipFileErrMsg($zip));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="94045">  <div class="votes">
    <div id="Vu94045">
    <a href="/manual/vote-note.php?id=94045&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94045">
    <a href="/manual/vote-note.php?id=94045&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94045" title="66% like this...">
    5
    </div>
  </div>
  <a href="#94045" class="name">
  <strong class="user"><em>fuljencio at gmail dot com</em></strong></a><a class="genanchor" href="#94045"> &para;</a><div class="date" title="2009-10-13 08:34"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94045">
<div class="phpcode"><code><span class="html">getting a mozilla addon version (a firefox extension, for instance):<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">get_addon_version</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// open zip<br />        </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);<br /><br />            </span><span class="comment">// find entry<br />            </span><span class="keyword">do {<br />                </span><span class="default">$entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);<br />            } while (</span><span class="default">$entry </span><span class="keyword">&amp;&amp; </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">) != </span><span class="string">"install.rdf"</span><span class="keyword">);<br /><br />            </span><span class="comment">// open entry<br />            </span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="default">$entry</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /><br />                </span><span class="comment">// read entry<br />                </span><span class="default">$entry_content </span><span class="keyword">= </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">));<br /><br />                </span><span class="comment">// position of &lt;em:version&gt;<br />                </span><span class="default">$version_open_pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$entry_content</span><span class="keyword">, </span><span class="string">"&lt;em:version&gt;"</span><span class="keyword">);<br /><br />                </span><span class="comment">// position of &lt;/em:version&gt;<br />                </span><span class="default">$version_close_pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$entry_content</span><span class="keyword">, </span><span class="string">"&lt;/em:version&gt;"</span><span class="keyword">, </span><span class="default">$version_open_pos</span><span class="keyword">);<br /><br />                </span><span class="comment">// version<br />                </span><span class="default">$version </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(<br />                        </span><span class="default">$entry_content</span><span class="keyword">,<br />                        </span><span class="default">$version_open_pos </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">(</span><span class="string">"&lt;em:version&gt;"</span><span class="keyword">),<br />                        </span><span class="default">$version_close_pos </span><span class="keyword">- (</span><span class="default">$version_open_pos </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">(</span><span class="string">"&lt;em:version&gt;"</span><span class="keyword">))<br />                );<br /><br />            </span><span class="comment">// close entry<br />            </span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">);<br /><br />        </span><span class="comment">// close zip<br />        </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);<br /><br />        return </span><span class="default">$version</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56434">  <div class="votes">
    <div id="Vu56434">
    <a href="/manual/vote-note.php?id=56434&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56434">
    <a href="/manual/vote-note.php?id=56434&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56434" title="57% like this...">
    1
    </div>
  </div>
  <a href="#56434" class="name">
  <strong class="user"><em>bisqwit at iki dot fi</em></strong></a><a class="genanchor" href="#56434"> &para;</a><div class="date" title="2005-09-02 04:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56434">
<div class="phpcode"><code><span class="html">If your PHP installation does not have the zip_open function, and you can't install it for whatever reason, you can use these functions instead, if the server has access to the "unzip" utility (most Linux systems do).<br />So far I have tested these only in Fedora Core 3.<br />Use at your own risk.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">ShellFix</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)<br />{<br />  return </span><span class="string">"'"</span><span class="keyword">.</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"'"</span><span class="keyword">, </span><span class="string">"'\''"</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">).</span><span class="string">"'"</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)<br />{<br />  </span><span class="default">$fp </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);<br />  if(!</span><span class="default">$fp</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />  <br />  </span><span class="default">$lines </span><span class="keyword">= Array();<br />  </span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">'unzip -v '</span><span class="keyword">.</span><span class="default">shellfix</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);<br />  </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">);<br />  <br />  </span><span class="default">$contents </span><span class="keyword">= Array();<br />  </span><span class="default">$ok</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />  foreach(</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">)  <br />  {<br />    if(</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]==</span><span class="string">'-'</span><span class="keyword">) { </span><span class="default">$ok</span><span class="keyword">=!</span><span class="default">$ok</span><span class="keyword">; continue; }<br />    if(!</span><span class="default">$ok</span><span class="keyword">) continue;<br />    <br />    </span><span class="default">$length </span><span class="keyword">= (int)</span><span class="default">$line</span><span class="keyword">;<br />    </span><span class="default">$fn </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">,</span><span class="default">58</span><span class="keyword">));<br />    <br />    </span><span class="default">$contents</span><span class="keyword">[] = Array(</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">$fn</span><span class="keyword">, </span><span class="string">'length' </span><span class="keyword">=&gt; </span><span class="default">$length</span><span class="keyword">);<br />  }<br />  <br />  return<br />    Array(</span><span class="string">'fp'       </span><span class="keyword">=&gt; </span><span class="default">$fp</span><span class="keyword">,  <br />          </span><span class="string">'name'     </span><span class="keyword">=&gt; </span><span class="default">$s</span><span class="keyword">,<br />          </span><span class="string">'contents' </span><span class="keyword">=&gt; </span><span class="default">$contents</span><span class="keyword">,<br />          </span><span class="string">'pointer'  </span><span class="keyword">=&gt; -</span><span class="default">1</span><span class="keyword">);<br />}                           <br />function </span><span class="default">zip_read</span><span class="keyword">(&amp;</span><span class="default">$fp</span><span class="keyword">)<br />{<br />  if(!</span><span class="default">$fp</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">; <br />  <br />  </span><span class="default">$next </span><span class="keyword">= </span><span class="default">$fp</span><span class="keyword">[</span><span class="string">'pointer'</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">;<br />  if(</span><span class="default">$next </span><span class="keyword">&gt;= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">[</span><span class="string">'contents'</span><span class="keyword">])) return </span><span class="default">false</span><span class="keyword">;<br /> <br />  </span><span class="default">$fp</span><span class="keyword">[</span><span class="string">'pointer'</span><span class="keyword">] = </span><span class="default">$next</span><span class="keyword">;<br />  return </span><span class="default">$fp</span><span class="keyword">[</span><span class="string">'contents'</span><span class="keyword">][</span><span class="default">$next</span><span class="keyword">];<br />}<br />function </span><span class="default">zip_entry_name</span><span class="keyword">(&amp;</span><span class="default">$res</span><span class="keyword">)<br />{<br />  if(!</span><span class="default">$res</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />  return </span><span class="default">$res</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">];<br />}                           <br />function </span><span class="default">zip_entry_filesize</span><span class="keyword">(&amp;</span><span class="default">$res</span><span class="keyword">)<br />{<br />  if(!</span><span class="default">$res</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />  return </span><span class="default">$res</span><span class="keyword">[</span><span class="string">'length'</span><span class="keyword">];<br />}<br />function </span><span class="default">zip_entry_open</span><span class="keyword">(&amp;</span><span class="default">$fp</span><span class="keyword">, &amp;</span><span class="default">$res</span><span class="keyword">)<br />{<br />  if(!</span><span class="default">$res</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br /><br />  </span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">'unzip -p '</span><span class="keyword">.</span><span class="default">shellfix</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]).</span><span class="string">' '</span><span class="keyword">.</span><span class="default">shellfix</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'name'</span><span class="keyword">]);<br />  <br />  </span><span class="default">$res</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">] = </span><span class="default">popen</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />  return !!</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">];   <br />}<br />function </span><span class="default">zip_entry_read</span><span class="keyword">(&amp;</span><span class="default">$res</span><span class="keyword">, </span><span class="default">$nbytes</span><span class="keyword">)<br />{<br />  return </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">], </span><span class="default">$nbytes</span><span class="keyword">);<br />}<br />function </span><span class="default">zip_entry_close</span><span class="keyword">(&amp;</span><span class="default">$res</span><span class="keyword">)<br />{<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">]);<br />  unset(</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">]);<br />}<br />function </span><span class="default">zip_close</span><span class="keyword">(&amp;</span><span class="default">$fp</span><span class="keyword">)<br />{<br />  </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">]);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85762">  <div class="votes">
    <div id="Vu85762">
    <a href="/manual/vote-note.php?id=85762&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85762">
    <a href="/manual/vote-note.php?id=85762&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85762" title="55% like this...">
    1
    </div>
  </div>
  <a href="#85762" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#85762"> &para;</a><div class="date" title="2008-09-16 11:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85762">
<div class="phpcode"><code><span class="html">Note, this function ignores custom stream wrappers, like the ones created by stream_wrapper_register - which is really too bad.</span></code></div>
  </div>
 </div>
  <div class="note" id="57020">  <div class="votes">
    <div id="Vu57020">
    <a href="/manual/vote-note.php?id=57020&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57020">
    <a href="/manual/vote-note.php?id=57020&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57020" title="55% like this...">
    1
    </div>
  </div>
  <a href="#57020" class="name">
  <strong class="user"><em>robert at cotran dot ca</em></strong></a><a class="genanchor" href="#57020"> &para;</a><div class="date" title="2005-09-21 12:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom57020">
<div class="phpcode"><code><span class="html">The zip_entry_read above is wrong.  Since the file was opened with popen, you have to read the file in chunks, so zip_entry_read should read:<br /><br />function zip_entry_read(&amp;$res, $nbytes)<br />{<br />    $contents = '';<br />    while (!feof($res['fp'])) {<br />        $contents .= fread($res['fp'], 8192);<br />    }<br />    return $contents;<br />}<br /><br />Otherwise, it was a very useful library.  Thanks!</span></code></div>
  </div>
 </div>
  <div class="note" id="118507">  <div class="votes">
    <div id="Vu118507">
    <a href="/manual/vote-note.php?id=118507&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118507">
    <a href="/manual/vote-note.php?id=118507&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118507" title="100% like this...">
    2
    </div>
  </div>
  <a href="#118507" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118507"> &para;</a><div class="date" title="2015-12-16 10:31"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118507">
<div class="phpcode"><code><span class="html">The zip archive will NOT be saved on disk before ZipArchive::close() is called. (ZipArchive::close will be called automatically at the end of the script if you don't write that code.)<br /><br />If you want to delete a file after adding it to the zip archive, you should delete it after ZipArchive::close() is called. Otherwise, the file will be deleted before actually being added into the archive, which will make your zip archive fail to be saved.<br /><br /><span class="default">&lt;?php<br />    $za </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br />    </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'./xc.zip'</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">|</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">);<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="string">'./notes.txt'</span><span class="keyword">;<br />    if( </span><span class="default">true </span><span class="keyword">=== </span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)){<br />        </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    }<br />    if(!</span><span class="default">$za</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">()){<br />        echo </span><span class="string">'failure.'</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59716">  <div class="votes">
    <div id="Vu59716">
    <a href="/manual/vote-note.php?id=59716&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59716">
    <a href="/manual/vote-note.php?id=59716&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59716" title="100% like this...">
    2
    </div>
  </div>
  <a href="#59716" class="name">
  <strong class="user"><em>ponsho</em></strong></a><a class="genanchor" href="#59716"> &para;</a><div class="date" title="2005-12-14 12:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59716">
<div class="phpcode"><code><span class="html">For bisqwit at iki dot fi solution of alternative functions there's just one problem when trying to read the file thats because some bug in fread when handling from popen so it just load 8192 bytes here's the function corrected.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">zip_entry_read</span><span class="keyword">(&amp;</span><span class="default">$res</span><span class="keyword">, </span><span class="default">$nbytes</span><span class="keyword">)<br />    {<br />     while (</span><span class="default">$s </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">],</span><span class="default">1024</span><span class="keyword">)) {<br />     </span><span class="default">$data  </span><span class="keyword">.= </span><span class="default">$s</span><span class="keyword">;<br />     }<br />      return </span><span class="default">$data</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76830">  <div class="votes">
    <div id="Vu76830">
    <a href="/manual/vote-note.php?id=76830&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76830">
    <a href="/manual/vote-note.php?id=76830&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76830" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76830" class="name">
  <strong class="user"><em>flominator at gmx dot net</em></strong></a><a class="genanchor" href="#76830"> &para;</a><div class="date" title="2007-08-01 06:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76830">
<div class="phpcode"><code><span class="html">@bisqwit at iki dot fi: If you're using older versions of PHP this skript might only read the first 8192 bytes. Great thing, anyway!</span></code></div>
  </div>
 </div>
  <div class="note" id="57467">  <div class="votes">
    <div id="Vu57467">
    <a href="/manual/vote-note.php?id=57467&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57467">
    <a href="/manual/vote-note.php?id=57467&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57467" title="50% like this...">
    0
    </div>
  </div>
  <a href="#57467" class="name">
  <strong class="user"><em>barbarinasv at interfree dot it</em></strong></a><a class="genanchor" href="#57467"> &para;</a><div class="date" title="2005-10-05 01:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57467">
<div class="phpcode"><code><span class="html">Function zip_entry_read() written by "bisqwit at iki dot fi" has to be modified to read entire files:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">zip_entry_read</span><span class="keyword">(&amp;</span><span class="default">$res</span><span class="keyword">, </span><span class="default">$nbytes</span><span class="keyword">) {<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">])) {<br />        </span><span class="default">$contents </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">[</span><span class="string">'fp'</span><span class="keyword">], </span><span class="default">$nbytes</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$contents</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79246">  <div class="votes">
    <div id="Vu79246">
    <a href="/manual/vote-note.php?id=79246&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79246">
    <a href="/manual/vote-note.php?id=79246&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79246" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#79246" class="name">
  <strong class="user"><em>alban dot lopez+php dot net at gmail dot com</em></strong></a><a class="genanchor" href="#79246"> &para;</a><div class="date" title="2007-11-16 03:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79246">
<div class="phpcode"><code><span class="html">See this class to make, read Infos or extract ZIP archive.<br />see EasyArchive.class.php on <a href="http://ajaxbrowser.free.fr/" rel="nofollow" target="_blank">http://ajaxbrowser.free.fr/</a> to manage like that ZIP, GZIP, BZIP and TAR archive.<br /><br />&lt;?<br />$ARCHIVE = new zip;<br /><br />$ARCHIVE-&gt;makeZip('./','./toto.zip'); // make an ZIP archive<br />var_export($ARCHIVE-&gt;infosZip('./toto.zip'), false); // get infos of this ZIP archive (without files content)<br />var_export($ARCHIVE-&gt;infosZip('./toto.zip')); // get infos of this ZIP archive (with files content)<br />$ARCHIVE-&gt;extractZip('./toto.zip', './1/'); // <br /><br />class zip<br />{<br />    public function infosZip ($src, $data=true)<br />    {<br />        if (($zip = zip_open(realpath($src))))<br />        {<br />            while (($zip_entry = zip_read($zip)))<br />            {<br />                $path = zip_entry_name($zip_entry);<br />                if (zip_entry_open($zip, $zip_entry, "r"))<br />                {<br />                    $content[$path] = array (<br />                        'Ratio' =&gt; zip_entry_filesize($zip_entry) ? round(100-zip_entry_compressedsize($zip_entry) / zip_entry_filesize($zip_entry)*100, 1) : false,<br />                        'Size' =&gt; zip_entry_compressedsize($zip_entry),<br />                        'NormalSize' =&gt; zip_entry_filesize($zip_entry));<br />                    if ($data)<br />                        $content[$path]['Data'] = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));<br />                    zip_entry_close($zip_entry);<br />                }<br />                else<br />                    $content[$path] = false;<br />            }<br />            zip_close($zip);<br />            return $content;<br />        }<br />        return false;<br />    }<br />    public function extractZip ($src, $dest)<br />    {<br />        $zip = new ZipArchive;<br />        if ($zip-&gt;open($src)===true)<br />        {<br />            $zip-&gt;extractTo($dest);<br />            $zip-&gt;close();<br />            return true;<br />        }<br />        return false;<br />    }<br />    public function makeZip ($src, $dest)<br />    {<br />        $zip = new ZipArchive;<br />        $src = is_array($src) ? $src : array($src);<br />        if ($zip-&gt;open($dest, ZipArchive::CREATE) === true)<br />        {<br />            foreach ($src as $item)<br />                if (file_exists($item))<br />                    $this-&gt;addZipItem($zip, realpath(dirname($item)).'/', realpath($item).'/');<br />            $zip-&gt;close();<br />            return true;<br />        }<br />        return false;<br />    }<br />    private function addZipItem ($zip, $racine, $dir)<br />    {<br />        if (is_dir($dir))<br />        {<br />            $zip-&gt;addEmptyDir(str_replace($racine, '', $dir));<br />            $lst = scandir($dir);<br />                array_shift($lst);<br />                array_shift($lst);<br />            foreach ($lst as $item)<br />                $this-&gt;addZipItem($zip, $racine, $dir.$item.(is_dir($dir.$item)?'/':''));<br />        }<br />        elseif (is_file($dir))<br />            $zip-&gt;addFile($dir, str_replace($racine, '', $dir));<br />    }<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="85585">  <div class="votes">
    <div id="Vu85585">
    <a href="/manual/vote-note.php?id=85585&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85585">
    <a href="/manual/vote-note.php?id=85585&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85585" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#85585" class="name">
  <strong class="user"><em>xsign dot dll at clansuite dot com</em></strong></a><a class="genanchor" href="#85585"> &para;</a><div class="date" title="2008-09-06 09:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85585">
<div class="phpcode"><code><span class="html">If you want to simply extract a strain of a zip file, then use this func. Maybe it helps:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />* This method unzips a directory within a zip-archive<br />* <br />* @author Florian 'x!sign.dll' Wolf<br />* @license LGPL v2 or later<br />* @link <a href="http://www.xsigndll.de" rel="nofollow" target="_blank">http://www.xsigndll.de</a><br />* @link <a href="http://www.clansuite.com" rel="nofollow" target="_blank">http://www.clansuite.com</a><br />*/<br /><br /></span><span class="keyword">function </span><span class="default">extractZip</span><span class="keyword">( </span><span class="default">$zipFile </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$dirFromZip </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">)<br />{    <br />    </span><span class="default">define</span><span class="keyword">(</span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br /><br />    </span><span class="default">$zipDir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">() . </span><span class="default">DIRECTORY_SEPARATOR</span><span class="keyword">;<br />    </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$zipDir</span><span class="keyword">.</span><span class="default">$zipFile</span><span class="keyword">);<br /><br />    if (</span><span class="default">$zip</span><span class="keyword">)<br />    {<br />        while (</span><span class="default">$zip_entry </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">))<br />        {<br />            </span><span class="default">$completePath </span><span class="keyword">= </span><span class="default">$zipDir </span><span class="keyword">. </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">));<br />            </span><span class="default">$completeName </span><span class="keyword">= </span><span class="default">$zipDir </span><span class="keyword">. </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />            <br />            </span><span class="comment">// Walk through path to create non existing directories<br />            // This won't apply to empty directories ! They are created further below<br />            </span><span class="keyword">if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$completePath</span><span class="keyword">) &amp;&amp; </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">'#^' </span><span class="keyword">. </span><span class="default">$dirFromZip </span><span class="keyword">.</span><span class="string">'.*#'</span><span class="keyword">, </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">)) ) )<br />            {<br />                </span><span class="default">$tmp </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                foreach(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$completePath</span><span class="keyword">) AS </span><span class="default">$k</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$tmp </span><span class="keyword">.= </span><span class="default">$k</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">;<br />                    if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">) )<br />                    {<br />                        @</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">);<br />                    }<br />                }<br />            }<br />            <br />            if (</span><span class="default">zip_entry_open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">))<br />            {<br />                if( </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">'#^' </span><span class="keyword">. </span><span class="default">$dirFromZip </span><span class="keyword">.</span><span class="string">'.*#'</span><span class="keyword">, </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">)) ) )<br />                {<br />                    if (</span><span class="default">$fd </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$completeName</span><span class="keyword">, </span><span class="string">'w+'</span><span class="keyword">))<br />                    {<br />                        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">, </span><span class="default">zip_entry_filesize</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">)));<br />                        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br />                    }<br />                    else<br />                    {<br />                        </span><span class="comment">// We think this was an empty directory<br />                        </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$completeName</span><span class="keyword">, </span><span class="default">0777</span><span class="keyword">);<br />                    }<br />                    </span><span class="default">zip_entry_close</span><span class="keyword">(</span><span class="default">$zip_entry</span><span class="keyword">);<br />                }<br />            }<br />        }<br />        </span><span class="default">zip_close</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);<br />    }<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// The call to exctract a path within the zip file<br /></span><span class="default">extractZip</span><span class="keyword">( </span><span class="string">'clansuite.zip'</span><span class="keyword">, </span><span class="string">'core/filters' </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93497">  <div class="votes">
    <div id="Vu93497">
    <a href="/manual/vote-note.php?id=93497&amp;page=function.zip-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93497">
    <a href="/manual/vote-note.php?id=93497&amp;page=function.zip-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93497" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#93497" class="name">
  <strong class="user"><em>strefrextor at gmail [.] com</em></strong></a><a class="genanchor" href="#93497"> &para;</a><div class="date" title="2009-09-13 04:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93497">
<div class="phpcode"><code><span class="html">my basic extract zip file function<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">ezip</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="default">$hedef </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">)<br />    {<br />        </span><span class="default">$root </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">];<br />        </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">zip_open</span><span class="keyword">(</span><span class="default">$root </span><span class="keyword">. </span><span class="default">$zip</span><span class="keyword">);<br />        while(</span><span class="default">$zip_icerik </span><span class="keyword">= </span><span class="default">zip_read</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">)):<br />            </span><span class="default">$zip_dosya </span><span class="keyword">= </span><span class="default">zip_entry_name</span><span class="keyword">(</span><span class="default">$zip_icerik</span><span class="keyword">);<br />            if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$zip_dosya</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">)):<br />                </span><span class="default">$hedef_yol </span><span class="keyword">= </span><span class="default">$root </span><span class="keyword">. </span><span class="default">$hedef </span><span class="keyword">. </span><span class="string">'x/'</span><span class="keyword">.</span><span class="default">$zip_dosya</span><span class="keyword">;<br />                </span><span class="default">touch</span><span class="keyword">(</span><span class="default">$hedef_yol</span><span class="keyword">);<br />                </span><span class="default">$yeni_dosya </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$hedef_yol</span><span class="keyword">, </span><span class="string">'w+'</span><span class="keyword">);<br />                </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$yeni_dosya</span><span class="keyword">, </span><span class="default">zip_entry_read</span><span class="keyword">(</span><span class="default">$zip_icerik</span><span class="keyword">));<br />                </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$yeni_dosya</span><span class="keyword">); <br />            else:<br />                @</span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$root </span><span class="keyword">. </span><span class="default">$hedef </span><span class="keyword">. </span><span class="string">'x/'</span><span class="keyword">.</span><span class="default">$zip_dosya</span><span class="keyword">);<br />            endif;<br />        endwhile;<br />    }<br />    <br />    </span><span class="default">ezip</span><span class="keyword">(</span><span class="string">'files.zip'</span><span class="keyword">, </span><span class="string">'unzip_files/'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.zip-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.zip-open.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.zip.php">Zip Functions</a>

                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.zip-close.php" title="zip_&#8203;close">zip_&#8203;close</a>
                    </li>
                                    <li class="">
                        <a href="function.zip-entry-close.php" title="zip_&#8203;entry_&#8203;close">zip_&#8203;entry_&#8203;close</a>
                    </li>
                                    <li class="">
                        <a href="function.zip-entry-compressedsize.php" title="zip_&#8203;entry_&#8203;compressedsize">zip_&#8203;entry_&#8203;compressedsize</a>
                    </li>
                                    <li class="">
                        <a href="function.zip-entry-compressionmethod.php" title="zip_&#8203;entry_&#8203;compressionmethod">zip_&#8203;entry_&#8203;compressionmethod</a>
                    </li>
                                    <li class="">
                        <a href="function.zip-entry-filesize.php" title="zip_&#8203;entry_&#8203;filesize">zip_&#8203;entry_&#8203;filesize</a>
                    </li>
                                    <li class="">
                        <a href="function.zip-entry-name.php" title="zip_&#8203;entry_&#8203;name">zip_&#8203;entry_&#8203;name</a>
                    </li>
                                    <li class="">
                        <a href="function.zip-entry-open.php" title="zip_&#8203;entry_&#8203;open">zip_&#8203;entry_&#8203;open</a>
                    </li>
                                    <li class="">
                        <a href="function.zip-entry-read.php" title="zip_&#8203;entry_&#8203;read">zip_&#8203;entry_&#8203;read</a>
                    </li>
                                    <li class="current">
                        <a href="function.zip-open.php" title="zip_&#8203;open">zip_&#8203;open</a>
                    </li>
                                    <li class="">
                        <a href="function.zip-read.php" title="zip_&#8203;read">zip_&#8203;read</a>
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
