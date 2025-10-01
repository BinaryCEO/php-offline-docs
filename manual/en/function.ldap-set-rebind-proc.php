<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_set_rebind_proc - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-set-rebind-proc.php">
 <link rel="shorturl" href="https://www.php.net/ldap-set-rebind-proc">
 <link rel="alternate" href="https://www.php.net/ldap-set-rebind-proc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-set-option.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-sort.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-set-rebind-proc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-set-rebind-proc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-set-rebind-proc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-set-rebind-proc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-set-rebind-proc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-set-rebind-proc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-set-rebind-proc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-set-rebind-proc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-set-rebind-proc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-set-rebind-proc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-set-rebind-proc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set a callback function to do re-binds on referral chasing" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_set_rebind_proc - Manual" />
<meta name="twitter:description" content="Set a callback function to do re-binds on referral chasing" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_set_rebind_proc - Manual" />
<meta itemprop="description" content="Set a callback function to do re-binds on referral chasing" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set a callback function to do re-binds on referral chasing" />

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
        <a href="function.ldap-sort.php">
          ldap_sort &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-set-option.php">
          &laquo; ldap_set_option        </a>
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
            <option value='en/function.ldap-set-rebind-proc.php' selected="selected">English</option>
            <option value='de/function.ldap-set-rebind-proc.php'>German</option>
            <option value='es/function.ldap-set-rebind-proc.php'>Spanish</option>
            <option value='fr/function.ldap-set-rebind-proc.php'>French</option>
            <option value='it/function.ldap-set-rebind-proc.php'>Italian</option>
            <option value='ja/function.ldap-set-rebind-proc.php'>Japanese</option>
            <option value='pt_BR/function.ldap-set-rebind-proc.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-set-rebind-proc.php'>Russian</option>
            <option value='tr/function.ldap-set-rebind-proc.php'>Turkish</option>
            <option value='uk/function.ldap-set-rebind-proc.php'>Ukrainian</option>
            <option value='zh/function.ldap-set-rebind-proc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-set-rebind-proc" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_set_rebind_proc</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_set_rebind_proc</span> &mdash; <span class="dc-title">Set a callback function to do re-binds on referral chasing</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ldap-set-rebind-proc-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_set_rebind_proc</strong></span>(<span class="methodparam"><span class="type"><a href="class.ldap-connection.php" class="type LDAP\Connection">LDAP\Connection</a></span> <code class="parameter">$ldap</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span></span> <code class="parameter">$callback</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ldap-set-rebind-proc-changelog">
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
  The <code class="parameter">ldap</code> parameter expects an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span>
  instance now; previously, a valid <code class="literal">ldap link</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">callback</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-set-rebind-proc.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-set-rebind-proc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-set-rebind-proc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-set-rebind-proc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111417">  <div class="votes">
    <div id="Vu111417">
    <a href="/manual/vote-note.php?id=111417&amp;page=function.ldap-set-rebind-proc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111417">
    <a href="/manual/vote-note.php?id=111417&amp;page=function.ldap-set-rebind-proc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111417" title="80% like this...">
    3
    </div>
  </div>
  <a href="#111417" class="name">
  <strong class="user"><em>mvanbeek at forgetaboutit dot net</em></strong></a><a class="genanchor" href="#111417"> &para;</a><div class="date" title="2013-02-18 12:15"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111417">
<div class="phpcode"><code><span class="html">The $referral that is used in the callback function isn't the bind dn, but the dn of the record that was being accessed (or rather it's location on the master server, I guess, if there is a difference in the two), so you need to rebind with your existing credentials. The connection ($ldap) appears to have already been made to the new server, so it is just a rebind process, nothing else more complicated than that. There must be a loop in the underlying library that re-submits the request that prompted the referral until either a success or fail is returned.
<br />
<br />I guess if the bind dn you were using in the first place won't let you edit the record on the master, then that is an ldap rather than php issue. However, at least with the rebind procedure you have a way to modify the bind dn first.
<br />
<br />So, the rebind process is really quite simple, now that I understand how it works! I was assuming it to be way more complicated. In it's simplest form, this is all you need, assuming your bind $dn and $pass are globals
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">rebind</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$referral</span><span class="keyword">) {
<br />    </span><span class="comment">// Set ldap options
<br />    </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);
<br />    </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">True</span><span class="keyword">);
<br />    </span><span class="default">ldap_set_rebind_proc</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="string">'rebind'</span><span class="keyword">);
<br />    </span><span class="comment">// Rebind
<br />    </span><span class="keyword">if (!</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">)) {
<br />            echo </span><span class="string">'Could not bind to referral server'</span><span class="keyword">;
<br />            return </span><span class="default">1</span><span class="keyword">; </span><span class="comment">// Yes, a 1 means a failure.
<br />        </span><span class="keyword">}
<br />    return </span><span class="default">0</span><span class="keyword">; </span><span class="comment">// Yes, return a 0 on success.
<br />    </span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104606">  <div class="votes">
    <div id="Vu104606">
    <a href="/manual/vote-note.php?id=104606&amp;page=function.ldap-set-rebind-proc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104606">
    <a href="/manual/vote-note.php?id=104606&amp;page=function.ldap-set-rebind-proc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104606" title="60% like this...">
    1
    </div>
  </div>
  <a href="#104606" class="name">
  <strong class="user"><em>leon at leonux dot co dot za</em></strong></a><a class="genanchor" href="#104606"> &para;</a><div class="date" title="2011-06-25 03:26"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104606">
<div class="phpcode"><code><span class="html">I finally have referrals working using the ldap_set_rebind_proc function. Don't connect to the referral server in your callback function. This is done for you. You only have to bind. The callback must return 0 if the bind succeeds or 1 if it fails. <br /><br />Consider a master - slave LDAP setup where the slave is read-only and refers writes to the master. For the PHP on the slave, you need something like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Callback function<br /></span><span class="keyword">function </span><span class="default">rebind</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$referral</span><span class="keyword">) {<br />    </span><span class="comment">// ldap options<br />    </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">True</span><span class="keyword">);<br />    </span><span class="default">ldap_set_rebind_proc</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="string">'rebind'</span><span class="keyword">);<br />    </span><span class="comment">// The referral is of the form:<br />    //  ldaps://newhost/cn=user,ou=people,dc=example,dc=com<br />    </span><span class="default">$refparts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$referral</span><span class="keyword">);<br />    if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$refparts</span><span class="keyword">) &gt; </span><span class="default">2</span><span class="keyword">) {<br />        </span><span class="comment">// Get the bind dn from referral<br />        </span><span class="default">$dn </span><span class="keyword">= </span><span class="default">$refparts</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br />        </span><span class="comment">// Bind to new host<br />        </span><span class="keyword">if (!</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">)) {<br />            echo </span><span class="string">'Could not bind to referral server'</span><span class="keyword">;<br />            return </span><span class="default">1</span><span class="keyword">;<br />        }<br />    } else {<br />        </span><span class="comment">// Try anonymous bind<br />        </span><span class="keyword">if (!</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">)) {<br />            echo </span><span class="string">'Could not bind to referral server anonymously'</span><span class="keyword">;<br />            return </span><span class="default">1</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">0</span><span class="keyword">;<br />}<br />    <br /></span><span class="comment">// Initial ldap connection to slave server<br /></span><span class="default">$ldap_host </span><span class="keyword">= </span><span class="string">'localhost'<br /></span><span class="default">$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldap_host</span><span class="keyword">);<br /></span><span class="comment">// ldap options<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">True</span><span class="keyword">)<br /></span><span class="comment">// Set callback function<br /></span><span class="default">ldap_set_rebind_proc</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="string">'rebind'</span><span class="keyword">))<br /></span><span class="comment">// bind<br /></span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">)<br /></span><span class="comment">// ldap write<br /></span><span class="default">ldap_modify</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$attr</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Accessing passwords and other data from your callback is easier if you use a class method as the callback function. The callback would be initialized like this:<br /><br /><span class="default">&lt;?php<br /><br />ldap_set_rebind_proc</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="string">'MyClass::rebind'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98432">  <div class="votes">
    <div id="Vu98432">
    <a href="/manual/vote-note.php?id=98432&amp;page=function.ldap-set-rebind-proc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98432">
    <a href="/manual/vote-note.php?id=98432&amp;page=function.ldap-set-rebind-proc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98432" title="no votes...">
    0
    </div>
  </div>
  <a href="#98432" class="name">
  <strong class="user"><em>mvanbeek at forgetaboutit dot net</em></strong></a><a class="genanchor" href="#98432"> &para;</a><div class="date" title="2010-06-15 11:13"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98432">
<div class="phpcode"><code><span class="html">I have had quite a hard time finding good information about chasing referrals so I am adding my tuppence worth here. I still haven't got my test code working fully so please look further down the page for updates.
<br />
<br />The way this appears to have to work is that you use this function to set a callback function of your own to connect and bind to the referral server. you need to set this along with forcing v3 ldap and setting the referral chasing to on as part of setting up the initial connection, so just after the connect but before the bind, you need something like:
<br />
<br /><span class="default">&lt;?php
<br />        $ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">);
<br />        </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);
<br />        </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">ldap_set_rebind_proc</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="string">"rebind"</span><span class="keyword">);
<br />        </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">,</span><span class="default">$dn</span><span class="keyword">,</span><span class="default">$pass</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This callback function (called rebind in the above example needs two arguments. These arguments are preset and are supplied when the callback function is called. The first is the ldap link identifier. I assume this is supplied as the function could be used successively by a number of consecutive referrals. The second is the ldap referral URL supplied by the initial server. I have seen notes that say this function must be defined prior to being set by ldap_set_rebind_proc, but as yet I cannot confirm this.
<br />
<br />My setup is based on a master - slave ldap server configuration, with the PHP application residing on the slave where it does localhost lookups. When your try to write to the slave ldap server, the server returns a referral URL, and the internal PHP function then calls the callback function.
<br />
<br />Despite the code already on this page, which appears to also be used to test the PHP code, I believe it is wrong. I think it simply reconnects to the initial server. I believe that what the callback function should do is to connect to the new server, and bind to it. My test code currently looks like this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">rebind</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$referral</span><span class="keyword">) {
<br />        global </span><span class="default">$dn</span><span class="keyword">;
<br />        global </span><span class="default">$pass</span><span class="keyword">;
<br />        </span><span class="default">$server</span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'!^(ldap://[^/]+)/.*$!'</span><span class="keyword">, </span><span class="string">'\\1'</span><span class="keyword">, </span><span class="default">$referral</span><span class="keyword">);
<br />        if (!(</span><span class="default">$ldap </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">))){
<br />                echo </span><span class="string">"reconnect failed - &lt;br&gt;"</span><span class="keyword">;
<br />                return </span><span class="default">1</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);
<br />        </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />        </span><span class="default">ldap_set_rebind_proc</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="string">"rebind"</span><span class="keyword">);
<br />        if (!</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">,</span><span class="default">$dn</span><span class="keyword">,</span><span class="default">$pass</span><span class="keyword">)){
<br />                echo </span><span class="string">"rebind failed - &lt;br&gt;"</span><span class="keyword">;
<br />                return </span><span class="default">1</span><span class="keyword">;
<br />        }
<br />        return </span><span class="default">0</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />As far as I can tell, a return value of 0 means success and any other value means it has failed. The complete lack of documentation doesn't help.
<br />
<br />The above code works all the way to authenticating against the new server, but at the moment I appear to be getting an unbind request before it tries to write the record to the new server, so it fails.
<br />
<br />I would also recommend adding a ldap_start_tls before the bind as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="31731">  <div class="votes">
    <div id="Vu31731">
    <a href="/manual/vote-note.php?id=31731&amp;page=function.ldap-set-rebind-proc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31731">
    <a href="/manual/vote-note.php?id=31731&amp;page=function.ldap-set-rebind-proc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31731" title="no votes...">
    0
    </div>
  </div>
  <a href="#31731" class="name">
  <strong class="user"><em>pearcec at commnav dot com</em></strong></a><a class="genanchor" href="#31731"> &para;</a><div class="date" title="2003-05-01 04:09"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31731">
<div class="phpcode"><code><span class="html">PHP expects the ldap function ldap_set_rebind_proc to be the one that has tree parameters.  As far as I can tell this isn't in the 2.0 release of OpenLDAP.  But made it into 2.1.  Configure will tell you<br /><br />checking for 3 arg ldap_set_rebind_proc... no</span></code></div>
  </div>
 </div>
  <div class="note" id="30893">  <div class="votes">
    <div id="Vu30893">
    <a href="/manual/vote-note.php?id=30893&amp;page=function.ldap-set-rebind-proc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30893">
    <a href="/manual/vote-note.php?id=30893&amp;page=function.ldap-set-rebind-proc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30893" title="no votes...">
    0
    </div>
  </div>
  <a href="#30893" class="name">
  <strong class="user"><em>night0wl at frost dot ath dot cx</em></strong></a><a class="genanchor" href="#30893"> &para;</a><div class="date" title="2003-04-02 07:19"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30893">
<div class="phpcode"><code><span class="html">Couse there was no example code for this function, i had alot of troubles to make it work properly. <br /><br />So, here is working example:<br /><br />function rebind_on_ref ($ds, $ldap_url) {<br />  global $binddn;    // DN used to bind<br />  global $bindpw;    // password used to bind<br /><br />  // required by most modern LDAP servers, use LDAPv3<br />  ldap_set_option($a, LDAP_OPT_PROTOCOL_VERSION, 3);<br /><br />  if (!ldap_bind($a,$binddn,$bindpw)) {<br />        print "Cannot bind";<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="21009">  <div class="votes">
    <div id="Vu21009">
    <a href="/manual/vote-note.php?id=21009&amp;page=function.ldap-set-rebind-proc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd21009">
    <a href="/manual/vote-note.php?id=21009&amp;page=function.ldap-set-rebind-proc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V21009" title="no votes...">
    0
    </div>
  </div>
  <a href="#21009" class="name">
  <strong class="user"><em>randy at kotmail dot com</em></strong></a><a class="genanchor" href="#21009"> &para;</a><div class="date" title="2002-04-25 04:46"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom21009">
<div class="phpcode"><code><span class="html">If rebind_proc isn't compiled in slapd, your will never get that funtction working. Check out the new alpha release of slapd and rtfm.</span></code></div>
  </div>
 </div>
  <div class="note" id="102653">  <div class="votes">
    <div id="Vu102653">
    <a href="/manual/vote-note.php?id=102653&amp;page=function.ldap-set-rebind-proc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102653">
    <a href="/manual/vote-note.php?id=102653&amp;page=function.ldap-set-rebind-proc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102653" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#102653" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#102653"> &para;</a><div class="date" title="2011-02-26 11:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102653">
<div class="phpcode"><code><span class="html">I have now spent enough time looking at this issue to say that ldap referrals, at least when trying to add, modify or delete a record on a slave server that correctly gives a referral to a master server, does not work in php. My suggestion is turn turn off ldap referrals and write your own add, modify and delete functions with built in referral handling. Something like this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ldap_referral_add</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">$add_dn</span><span class="keyword">,</span><span class="default">$Add_entry</span><span class="keyword">,</span><span class="default">$bind_dn</span><span class="keyword">,</span><span class="default">$bind_pw</span><span class="keyword">)
<br />    {
<br />    </span><span class="default">$rconnection </span><span class="keyword">= </span><span class="default">$connection</span><span class="keyword">;
<br />    </span><span class="default">$loop </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">; </span><span class="comment"># max number of referral hops.
<br />    # Turn off normal referrals
<br />    </span><span class="default">ldap_get_option</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">,</span><span class="default">$old_referral_setting</span><span class="keyword">)
<br />    do
<br />        {
<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">ldap_add</span><span class="keyword">(</span><span class="default">$rconnection</span><span class="keyword">,</span><span class="default">$dn</span><span class="keyword">,</span><span class="default">$entry</span><span class="keyword">);
<br />        </span><span class="comment"># We get a success message:
<br />        </span><span class="keyword">if ( </span><span class="default">$response </span><span class="keyword">) 
<br />            {
<br />            </span><span class="default">ldap_unbind</span><span class="keyword">(</span><span class="default">$rconnection</span><span class="keyword">);
<br />            </span><span class="default">$loop </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;    </span><span class="comment"># Probably not needed
<br />            </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">,</span><span class="default">$old_referral_setting</span><span class="keyword">);
<br />            return </span><span class="default">true</span><span class="keyword">;
<br />            }
<br />        </span><span class="comment"># We get a referral message:
<br />        </span><span class="keyword">elseif ( !</span><span class="default">$response </span><span class="keyword">&amp;&amp; </span><span class="default">ldap_errno</span><span class="keyword">(</span><span class="default">$rconnection</span><span class="keyword">) == </span><span class="default">0x0a </span><span class="keyword">)
<br />            {
<br />            </span><span class="default">$new_server_url </span><span class="keyword">= </span><span class="default">$server</span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'!^(ldap://[^/]+)/.*$!'</span><span class="keyword">, </span><span class="string">'\\1'</span><span class="keyword">, </span><span class="default">$ldap_error</span><span class="keyword">(</span><span class="default">$rconnection</span><span class="keyword">)); </span><span class="comment"># May need some sanity checking here
<br />            </span><span class="default">$rconnection </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$new_server_url</span><span class="keyword">);
<br />            </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$rconnection</span><span class="keyword">,</span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">)
<br />            </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$rconnection</span><span class="keyword">,</span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">)
<br />            </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$rconnection</span><span class="keyword">,</span><span class="default">$bind_dn</span><span class="keyword">,</span><span class="default">$bind_pw</span><span class="keyword">);
<br />            </span><span class="default">$loop </span><span class="keyword">= </span><span class="default">$loop </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;
<br />            }
<br />        else 
<br />            {
<br />            </span><span class="default">ldap_unbind</span><span class="keyword">(</span><span class="default">$rconnection</span><span class="keyword">);
<br />            </span><span class="default">$loop </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;    </span><span class="comment"># Probably not needed
<br />            </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">,</span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">,</span><span class="default">$old_referral_setting</span><span class="keyword">);
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />            }
<br />        } while ( </span><span class="default">$loop </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-set-rebind-proc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-set-rebind-proc.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
