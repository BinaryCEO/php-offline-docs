<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_sort - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-sort.php">
 <link rel="shorturl" href="https://www.php.net/ldap-sort">
 <link rel="alternate" href="https://www.php.net/ldap-sort" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-set-rebind-proc.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-start-tls.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-sort.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-sort.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-sort.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-sort.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-sort.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-sort.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-sort.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-sort.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-sort.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-sort.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-sort.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sort LDAP result entries on the client side" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_sort - Manual" />
<meta name="twitter:description" content="Sort LDAP result entries on the client side" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_sort - Manual" />
<meta itemprop="description" content="Sort LDAP result entries on the client side" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sort LDAP result entries on the client side" />

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
        <a href="function.ldap-start-tls.php">
          ldap_start_tls &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-set-rebind-proc.php">
          &laquo; ldap_set_rebind_proc        </a>
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
            <option value='en/function.ldap-sort.php' selected="selected">English</option>
            <option value='de/function.ldap-sort.php'>German</option>
            <option value='es/function.ldap-sort.php'>Spanish</option>
            <option value='fr/function.ldap-sort.php'>French</option>
            <option value='it/function.ldap-sort.php'>Italian</option>
            <option value='ja/function.ldap-sort.php'>Japanese</option>
            <option value='pt_BR/function.ldap-sort.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-sort.php'>Russian</option>
            <option value='tr/function.ldap-sort.php'>Turkish</option>
            <option value='uk/function.ldap-sort.php'>Ukrainian</option>
            <option value='zh/function.ldap-sort.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-sort" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_sort</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">ldap_sort</span> &mdash; <span class="dc-title">Sort LDAP result entries on the client side</span></p>

 </div>

 <div id="function.ldap-sort-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 7.0.0 and
<em>REMOVED</em> as of PHP 8.0.0. Relying on this function
is highly discouraged.</p></div>
 </div>

 <div class="refsect1 description" id="refsect1-function.ldap-sort-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_sort</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$link</code></span>, <span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$result</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$sortfilter</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Sort the result of a LDAP search, returned by
   <span class="function"><a href="function.ldap-search.php" class="function">ldap_search()</a></span>.
  </p>
  <p class="para">
   As this function sorts the returned values on the client side it is possible that 
   you might not get the expected results in case you reach the <code class="parameter">sizelimit</code> either of the server or
   defined within <span class="function"><a href="function.ldap-search.php" class="function">ldap_search()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ldap-sort-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">link</code></dt>
     <dd>
      <p class="para">
       An LDAP resource, returned by <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">result</code></dt>
     <dd>
      <p class="para">
       An search result identifier, returned by
       <span class="function"><a href="function.ldap-search.php" class="function">ldap_search()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">sortfilter</code></dt>
     <dd>
      <p class="para">
       The attribute to use as a key in the sort.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ldap-sort-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ldap-sort-changelog">
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
        This function has been removed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ldap-sort-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   Sorting the result of a search.
   <div class="example" id="example-4648">
    <p><strong>Example #1 LDAP sort</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />     </span><span style="color: #FF8000">// $ds is a valid link identifier (see ldap_connect)<br /><br />     </span><span style="color: #0000BB">$dn        </span><span style="color: #007700">= </span><span style="color: #DD0000">'ou=example,dc=org'</span><span style="color: #007700">;<br />     </span><span style="color: #0000BB">$filter    </span><span style="color: #007700">= </span><span style="color: #DD0000">'(|(sn=Doe*)(givenname=John*))'</span><span style="color: #007700">;<br />     </span><span style="color: #0000BB">$justthese </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'ou'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sn'</span><span style="color: #007700">, </span><span style="color: #DD0000">'givenname'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mail'</span><span style="color: #007700">);<br /><br />     </span><span style="color: #0000BB">$sr </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_search</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$dn</span><span style="color: #007700">, </span><span style="color: #0000BB">$filter</span><span style="color: #007700">, </span><span style="color: #0000BB">$justthese</span><span style="color: #007700">);<br /><br />     </span><span style="color: #FF8000">// Sort<br />     </span><span style="color: #0000BB">ldap_sort</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$sr</span><span style="color: #007700">, </span><span style="color: #DD0000">'sn'</span><span style="color: #007700">);<br /><br />     </span><span style="color: #FF8000">// Retrieving the data<br />     </span><span style="color: #0000BB">$info </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_get_entries</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">$sr</span><span style="color: #007700">);</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-sort.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-sort%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-sort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-sort.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="44469">  <div class="votes">
    <div id="Vu44469">
    <a href="/manual/vote-note.php?id=44469&amp;page=function.ldap-sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44469">
    <a href="/manual/vote-note.php?id=44469&amp;page=function.ldap-sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44469" title="64% like this...">
    4
    </div>
  </div>
  <a href="#44469" class="name">
  <strong class="user"><em>zbaizman at yahoo dot com</em></strong></a><a class="genanchor" href="#44469"> &para;</a><div class="date" title="2004-08-06 06:15"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44469">
<div class="phpcode"><code><span class="html">This note may be self-evident, but the functionality of ldap_sort threw off this sometime user of relational databases.<br /><br />The following code will NOT do what you expect:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// omitted calls to connect and and bind to LDAP server...<br /><br />// attributes we want to retrieve from LDAP server<br /></span><span class="default">$ldap_attributes </span><span class="keyword">= array ( </span><span class="string">'cn'</span><span class="keyword">, </span><span class="string">'o'</span><span class="keyword">, </span><span class="string">'mail' </span><span class="keyword">) ;<br /><br /></span><span class="comment">// retrieve attributes from matching entries<br /></span><span class="default">$search_results </span><span class="keyword">= </span><span class="default">ldap_search </span><span class="keyword">( </span><span class="default">$ldap_conn</span><span class="keyword">, </span><span class="string">'dc=example,dc=org'</span><span class="keyword">, </span><span class="string">'(objectclass=*)'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">500</span><span class="keyword">, </span><span class="default">30 </span><span class="keyword">) ;<br /><br /></span><span class="comment">// sort entries by last name ('sn')<br /></span><span class="default">ldap_sort </span><span class="keyword">( </span><span class="default">$ldap_conn</span><span class="keyword">, </span><span class="default">$search_results</span><span class="keyword">, </span><span class="string">'sn' </span><span class="keyword">) ;<br /><br /></span><span class="default">?&gt;<br /></span><br />The entries will NOT be sorted by last name. Why not? Because LDAP doesn't function like a RDBMS; you cannot sort a result set on an arbitrary field, regardless of whether you "selected" it. You must always include the attribute by which you want to sort your entries among the requested attributes (add 'sn' to $ldap_attributes, in this case).<br /><br />Hope this is helpful to some other folks who scratched their heads when they tried to sort entries and it didn't work out...</span></code></div>
  </div>
 </div>
  <div class="note" id="101729">  <div class="votes">
    <div id="Vu101729">
    <a href="/manual/vote-note.php?id=101729&amp;page=function.ldap-sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101729">
    <a href="/manual/vote-note.php?id=101729&amp;page=function.ldap-sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101729" title="66% like this...">
    1
    </div>
  </div>
  <a href="#101729" class="name">
  <strong class="user"><em>thorben at kapp-hamburg dot de</em></strong></a><a class="genanchor" href="#101729"> &para;</a><div class="date" title="2011-01-07 04:46"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101729">
<div class="phpcode"><code><span class="html">I wondered how to sort after a dn, for just show a tree view. I tried to set $sortfilter = 'dn', but that didn't work. Than I tried with a blank string ''. That worked, the entries are sorted by dn.</span></code></div>
  </div>
 </div>
  <div class="note" id="45377">  <div class="votes">
    <div id="Vu45377">
    <a href="/manual/vote-note.php?id=45377&amp;page=function.ldap-sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45377">
    <a href="/manual/vote-note.php?id=45377&amp;page=function.ldap-sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45377" title="60% like this...">
    1
    </div>
  </div>
  <a href="#45377" class="name">
  <strong class="user"><em>ben at xsusio dot com</em></strong></a><a class="genanchor" href="#45377"> &para;</a><div class="date" title="2004-09-03 02:33"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45377">
<div class="phpcode"><code><span class="html">If you are wanting to sort by multiple attributes, for instance ordering by last name and then first name,  try this function. This is similar to "ORDER BY lastname, firstname"  in SQL.<br /><br />This function uses an insertion sort algorithm, which is somewhat faster then the old-fashoned bubble sort.  The second argument is an array containing the attributes you want to sort by. (this functon won't do descending or ascending..  feel free to add it!)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @param array $entries<br /> * @param array $attribs<br /> * @desc Sort LDAP result entries by multiple attributes.<br />*/<br /></span><span class="keyword">function </span><span class="default">ldap_multi_sort</span><span class="keyword">(&amp;</span><span class="default">$entries</span><span class="keyword">, </span><span class="default">$attribs</span><span class="keyword">){<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$entries</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++){<br />        </span><span class="default">$index </span><span class="keyword">= </span><span class="default">$entries</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        </span><span class="default">$j</span><span class="keyword">=</span><span class="default">$i</span><span class="keyword">;<br />        do {<br />            </span><span class="comment">//create comparison variables from attributes:<br />            </span><span class="default">$a </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />            foreach(</span><span class="default">$attribs </span><span class="keyword">as </span><span class="default">$attrib</span><span class="keyword">){<br />                </span><span class="default">$a </span><span class="keyword">.= </span><span class="default">$entries</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">][</span><span class="default">$attrib</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />                </span><span class="default">$b </span><span class="keyword">.= </span><span class="default">$index</span><span class="keyword">[</span><span class="default">$attrib</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />            }<br />            </span><span class="comment">// do the comparison<br />            </span><span class="keyword">if (</span><span class="default">$a </span><span class="keyword">&gt; </span><span class="default">$b</span><span class="keyword">){<br />                </span><span class="default">$is_greater </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                </span><span class="default">$entries</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$entries</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">];<br />                </span><span class="default">$j </span><span class="keyword">= </span><span class="default">$j</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />            }else{<br />                </span><span class="default">$is_greater </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            }<br />        } while (</span><span class="default">$j</span><span class="keyword">&gt;</span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$is_greater</span><span class="keyword">);<br />        <br />        </span><span class="default">$entries</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$index</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$entries</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35531">  <div class="votes">
    <div id="Vu35531">
    <a href="/manual/vote-note.php?id=35531&amp;page=function.ldap-sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35531">
    <a href="/manual/vote-note.php?id=35531&amp;page=function.ldap-sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35531" title="57% like this...">
    1
    </div>
  </div>
  <a href="#35531" class="name">
  <strong class="user"><em>askgopal at sify dot com</em></strong></a><a class="genanchor" href="#35531"> &para;</a><div class="date" title="2003-09-04 08:07"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35531">
<div class="phpcode"><code><span class="html">Here's a simple LDAP sort function I wrote:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">sort_ldap_entries</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">, </span><span class="default">$fld</span><span class="keyword">, </span><span class="default">$order</span><span class="keyword">)
<br />{
<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$e</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++) {
<br />        for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">$e</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$j</span><span class="keyword">++) {
<br />            </span><span class="default">$d </span><span class="keyword">= </span><span class="default">strcasecmp</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$fld</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="default">$e</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">][</span><span class="default">$fld</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);
<br />            switch (</span><span class="default">$order</span><span class="keyword">) {
<br />            case </span><span class="string">'A'</span><span class="keyword">:
<br />                if (</span><span class="default">$d </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">)
<br />                    </span><span class="default">swap</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">);
<br />                break;
<br />            case </span><span class="string">'D'</span><span class="keyword">:
<br />                if (</span><span class="default">$d </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)
<br />                    </span><span class="default">swap</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">);
<br />                break;
<br />            }
<br />        }
<br />    }
<br />    return (</span><span class="default">$e</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">swap</span><span class="keyword">(&amp;</span><span class="default">$ary</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">$ary</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />    </span><span class="default">$ary</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$ary</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">];
<br />    </span><span class="default">$ary</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$temp</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />so that it can be invoked like:
<br />
<br /><span class="default">&lt;?php
<br />    $entries </span><span class="keyword">= </span><span class="default">sort_ldap_entries</span><span class="keyword">(</span><span class="default">$entries</span><span class="keyword">, </span><span class="string">'mail'</span><span class="keyword">, </span><span class="string">'A'</span><span class="keyword">); </span><span class="comment">// sort entries by ascending order of mail
<br /></span><span class="default">?&gt;
<br /></span>
<br />where,
<br />    `$entries' is the array returned by ldap_get_entries() function.
<br />
<br />This might be useful to those who still run older versions of PHP (&lt;= 4.2.0) on their web servers :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="22635">  <div class="votes">
    <div id="Vu22635">
    <a href="/manual/vote-note.php?id=22635&amp;page=function.ldap-sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22635">
    <a href="/manual/vote-note.php?id=22635&amp;page=function.ldap-sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22635" title="100% like this...">
    1
    </div>
  </div>
  <a href="#22635" class="name">
  <strong class="user"><em>matthew dot j dot gray at uwrf dot edu</em></strong></a><a class="genanchor" href="#22635"> &para;</a><div class="date" title="2002-06-25 02:47"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22635">
<div class="phpcode"><code><span class="html">This function applies strcmp() to each attribute (given by sortfilter) in order to sort the entries returned by the server.  To order search results ascending by last name, try passing "sn" as the sortfilter argument.  This function does not play nice with multi-valued attributes.</span></code></div>
  </div>
 </div>
  <div class="note" id="24983">  <div class="votes">
    <div id="Vu24983">
    <a href="/manual/vote-note.php?id=24983&amp;page=function.ldap-sort&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24983">
    <a href="/manual/vote-note.php?id=24983&amp;page=function.ldap-sort&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24983" title="no votes...">
    0
    </div>
  </div>
  <a href="#24983" class="name">
  <strong class="user"><em>jason dot sokolowski at rotork dot com</em></strong></a><a class="genanchor" href="#24983"> &para;</a><div class="date" title="2002-09-06 01:51"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24983">
<div class="phpcode"><code><span class="html">Something real simple i wrote to sort directory searches by a persons last name.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$result</span><span class="keyword">[</span><span class="string">"count"</span><span class="keyword">];</span><span class="default">$i</span><span class="keyword">++)
<br />{
<br />
<br /></span><span class="default">$lastname </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"sn"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];
<br />
<br /></span><span class="default">$lnames</span><span class="keyword">[</span><span class="string">"</span><span class="default">$i</span><span class="string">"</span><span class="keyword">]=</span><span class="default">$lastname</span><span class="keyword">;
<br />
<br />}</span><span class="comment">//for i
<br />
<br /></span><span class="keyword">@</span><span class="default">asort</span><span class="keyword">(</span><span class="default">$lnames</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-sort&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-sort.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
