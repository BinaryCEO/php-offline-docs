<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: chmod - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.chmod.php">
 <link rel="shorturl" href="https://www.php.net/chmod">
 <link rel="alternate" href="https://www.php.net/chmod" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.chgrp.php">
 <link rel="next" href="https://www.php.net/manual/en/function.chown.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.chmod.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.chmod.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.chmod.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.chmod.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.chmod.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.chmod.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.chmod.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.chmod.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.chmod.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.chmod.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.chmod.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Changes file mode" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: chmod - Manual" />
<meta name="twitter:description" content="Changes file mode" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: chmod - Manual" />
<meta itemprop="description" content="Changes file mode" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Changes file mode" />

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
        <a href="function.chown.php">
          chown &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.chgrp.php">
          &laquo; chgrp        </a>
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
            <option value='en/function.chmod.php' selected="selected">English</option>
            <option value='de/function.chmod.php'>German</option>
            <option value='es/function.chmod.php'>Spanish</option>
            <option value='fr/function.chmod.php'>French</option>
            <option value='it/function.chmod.php'>Italian</option>
            <option value='ja/function.chmod.php'>Japanese</option>
            <option value='pt_BR/function.chmod.php'>Brazilian Portuguese</option>
            <option value='ru/function.chmod.php'>Russian</option>
            <option value='tr/function.chmod.php'>Turkish</option>
            <option value='uk/function.chmod.php'>Ukrainian</option>
            <option value='zh/function.chmod.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.chmod" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">chmod</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">chmod</span> &mdash; <span class="dc-title">Changes file mode</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.chmod-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>chmod</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$permissions</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Attempts to change the mode of the specified file to that given in
   <code class="parameter">permissions</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.chmod-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       Path to the file.
      </p>
     </dd>
    
    
     <dt><code class="parameter">permissions</code></dt>
     <dd>
      <p class="para">
       Note that <code class="parameter">permissions</code> is not automatically
       assumed to be an octal value, so to ensure the expected operation,
       you need to prefix <code class="parameter">permissions</code> with a zero (0). 
       Strings such as &quot;g+w&quot; will not work properly.
      </p>
      <p class="para">
       <div class="informalexample">
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">, </span><span style="color: #0000BB">755</span><span style="color: #007700">);   </span><span style="color: #FF8000">// decimal; probably incorrect<br /></span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">, </span><span style="color: #DD0000">"u+rwx,go+rx"</span><span style="color: #007700">); </span><span style="color: #FF8000">// string; incorrect<br /></span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">, </span><span style="color: #0000BB">0755</span><span style="color: #007700">);  </span><span style="color: #FF8000">// octal; correct value of mode<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p>
      <p class="para">
       The <code class="parameter">permissions</code> parameter consists of three octal
       number components specifying access restrictions for the owner,
       the user group in which the owner is in, and to everybody else in
       this order. One component can be computed by adding up the needed
       permissions for that target user base. Number 1 means that you
       grant execute rights, number 2 means that you make the file
       writeable, number 4 means that you make the file readable. Add
       up these numbers to specify needed rights. You can also read more
       about modes on Unix systems with &#039;<strong class="command">man 1 chmod</strong>&#039;
       and &#039;<strong class="command">man 2 chmod</strong>&#039;.
      </p>
      <p class="para">
       <div class="informalexample">
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Read and write for owner, nothing for everybody else<br /></span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">, </span><span style="color: #0000BB">0600</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Read and write for owner, read for everybody else<br /></span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">, </span><span style="color: #0000BB">0644</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Everything for owner, read and execute for others<br /></span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">, </span><span style="color: #0000BB">0755</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Everything for owner, read and execute for owner's group<br /></span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #DD0000">"/somedir/somefile"</span><span style="color: #007700">, </span><span style="color: #0000BB">0750</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.chmod-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.chmod-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Upon failure, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.chmod-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The current user is the user under which PHP runs. It is probably not the
    same user you use for normal shell or FTP access. The mode can be changed
    only by user who owns the file on most systems.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function will not work on
<a href="features.remote-files.php" class="link">remote files</a> as the file to
be examined must be accessible via the server&#039;s filesystem.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.chmod-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.chown.php" class="function" rel="rdfs-seeAlso">chown()</a> - Changes file owner</span></li>
    <li><span class="function"><a href="function.chgrp.php" class="function" rel="rdfs-seeAlso">chgrp()</a> - Changes file group</span></li>
    <li><span class="function"><a href="function.fileperms.php" class="function" rel="rdfs-seeAlso">fileperms()</a> - Gets file permissions</span></li>
    <li><span class="function"><a href="function.stat.php" class="function" rel="rdfs-seeAlso">stat()</a> - Gives information about a file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/functions/chmod.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.chmod%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.chmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.chmod.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99747">  <div class="votes">
    <div id="Vu99747">
    <a href="/manual/vote-note.php?id=99747&amp;page=function.chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99747">
    <a href="/manual/vote-note.php?id=99747&amp;page=function.chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99747" title="72% like this...">
    60
    </div>
  </div>
  <a href="#99747" class="name">
  <strong class="user"><em>MethodicalFool</em></strong></a><a class="genanchor" href="#99747"> &para;</a><div class="date" title="2010-09-02 09:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99747">
<div class="phpcode"><code><span class="html">BEWARE, a couple of the examples in the comments suggest doing something like this:<br /><br />chmod(file_or_dir_name, intval($mode, 8));<br /><br />However, if $mode is an integer then intval( ) won't modify it.  So, this code...<br /><br />$mode = 644;<br />chmod('/tmp/test', intval($mode, 8));<br /><br />...produces permissions that look like this:<br /><br />1--w----r-T<br /><br />Instead, use octdec( ), like this:<br /><br />chmod(file_or_dir_name, octdec($mode));<br /><br />See also: <a href="http://www.php.net/manual/en/function.octdec.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.octdec.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="96086">  <div class="votes">
    <div id="Vu96086">
    <a href="/manual/vote-note.php?id=96086&amp;page=function.chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96086">
    <a href="/manual/vote-note.php?id=96086&amp;page=function.chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96086" title="76% like this...">
    40
    </div>
  </div>
  <a href="#96086" class="name">
  <strong class="user"><em>Geoff W</em></strong></a><a class="genanchor" href="#96086"> &para;</a><div class="date" title="2010-02-08 02:13"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96086">
<div class="phpcode"><code><span class="html">BEWARE using quotes around the second parameter...<br /><br />If you use quotes eg<br /><br />chmod (file, "0644");<br /><br />php will not complain but will do an implicit conversion to an int before running chmod. Unfortunately the implicit conversion doesn't take into account the octal string so you end up with an integer version 644, which is 1204 octal</span></code></div>
  </div>
 </div>
  <div class="note" id="54640">  <div class="votes">
    <div id="Vu54640">
    <a href="/manual/vote-note.php?id=54640&amp;page=function.chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54640">
    <a href="/manual/vote-note.php?id=54640&amp;page=function.chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54640" title="66% like this...">
    36
    </div>
  </div>
  <a href="#54640" class="name">
  <strong class="user"><em>masha at mail dot ru</em></strong></a><a class="genanchor" href="#54640"> &para;</a><div class="date" title="2005-07-10 09:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54640">
<div class="phpcode"><code><span class="html">Usefull reference:<br /><br />Value    Permission Level<br />400    Owner Read<br />200    Owner Write<br />100    Owner Execute<br />40    Group Read<br />20    Group Write<br />10    Group Execute<br />4    Global Read<br />2    Global Write<br />1    Global Execute<br /><br />(taken from <a href="http://www.onlamp.com/pub/a/php/2003/02/06/php_foundations.html" rel="nofollow" target="_blank">http://www.onlamp.com/pub/a/php/2003/02/06/php_foundations.html</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="124784">  <div class="votes">
    <div id="Vu124784">
    <a href="/manual/vote-note.php?id=124784&amp;page=function.chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124784">
    <a href="/manual/vote-note.php?id=124784&amp;page=function.chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124784" title="75% like this...">
    10
    </div>
  </div>
  <a href="#124784" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#124784"> &para;</a><div class="date" title="2020-03-02 07:50"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124784">
<div class="phpcode"><code><span class="html">Windows has a very different file permission model to Unix and integrates them only minimally.<br /><br />On Windows, all this function can do is to change the "read only" flag, which is turned on if $mode &amp; 0200 does not pass.<br />i.e. it only checks if u+w is missing from the bitmask, and if it is, it sets the read only flag.<br /><br />The executable flag cannot be set as Windows determines it based on file extension.<br />The write flag cannot be set as Windows determines write access based on ACLs, which are not integrated here.</span></code></div>
  </div>
 </div>
  <div class="note" id="51498">  <div class="votes">
    <div id="Vu51498">
    <a href="/manual/vote-note.php?id=51498&amp;page=function.chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51498">
    <a href="/manual/vote-note.php?id=51498&amp;page=function.chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51498" title="70% like this...">
    7
    </div>
  </div>
  <a href="#51498" class="name">
  <strong class="user"><em>alex at feidesign dot com</em></strong></a><a class="genanchor" href="#51498"> &para;</a><div class="date" title="2005-04-01 04:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51498">
<div class="phpcode"><code><span class="html">If you cannot chmod files/directories with PHP because of safe_mode restrictions, but you can use FTP to chmod them, simply use PHP's FTP-functions (eg. ftp_chmod or ftp_site) instead. Not as efficient, but works.</span></code></div>
  </div>
 </div>
  <div class="note" id="91794">  <div class="votes">
    <div id="Vu91794">
    <a href="/manual/vote-note.php?id=91794&amp;page=function.chmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91794">
    <a href="/manual/vote-note.php?id=91794&amp;page=function.chmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91794" title="57% like this...">
    3
    </div>
  </div>
  <a href="#91794" class="name">
  <strong class="user"><em>sander</em></strong></a><a class="genanchor" href="#91794"> &para;</a><div class="date" title="2009-06-25 11:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91794">
<div class="phpcode"><code><span class="html">if you want to chmod directories too, use this 
<br />
<br /><span class="default">&lt;?php
<br />$iterator </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$pathname</span><span class="keyword">), </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">::</span><span class="default">SELF_FIRST</span><span class="keyword">);
<br />
<br />foreach(</span><span class="default">$iterator </span><span class="keyword">as </span><span class="default">$item</span><span class="keyword">) {
<br />    </span><span class="default">chmod</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$filemode</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.chmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.chmod.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
