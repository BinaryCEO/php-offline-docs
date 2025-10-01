<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_explode_dn - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-explode-dn.php">
 <link rel="shorturl" href="https://www.php.net/ldap-explode-dn">
 <link rel="alternate" href="https://www.php.net/ldap-explode-dn" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-exop-whoami.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-first-attribute.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-explode-dn.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-explode-dn.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-explode-dn.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-explode-dn.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-explode-dn.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-explode-dn.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-explode-dn.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-explode-dn.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-explode-dn.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-explode-dn.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-explode-dn.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Splits DN into its component parts" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_explode_dn - Manual" />
<meta name="twitter:description" content="Splits DN into its component parts" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_explode_dn - Manual" />
<meta itemprop="description" content="Splits DN into its component parts" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Splits DN into its component parts" />

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
        <a href="function.ldap-first-attribute.php">
          ldap_first_attribute &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-exop-whoami.php">
          &laquo; ldap_exop_whoami        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ldap.php'>LDAP</a></li>      <li><a href='ref.ldap.php'>LDAP Functions</a></li>      </ul>
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
            <option value='en/function.ldap-explode-dn.php' selected="selected">English</option>
            <option value='de/function.ldap-explode-dn.php'>German</option>
            <option value='es/function.ldap-explode-dn.php'>Spanish</option>
            <option value='fr/function.ldap-explode-dn.php'>French</option>
            <option value='it/function.ldap-explode-dn.php'>Italian</option>
            <option value='ja/function.ldap-explode-dn.php'>Japanese</option>
            <option value='pt_BR/function.ldap-explode-dn.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-explode-dn.php'>Russian</option>
            <option value='tr/function.ldap-explode-dn.php'>Turkish</option>
            <option value='uk/function.ldap-explode-dn.php'>Ukrainian</option>
            <option value='zh/function.ldap-explode-dn.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-explode-dn" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_explode_dn</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_explode_dn</span> &mdash; <span class="dc-title">Splits DN into its component parts</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ldap-explode-dn-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_explode_dn</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dn</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$with_attrib</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Splits the DN returned by <span class="function"><a href="function.ldap-get-dn.php" class="function">ldap_get_dn()</a></span> and breaks it
   up into its component parts. Each part is known as Relative Distinguished
   Name, or RDN.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ldap-explode-dn-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">dn</code></dt>
     <dd>
      <p class="para">
       The distinguished name of an LDAP entity.
      </p>
     </dd>
    
    
     <dt><code class="parameter">with_attrib</code></dt>
     <dd>
      <p class="para">
       Used to request if the RDNs are returned with only values or their
       attributes as well.  To get RDNs with the attributes (i.e. in
       attribute=value format) set <code class="parameter">with_attrib</code> to 0
       and to get only values set it to 1.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ldap-explode-dn-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of all DN components,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   The first element in the array has <code class="literal">count</code> key and
   represents the number of returned values, next elements are numerically
   indexed DN components.
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-explode-dn.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-explode-dn%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-explode-dn&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-explode-dn.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121219">  <div class="votes">
    <div id="Vu121219">
    <a href="/manual/vote-note.php?id=121219&amp;page=function.ldap-explode-dn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121219">
    <a href="/manual/vote-note.php?id=121219&amp;page=function.ldap-explode-dn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121219" title="100% like this...">
    3
    </div>
  </div>
  <a href="#121219" class="name">
  <strong class="user"><em>eero at eero dot info</em></strong></a><a class="genanchor" href="#121219"> &para;</a><div class="date" title="2017-06-14 07:54"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121219">
<div class="phpcode"><code><span class="html">I was converting LDAP related code to PHP7 which doesn't support /e modifier with preg_replace anymore, but instead you should use preg_replace_callback. This might help someone working on the same thing:<br /><br /><span class="default">&lt;?php<br /><br />$value </span><span class="keyword">= </span><span class="string">'Universität'</span><span class="keyword">;<br /><br /></span><span class="comment"># &lt; PHP7 compatible code<br /></span><span class="keyword">echo </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\\\([0-9A-Fa-f]{2})/e"</span><span class="keyword">, </span><span class="string">"''.chr(hexdec('\\1')).''"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br /><br /></span><span class="comment"># &gt;= PHP7 compatible code<br /></span><span class="keyword">echo </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="string">'/\\\([0-9A-Fa-f]{2})/'</span><span class="keyword">, function (</span><span class="default">$matches</span><span class="keyword">) { return </span><span class="default">chr</span><span class="keyword">(</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])); }, </span><span class="default">$value</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="34724">  <div class="votes">
    <div id="Vu34724">
    <a href="/manual/vote-note.php?id=34724&amp;page=function.ldap-explode-dn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34724">
    <a href="/manual/vote-note.php?id=34724&amp;page=function.ldap-explode-dn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34724" title="83% like this...">
    4
    </div>
  </div>
  <a href="#34724" class="name">
  <strong class="user"><em>gabriel at hrz dot uni-marburg dot de</em></strong></a><a class="genanchor" href="#34724"> &para;</a><div class="date" title="2003-08-05 02:27"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34724">
<div class="phpcode"><code><span class="html">Keep attention on UTF8 encoded DNs. Since openLDAP &gt;=2.1.2<br />ldap_explode_dn turns unprintable chars (in the ASCII sense, UTF8<br />encoded) into \&lt;hexcode&gt;.<br /><br />Example:<br /><br />$dn="ou=Universität ,c=DE";<br />var_dump(ldap_explode_dn($dn,0));<br /><br />//returns<br /><br />array(3) {<br />  ["count"]=&gt;<br />  int(2)<br />  [0]=&gt;<br />  string(19) "ou=Universit\C3\A4t"<br />  [1]=&gt;<br />  string(4) "c=DE"<br />}<br /><br />Unfortunately, PHP don't support the ldap functions ldap_str2dn and <br />ldap_dn2str, but by means of preg_replace a workaround is possible to<br />recover the old behaviour of ldap_explode_dn<br /><br />// workaround<br />function myldap_explode_dn($dn,$with_attribute){<br /><br />$result=ldap_explode_dn ($dn, $with_attrib);<br /> //translate hex code into ascii again<br />    foreach($result as $key=&gt;$value){<br />          $result[$key]=preg_replace("/\\\([0-9A-Fa-f]{2})/e", "''.chr(hexdec('\\1')).''", $value);<br />    }<br />    return($result);<br /><br />}<br />//<br />//then follows for the example<br /><br />$dn="ou=Universität ,c=DE";<br />var_dump(myldap_explode_dn($dn,0));<br /><br />//returns<br /><br />array(3) {<br />  ["count"]=&gt;<br />  int(2)<br />  [0]=&gt;<br />  string(15) "ou=Universität"<br />  [1]=&gt;<br />  string(4) "c=DE"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="109482">  <div class="votes">
    <div id="Vu109482">
    <a href="/manual/vote-note.php?id=109482&amp;page=function.ldap-explode-dn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109482">
    <a href="/manual/vote-note.php?id=109482&amp;page=function.ldap-explode-dn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109482" title="66% like this...">
    3
    </div>
  </div>
  <a href="#109482" class="name">
  <strong class="user"><em>hello+php at NOSPAM dot renoirboulanger dot com</em></strong></a><a class="genanchor" href="#109482"> &para;</a><div class="date" title="2012-07-20 07:20"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109482">
<div class="phpcode"><code><span class="html">I came accros this page and enjoyed the comments. 
<br />
<br />Since a LDAP string can sometimes be lengthy and have many attributes, I needed to be able to sort through all that is in.
<br />
<br />In my case, I needed to get the subdomain part and other parameters. 
<br />
<br />Here is how I built my method.
<br /><span class="default">&lt;?php
<br />    </span><span class="comment">/**
<br />     * Parse, and format a DN string to Array
<br />     *
<br />     * Read a LDAP DN, and return an array keys
<br />     * listing all similar attributes.
<br />     *
<br />     * Also takes care of the character escape and unescape
<br />     *
<br />     * Example:
<br />     * CN=username,OU=UNITNAME,OU=Region,OU=Country,DC=subdomain,DC=domain,DC=com
<br />     *
<br />     * Would normally return:
<br />     * Array (
<br />     *     [count] =&gt; 9
<br />     *     [0] =&gt; CN=username
<br />     *     [1] =&gt; OU=UNITNAME
<br />     *     [2] =&gt; OU=Region
<br />     *     [5] =&gt; OU=Country
<br />     *     [6] =&gt; DC=subdomain
<br />     *     [7] =&gt; DC=domain
<br />     *     [8] =&gt; DC=com
<br />     * )
<br />     *
<br />     * Returns instead a manageable array:
<br />     * array (
<br />     *     [CN] =&gt; array( username )
<br />     *     [OU] =&gt; array( UNITNAME, Region, Country )
<br />     *     [DC] =&gt; array ( subdomain, domain, com )
<br />     * )
<br />     *
<br />     *
<br />     * @author gabriel at hrz dot uni-marburg dot de 05-Aug-2003 02:27 (part of the character replacement)
<br />     * @author Renoir Boulanger
<br />     * 
<br />     * @param  string $dn          The DN
<br />     * @return array
<br />     */
<br />    </span><span class="keyword">function </span><span class="default">parseLdapDn</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$parsr</span><span class="keyword">=</span><span class="default">ldap_explode_dn</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br />        </span><span class="comment">//$parsr[] = 'EE=Sôme Krazï string';
<br />        //$parsr[] = 'AndBogusOne';
<br />        </span><span class="default">$out </span><span class="keyword">= array();
<br />        foreach(</span><span class="default">$parsr </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){
<br />            if(</span><span class="default">FALSE </span><span class="keyword">!== </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">)){
<br />                list(</span><span class="default">$prefix</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">);
<br />                </span><span class="default">$data</span><span class="keyword">=</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\\\\\\([0-9A-Fa-f]{2})/e"</span><span class="keyword">, </span><span class="string">"''.chr(hexdec('\\\\1')).''"</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);
<br />                if(isset(</span><span class="default">$current_prefix</span><span class="keyword">) &amp;&amp; </span><span class="default">$prefix </span><span class="keyword">== </span><span class="default">$current_prefix</span><span class="keyword">){
<br />                    </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$prefix</span><span class="keyword">][] = </span><span class="default">$data</span><span class="keyword">;
<br />                } else {
<br />                    </span><span class="default">$current_prefix </span><span class="keyword">= </span><span class="default">$prefix</span><span class="keyword">;
<br />                    </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$prefix</span><span class="keyword">][] = </span><span class="default">$data</span><span class="keyword">;
<br />                }
<br />            }
<br />        }
<br />        return </span><span class="default">$out</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121786">  <div class="votes">
    <div id="Vu121786">
    <a href="/manual/vote-note.php?id=121786&amp;page=function.ldap-explode-dn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121786">
    <a href="/manual/vote-note.php?id=121786&amp;page=function.ldap-explode-dn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121786" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121786" class="name">
  <strong class="user"><em>emepese</em></strong></a><a class="genanchor" href="#121786"> &para;</a><div class="date" title="2017-10-22 03:25"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121786">
<div class="phpcode"><code><span class="html">Probably not the best way but for those who are looking for a way to get de CN of a DN without the "cn=" part this is a function with a regex pattern:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">getCNofDN</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">) {<br />        </span><span class="default">$return</span><span class="keyword">=</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[^cn=]([^,]*)/i'</span><span class="keyword">,</span><span class="default">$dn</span><span class="keyword">,</span><span class="default">$dn</span><span class="keyword">);<br />        return(</span><span class="default">$dn</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    }<br /><br />  echo </span><span class="default">getCNofDN</span><span class="keyword">(</span><span class="string">"cn=emepese,cn=someLevel,dc=someCompany"</span><span class="keyword">);<br /><br /></span><span class="comment">// Will print "emepese"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35808">  <div class="votes">
    <div id="Vu35808">
    <a href="/manual/vote-note.php?id=35808&amp;page=function.ldap-explode-dn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35808">
    <a href="/manual/vote-note.php?id=35808&amp;page=function.ldap-explode-dn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35808" title="no votes...">
    0
    </div>
  </div>
  <a href="#35808" class="name">
  <strong class="user"><em>DavidSmith at byu dot net</em></strong></a><a class="genanchor" href="#35808"> &para;</a><div class="date" title="2003-09-15 09:06"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35808">
<div class="phpcode"><code><span class="html">[ Editor's Note: The segfault has been fixed and will not occur in PHP 4.3.4 or PHP 5.0.0 when they are released.  However, it is still important to escape special characters as detailed below. ]
<br />
<br />If your DN contains &lt; or &gt; characters, you must escape them with a backslash or ldap_explode_dn() will give you a "wrong parameter count" error or even a segmentation fault.
<br />
<br />For example, these calls will fail with a "wrong parameter count" or a seg fault:
<br />
<br />  ldap_explode_dn( "cn=&lt;bob&gt;,dc=example,dc=com", 0 );
<br />  ldap_explode_dn( 'cn=&lt;bob&gt;,dc=example,dc=com', 0 );
<br />
<br />But this will succeed
<br />
<br />  ldap_explode_dn( "cn=\&lt;bob\&gt;,dc=example,dc=com", 0 );
<br />
<br />Notice also that the &lt; and &gt; are escaped with hex codes as noted above. This function is a nice wrapper that properly formats all DNs and can safely be called with &lt; and &gt; characters, and UTF-8 characters:
<br />
<br />function my_explode_dn( $dn, $with_attributes=0 )
<br />{
<br />        $dn = addcslashes( $dn, "&lt;&gt;" );
<br />        $result = ldap_explode_dn( $dn, $with_attributes );
<br />        //translate hex code into ascii again
<br />        foreach( $result as $key =&gt; $value )
<br />                $result[$key] = preg_replace("/\\\([0-9A-Fa-f]{2})/e", "''.chr(hexdec('\\1')).''", $value);
<br />        return $result;
<br />}
<br />
<br />I am using php 4.3.1. Good luck!</span></code></div>
  </div>
 </div>
  <div class="note" id="16266">  <div class="votes">
    <div id="Vu16266">
    <a href="/manual/vote-note.php?id=16266&amp;page=function.ldap-explode-dn&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16266">
    <a href="/manual/vote-note.php?id=16266&amp;page=function.ldap-explode-dn&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16266" title="50% like this...">
    0
    </div>
  </div>
  <a href="#16266" class="name">
  <strong class="user"><em>bs at muekno dot de</em></strong></a><a class="genanchor" href="#16266"> &para;</a><div class="date" title="2001-10-23 04:02"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16266">
<div class="phpcode"><code><span class="html">Copying is much better than typing!!!!
<br />Just modify the constants.
<br />Best wishes (and thanX 4 this helpfull site),
<br />Bernd Schwaegerl
<br />Mueller-Knoche GmbH, Systemhaus fuer EDV-Loesungen
<br />
<br /># Example:
<br />
<br />$HOST = "Yourhostname";
<br />$USER_DN = "Yourldapuser_dn";
<br />$PWD = "Ldapuserpassword";
<br />$BASE_DN = "o=Your_organisation";
<br />$SEARCH_OBJECT="sn=YOUR_SEARCH_PERSON_OBJECTS_SN";
<br />
<br />$ldap_handle=ldap_connect($HOST);
<br />$bind_result=ldap_bind($ldap_handle,$USER_DN,$PWD);
<br />
<br />$search_result=ldap_search($ldap_handle,$BASE_DN,$SEARCH_OBJECT);
<br />$result=ldap_get_entries($ldap_handle,$search_result);
<br />$result_array=ldap_get_entries($ldap_handle,$result);
<br />$whole_dn=$result_array[0]["dn"];
<br />
<br />$dn_parts=ldap_explode_dn($whole_dn,0);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-explode-dn&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-explode-dn.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ldap.php">LDAP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ldap-8859-to-t61.php" title="ldap_&#8203;8859_&#8203;to_&#8203;t61">ldap_&#8203;8859_&#8203;to_&#8203;t61</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add.php" title="ldap_&#8203;add">ldap_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add-ext.php" title="ldap_&#8203;add_&#8203;ext">ldap_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind.php" title="ldap_&#8203;bind">ldap_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind-ext.php" title="ldap_&#8203;bind_&#8203;ext">ldap_&#8203;bind_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-close.php" title="ldap_&#8203;close">ldap_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-compare.php" title="ldap_&#8203;compare">ldap_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect.php" title="ldap_&#8203;connect">ldap_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect-wallet.php" title="ldap_&#8203;connect_&#8203;wallet">ldap_&#8203;connect_&#8203;wallet</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-entries.php" title="ldap_&#8203;count_&#8203;entries">ldap_&#8203;count_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-references.php" title="ldap_&#8203;count_&#8203;references">ldap_&#8203;count_&#8203;references</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete.php" title="ldap_&#8203;delete">ldap_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete-ext.php" title="ldap_&#8203;delete_&#8203;ext">ldap_&#8203;delete_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-dn2ufn.php" title="ldap_&#8203;dn2ufn">ldap_&#8203;dn2ufn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-err2str.php" title="ldap_&#8203;err2str">ldap_&#8203;err2str</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-errno.php" title="ldap_&#8203;errno">ldap_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-error.php" title="ldap_&#8203;error">ldap_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-escape.php" title="ldap_&#8203;escape">ldap_&#8203;escape</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop.php" title="ldap_&#8203;exop">ldap_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-passwd.php" title="ldap_&#8203;exop_&#8203;passwd">ldap_&#8203;exop_&#8203;passwd</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-refresh.php" title="ldap_&#8203;exop_&#8203;refresh">ldap_&#8203;exop_&#8203;refresh</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-sync.php" title="ldap_&#8203;exop_&#8203;sync">ldap_&#8203;exop_&#8203;sync</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-whoami.php" title="ldap_&#8203;exop_&#8203;whoami">ldap_&#8203;exop_&#8203;whoami</a>
                        </li>
                                                <li class="current">
                            <a href="function.ldap-explode-dn.php" title="ldap_&#8203;explode_&#8203;dn">ldap_&#8203;explode_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-attribute.php" title="ldap_&#8203;first_&#8203;attribute">ldap_&#8203;first_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-entry.php" title="ldap_&#8203;first_&#8203;entry">ldap_&#8203;first_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-reference.php" title="ldap_&#8203;first_&#8203;reference">ldap_&#8203;first_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-free-result.php" title="ldap_&#8203;free_&#8203;result">ldap_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-attributes.php" title="ldap_&#8203;get_&#8203;attributes">ldap_&#8203;get_&#8203;attributes</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-dn.php" title="ldap_&#8203;get_&#8203;dn">ldap_&#8203;get_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-entries.php" title="ldap_&#8203;get_&#8203;entries">ldap_&#8203;get_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-option.php" title="ldap_&#8203;get_&#8203;option">ldap_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values.php" title="ldap_&#8203;get_&#8203;values">ldap_&#8203;get_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values-len.php" title="ldap_&#8203;get_&#8203;values_&#8203;len">ldap_&#8203;get_&#8203;values_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-list.php" title="ldap_&#8203;list">ldap_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-add.php" title="ldap_&#8203;mod_&#8203;add">ldap_&#8203;mod_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_add-ext.php" title="ldap_&#8203;mod_&#8203;add_&#8203;ext">ldap_&#8203;mod_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-del.php" title="ldap_&#8203;mod_&#8203;del">ldap_&#8203;mod_&#8203;del</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_del-ext.php" title="ldap_&#8203;mod_&#8203;del_&#8203;ext">ldap_&#8203;mod_&#8203;del_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-replace.php" title="ldap_&#8203;mod_&#8203;replace">ldap_&#8203;mod_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_replace-ext.php" title="ldap_&#8203;mod_&#8203;replace_&#8203;ext">ldap_&#8203;mod_&#8203;replace_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify.php" title="ldap_&#8203;modify">ldap_&#8203;modify</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify-batch.php" title="ldap_&#8203;modify_&#8203;batch">ldap_&#8203;modify_&#8203;batch</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-attribute.php" title="ldap_&#8203;next_&#8203;attribute">ldap_&#8203;next_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-entry.php" title="ldap_&#8203;next_&#8203;entry">ldap_&#8203;next_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-reference.php" title="ldap_&#8203;next_&#8203;reference">ldap_&#8203;next_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-exop.php" title="ldap_&#8203;parse_&#8203;exop">ldap_&#8203;parse_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-reference.php" title="ldap_&#8203;parse_&#8203;reference">ldap_&#8203;parse_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-result.php" title="ldap_&#8203;parse_&#8203;result">ldap_&#8203;parse_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-read.php" title="ldap_&#8203;read">ldap_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename.php" title="ldap_&#8203;rename">ldap_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename-ext.php" title="ldap_&#8203;rename_&#8203;ext">ldap_&#8203;rename_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sasl-bind.php" title="ldap_&#8203;sasl_&#8203;bind">ldap_&#8203;sasl_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-search.php" title="ldap_&#8203;search">ldap_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-option.php" title="ldap_&#8203;set_&#8203;option">ldap_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-rebind-proc.php" title="ldap_&#8203;set_&#8203;rebind_&#8203;proc">ldap_&#8203;set_&#8203;rebind_&#8203;proc</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sort.php" title="ldap_&#8203;sort">ldap_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-start-tls.php" title="ldap_&#8203;start_&#8203;tls">ldap_&#8203;start_&#8203;tls</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-t61-to-8859.php" title="ldap_&#8203;t61_&#8203;to_&#8203;8859">ldap_&#8203;t61_&#8203;to_&#8203;8859</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-unbind.php" title="ldap_&#8203;unbind">ldap_&#8203;unbind</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.ldap-control-paged-result.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result">ldap_&#8203;control_&#8203;paged_&#8203;result</a>
                    </li>
                                    <li class="">
                        <a href="function.ldap-control-paged-result-response.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response">ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response</a>
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
