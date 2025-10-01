<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: gethostbyname - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.gethostbyname.php">
 <link rel="shorturl" href="https://www.php.net/gethostbyname">
 <link rel="alternate" href="https://www.php.net/gethostbyname" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.gethostbyaddr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.gethostbynamel.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.gethostbyname.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.gethostbyname.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.gethostbyname.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.gethostbyname.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.gethostbyname.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.gethostbyname.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.gethostbyname.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.gethostbyname.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.gethostbyname.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.gethostbyname.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.gethostbyname.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the IPv4 address corresponding to a given Internet host name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: gethostbyname - Manual" />
<meta name="twitter:description" content="Get the IPv4 address corresponding to a given Internet host name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: gethostbyname - Manual" />
<meta itemprop="description" content="Get the IPv4 address corresponding to a given Internet host name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the IPv4 address corresponding to a given Internet host name" />

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
        <a href="function.gethostbynamel.php">
          gethostbynamel &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.gethostbyaddr.php">
          &laquo; gethostbyaddr        </a>
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
            <option value='en/function.gethostbyname.php' selected="selected">English</option>
            <option value='de/function.gethostbyname.php'>German</option>
            <option value='es/function.gethostbyname.php'>Spanish</option>
            <option value='fr/function.gethostbyname.php'>French</option>
            <option value='it/function.gethostbyname.php'>Italian</option>
            <option value='ja/function.gethostbyname.php'>Japanese</option>
            <option value='pt_BR/function.gethostbyname.php'>Brazilian Portuguese</option>
            <option value='ru/function.gethostbyname.php'>Russian</option>
            <option value='tr/function.gethostbyname.php'>Turkish</option>
            <option value='uk/function.gethostbyname.php'>Ukrainian</option>
            <option value='zh/function.gethostbyname.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.gethostbyname" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">gethostbyname</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gethostbyname</span> &mdash; <span class="dc-title">
   Get the IPv4 address corresponding to a given Internet host name
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.gethostbyname-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>gethostbyname</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$hostname</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns the IPv4 address of the Internet host specified by
   <code class="parameter">hostname</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.gethostbyname-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">hostname</code></dt>
     <dd>
      <p class="para">
       The host name.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.gethostbyname-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the IPv4 address or a string containing the unmodified
   <code class="parameter">hostname</code> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.gethostbyname-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4720">
    <p><strong>Example #1 A simple <span class="function"><strong>gethostbyname()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$ip </span><span style="color: #007700">= </span><span style="color: #0000BB">gethostbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'www.example.com'</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$ip</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.gethostbyname-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gethostbyaddr.php" class="function" rel="rdfs-seeAlso">gethostbyaddr()</a> - Get the Internet host name corresponding to a given IP address</span></li>
    <li><span class="function"><a href="function.gethostbynamel.php" class="function" rel="rdfs-seeAlso">gethostbynamel()</a> - Get a list of IPv4 addresses corresponding to a given Internet host
   name</span></li>
    <li><span class="function"><a href="function.inet-pton.php" class="function" rel="rdfs-seeAlso">inet_pton()</a> - Converts a human readable IP address to its packed in_addr representation</span></li>
    <li><span class="function"><a href="function.inet-ntop.php" class="function" rel="rdfs-seeAlso">inet_ntop()</a> - Converts a packed internet address to a human readable representation</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/gethostbyname.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.gethostbyname%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.gethostbyname&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gethostbyname.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">27 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111684">  <div class="votes">
    <div id="Vu111684">
    <a href="/manual/vote-note.php?id=111684&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111684">
    <a href="/manual/vote-note.php?id=111684&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111684" title="77% like this...">
    49
    </div>
  </div>
  <a href="#111684" class="name">
  <strong class="user"><em>Ome Ko</em></strong></a><a class="genanchor" href="#111684"> &para;</a><div class="date" title="2013-03-16 08:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111684">
<div class="phpcode"><code><span class="html">If you do a gethostbyname() and there is no trailing dot after a domainname that does not resolve, this domainname will ultimately be appended to the server-FQDN by nslookup.<br /><br />So if you do a lookup for nonexistentdomainname.be your server may return the ip for nonexistentdomainname.be.yourhostname.com, which is the server-ip.<br /><br />To avoid this behaviour, just add a trailing dot to the domainname; i.e. gethostbyname('nonexistentdomainname.be.')</span></code></div>
  </div>
 </div>
  <div class="note" id="116319">  <div class="votes">
    <div id="Vu116319">
    <a href="/manual/vote-note.php?id=116319&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116319">
    <a href="/manual/vote-note.php?id=116319&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116319" title="80% like this...">
    26
    </div>
  </div>
  <a href="#116319" class="name">
  <strong class="user"><em>devers</em></strong></a><a class="genanchor" href="#116319"> &para;</a><div class="date" title="2014-12-11 05:37"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116319">
<div class="phpcode"><code><span class="html">This function says "Returns the IPv4 address or a string containing the unmodified hostname on failure.<br /><br />This isn't entirely true, any hostname with a null byte in it will only return the characters BEFORE the null byte.<br /><br /><span class="default">&lt;?php<br />$hostname </span><span class="keyword">= </span><span class="string">"foo\0bar"</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$hostname </span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$hostname </span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Results:<br />string 'foo�bar' (length=7)<br />string 'foo' (length=3)</span></code></div>
  </div>
 </div>
  <div class="note" id="104944">  <div class="votes">
    <div id="Vu104944">
    <a href="/manual/vote-note.php?id=104944&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104944">
    <a href="/manual/vote-note.php?id=104944&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104944" title="69% like this...">
    22
    </div>
  </div>
  <a href="#104944" class="name">
  <strong class="user"><em>Alexandre (d)</em></strong></a><a class="genanchor" href="#104944"> &para;</a><div class="date" title="2011-07-17 09:28"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104944">
<div class="phpcode"><code><span class="html">Important note: You should avoid its use in production.<br /><br />DNS Resolution may take from 0.5 to 4 seconds, and during this time your script is NOT being executed.<br /><br />Your customers may think that the server is slow, but actually it is just waiting for the DNS resolution response.<br /><br />You can use it, but if you want performance, you should avoid it, or schedule it to some CRON script...</span></code></div>
  </div>
 </div>
  <div class="note" id="118841">  <div class="votes">
    <div id="Vu118841">
    <a href="/manual/vote-note.php?id=118841&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118841">
    <a href="/manual/vote-note.php?id=118841&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118841" title="67% like this...">
    15
    </div>
  </div>
  <a href="#118841" class="name">
  <strong class="user"><em>Dennis B.</em></strong></a><a class="genanchor" href="#118841"> &para;</a><div class="date" title="2016-02-15 12:33"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118841">
<div class="phpcode"><code><span class="html">Options for the underlying resolver functions can be supplied by using the RES_OPTIONS environmental variable. (at least under Linux, see man resolv.conf)<br /><br />Set timeout and retries to 1 to have a maximum execution time of 1 second for the DNS lookup:<br /><span class="default">&lt;?php<br />  putenv</span><span class="keyword">(</span><span class="string">'RES_OPTIONS=retrans:1 retry:1 timeout:1 attempts:1'</span><span class="keyword">);<br />  </span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$something</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You should also use fully qualified domain names ending in a dot. This prevents the resolver from walking though all search domains and retrying the domain with the search domain appended.</span></code></div>
  </div>
 </div>
  <div class="note" id="48493">  <div class="votes">
    <div id="Vu48493">
    <a href="/manual/vote-note.php?id=48493&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48493">
    <a href="/manual/vote-note.php?id=48493&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48493" title="73% like this...">
    7
    </div>
  </div>
  <a href="#48493" class="name">
  <strong class="user"><em>cox at idecnet dot com</em></strong></a><a class="genanchor" href="#48493"> &para;</a><div class="date" title="2004-12-26 12:15"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48493">
<div class="phpcode"><code><span class="html">For doing basic RBL (Real Time Blacklist) lookups with this function do:<br /><br /><span class="default">&lt;?php<br />$host </span><span class="keyword">= </span><span class="string">'64.53.200.156'</span><span class="keyword">;<br /></span><span class="default">$rbl  </span><span class="keyword">= </span><span class="string">'sbl-xbl.spamhaus.org'</span><span class="keyword">;<br /></span><span class="comment">// valid query format is: 156.200.53.64.sbl-xbl.spamhaus.org<br /></span><span class="default">$rev </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">));<br /></span><span class="default">$lookup </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$rev</span><span class="keyword">) . </span><span class="string">'.' </span><span class="keyword">. </span><span class="default">$rbl</span><span class="keyword">;<br />if (</span><span class="default">$lookup </span><span class="keyword">!= </span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$lookup</span><span class="keyword">)) {<br />    echo </span><span class="string">"ip: </span><span class="default">$host</span><span class="string"> is listed in </span><span class="default">$rbl</span><span class="string">\n"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"ip: </span><span class="default">$host</span><span class="string"> NOT listed in </span><span class="default">$rbl</span><span class="string">\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Tomas V.V.Cox</span></code></div>
  </div>
 </div>
  <div class="note" id="70936">  <div class="votes">
    <div id="Vu70936">
    <a href="/manual/vote-note.php?id=70936&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70936">
    <a href="/manual/vote-note.php?id=70936&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70936" title="59% like this...">
    6
    </div>
  </div>
  <a href="#70936" class="name">
  <strong class="user"><em>Josh Finlay josh at glamourcastle dot com</em></strong></a><a class="genanchor" href="#70936"> &para;</a><div class="date" title="2006-11-04 06:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70936">
<div class="phpcode"><code><span class="html">gethostbyname and gethostbynamel does not ask for AAAA records. I have written two functions to implement this. gethostbyname6 and gethostbynamel6. I don't believe this issue has been addressed yet.<br /><br />They are made to replace gethostbyname[l], in a way that if $try_a is true, if it fails to get AAAA records it will fall back on trying to get A records.<br /><br />Feel free to correct any errors, I realise that it is asking for *both* A and AAAA records, so this means two DNS calls.. probably would be more efficient if it checked $try_a before making the query, but this works for me so I'll leave that up to someone else to implement in their own work.. the tip is out there now anyway..<br /><br />Here is the code:<br /><br />    function gethostbyname6($host, $try_a = false) {<br />        // get AAAA record for $host<br />        // if $try_a is true, if AAAA fails, it tries for A<br />        // the first match found is returned<br />        // otherwise returns false<br /><br />        $dns = gethostbynamel6($host, $try_a);<br />        if ($dns == false) { return false; }<br />        else { return $dns[0]; }<br />    }<br /><br />    function gethostbynamel6($host, $try_a = false) {<br />        // get AAAA records for $host,<br />        // if $try_a is true, if AAAA fails, it tries for A<br />        // results are returned in an array of ips found matching type<br />        // otherwise returns false<br /><br />        $dns6 = dns_get_record($host, DNS_AAAA);<br />        if ($try_a == true) {<br />            $dns4 = dns_get_record($host, DNS_A);<br />            $dns = array_merge($dns4, $dns6);<br />        }<br />        else { $dns = $dns6; }<br />        $ip6 = array();<br />        $ip4 = array();<br />        foreach ($dns as $record) {<br />            if ($record["type"] == "A") {<br />                $ip4[] = $record["ip"];<br />            }<br />            if ($record["type"] == "AAAA") {<br />                $ip6[] = $record["ipv6"];<br />            }<br />        }<br />        if (count($ip6) &lt; 1) {<br />            if ($try_a == true) {<br />                if (count($ip4) &lt; 1) {<br />                    return false;<br />                }<br />                else {<br />                    return $ip4;<br />                }<br />            }<br />            else {<br />                return false;<br />            }<br />        }<br />        else {<br />            return $ip6;<br />        }<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="128759">  <div class="votes">
    <div id="Vu128759">
    <a href="/manual/vote-note.php?id=128759&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128759">
    <a href="/manual/vote-note.php?id=128759&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128759" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#128759" class="name">
  <strong class="user"><em>hypolite at mrpetovan dot com</em></strong></a><a class="genanchor" href="#128759"> &para;</a><div class="date" title="2023-07-25 01:47"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128759">
<div class="phpcode"><code><span class="html">Since 2015, the hostname parameter is arbitrarily limited to 255 characters to address CVE-2015-0235, probably to mirror RFC1035's octet limit on domain names.</span></code></div>
  </div>
 </div>
  <div class="note" id="58015">  <div class="votes">
    <div id="Vu58015">
    <a href="/manual/vote-note.php?id=58015&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58015">
    <a href="/manual/vote-note.php?id=58015&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58015" title="50% like this...">
    0
    </div>
  </div>
  <a href="#58015" class="name">
  <strong class="user"><em>mcgrof at gmail dot com</em></strong></a><a class="genanchor" href="#58015"> &para;</a><div class="date" title="2005-10-21 09:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58015">
<div class="phpcode"><code><span class="html">In PHP4 you can use gethostbyname() but I have found this unreliable when doing lookups on entries that return A records on the private network. PHP5 has a much better routine -- dns_get_record(). If you are stuck with PHP4 or don't want to upgrade you can use dig:<br /><br /><span class="default">&lt;?php<br />$ip </span><span class="keyword">= `</span><span class="string">/usr/bin/dig </span><span class="default">$host</span><span class="string"> A +short</span><span class="keyword">`;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44092">  <div class="votes">
    <div id="Vu44092">
    <a href="/manual/vote-note.php?id=44092&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44092">
    <a href="/manual/vote-note.php?id=44092&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44092" title="50% like this...">
    0
    </div>
  </div>
  <a href="#44092" class="name">
  <strong class="user"><em>Vincent</em></strong></a><a class="genanchor" href="#44092"> &para;</a><div class="date" title="2004-07-14 09:14"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44092">
<div class="phpcode"><code><span class="html">Note that if you pass an IP address to gethostbyname() it will return that IP address.</span></code></div>
  </div>
 </div>
  <div class="note" id="107346">  <div class="votes">
    <div id="Vu107346">
    <a href="/manual/vote-note.php?id=107346&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107346">
    <a href="/manual/vote-note.php?id=107346&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107346" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#107346" class="name">
  <strong class="user"><em>Emmett Brosnan</em></strong></a><a class="genanchor" href="#107346"> &para;</a><div class="date" title="2012-02-01 11:09"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107346">
<div class="phpcode"><code><span class="html">Grabbing IPs for multiple hosts:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getAddrByHost</span><span class="keyword">(</span><span class="default">$hosts</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">) {<br />  </span><span class="default">$returnString </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />  foreach (</span><span class="default">$hosts </span><span class="keyword">as </span><span class="default">$host</span><span class="keyword">) {<br />    </span><span class="default">$query </span><span class="keyword">= `</span><span class="string">nslookup -timeout=</span><span class="default">$timeout</span><span class="string"> -retry=1 </span><span class="default">$host</span><span class="keyword">`;<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\nAddress: (.*)\n/'</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">))<br />      </span><span class="default">$returnString </span><span class="keyword">.= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />    </span><span class="default">$returnString </span><span class="keyword">.= </span><span class="default">$host </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />  }<br />  return </span><span class="default">$returnString</span><span class="keyword">;<br /><br />}<br /><br /></span><span class="default">$hostArray</span><span class="keyword">[] = </span><span class="string">'www.domain1.com'</span><span class="keyword">;<br /></span><span class="default">$hostArray</span><span class="keyword">[] = </span><span class="string">'www.domain2.com'</span><span class="keyword">;<br /></span><span class="comment">//$hostArray[] = 'www.domain3.com';<br />//$hostArray[] = 'www.domain4.com';<br /><br /></span><span class="default">$returnString </span><span class="keyword">= </span><span class="default">getAddrByHost</span><span class="keyword">(</span><span class="default">$hostArray</span><span class="keyword">);<br />echo </span><span class="default">$returnString</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="30852">  <div class="votes">
    <div id="Vu30852">
    <a href="/manual/vote-note.php?id=30852&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30852">
    <a href="/manual/vote-note.php?id=30852&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30852" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#30852" class="name">
  <strong class="user"><em>christian at SPAM at IS at DEAD at MEAT at karg dot org</em></strong></a><a class="genanchor" href="#30852"> &para;</a><div class="date" title="2003-04-01 04:12"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30852">
<div class="phpcode"><code><span class="html">I had difficulty getting gethostbyname to work under OpenBSD 3.2 and Apache, until I discovered that the default Apache chroot caused the problem.<br /><br />To get PHP's gethostbyname to work, you need resolv.conf (and possibly hosts) in /var/www/etc (assuming default install dirs).</span></code></div>
  </div>
 </div>
  <div class="note" id="41099">  <div class="votes">
    <div id="Vu41099">
    <a href="/manual/vote-note.php?id=41099&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41099">
    <a href="/manual/vote-note.php?id=41099&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41099" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#41099" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#41099"> &para;</a><div class="date" title="2004-03-30 02:49"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41099">
<div class="phpcode"><code><span class="html">The dns entries get cached, whether they exist or not.  Expect really good response times after the first one.</span></code></div>
  </div>
 </div>
  <div class="note" id="117834">  <div class="votes">
    <div id="Vu117834">
    <a href="/manual/vote-note.php?id=117834&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117834">
    <a href="/manual/vote-note.php?id=117834&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117834" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#117834" class="name">
  <strong class="user"><em>php at nemon dot be</em></strong></a><a class="genanchor" href="#117834"> &para;</a><div class="date" title="2015-08-17 04:14"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117834">
<div class="phpcode"><code><span class="html">Always add the root . at the end or your server can add it's own suffix.<br />example: abc.com could become abc.com.yourcompany.com if you don't use abc.com.<br /><br />I also find this function a litle bit limited because it doesn't tell you if the resolve failed.<br /><br />TO adress all those issues I use :<br /><br />function host2ip($host)<br />{<br />    $host=trim($host.'.'); // clean and add root .<br />    $ip= gethostbyname($host);<br />    if($ip==$host) $ip='';// empty IP if there is no ip<br />    return $ip;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="70408">  <div class="votes">
    <div id="Vu70408">
    <a href="/manual/vote-note.php?id=70408&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70408">
    <a href="/manual/vote-note.php?id=70408&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70408" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#70408" class="name">
  <strong class="user"><em>chris at chollis dot net</em></strong></a><a class="genanchor" href="#70408"> &para;</a><div class="date" title="2006-10-15 10:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70408">
<div class="phpcode"><code><span class="html">mmucklo raises a valid point, however the function to use would be getmxrr() in the simplest case, or alternatively checkdnsrr() if you so wish; getdnsrr() does not exist.<br /><br />On another note, it can be a pain (when iterating with while loops for example) that on failure gethostbyname() returns the hostname, rather than FALSE. You could wrap it in a simple user function, to "correct" this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">fixed_gethostbyname </span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">) {<br />    </span><span class="comment">// Try the lookup as normal...<br />    </span><span class="default">$ip </span><span class="keyword">= </span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">);<br />    </span><span class="comment">// ...but if it fails, FALSE is returned instead of the unresolved host<br />    </span><span class="keyword">if (</span><span class="default">$ip </span><span class="keyword">!= </span><span class="default">$host</span><span class="keyword">) { return </span><span class="default">$ip</span><span class="keyword">; } else return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="22927">  <div class="votes">
    <div id="Vu22927">
    <a href="/manual/vote-note.php?id=22927&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22927">
    <a href="/manual/vote-note.php?id=22927&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22927" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#22927" class="name">
  <strong class="user"><em>tonyhana at sixzeros dot com</em></strong></a><a class="genanchor" href="#22927"> &para;</a><div class="date" title="2002-07-04 07:43"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22927">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//script to time DNS propagation<br />//(Above script modified slightly to show micro time)<br />//seems pretty damn quick to me.. I'm getting .0055 sec worstcase badhost times.<br /><br />//A known good dns name (my own)<br />    </span><span class="default">$nametotest </span><span class="keyword">= </span><span class="string">"fuzzygroup.com"</span><span class="keyword">;<br />    <br /></span><span class="comment">//Call address test function <br />    </span><span class="default">$time_start </span><span class="keyword">= </span><span class="default">getmicrotime</span><span class="keyword">();<br />    </span><span class="default">testipaddress</span><span class="keyword">(</span><span class="default">$nametotest</span><span class="keyword">);<br />    </span><span class="default">$time_end </span><span class="keyword">= </span><span class="default">getmicrotime</span><span class="keyword">();<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">$time_end </span><span class="keyword">- </span><span class="default">$time_start</span><span class="keyword">;<br />    echo </span><span class="string">"Good Host Search took </span><span class="default">$time</span><span class="string"> seconds&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment">//A known bad name (trust me)<br />    </span><span class="default">$nametotest </span><span class="keyword">= </span><span class="string">"providence.mascot.com"</span><span class="keyword">;<br />    </span><span class="default">$time_start </span><span class="keyword">= </span><span class="default">getmicrotime</span><span class="keyword">();<br />    </span><span class="default">testipaddress</span><span class="keyword">(</span><span class="default">$nametotest</span><span class="keyword">);<br />    </span><span class="default">$time_end </span><span class="keyword">= </span><span class="default">getmicrotime</span><span class="keyword">();<br />    </span><span class="default">$time </span><span class="keyword">= </span><span class="default">$time_end </span><span class="keyword">- </span><span class="default">$time_start</span><span class="keyword">;<br />    echo </span><span class="string">"Bad Host Search took </span><span class="default">$time</span><span class="string"> seconds&lt;br&gt;"</span><span class="keyword">;<br />    <br />    <br />function </span><span class="default">getmicrotime</span><span class="keyword">(){ <br />    list(</span><span class="default">$usec</span><span class="keyword">, </span><span class="default">$sec</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">microtime</span><span class="keyword">()); <br />    return ((float)</span><span class="default">$usec </span><span class="keyword">+ (float)</span><span class="default">$sec</span><span class="keyword">); <br />    } <br /><br /></span><span class="comment">//ip address checking function<br />//for real use should have a return value but example code<br /></span><span class="keyword">function </span><span class="default">testipaddress </span><span class="keyword">(</span><span class="default">$nametotest</span><span class="keyword">) {<br />    </span><span class="default">$ipaddress </span><span class="keyword">= </span><span class="default">$nametotest</span><span class="keyword">;<br />    </span><span class="default">$ipaddress </span><span class="keyword">= </span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$nametotest</span><span class="keyword">);<br />    if (</span><span class="default">$ipaddress </span><span class="keyword">== </span><span class="default">$nametotest</span><span class="keyword">) {<br />        echo </span><span class="string">"No ip address for host&lt;br&gt;"</span><span class="keyword">;<br />    }<br />    else {<br />        echo </span><span class="string">"good hostname, </span><span class="default">$nametotest</span><span class="string"> ipaddress = </span><span class="default">$ipaddress</span><span class="string">&lt;br&gt;"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">//Recommended fix for sql applications: <br />// store url to temporary table <br />// run second process periodically to <br />// check urls and update main table<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77668">  <div class="votes">
    <div id="Vu77668">
    <a href="/manual/vote-note.php?id=77668&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77668">
    <a href="/manual/vote-note.php?id=77668&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77668" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#77668" class="name">
  <strong class="user"><em>guwapo at thedoghouse dot bz</em></strong></a><a class="genanchor" href="#77668"> &para;</a><div class="date" title="2007-09-07 08:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77668">
<div class="phpcode"><code><span class="html">referring to ralphbolton at mail2sexy dot com comment:<br /><br />(at least in 5.2.0 + djbdns-dnscache) gethostbyname does not really seem to cache entries. If somebody notices a speed-up after the second lookup of the same domain - that's most likely your dns-cache itself, not some php-internal dns-cache.<br /><br />It does cache the entries in your /etc/resolv.conf (e.g. what dns to use) so I agree with him, that stopping and starting apache, will reload the resolv.conf.</span></code></div>
  </div>
 </div>
  <div class="note" id="64070">  <div class="votes">
    <div id="Vu64070">
    <a href="/manual/vote-note.php?id=64070&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64070">
    <a href="/manual/vote-note.php?id=64070&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64070" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#64070" class="name">
  <strong class="user"><em>ralphbolton at mail2sexy dot com</em></strong></a><a class="genanchor" href="#64070"> &para;</a><div class="date" title="2006-04-06 01:10"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64070">
<div class="phpcode"><code><span class="html">On a side-note, PHP (5.0.4, but probably other versions too) can cache gethostbyname information.<br /><br />In short, once PHP looks up an address, it may not actually perform another lookup as you may expect. In my particular case (I think) the problem was a change to resolv.conf didn't take effect inside PHP (although nslookup/ping etc worked fine). Stop/Starting Apache fixed it (although a simple 'restart' (kill -HUP) didn't).<br /><br />In short, if you change resolv.conf, stop and restart Apache.</span></code></div>
  </div>
 </div>
  <div class="note" id="55932">  <div class="votes">
    <div id="Vu55932">
    <a href="/manual/vote-note.php?id=55932&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55932">
    <a href="/manual/vote-note.php?id=55932&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55932" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#55932" class="name">
  <strong class="user"><em>tabascopete78 at yahoo dot com</em></strong></a><a class="genanchor" href="#55932"> &para;</a><div class="date" title="2005-08-18 12:29"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55932">
<div class="phpcode"><code><span class="html">I was using file_get_contents on a set of URLs. Some of them URLs were invalid (the structure of it was ok but the DNS hosts couldn't resolve them) and I kept getting an annoying warning. I wanted to check the DNS somehow but existing check dns function in php doesn't have one for windows and the one a person supplied there does not work 100% of the time.<br /><br />Instead use this function to try to resolve a host. This won't throw any warnings, you just need to check the output. You'll get the same warnings with fopen and fsockopen.</span></code></div>
  </div>
 </div>
  <div class="note" id="119721">  <div class="votes">
    <div id="Vu119721">
    <a href="/manual/vote-note.php?id=119721&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119721">
    <a href="/manual/vote-note.php?id=119721&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119721" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#119721" class="name">
  <strong class="user"><em>gabriel at nexcore dot com dot br</em></strong></a><a class="genanchor" href="#119721"> &para;</a><div class="date" title="2016-08-10 09:43"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119721">
<div class="phpcode"><code><span class="html">For the "dig" solution, here is a better one:<br /><br /><span class="default">&lt;?php<br />  $IP </span><span class="keyword">= `</span><span class="string">/usr/bin/dig </span><span class="default">$host</span><span class="string">. A +short | /usr/bin/tail -n1</span><span class="keyword">`<br /></span><span class="default">?&gt;<br /></span><br />Using tail because dig, even in the +short form, may return CNAME entries first, and also may return many, many entries (see "dig google.com").<br /><br />Usig the dot at the end of the host to not perform domain searches.<br /><br />This works also when $host = IP address already<br /><br />Will return empty string in case o resolve failure (invalid hostname)</span></code></div>
  </div>
 </div>
  <div class="note" id="83417">  <div class="votes">
    <div id="Vu83417">
    <a href="/manual/vote-note.php?id=83417&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83417">
    <a href="/manual/vote-note.php?id=83417&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83417" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#83417" class="name">
  <strong class="user"><em>manalejandro at gmail dot com</em></strong></a><a class="genanchor" href="#83417"> &para;</a><div class="date" title="2008-05-24 08:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83417">
<div class="phpcode"><code><span class="html">This logic solution to problem checking dns reverse name resolution:<br /><br /><span class="default">&lt;?php<br />$ip </span><span class="keyword">= </span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">);<br />if(</span><span class="default">ip2long</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">) == -</span><span class="default">1 </span><span class="keyword">|| (</span><span class="default">$ip </span><span class="keyword">== </span><span class="default">gethostbyaddr</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">) &amp;&amp; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/.*\.[a-zA-Z]{2,3}$/"</span><span class="keyword">,</span><span class="default">$host</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) ) {<br />    echo </span><span class="string">'Error, incorrect host or ip'</span><span class="keyword">;<br />    }<br />else {<br />    echo </span><span class="string">'Ok'</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69430">  <div class="votes">
    <div id="Vu69430">
    <a href="/manual/vote-note.php?id=69430&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69430">
    <a href="/manual/vote-note.php?id=69430&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69430" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#69430" class="name">
  <strong class="user"><em>Peter &lt;toomuchphp-phpman at yahoo dot com&gt;</em></strong></a><a class="genanchor" href="#69430"> &para;</a><div class="date" title="2006-09-05 06:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69430">
<div class="phpcode"><code><span class="html">One way to discover your IP address automatically:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// need to trim() because whitespace will confuse the name lookup<br /></span><span class="default">$myIP </span><span class="keyword">= </span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(`</span><span class="string">hostname</span><span class="keyword">`));<br />echo </span><span class="default">$myIP</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68744">  <div class="votes">
    <div id="Vu68744">
    <a href="/manual/vote-note.php?id=68744&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68744">
    <a href="/manual/vote-note.php?id=68744&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68744" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#68744" class="name">
  <strong class="user"><em>Marc M</em></strong></a><a class="genanchor" href="#68744"> &para;</a><div class="date" title="2006-08-08 08:33"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68744">
<div class="phpcode"><code><span class="html">Just a heads up. I was using this function on my site to verify email host addresses. I thought all was good, until a potential client contacted me and said they couldn't sign up correctly. They have a valid email address and domain, but this function failed. <br /><br />Good luck.</span></code></div>
  </div>
 </div>
  <div class="note" id="128237">  <div class="votes">
    <div id="Vu128237">
    <a href="/manual/vote-note.php?id=128237&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128237">
    <a href="/manual/vote-note.php?id=128237&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128237" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#128237" class="name">
  <strong class="user"><em>seb dot gibbs at ymail dot com</em></strong></a><a class="genanchor" href="#128237"> &para;</a><div class="date" title="2023-02-22 03:00"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128237">
<div class="phpcode"><code><span class="html">When using  gethostbynamel()  and  gethostbyname() together, you must do gethostbynamel() first, otherwise it will always give you one IP (or none) from the cache, and not return the full lookup.</span></code></div>
  </div>
 </div>
  <div class="note" id="19953">  <div class="votes">
    <div id="Vu19953">
    <a href="/manual/vote-note.php?id=19953&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19953">
    <a href="/manual/vote-note.php?id=19953&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19953" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#19953" class="name">
  <strong class="user"><em>sjohnson at fuzzygroup dot com</em></strong></a><a class="genanchor" href="#19953"> &para;</a><div class="date" title="2002-03-16 10:27"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19953">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">//script to see if host exists on Internet<br /><br />//following up on the above point about host name <br />//checking and SQL timeouts, run this test script<br />//and see how long it takes for 2nd call to <br />//hostname check to fail<br />//NOTE -- not PHP's fault -- nature of DNS <br /><br />//A known good dns name (my own)<br />    </span><span class="default">$nametotest </span><span class="keyword">= </span><span class="string">"fuzzygroup.com"</span><span class="keyword">;<br />    <br /></span><span class="comment">//Call address test function <br />    </span><span class="default">testipaddress</span><span class="keyword">(</span><span class="default">$nametotest</span><span class="keyword">);<br /><br /></span><span class="comment">//A known bad name (trust me)<br />    </span><span class="default">$nametotest </span><span class="keyword">= </span><span class="string">"providence.mascot.com"</span><span class="keyword">;<br /></span><span class="comment">//Call address test function<br />    </span><span class="default">testipaddress</span><span class="keyword">(</span><span class="default">$nametotest</span><span class="keyword">);<br />    <br /></span><span class="comment">//ip address checking function<br />//for real use should have a return value but example code<br /></span><span class="keyword">function </span><span class="default">testipaddress </span><span class="keyword">(</span><span class="default">$nametotest</span><span class="keyword">) {<br />    </span><span class="default">$ipaddress </span><span class="keyword">= </span><span class="default">$nametotest</span><span class="keyword">;<br />    </span><span class="default">$ipaddress </span><span class="keyword">= </span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$nametotest</span><span class="keyword">);<br />    if (</span><span class="default">$ipaddress </span><span class="keyword">== </span><span class="default">$nametotest</span><span class="keyword">) {<br />        echo </span><span class="string">"No ip address for host, so host "<br />             </span><span class="keyword">. </span><span class="string">"not currently available in DNS and "<br />             </span><span class="keyword">. </span><span class="string">"probably offline for some time&lt;BR&gt;"</span><span class="keyword">;<br />    }<br />    else {<br />        echo </span><span class="string">"good hostname, ipaddress = </span><span class="default">$ipaddress</span><span class="string">&lt;BR&gt;"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">//Recommended fix for sql applications: <br />// store url to temporary table <br />// run second process periodically to <br />// check urls and update main table<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76554">  <div class="votes">
    <div id="Vu76554">
    <a href="/manual/vote-note.php?id=76554&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76554">
    <a href="/manual/vote-note.php?id=76554&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76554" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#76554" class="name">
  <strong class="user"><em>von at student dot chalmers dot se</em></strong></a><a class="genanchor" href="#76554"> &para;</a><div class="date" title="2007-07-20 03:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76554">
<div class="phpcode"><code><span class="html">When using PHP and Apache in a chroot environment on RedHat Linux, I have found that I need to bind-mount /var/run/nscd to get this to work. Apparently, the socket in that directory is needed for all the DNS things.</span></code></div>
  </div>
 </div>
  <div class="note" id="68941">  <div class="votes">
    <div id="Vu68941">
    <a href="/manual/vote-note.php?id=68941&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68941">
    <a href="/manual/vote-note.php?id=68941&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68941" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#68941" class="name">
  <strong class="user"><em>mmucklo at yahoo dot com</em></strong></a><a class="genanchor" href="#68941"> &para;</a><div class="date" title="2006-08-16 11:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68941">
<div class="phpcode"><code><span class="html">One note about using gethostbyname() for checking email address domains:<br /><br />If the name doesn't resolve, follow up with getdnsrr() and make sure they don't have an MX entry before returning an error.<br /><br />It is possible for a domain name not to have an A record, but still have an MX entry.</span></code></div>
  </div>
 </div>
  <div class="note" id="77766">  <div class="votes">
    <div id="Vu77766">
    <a href="/manual/vote-note.php?id=77766&amp;page=function.gethostbyname&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77766">
    <a href="/manual/vote-note.php?id=77766&amp;page=function.gethostbyname&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77766" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#77766" class="name">
  <strong class="user"><em>Florian Holzhauer</em></strong></a><a class="genanchor" href="#77766"> &para;</a><div class="date" title="2007-09-12 03:02"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77766">
<div class="phpcode"><code><span class="html">If name resolution fails with apache2, mod_chroot and php5, add<br />LoadFile /lib/libnss_dns.so.2<br />to the mod_chroot config.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.gethostbyname&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.gethostbyname.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.gethostbyaddr.php" title="gethostbyaddr">gethostbyaddr</a>
                        </li>
                                                <li class="current">
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
