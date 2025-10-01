<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: RarEntry::extract - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/rarentry.extract.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/rarentry.extract.php">
 <link rel="alternate" href="https://www.php.net/manual/en/rarentry.extract.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.rarentry.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.rarentry.php">
 <link rel="next" href="https://www.php.net/manual/en/rarentry.getattr.php">

 <link rel="alternate" href="https://www.php.net/manual/en/rarentry.extract.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/rarentry.extract.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/rarentry.extract.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/rarentry.extract.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/rarentry.extract.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/rarentry.extract.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/rarentry.extract.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/rarentry.extract.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/rarentry.extract.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/rarentry.extract.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/rarentry.extract.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Extract entry from the archive" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: RarEntry::extract - Manual" />
<meta name="twitter:description" content="Extract entry from the archive" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: RarEntry::extract - Manual" />
<meta itemprop="description" content="Extract entry from the archive" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Extract entry from the archive" />

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
        <a href="rarentry.getattr.php">
          RarEntry::getAttr &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.rarentry.php">
          &laquo; RarEntry        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.rar.php'>Rar</a></li>      <li><a href='class.rarentry.php'>RarEntry</a></li>      </ul>
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
            <option value='en/rarentry.extract.php' selected="selected">English</option>
            <option value='de/rarentry.extract.php'>German</option>
            <option value='es/rarentry.extract.php'>Spanish</option>
            <option value='fr/rarentry.extract.php'>French</option>
            <option value='it/rarentry.extract.php'>Italian</option>
            <option value='ja/rarentry.extract.php'>Japanese</option>
            <option value='pt_BR/rarentry.extract.php'>Brazilian Portuguese</option>
            <option value='ru/rarentry.extract.php'>Russian</option>
            <option value='tr/rarentry.extract.php'>Turkish</option>
            <option value='uk/rarentry.extract.php'>Ukrainian</option>
            <option value='zh/rarentry.extract.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="rarentry.extract" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">RarEntry::extract</h1>
  <p class="verinfo">(PECL rar &gt;= 0.1)</p><p class="refpurpose"><span class="refname">RarEntry::extract</span> &mdash; <span class="dc-title">Extract entry from the archive</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-rarentry.extract-description">
  <h3 class="title">Description</h3>
   <div class="methodsynopsis dc-description">
    <span class="modifier">public</span> <span class="methodname"><strong>RarEntry::extract</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dir</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filepath</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$password</code><span class="initializer"> = NULL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$extended_data</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="methodname"><strong>RarEntry::extract()</strong></span> extracts the entry&#039;s data.
   It will create new file in the specified
   <code class="parameter">dir</code> with the name identical to the entry&#039;s name,
   unless the second argument is specified. See below for more information.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-rarentry.extract-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">dir</code></dt>
     <dd>
      <p class="para">
       Path to the directory where files should be extracted. This parameter is
       considered if and only if <code class="parameter">filepath</code> is not. If both
       parameters are empty an extraction to the current directory will be
       attempted.
      </p>
     </dd>
    
    
    
     <dt><code class="parameter">filepath</code></dt>
     <dd>
      <p class="para">
       Path (relative or absolute) containing the directory and filename of the
       extracted file. This parameter overrides both the parameter
       <code class="parameter">dir</code> and the original file name.
      </p>
     </dd>
    
    
    
     <dt><code class="parameter">password</code></dt>
     <dd>
      <p class="para">
       The password used to encrypt this entry. If the entry is not encrypted, this value will not be used and can
       be omitted. If this parameter is omitted and the entry is encrypted, the password given to
       <span class="function"><a href="rararchive.open.php" class="function">rar_open()</a></span>, if any, will be used. If a wrong password is given, either explicitly
       or implicitly via <span class="function"><a href="rararchive.open.php" class="function">rar_open()</a></span>, CRC checking will fail and this method will fail and return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
       If no password is given and one is required, this method will fail and return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
       You can check whether an entry is encrypted with <span class="methodname"><a href="rarentry.isencrypted.php" class="methodname">RarEntry::isEncrypted()</a></span>.
      </p>
     </dd>
    

   
    <dt><code class="parameter">extended_data</code></dt>
    <dd>
     <p class="para">
       If <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, extended information such as NTFS ACLs and Unix owner information will be set in the extract
       files, as long as it&#039;s present in the archive.
     </p>
    </dd>
   
   </dl>
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
      <p class="para">Prior to version 2.0.0, this function would not handle relative
      paths correctly. Use <span class="function"><a href="function.realpath.php" class="function">realpath()</a></span> as a workaround.</p>
  </div>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-rarentry.extract-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-rarentry.extract-changelog">
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
       <td>PECL rar 3.0.0</td>
       <td>
        <code class="parameter">extended_data</code> was added.
       </td>
      </tr>

      <tr>
       <td>PECL rar 3.0.0</td>
       <td>
        Support for RAR archives with repeated entry names is no longer defective.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-rarentry.extract-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-896">
    <p><strong>Example #1 <span class="methodname"><strong>RarEntry::extract()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$rar_file </span><span style="color: #007700">= </span><span style="color: #0000BB">rar_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'example.rar'</span><span style="color: #007700">) or die(</span><span style="color: #DD0000">"Failed to open Rar archive"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$entry </span><span style="color: #007700">= </span><span style="color: #0000BB">rar_entry_get</span><span style="color: #007700">(</span><span style="color: #0000BB">$rar_file</span><span style="color: #007700">, </span><span style="color: #DD0000">'Dir/file.txt'</span><span style="color: #007700">) or die(</span><span style="color: #DD0000">"Failed to find such entry"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$entry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #DD0000">'/dir/to'</span><span style="color: #007700">); </span><span style="color: #FF8000">// create /dir/to/Dir/file.txt<br /></span><span style="color: #0000BB">$entry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #DD0000">'/dir/to/new_name.txt'</span><span style="color: #007700">); </span><span style="color: #FF8000">// create /dir/to/new_name.txt<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-897">
    <p><strong>Example #2 How to extract all files in archive: </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* example by Erik Jenssen aka erix */<br /><br /></span><span style="color: #0000BB">$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">"foobar.rar"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$filepath </span><span style="color: #007700">= </span><span style="color: #DD0000">"/home/foo/bar/"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$rar_file </span><span style="color: #007700">= </span><span style="color: #0000BB">rar_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$filepath</span><span style="color: #007700">.</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$list </span><span style="color: #007700">= </span><span style="color: #0000BB">rar_list</span><span style="color: #007700">(</span><span style="color: #0000BB">$rar_file</span><span style="color: #007700">);<br />foreach(</span><span style="color: #0000BB">$list </span><span style="color: #007700">as </span><span style="color: #0000BB">$file</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$entry </span><span style="color: #007700">= </span><span style="color: #0000BB">rar_entry_get</span><span style="color: #007700">(</span><span style="color: #0000BB">$rar_file</span><span style="color: #007700">, </span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$entry</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #DD0000">"."</span><span style="color: #007700">); </span><span style="color: #FF8000">// extract to the current dir<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">rar_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$rar_file</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-rarentry.extract-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="rarentry.getstream.php" class="methodname" rel="rdfs-seeAlso">RarEntry::getStream()</a> - Get file handler for entry</span></li>
    <li><a href="wrappers.rar.php" class="link"><code class="literal">rar://</code> wrapper</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/rar/rarentry/extract.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Frarentry.extract%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=rarentry.extract&amp;repo=en&amp;redirect=https://www.php.net/manual/en/rarentry.extract.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116603">  <div class="votes">
    <div id="Vu116603">
    <a href="/manual/vote-note.php?id=116603&amp;page=rarentry.extract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116603">
    <a href="/manual/vote-note.php?id=116603&amp;page=rarentry.extract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116603" title="76% like this...">
    7
    </div>
  </div>
  <a href="#116603" class="name">
  <strong class="user"><em>nelson_km_94 at hotmail dot com</em></strong></a><a class="genanchor" href="#116603"> &para;</a><div class="date" title="2015-01-27 07:41"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116603">
<div class="phpcode"><code><span class="html">Example #2 has a mistake.<br /><br />This one works fine:<br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* example by Erik Jenssen aka erix */<br /><br /></span><span class="default">$filename </span><span class="keyword">= </span><span class="string">"foobar.rar"</span><span class="keyword">;<br /></span><span class="default">$filepath </span><span class="keyword">= </span><span class="string">"/home/foo/bar/"</span><span class="keyword">;<br /><br /></span><span class="default">$rar_file </span><span class="keyword">= </span><span class="default">rar_open</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">.</span><span class="default">$filename</span><span class="keyword">);<br /></span><span class="default">$list </span><span class="keyword">= </span><span class="default">rar_list</span><span class="keyword">(</span><span class="default">$rar_file</span><span class="keyword">);<br />foreach(</span><span class="default">$list </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="default">$entry </span><span class="keyword">= </span><span class="default">rar_entry_get</span><span class="keyword">(</span><span class="default">$rar_file</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">());<br />    </span><span class="default">$entry</span><span class="keyword">-&gt;</span><span class="default">extract</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">); </span><span class="comment">// extract to the current dir<br /></span><span class="keyword">}<br /></span><span class="default">rar_close</span><span class="keyword">(</span><span class="default">$rar_file</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112232">  <div class="votes">
    <div id="Vu112232">
    <a href="/manual/vote-note.php?id=112232&amp;page=rarentry.extract&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112232">
    <a href="/manual/vote-note.php?id=112232&amp;page=rarentry.extract&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112232" title="50% like this...">
    0
    </div>
  </div>
  <a href="#112232" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#112232"> &para;</a><div class="date" title="2013-05-20 05:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112232">
<div class="phpcode"><code><span class="html">If the entry to extract is a directory as per RarEntry::isDirectory(), this method does not seem to extract the entries below that directory as one might expect from using the command-line RAR or WinRAR.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=rarentry.extract&amp;repo=en&amp;redirect=https://www.php.net/manual/en/rarentry.extract.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.rarentry.php">RarEntry</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="rarentry.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getattr.php" title="getAttr">getAttr</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getcrc.php" title="getCrc">getCrc</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getfiletime.php" title="getFileTime">getFileTime</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.gethostos.php" title="getHostOs">getHostOs</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getmethod.php" title="getMethod">getMethod</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getname.php" title="getName">getName</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getpackedsize.php" title="getPackedSize">getPackedSize</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getstream.php" title="getStream">getStream</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getunpackedsize.php" title="getUnpackedSize">getUnpackedSize</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.getversion.php" title="getVersion">getVersion</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.isdirectory.php" title="isDirectory">isDirectory</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.isencrypted.php" title="isEncrypted">isEncrypted</a>
                        </li>
                                                <li class="">
                            <a href="rarentry.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
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
