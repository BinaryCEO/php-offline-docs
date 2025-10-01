<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gethostbyaddr - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gethostbyaddr.php">
 <link rel="shorturl" href="https://www.php.net/gethostbyaddr">
 <link rel="alternate" href="https://www.php.net/gethostbyaddr" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.fsockopen.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gethostbyname.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gethostbyaddr.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gethostbyaddr.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gethostbyaddr.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gethostbyaddr.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gethostbyaddr.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gethostbyaddr.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gethostbyaddr.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gethostbyaddr.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gethostbyaddr.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gethostbyaddr.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gethostbyaddr.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the Internet host name corresponding to a given IP address" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gethostbyaddr - Manual" />
<meta name="twitter:description" content="Get the Internet host name corresponding to a given IP address" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gethostbyaddr - Manual" />
<meta itemprop="description" content="Get the Internet host name corresponding to a given IP address" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the Internet host name corresponding to a given IP address" />

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
        <a href="function.gethostbyname.php">
          gethostbyname &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.fsockopen.php">
          &laquo; fsockopen        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.network.php'>Network</a></li>      <li><a href='ref.network.php'>Network Functions</a></li>      </ul>
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
            <option value='en/function.gethostbyaddr.php' selected="selected">English</option>
            <option value='de/function.gethostbyaddr.php'>German</option>
            <option value='es/function.gethostbyaddr.php'>Spanish</option>
            <option value='fr/function.gethostbyaddr.php'>French</option>
            <option value='it/function.gethostbyaddr.php'>Italian</option>
            <option value='ja/function.gethostbyaddr.php'>Japanese</option>
            <option value='pt_BR/function.gethostbyaddr.php'>Brazilian Portuguese</option>
            <option value='ru/function.gethostbyaddr.php'>Russian</option>
            <option value='tr/function.gethostbyaddr.php'>Turkish</option>
            <option value='uk/function.gethostbyaddr.php'>Ukrainian</option>
            <option value='zh/function.gethostbyaddr.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gethostbyaddr" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gethostbyaddr</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gethostbyaddr</span> &mdash; <span class="dc-title">
   Get the Internet host name corresponding to a given IP address
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.gethostbyaddr-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gethostbyaddr</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$ip</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns the host name of the Internet host specified by
   <code class="parameter">ip</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.gethostbyaddr-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ip</code></dt>
     <dd>
      <p class="para">
       The host IP address.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.gethostbyaddr-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the host name on success, the unmodified <code class="parameter">ip</code>
   on failure, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on malformed input.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.gethostbyaddr-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4719">
    <p><strong>Example #1 A simple <span class="function"><strong>gethostbyaddr()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$hostname </span><span style="color: #007700">= </span><span style="color: #0000BB">gethostbyaddr</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_ADDR'</span><span style="color: #007700">]);<br /><br />echo </span><span style="color: #0000BB">$hostname</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.gethostbyaddr-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gethostbyname.php" class="function" rel="rdfs-seeAlso">gethostbyname()</a> - Get the IPv4 address corresponding to a given Internet host name</span></li>
    <li><span class="function"><a href="function.gethostbynamel.php" class="function" rel="rdfs-seeAlso">gethostbynamel()</a> - Get a list of IPv4 addresses corresponding to a given Internet host
   name</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/gethostbyaddr.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gethostbyaddr%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gethostbyaddr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gethostbyaddr.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">32 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="26696">  <div class="votes">
    <div id="Vu26696">
    <a href="/manual/vote-note.php?id=26696&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26696">
    <a href="/manual/vote-note.php?id=26696&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26696" title="65% like this...">
    36
    </div>
  </div>
  <a href="#26696" class="name">
  <strong class="user"><em>lukevb_at_iafrica.com</em></strong></a><a class="genanchor" href="#26696"> &para;</a><div class="date" title="2002-11-09 02:43"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26696">
<div class="phpcode"><code><span class="html">Sometimes when using $_SERVER['HTTP_X_FORWARDED_FOR'] OR $_SERVER['REMOTE_ADDR'] more than 1 IP address is returned, for example '155.240.132.261, 196.250.25.120'. When this string is passed as an argument for gethostbyaddr() PHP gives the following error: Warning: Address is not a valid IPv4 or IPv6 address in... <br /><br />To work around this I use the following code to extract the first IP address from the string and discard the rest. (If you wish to use the other IPs they will be in the other elements of the $ips array).<br /><br />if (strstr($remoteIP, ', ')) {<br />    $ips = explode(', ', $remoteIP);<br />    $remoteIP = $ips[0];<br />}<br /><br />Hope this helps someone :)</span></code></div>
  </div>
 </div>
  <div class="note" id="46869">  <div class="votes">
    <div id="Vu46869">
    <a href="/manual/vote-note.php?id=46869&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46869">
    <a href="/manual/vote-note.php?id=46869&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46869" title="62% like this...">
    14
    </div>
  </div>
  <a href="#46869" class="name">
  <strong class="user"><em>king dot macro at gmail dot com</em></strong></a><a class="genanchor" href="#46869"> &para;</a><div class="date" title="2004-10-26 07:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46869">
<div class="phpcode"><code><span class="html">The problem of broken DNS servers was causing me a problem because i had a page for user statistics that required around 20 reverse dns lookups to be done, and even as many as 5/6 of them being broken was causing a huge delay in loading the page. so i wrote a function that uses a UDP socket to talk directly to the DNS server (instead of going via the normal gethostbyaddr function) this let me set a timeout.<br /><br />The only requirement is that your DNS server must be able to do recursive lookups, it wont go to other DNS servers if its told to... and of course you need to know your DNS servers IP address :-)<br /><br />&lt;?<br />function gethostbyaddr_timeout($ip, $dns, $timeout=1000)<br />{<br />    // random transaction number (for routers etc to get the reply back)<br />    $data = rand(0, 99);<br />    // trim it to 2 bytes<br />    $data = substr($data, 0, 2);<br />    // request header<br />    $data .= "\1\0\0\1\0\0\0\0\0\0";<br />    // split IP up<br />    $bits = explode(".", $ip);<br />    // error checking<br />    if (count($bits) != 4) return "ERROR";<br />    // there is probably a better way to do this bit...<br />    // loop through each segment<br />    for ($x=3; $x&gt;=0; $x--)<br />    {<br />        // needs a byte to indicate the length of each segment of the request<br />        switch (strlen($bits[$x]))<br />        {<br />            case 1: // 1 byte long segment<br />                $data .= "\1"; break;<br />            case 2: // 2 byte long segment<br />                $data .= "\2"; break;<br />            case 3: // 3 byte long segment<br />                $data .= "\3"; break;<br />            default: // segment is too big, invalid IP<br />                return "INVALID";<br />        }<br />        // and the segment itself<br />        $data .= $bits[$x];<br />    }<br />    // and the final bit of the request<br />    $data .= "\7in-addr\4arpa\0\0\x0C\0\1";<br />    // create UDP socket<br />    $handle = @fsockopen("udp://$dns", 53);<br />    // send our request (and store request size so we can cheat later)<br />    $requestsize=@fwrite($handle, $data);<br /><br />    @socket_set_timeout($handle, $timeout - $timeout%1000, $timeout%1000);<br />    // hope we get a reply<br />    $response = @fread($handle, 1000);<br />    @fclose($handle);<br />    if ($response == "")<br />        return $ip;<br />    // find the response type<br />    $type = @unpack("s", substr($response, $requestsize+2));<br />    if ($type[1] == 0x0C00)  // answer<br />    {<br />        // set up our variables<br />        $host="";<br />        $len = 0;<br />        // set our pointer at the beginning of the hostname<br />        // uses the request size from earlier rather than work it out<br />        $position=$requestsize+12;<br />        // reconstruct hostname<br />        do<br />        {<br />            // get segment size<br />            $len = unpack("c", substr($response, $position));<br />            // null terminated string, so length 0 = finished<br />            if ($len[1] == 0)<br />                // return the hostname, without the trailing .<br />                return substr($host, 0, strlen($host) -1);<br />            // add segment to our host<br />            $host .= substr($response, $position+1, $len[1]) . ".";<br />            // move pointer on to the next segment<br />            $position += $len[1] + 1;<br />        }<br />        while ($len != 0);<br />        // error - return the hostname we constructed (without the . on the end)<br />        return $ip;<br />    }<br />    return $ip;<br />}<br />?&gt;<br /><br />This could be expanded quite a bit and improved but it works and i've seen quite a few people trying various methods to achieve something like this so i decided to post it here. on most servers it should also be more efficient than other methods such as calling nslookup because it doesn't need to run external programs<br /><br />Note: I'm more a C person than a PHP person, so just ignore it if anything hasn't been done the *recomended* way :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="57553">  <div class="votes">
    <div id="Vu57553">
    <a href="/manual/vote-note.php?id=57553&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57553">
    <a href="/manual/vote-note.php?id=57553&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57553" title="61% like this...">
    3
    </div>
  </div>
  <a href="#57553" class="name">
  <strong class="user"><em>tom</em></strong></a><a class="genanchor" href="#57553"> &para;</a><div class="date" title="2005-10-07 01:14"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57553">
<div class="phpcode"><code><span class="html">Be careful with the usage of this function - it will slow down a server to a crawl if called a lot and the slowness won't be reflected in any of the obvious places, like CPU usage, apache requests, SQL etc. When you do use it make a special note of where!</span></code></div>
  </div>
 </div>
  <div class="note" id="123563">  <div class="votes">
    <div id="Vu123563">
    <a href="/manual/vote-note.php?id=123563&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123563">
    <a href="/manual/vote-note.php?id=123563&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123563" title="54% like this...">
    1
    </div>
  </div>
  <a href="#123563" class="name">
  <strong class="user"><em>Vincent</em></strong></a><a class="genanchor" href="#123563"> &para;</a><div class="date" title="2019-01-29 07:11"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123563">
<div class="phpcode"><code><span class="html">I discovered that gethostbyaddr sometimes returned the same host name with some uppercase letters in it and sometimes with all lowercase letters.<br /><br />example:<br /><br />d54c34fa1.access.example.com<br />d54C34FA1.access.example.com<br /><br />This is probably not the fault of gethostbyaddr, but this can be a problem when comparing or storing, because it will give two entries instead of one.<br /><br />A simple solution to this is to use strtolower on the host name.</span></code></div>
  </div>
 </div>
  <div class="note" id="125456">  <div class="votes">
    <div id="Vu125456">
    <a href="/manual/vote-note.php?id=125456&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125456">
    <a href="/manual/vote-note.php?id=125456&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125456" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125456" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125456"> &para;</a><div class="date" title="2020-10-23 08:41"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125456">
<div class="phpcode"><code><span class="html">There is 1 bug in gethostbyaddr_timeout() function that king dot macro at gmail dot com posted in the most important line of all, setting the timeout with socket_set_timeout(). It should be:<br /><br />@socket_set_timeout($handle, intdiv($timeout_ms, 1000), $timeout_ms % 1000);<br /><br />I'd also make the $dns parameter last and optional and parse it from /etc/resolve.conf (or something else) if not given.</span></code></div>
  </div>
 </div>
  <div class="note" id="62449">  <div class="votes">
    <div id="Vu62449">
    <a href="/manual/vote-note.php?id=62449&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62449">
    <a href="/manual/vote-note.php?id=62449&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62449" title="51% like this...">
    1
    </div>
  </div>
  <a href="#62449" class="name">
  <strong class="user"><em>oryan at zareste dot com</em></strong></a><a class="genanchor" href="#62449"> &para;</a><div class="date" title="2006-02-28 03:17"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62449">
<div class="phpcode"><code><span class="html">If all else fails, but you have shell access, Unix/Linux servers can use this for a timeout response:<br /><br />shell_exec('host -W 2 0.0.0.0');<br /><br />Where 0.0.0.0 is of course the IP, and '2' is the number of seconds for the timeout.  This returns a more detailed string of info, with some additional text which might vary depending on the system, so if you want a string with the hostname and nothing else, you'll have to do some substring cutting.  There should be an equivalent of 'host' for Windows users to execute, but it isn't my platform.</span></code></div>
  </div>
 </div>
  <div class="note" id="94386">  <div class="votes">
    <div id="Vu94386">
    <a href="/manual/vote-note.php?id=94386&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94386">
    <a href="/manual/vote-note.php?id=94386&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94386" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94386" class="name">
  <strong class="user"><em>marco[DOT]ceppi[@T]seacrow[DOT]org</em></strong></a><a class="genanchor" href="#94386"> &para;</a><div class="date" title="2009-11-01 07:24"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94386">
<div class="phpcode"><code><span class="html">Anonymous has a good point (though I don't agree with pushing to execution to shell unless I have to. However this is a faster example (explode then loop is a little too intensive for a simple check)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">gethost </span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">)<br />{<br />    </span><span class="comment">//Make sure the input is not going to do anything unexpected<br />    //IPs must be in the form x.x.x.x with each x as a number<br />    <br />    </span><span class="keyword">if( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.]<br />(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/'</span><span class="keyword">, </span><span class="default">$ip</span><span class="keyword">) )<br />    {<br />        </span><span class="default">$host </span><span class="keyword">= `</span><span class="string">host </span><span class="default">$ip</span><span class="keyword">`;<br />        return ((</span><span class="default">$host </span><span class="keyword">? </span><span class="default">end </span><span class="keyword">( </span><span class="default">explode </span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">)) : </span><span class="default">$ip</span><span class="keyword">));<br />    }<br />    else<br />    {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Though to be honest I would use:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">gethost </span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">)<br />{<br />    return ( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.]<br />(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/'</span><span class="keyword">, </span><span class="default">$ip</span><span class="keyword">) ) ? </span><span class="default">gethostbyaddr</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">) : </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40343">  <div class="votes">
    <div id="Vu40343">
    <a href="/manual/vote-note.php?id=40343&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40343">
    <a href="/manual/vote-note.php?id=40343&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40343" title="50% like this...">
    0
    </div>
  </div>
  <a href="#40343" class="name">
  <strong class="user"><em>Matt AKA Junkie</em></strong></a><a class="genanchor" href="#40343"> &para;</a><div class="date" title="2004-02-29 04:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40343">
<div class="phpcode"><code><span class="html">Since my little ISP thing isn't globally acceptable, here's an update.<br /><br />&lt;?<br />function getisp($ip='') {<br />    if ($ip=='') $ip = $_SERVER['REMOTE_ADDR'];<br />    $longisp = @gethostbyaddr($ip);<br />    $isp = explode('.', $longisp);<br />    $isp = array_reverse($isp);<br />    $tmp = $isp[1];<br />    if (preg_match("/\&lt;(org?|com?|net)\&gt;/i", $tmp)) {<br />        $myisp = $isp[2].'.'.$isp[1].'.'.$isp[0];<br />    } else {<br />        $myisp = $isp[1].'.'.$isp[0];<br />    }<br />    preg_match("/[0-9]{1,3}\.[0-9]{1,3}/", $myisp) ? return 'ISP lookup failed.' : return $myisp;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="26641">  <div class="votes">
    <div id="Vu26641">
    <a href="/manual/vote-note.php?id=26641&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26641">
    <a href="/manual/vote-note.php?id=26641&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26641" title="50% like this...">
    0
    </div>
  </div>
  <a href="#26641" class="name">
  <strong class="user"><em>abe at abe2k dot net</em></strong></a><a class="genanchor" href="#26641"> &para;</a><div class="date" title="2002-11-07 06:32"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26641">
<div class="phpcode"><code><span class="html">gethostbyaddr() doesn't seem to be able to resolve ip6.int<br />(ipv6) adresses, so I made a function that can, and works<br />just like the normal gethostbyaddr().<br /><br />You need dig and ipv6calc, dig should come with most<br />distributions, if not, install bind from <a href="http://www.isc.org." rel="nofollow" target="_blank">http://www.isc.org.</a><br />ipv6calc can be found at <a href="http://www.bieringer.de/linux/IPv6/ipv6calc/index.html." rel="nofollow" target="_blank">http://www.bieringer.de/linux/IPv6/ipv6calc/index.html.</a><br /><br /> function gethostbyaddr6($ip6) {<br />  $ipv6calc = "/bin/ipv6calc";<br />  $dig = "/usr/bin/dig";<br />  $file = popen($ipv6calc." --in ipv6addr --out revnibbles.int ".escapeshellarg($ip6), r);<br />  $ip = fread($file, 128);<br />  pclose($file);<br />  if ((substr($ip, 0, 5) == "Error") || (!$ip)) return "Address is not a valid IPv6 address";<br />  $file = popen($dig." ptr ".$ip, r);                <br />   while (!feof ($file)) {<br />    $buffer = fgets($file, 128);<br />    if (substr($buffer, 0, 1) == ";") continue;<br />    $buffer = explode(" ", $buffer);<br />    if ($buffer[3] == "PTR") {<br />     $host = substr(trim($buffer[4]), 0, -1);<br />     pclose($file);<br />     return $host;<br />    }<br />   }<br />  pclose($file);<br />  return $ip6;<br /> }<br /><br /> echo gethostbyaddr6($_SERVER[REMOTE_ADDR]);</span></code></div>
  </div>
 </div>
  <div class="note" id="13291">  <div class="votes">
    <div id="Vu13291">
    <a href="/manual/vote-note.php?id=13291&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13291">
    <a href="/manual/vote-note.php?id=13291&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13291" title="50% like this...">
    0
    </div>
  </div>
  <a href="#13291" class="name">
  <strong class="user"><em>phalkon at nospam dot home dot com</em></strong></a><a class="genanchor" href="#13291"> &para;</a><div class="date" title="2001-06-08 03:58"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13291">
<div class="phpcode"><code><span class="html">Be cautious when looking up many hostnames.  If your DNS server is slow to respond, you may have to pump up your Max execution time for your scripts, otherwise, it will timeout.  I found that even 3 unresolvable hosts can cause a 30 second delay in processing.</span></code></div>
  </div>
 </div>
  <div class="note" id="99648">  <div class="votes">
    <div id="Vu99648">
    <a href="/manual/vote-note.php?id=99648&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99648">
    <a href="/manual/vote-note.php?id=99648&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99648" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#99648" class="name">
  <strong class="user"><em>Stuart Macdonald</em></strong></a><a class="genanchor" href="#99648"> &para;</a><div class="date" title="2010-08-28 05:07"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99648">
<div class="phpcode"><code><span class="html">Here's a simple function that uses Dig to obtain the hostname for a given IP address. If no hostname can be found it returns the IP again.<br /><br />Works only on linux / unix, or whatever other platform with dig installed as a command line utility.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">tryGetHost</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">)<br />    {<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"dig +short -x </span><span class="default">$ip</span><span class="string"> 2&gt;&amp;1"</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">, </span><span class="default">$retval</span><span class="keyword">);<br />        if (</span><span class="default">$retval </span><span class="keyword">!= </span><span class="default">0</span><span class="keyword">)<br />        { <br />            </span><span class="comment">// there was an error performing the command<br />        </span><span class="keyword">} <br />        else <br />        {<br />            </span><span class="default">$x</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />            while (</span><span class="default">$x </span><span class="keyword">&lt; (</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">)))<br />            {<br />                </span><span class="default">$string</span><span class="keyword">.= </span><span class="default">$output</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">];<br />                </span><span class="default">$x</span><span class="keyword">++;<br />            }<br />        }<br />        <br />        if (empty(</span><span class="default">$string</span><span class="keyword">))<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">$ip</span><span class="keyword">;<br />        else </span><span class="comment">//remove the trailing dot<br />            </span><span class="default">$string </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br />        <br />        return </span><span class="default">$string</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="25373">  <div class="votes">
    <div id="Vu25373">
    <a href="/manual/vote-note.php?id=25373&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25373">
    <a href="/manual/vote-note.php?id=25373&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25373" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#25373" class="name">
  <strong class="user"><em>pulstar at mail dot com</em></strong></a><a class="genanchor" href="#25373"> &para;</a><div class="date" title="2002-09-20 02:59"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25373">
<div class="phpcode"><code><span class="html">If you need to store an IP addresses in a database, you can convert and store it in an INT type column (4 bytes). The functions below can convert IP addresses to its integer decimal value and vice-versa.<br /><br />function ip2dec($ipaddr) {<br />  $base=explode(".",$ipaddr);<br />  $decimal=(double) $base[0]*16777216;<br />  $decimal+=$base[1]*65536;<br />  $decimal+=$base[2]*256;<br />  $decimal+=$base[3];<br />  if($decimal&gt;2147483647) {<br />    $decimal-=4294967296;<br />  }<br />  return (int) $decimal;<br />}<br /><br />function dec2ip($dec) {<br />  if($dec&lt;0) {<br />    $dec=(double) 4294967296+$dec;<br />  }<br />  if($dec&gt;16777215) {<br />    $ip=$dec-(intval($dec/256)*256);<br />    $dec=(double) intval($dec/256);<br />  } else $ip="0";<br />  if($dec&gt;65535) {<br />    $ip=($dec-(intval($dec/256)*256)).".".$ip;<br />    $dec=(double) intval($dec/256);<br />  } else $ip="0.".$ip;<br />  if($dec&gt;255) {<br />    $ip=($dec-(intval($dec/256)*256)).".".$ip;<br />    $dec=(double) intval($dec/256);<br />  } else $ip="0.".$ip;<br />  $ip=$dec.".".$ip;<br />  return (string) $ip;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="101820">  <div class="votes">
    <div id="Vu101820">
    <a href="/manual/vote-note.php?id=101820&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101820">
    <a href="/manual/vote-note.php?id=101820&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101820" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#101820" class="name">
  <strong class="user"><em>james at trnxs dot net</em></strong></a><a class="genanchor" href="#101820"> &para;</a><div class="date" title="2011-01-12 12:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101820">
<div class="phpcode"><code><span class="html">You should be careful in the use of $_SERVER['HTTP_X_FORWARDED_FOR'], as I discovered, once using Amazon AWS's Elastic Load Balancer's, this value may be a comma separated list of IP addresses and will thusly not compare as conceived in almost every example I have seen posted by users in the comments.</span></code></div>
  </div>
 </div>
  <div class="note" id="123908">  <div class="votes">
    <div id="Vu123908">
    <a href="/manual/vote-note.php?id=123908&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123908">
    <a href="/manual/vote-note.php?id=123908&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123908" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#123908" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#123908"> &para;</a><div class="date" title="2019-06-06 01:27"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123908">
<div class="phpcode"><code><span class="html">This function does respect overrides made in the 'hosts' file, at least on Linux.</span></code></div>
  </div>
 </div>
  <div class="note" id="10608">  <div class="votes">
    <div id="Vu10608">
    <a href="/manual/vote-note.php?id=10608&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10608">
    <a href="/manual/vote-note.php?id=10608&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10608" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#10608" class="name">
  <strong class="user"><em>andy at occ dot nu</em></strong></a><a class="genanchor" href="#10608"> &para;</a><div class="date" title="2001-01-12 06:48"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10608">
<div class="phpcode"><code><span class="html">if the user is sitting behind a proxy server, you can do this;
<br />
<br />&lt;?
<br />    if ($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"] != ""){
<br />        $IP = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
<br />        $proxy = $HTTP_SERVER_VARS["REMOTE_ADDR"];
<br />        $host = @gethostbyaddr($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]);
<br />    }else{
<br />        $IP = $HTTP_SERVER_VARS["REMOTE_ADDR"];
<br />        $host = @gethostbyaddr($HTTP_SERVER_VARS["REMOTE_ADDR"]);
<br />    }
<br />?&gt;
<br />
<br />ps; i use $HTTP_SERVER_VARS["something"] instead of just $something;
<br />you can get most of the $HTTP_SERVER_VARS by just using there $something equivalent, see the manual for that (preserved variables)</span></code></div>
  </div>
 </div>
  <div class="note" id="34598">  <div class="votes">
    <div id="Vu34598">
    <a href="/manual/vote-note.php?id=34598&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34598">
    <a href="/manual/vote-note.php?id=34598&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34598" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#34598" class="name">
  <strong class="user"><em>grimNOSPAMtraffic at hotNOSPAMmail dot com</em></strong></a><a class="genanchor" href="#34598"> &para;</a><div class="date" title="2003-07-31 02:31"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34598">
<div class="phpcode"><code><span class="html">If you have found the host of the ip, the shortest way to cut it not to display the full hostname to the public would be:<br /><br />$host = substr($host, strpos($host, ".") + 1);<br /><br />P.S. strpos() can also be easily used if you want to put "*" for every simbol you ommit, like so:<br /><br />$os = strpos($host, ".");<br />$host = substr($host, $os);<br />$host = str_repeat("*", $os) . $host;<br /><br />--McTrafik</span></code></div>
  </div>
 </div>
  <div class="note" id="23346">  <div class="votes">
    <div id="Vu23346">
    <a href="/manual/vote-note.php?id=23346&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23346">
    <a href="/manual/vote-note.php?id=23346&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23346" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#23346" class="name">
  <strong class="user"><em>ven  at  PragaKhan dot com</em></strong></a><a class="genanchor" href="#23346"> &para;</a><div class="date" title="2002-07-16 03:55"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23346">
<div class="phpcode"><code><span class="html">$REMOTE_HOST or $_SERVER['REMOTE_HOST'] will give you the reversed ip IF apache is setup to do hostname lookups.<br /><br />HostnameLookups On</span></code></div>
  </div>
 </div>
  <div class="note" id="21870">  <div class="votes">
    <div id="Vu21870">
    <a href="/manual/vote-note.php?id=21870&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21870">
    <a href="/manual/vote-note.php?id=21870&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21870" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#21870" class="name">
  <strong class="user"><em>elpmille at indiana dot edu</em></strong></a><a class="genanchor" href="#21870"> &para;</a><div class="date" title="2002-05-30 12:26"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21870">
<div class="phpcode"><code><span class="html">I previously used something very similar to what god@weaponzero.f2s.com posted but found it to be quite tedious for getting the 'nicehost'. This method below is a lot cleaner, and it also works for numeric addresses.<br /><br />function nicehost($host) {<br />    if (ereg('^([0-9]{1,3}\.){3}[0-9]{1,3}$', $host)) {<br />        return(ereg_replace('\.[0-9]{1,3}$', '.*', $host));<br />    } else {<br />        return(ereg_replace('^.{' . strpos($host, '.') . '}', '*', $host));<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="25226">  <div class="votes">
    <div id="Vu25226">
    <a href="/manual/vote-note.php?id=25226&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25226">
    <a href="/manual/vote-note.php?id=25226&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25226" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#25226" class="name">
  <strong class="user"><em>alexey at ozerov dot de</em></strong></a><a class="genanchor" href="#25226"> &para;</a><div class="date" title="2002-09-15 10:15"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25226">
<div class="phpcode"><code><span class="html">This function seems to be very slow on IIS 4.0 Server (Win32). I use system call to NSLOOKUP instead to get PC-Hostname:
<br />
<br />unset ($execoutput);
<br />exec ("nslookup $IPAdresse 2&gt;nul",$execoutput,$nslookstatus);
<br />if (isset ($execoutput[3]) &amp;&amp; ereg ("^Name: *([A-Za-z0-9]{2,})\.",$execoutput[3],$regs)) 
<br />$nslookname=strtoupper($regs[1]);
<br />else $nslookname="Unknown";
<br />
<br />Note by members: This is not portable to Windows platforms. so you would be better to stay with our function.</span></code></div>
  </div>
 </div>
  <div class="note" id="100105">  <div class="votes">
    <div id="Vu100105">
    <a href="/manual/vote-note.php?id=100105&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100105">
    <a href="/manual/vote-note.php?id=100105&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100105" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#100105" class="name">
  <strong class="user"><em>dhjdhj at gmail dot com</em></strong></a><a class="genanchor" href="#100105"> &para;</a><div class="date" title="2010-09-25 06:58"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100105">
<div class="phpcode"><code><span class="html">I have observed that there are problems with all approaches that use the existence of an IP address to verify that the name being looked up actually exists.<br /><br />If you're using opendns, then a request to a non-existent server returns an IP address anyway, the address being one for an opendns server. This is process is presumably in place so that errant URLs in browser requests take you to a "legitimate" page, i.e, the openDNS website where they can notify you of a problem.<br /><br />Unfortunately, that mechanism seems to occur for ANY non-existent hostname. Appending a single period to the hostname does not seem to help.</span></code></div>
  </div>
 </div>
  <div class="note" id="83654">  <div class="votes">
    <div id="Vu83654">
    <a href="/manual/vote-note.php?id=83654&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83654">
    <a href="/manual/vote-note.php?id=83654&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83654" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#83654" class="name">
  <strong class="user"><em>robbakAgmail_com</em></strong></a><a class="genanchor" href="#83654"> &para;</a><div class="date" title="2008-06-05 11:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83654">
<div class="phpcode"><code><span class="html">it appears that gethostbyname() fails if the domain name contains unicode. Example:<br /><br /> $ host 10.10.10.128<br />128.10.10.10.in-addr.arpa domain name pointer PC-de-S\130bastien.flexi.robbak.com.<br /> $ php   <br /><span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">gethostbyaddr</span><span class="keyword">( </span><span class="string">'10.10.10.128' </span><span class="keyword">); </span><span class="default">?&gt;<br /></span>10.10.10.128<br /><br />gethostbyaddr is listed as unicode compatable in version 6, so a fix may be in the works.</span></code></div>
  </div>
 </div>
  <div class="note" id="51820">  <div class="votes">
    <div id="Vu51820">
    <a href="/manual/vote-note.php?id=51820&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51820">
    <a href="/manual/vote-note.php?id=51820&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51820" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#51820" class="name">
  <strong class="user"><em>reinhard at ess dot co dot at</em></strong></a><a class="genanchor" href="#51820"> &para;</a><div class="date" title="2005-04-12 02:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51820">
<div class="phpcode"><code><span class="html">tried out some of the examples below, but no one worked for me.<br />(<br />"host" returns something if domain-name wasn't found<br />"gethostbyaddr" has a too long  timeout when it fails<br />"the udp-example" returns some strange characters...<br />)<br />so i have changed the "host"-example a little bit. hope someone can need it. (maybe with little changes like without error-description)<br /><br />&lt;?<br />function gethost($ip)<br />{<br />   $host = `host $ip`;<br />   $host=end(explode(' ',$host));<br />   $host=substr($host,0,strlen($host)-2);<br />   $chk=split("\(",$host);<br />   if($chk[1]) return $ip." (".$chk[1].")";<br />   else return $host;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="40770">  <div class="votes">
    <div id="Vu40770">
    <a href="/manual/vote-note.php?id=40770&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40770">
    <a href="/manual/vote-note.php?id=40770&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40770" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#40770" class="name">
  <strong class="user"><em>webmaster at script-tease dot net</em></strong></a><a class="genanchor" href="#40770"> &para;</a><div class="date" title="2004-03-14 04:37"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40770">
<div class="phpcode"><code><span class="html">gethostbyaddr() tends to lag on various systems for whatever reason. Here are two functions that should prove their worth speedwise.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// For Linux...<br /><br /></span><span class="keyword">function </span><span class="default">gethost </span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">) {<br /> </span><span class="default">$host </span><span class="keyword">= `</span><span class="string">host </span><span class="default">$ip</span><span class="keyword">`;<br /> return ((</span><span class="default">$host </span><span class="keyword">? </span><span class="default">end </span><span class="keyword">( </span><span class="default">explode </span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">)) : </span><span class="default">$ip</span><span class="keyword">));<br />}<br /><br /></span><span class="comment">// For Win32...<br /><br /></span><span class="keyword">function </span><span class="default">nslookup </span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">) {<br /> </span><span class="default">$host </span><span class="keyword">= </span><span class="default">split</span><span class="keyword">(</span><span class="string">'Name:'</span><span class="keyword">,`</span><span class="string">nslookup </span><span class="default">$ip</span><span class="keyword">`);<br /> return ( </span><span class="default">trim </span><span class="keyword">(isset(</span><span class="default">$host</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) ? </span><span class="default">str_replace </span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">.</span><span class="string">'Address:  '</span><span class="keyword">.</span><span class="default">$ip</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) : </span><span class="default">$ip</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />Pretty basic, but it should get the job done.</span></code></div>
  </div>
 </div>
  <div class="note" id="25608">  <div class="votes">
    <div id="Vu25608">
    <a href="/manual/vote-note.php?id=25608&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25608">
    <a href="/manual/vote-note.php?id=25608&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25608" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#25608" class="name">
  <strong class="user"><em>dominique at vdx dot nl</em></strong></a><a class="genanchor" href="#25608"> &para;</a><div class="date" title="2002-09-30 05:14"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25608">
<div class="phpcode"><code><span class="html">To convert an IP to a numeric value, just use the ip2long (...) function.<br /><br />Vice versa; use: long2ip (...)</span></code></div>
  </div>
 </div>
  <div class="note" id="105566">  <div class="votes">
    <div id="Vu105566">
    <a href="/manual/vote-note.php?id=105566&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105566">
    <a href="/manual/vote-note.php?id=105566&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105566" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#105566" class="name">
  <strong class="user"><em>Mark in Sussex</em></strong></a><a class="genanchor" href="#105566"> &para;</a><div class="date" title="2011-08-28 11:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105566">
<div class="phpcode"><code><span class="html">If you use gethostbyaddr() with a bad IP address then it will send an error message to the error log.
<br />If you don't want your error log file getting too big then first check that the IP address is valid.
<br />
<br />In the following example I first check if the IP number starts with a number,
<br />if not then don't use gethostbyaddr('..')
<br />
<br /><span class="default">&lt;?php
<br />  $IP </span><span class="keyword">= </span><span class="string">"BadValue.123.123.123"</span><span class="keyword">;
<br />  if(</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$IP</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">){
<br />    </span><span class="default">$ServerIP </span><span class="keyword">= </span><span class="default">gethostbyaddr</span><span class="keyword">(</span><span class="default">$IP</span><span class="keyword">);
<br />  } else {
<br />    </span><span class="default">$ServerIP </span><span class="keyword">= </span><span class="default">$IP</span><span class="keyword">; </span><span class="comment">// A bad address.
<br />  </span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40788">  <div class="votes">
    <div id="Vu40788">
    <a href="/manual/vote-note.php?id=40788&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40788">
    <a href="/manual/vote-note.php?id=40788&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40788" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#40788" class="name">
  <strong class="user"><em>Matt AKA Junkie</em></strong></a><a class="genanchor" href="#40788"> &para;</a><div class="date" title="2004-03-14 08:29"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40788">
<div class="phpcode"><code><span class="html">Going through numerous tests, the following results are concluded:<br /><br />&lt;?<br />// If you're using a server on Windows, this is faster<br />function getisp($ip='') {<br />   if ($ip=='') $ip = $_SERVER['REMOTE_ADDR'];<br />   $longisp = @gethostbyaddr($ip);<br />   $isp = explode('.', $longisp);<br />   $isp = array_reverse($isp);<br />   $tmp = $isp[1];<br />   if (preg_match("/\&lt;(org?|com?|net)\&gt;/i", $tmp)) {<br />       $myisp = $isp[2].'.'.$isp[1].'.'.$isp[0];<br />   } else {<br />       $myisp = $isp[1].'.'.$isp[0];<br />   }<br />   if (preg_match("/[0-9]{1,3}\.[0-9]{1,3}/", $myisp))<br />      return 'ISP lookup failed.';<br />   return $myisp;<br />}<br /><br />// If your server is on a *nix system, this is faster<br />function gethost ($ip) {<br /> $host = `host $ip`;<br /> return (($host ? end ( explode (' ', $host)) : $ip));<br />}<br /><br />// be warned, however, that gethost() will issue a warning<br />// if safe mode is on with the use of backticked variables<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="25091">  <div class="votes">
    <div id="Vu25091">
    <a href="/manual/vote-note.php?id=25091&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25091">
    <a href="/manual/vote-note.php?id=25091&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25091" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#25091" class="name">
  <strong class="user"><em>stephane at metacites dot net</em></strong></a><a class="genanchor" href="#25091"> &para;</a><div class="date" title="2002-09-10 07:17"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25091">
<div class="phpcode"><code><span class="html">gethostbyaddr_with_cache()<br /><br />As someone truely said upper in the forum, some unresolved addresses may slow down your script to the point it times out.<br /><br />Althought I had thought gethostbyaddr() would use some kind of cache, it doesn't seem to when the IP is unresolved (at least on my win machine).<br /><br />So, I've coded a little gethostbyaddr_with_cache() function that will greatly speed your page if you have many gethostbyaddr() to perform on the same page.<br /><br />function gethostbyaddr_with_cache($a) {<br />  global $dns_cache;<br />  if ($dns_cache[$a]) {<br />    return $dns_cache[$a];<br />    } else {<br />    $temp = gethostbyaddr($a);<br />    $dns_cache[$a] = $temp;<br />    return $temp;<br />  }<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="79887">  <div class="votes">
    <div id="Vu79887">
    <a href="/manual/vote-note.php?id=79887&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79887">
    <a href="/manual/vote-note.php?id=79887&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79887" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#79887" class="name">
  <strong class="user"><em>billyblue</em></strong></a><a class="genanchor" href="#79887"> &para;</a><div class="date" title="2007-12-17 08:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79887">
<div class="phpcode"><code><span class="html">I just spent a dickens of a time trying to figure out why my gethostbyaddr's were simply failing halfway through.<br /><br />I'm returning a log of page visits, and with each new IP, I wanted to pull the hostname of the IP. On each report page, I'm pulling 500 lines from my Db, but only maybe 25 IPs on average. Sometimes this report would generate in under 15 seconds, other times it would fail with a connection reset.<br /><br />It turns out that several of the IPs in my Db looked like this: x.255.x.x. gethostbyaddr really hates that and simply dies when it reaches one of these IPs.<br /><br />For my case, I purged the Db and prevented the logging of IPs that contain 255.</span></code></div>
  </div>
 </div>
  <div class="note" id="31635">  <div class="votes">
    <div id="Vu31635">
    <a href="/manual/vote-note.php?id=31635&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31635">
    <a href="/manual/vote-note.php?id=31635&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31635" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#31635" class="name">
  <strong class="user"><em>www.ad-rotator.com</em></strong></a><a class="genanchor" href="#31635"> &para;</a><div class="date" title="2003-04-28 04:06"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31635">
<div class="phpcode"><code><span class="html">For ad-rotator.com, we need to do a lot of IP lookups, gethostbyaddr is very easy get timed-out and the script stucks there forever. Here is a fail-safe alternative, 1 sec max for timeout per IP.<br /><br />function ar_gethostbyaddr($ip) {<br />  $output = `host -W 1 $ip`;<br />  if (ereg('.*pointer ([A-Za-z0-9.-]+)\..*',$output,$regs)) {<br />    return $regs[1]; <br />  }<br />  return $ip;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="24245">  <div class="votes">
    <div id="Vu24245">
    <a href="/manual/vote-note.php?id=24245&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24245">
    <a href="/manual/vote-note.php?id=24245&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24245" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#24245" class="name">
  <strong class="user"><em>inny at core dot fetchnet dot org</em></strong></a><a class="genanchor" href="#24245"> &para;</a><div class="date" title="2002-08-10 09:58"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24245">
<div class="phpcode"><code><span class="html">Turning on the HostnameLookup function on in the apache configuration file will severely increase the loading times of all the pages serviced by the httpd-server.<br />It's mostly a better idea to just use gethostbyaddr($REMOTE_ADDR); instead of $REMOTE_HOST if you turned HostnameLookups On, unless you want the hostnames specified in apache's log file...</span></code></div>
  </div>
 </div>
  <div class="note" id="86496">  <div class="votes">
    <div id="Vu86496">
    <a href="/manual/vote-note.php?id=86496&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86496">
    <a href="/manual/vote-note.php?id=86496&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86496" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#86496" class="name">
  <strong class="user"><em>webmaster at askapache dot com</em></strong></a><a class="genanchor" href="#86496"> &para;</a><div class="date" title="2008-10-22 01:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86496">
<div class="phpcode"><code><span class="html">Here is a simple function I compiled from user-notes that works great.. any improvements?
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">get_ip</span><span class="keyword">( </span><span class="default">$host </span><span class="keyword">){
<br />  </span><span class="default">$hostip </span><span class="keyword">= @</span><span class="default">gethostbyname</span><span class="keyword">( </span><span class="default">$host </span><span class="keyword">);
<br />  </span><span class="default">$ip </span><span class="keyword">= ( </span><span class="default">$hostip </span><span class="keyword">== </span><span class="default">$host </span><span class="keyword">) ? </span><span class="default">$host </span><span class="keyword">: </span><span class="default">long2ip</span><span class="keyword">( </span><span class="default">ip2long</span><span class="keyword">( </span><span class="default">$hostip </span><span class="keyword">) );
<br />  </span><span class="comment">//echo sprintf("Resolved %s to %s", $host, $ip);
<br />  </span><span class="keyword">return </span><span class="default">$ip</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="31150">  <div class="votes">
    <div id="Vu31150">
    <a href="/manual/vote-note.php?id=31150&amp;page=function.gethostbyaddr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31150">
    <a href="/manual/vote-note.php?id=31150&amp;page=function.gethostbyaddr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31150" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#31150" class="name">
  <strong class="user"><em>jz at NOSPAM dot nplu dot kiev dot ua</em></strong></a><a class="genanchor" href="#31150"> &para;</a><div class="date" title="2003-04-11 03:59"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31150">
<div class="phpcode"><code><span class="html">Just to fun that gethostbyadd() returns server machine name known in LAN rather then its DNS if I try to call it against my own host (from workstation), whether it would local (behind the proxy) or global (of proxy itself) IP or just loop 127.0.0.1.<br /><br />And thus you can get LAN names of other workstations by its intranet IPs (I mean smth like 192.168.0.???)<br /><br />Fun :)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gethostbyaddr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gethostbyaddr.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.network.php">Network Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.checkdnsrr.php" title="checkdnsrr">checkdnsrr</a>
                        </li>
                                                <li class="">
                            <a href="function.closelog.php" title="closelog">closelog</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-check-record.php" title="dns_&#8203;check_&#8203;record">dns_&#8203;check_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-mx.php" title="dns_&#8203;get_&#8203;mx">dns_&#8203;get_&#8203;mx</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-record.php" title="dns_&#8203;get_&#8203;record">dns_&#8203;get_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.fsockopen.php" title="fsockopen">fsockopen</a>
                        </li>
                                                <li class="current">
                            <a href="function.gethostbyaddr.php" title="gethostbyaddr">gethostbyaddr</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyname.php" title="gethostbyname">gethostbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbynamel.php" title="gethostbynamel">gethostbynamel</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostname.php" title="gethostname">gethostname</a>
                        </li>
                                                <li class="">
                            <a href="function.getmxrr.php" title="getmxrr">getmxrr</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobyname.php" title="getprotobyname">getprotobyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobynumber.php" title="getprotobynumber">getprotobynumber</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyname.php" title="getservbyname">getservbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyport.php" title="getservbyport">getservbyport</a>
                        </li>
                                                <li class="">
                            <a href="function.header.php" title="header">header</a>
                        </li>
                                                <li class="">
                            <a href="function.header-register-callback.php" title="header_&#8203;register_&#8203;callback">header_&#8203;register_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.header-remove.php" title="header_&#8203;remove">header_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-list.php" title="headers_&#8203;list">headers_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-sent.php" title="headers_&#8203;sent">headers_&#8203;sent</a>
                        </li>
                                                <li class="">
                            <a href="function.http-clear-last-response-headers.php" title="http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-get-last-response-headers.php" title="http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-response-code.php" title="http_&#8203;response_&#8203;code">http_&#8203;response_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-ntop.php" title="inet_&#8203;ntop">inet_&#8203;ntop</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-pton.php" title="inet_&#8203;pton">inet_&#8203;pton</a>
                        </li>
                                                <li class="">
                            <a href="function.ip2long.php" title="ip2long">ip2long</a>
                        </li>
                                                <li class="">
                            <a href="function.long2ip.php" title="long2ip">long2ip</a>
                        </li>
                                                <li class="">
                            <a href="function.net-get-interfaces.php" title="net_&#8203;get_&#8203;interfaces">net_&#8203;get_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.openlog.php" title="openlog">openlog</a>
                        </li>
                                                <li class="">
                            <a href="function.pfsockopen.php" title="pfsockopen">pfsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.request-parse-body.php" title="request_&#8203;parse_&#8203;body">request_&#8203;parse_&#8203;body</a>
                        </li>
                                                <li class="">
                            <a href="function.setcookie.php" title="setcookie">setcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.setrawcookie.php" title="setrawcookie">setrawcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-get-status.php" title="socket_&#8203;get_&#8203;status">socket_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-blocking.php" title="socket_&#8203;set_&#8203;blocking">socket_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-timeout.php" title="socket_&#8203;set_&#8203;timeout">socket_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.syslog.php" title="syslog">syslog</a>
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
