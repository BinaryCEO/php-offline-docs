<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_modify - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-modify.php">
 <link rel="shorturl" href="https://www.php.net/ldap-modify">
 <link rel="alternate" href="https://www.php.net/ldap-modify" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-mod_replace-ext.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-modify-batch.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-modify.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-modify.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-modify.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-modify.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-modify.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-modify.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-modify.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-modify.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-modify.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-modify.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-modify.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Alias of ldap_mod_replace" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_modify - Manual" />
<meta name="twitter:description" content="Alias of ldap_mod_replace" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_modify - Manual" />
<meta itemprop="description" content="Alias of ldap_mod_replace" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Alias of ldap_mod_replace" />

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
        <a href="function.ldap-modify-batch.php">
          ldap_modify_batch &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-mod_replace-ext.php">
          &laquo; ldap_mod_replace_ext        </a>
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
            <option value='en/function.ldap-modify.php' selected="selected">English</option>
            <option value='de/function.ldap-modify.php'>German</option>
            <option value='es/function.ldap-modify.php'>Spanish</option>
            <option value='fr/function.ldap-modify.php'>French</option>
            <option value='it/function.ldap-modify.php'>Italian</option>
            <option value='ja/function.ldap-modify.php'>Japanese</option>
            <option value='pt_BR/function.ldap-modify.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-modify.php'>Russian</option>
            <option value='tr/function.ldap-modify.php'>Turkish</option>
            <option value='uk/function.ldap-modify.php'>Ukrainian</option>
            <option value='zh/function.ldap-modify.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-modify" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_modify</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_modify</span> &mdash; <span class="dc-title">Alias of <span class="function"><a href="function.ldap-mod-replace.php" class="function">ldap_mod_replace()</a></span></span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ldap-modify-description">
  <h3 class="title">Description</h3>
  <p class="simpara">
   This function is an alias of:  <span class="function"><a href="function.ldap-mod-replace.php" class="function">ldap_mod_replace()</a></span>.    
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ldap-modify-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ldap-rename.php" class="function" rel="rdfs-seeAlso">ldap_rename()</a> - Modify the name of an entry</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-modify.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-modify%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-modify&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-modify.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="38092">  <div class="votes">
    <div id="Vu38092">
    <a href="/manual/vote-note.php?id=38092&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38092">
    <a href="/manual/vote-note.php?id=38092&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38092" title="75% like this...">
    4
    </div>
  </div>
  <a href="#38092" class="name">
  <strong class="user"><em>ace at suares dot nl</em></strong></a><a class="genanchor" href="#38092"> &para;</a><div class="date" title="2003-12-08 07:41"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38092">
<div class="phpcode"><code><span class="html">Some comments on ldap_modify, and especially the user comment from tengel at fluid dot com<br /><br />OpenLDAP 2.1.22<br />If an attribute is tagged as MUST in the schema, the attribute must be there. Wheter it may contain and empty value depends on the SYNTAX for that attribute.<br /><br />DirectoryString MAY NOT be empty; OctetString MAY be empty. As far as I can see, IA5String MAY NOT be empty.<br /><br />If an attribute is defined as MAY in the schema, the attribute may or may not be there. If it is there, it MAY or MAY NOT be empty, depending on its SYNTAX.<br /><br />PHP 4.3.1<br /><br />It seems that ldap_modify() will take an array of attributes to modify.<br /><br />For multivalued attributes, passing an empty array, wil DELETE the attribute, regardless of it's previous value(s), and regardless if the attribute was there before the modify.<br /><br />If the multivalued attribute is defined as MAY, this will work. If the attribute is defined as MUST, OpenLDAP will generate the error: 'LDAP error 65: Object class violation'<br /><br />If an attribute's SYNTAX defines that it MAY NOT be empty, trying to add or modify the attribute with an empty value will genereate the error: 'LDAP error 21: Invalid syntax'.<br />Also, in the logfile, if set with sufficient debuglevel, the string<br /><br />    value #0 invalid per syntax<br /><br />will be present.<br /><br />Trying to pass an empty array to ldap_add() for a any attribute (multi or single valued) will result in the error 'LDAP error 2: Protocol error', regardless if the attribute is defined as MUST or MAY.<br /><br />Note that this differs form passing an array with elements that have no value. In the latter case, it depends on the SYNTAX for that attribute if that is allowed.<br /><br />If the attribute is single-valued, passing an array with one element, WILL change the value of the attribute. In the user comments on php.net it is suggested that if you want to modify a single valued attribute, you must pass a string, not an array with one element. My experience is that an array with a single element will work just as well.<br /><br />_Ace<br /><br />website: <a href="http://www.suares.nl" rel="nofollow" target="_blank">http://www.suares.nl</a> * <a href="http://www.qwikzite.nl" rel="nofollow" target="_blank">http://www.qwikzite.nl</a></span></code></div>
  </div>
 </div>
  <div class="note" id="43216">  <div class="votes">
    <div id="Vu43216">
    <a href="/manual/vote-note.php?id=43216&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43216">
    <a href="/manual/vote-note.php?id=43216&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43216" title="61% like this...">
    4
    </div>
  </div>
  <a href="#43216" class="name">
  <strong class="user"><em>chris at uffbasse dot de</em></strong></a><a class="genanchor" href="#43216"> &para;</a><div class="date" title="2004-06-14 09:57"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43216">
<div class="phpcode"><code><span class="html">To pinpoint the delete issue:<br /><br />with newer OpenLdap versions this will fail:<br /><br />$values["mail"] = "";<br />ldap_modify($conn_id, $dn, $values);<br /><br />or <br />$values["mail"][0] = "";<br />ldap_modify($conn_id, $dn, $values);<br /><br />BUT this works:<br /><br />$values["mail"] = array();<br />ldap_modify($conn_id, $dn, $values);<br /><br />or <br />$values["mail"][0] = array();<br />ldap_modify($conn_id, $dn, $values);</span></code></div>
  </div>
 </div>
  <div class="note" id="64294">  <div class="votes">
    <div id="Vu64294">
    <a href="/manual/vote-note.php?id=64294&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64294">
    <a href="/manual/vote-note.php?id=64294&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64294" title="55% like this...">
    2
    </div>
  </div>
  <a href="#64294" class="name">
  <strong class="user"><em>docwoelle at ipwatch dot de</em></strong></a><a class="genanchor" href="#64294"> &para;</a><div class="date" title="2006-04-11 01:44"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64294">
<div class="phpcode"><code><span class="html">If you want to disable an account in an Active Directory of Windows, <br />you may try this (it works for me in a Win2k environment):<br /><br />(foo.bar should be replaced in "$ldapBase" to the correct<br /> domain, e.g. "DC=phpfreackx,DC=com" if your domain is phpfreackx.com)<br /><br />domctrl = domain controller<br />domadlogin = domain admin login<br />domadpw = domain admin password<br />username = loginname of useraccount (e.g. "john.doe")<br />enable =1 (if you want to enable it, 0 if it should be disabled)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">userchange</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">,</span><span class="default">$enable</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">,</span><span class="default">$domadlogin</span><span class="keyword">,</span><span class="default">$domadpw</span><span class="keyword">,</span><span class="default">$domctrl</span><span class="keyword">)<br />{<br /></span><span class="default">$ldapServer </span><span class="keyword">= </span><span class="default">$domctrl</span><span class="keyword">;<br /></span><span class="default">$ldapBase </span><span class="keyword">= </span><span class="string">'DC=foo,DC=bar'</span><span class="keyword">;<br /></span><span class="default">$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldapServer</span><span class="keyword">);<br />if (!</span><span class="default">$ds</span><span class="keyword">) {die(</span><span class="string">'Cannot Connect to LDAP server'</span><span class="keyword">);}<br /></span><span class="default">$ldapBind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">,</span><span class="default">$domadlogin</span><span class="keyword">,</span><span class="default">$domadpw</span><span class="keyword">);<br />if (!</span><span class="default">$ldapBind</span><span class="keyword">) {die(</span><span class="string">'Cannot Bind to LDAP server'</span><span class="keyword">);}<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$sr </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$ldapBase</span><span class="keyword">, </span><span class="string">"(samaccountname=</span><span class="default">$username</span><span class="string">)"</span><span class="keyword">);<br /></span><span class="default">$ent</span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">,</span><span class="default">$sr</span><span class="keyword">);<br /></span><span class="default">$dn</span><span class="keyword">=</span><span class="default">$ent</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">"dn"</span><span class="keyword">];<br /></span><span class="comment">// Deactivate<br /></span><span class="default">$ac </span><span class="keyword">= </span><span class="default">$ent</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">"useraccountcontrol"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br /></span><span class="default">$disable</span><span class="keyword">=(</span><span class="default">$ac </span><span class="keyword">|  </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// set all bits plus bit 1 (=dec2)<br /></span><span class="default">$enable </span><span class="keyword">=(</span><span class="default">$ac </span><span class="keyword">&amp; ~</span><span class="default">2</span><span class="keyword">); </span><span class="comment">// set all bits minus bit 1 (=dec2)<br /></span><span class="default">$userdata</span><span class="keyword">=array();<br />if (</span><span class="default">$enable</span><span class="keyword">==</span><span class="default">1</span><span class="keyword">) </span><span class="default">$new</span><span class="keyword">=</span><span class="default">$enable</span><span class="keyword">; else </span><span class="default">$new</span><span class="keyword">=</span><span class="default">$disable</span><span class="keyword">; </span><span class="comment">//enable or disable?<br /></span><span class="default">$userdata</span><span class="keyword">[</span><span class="string">"useraccountcontrol"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]=</span><span class="default">$new</span><span class="keyword">;<br /></span><span class="default">ldap_modify</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$userdata</span><span class="keyword">); </span><span class="comment">//change state<br /></span><span class="default">$sr </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$ldapBase</span><span class="keyword">, </span><span class="string">"(samaccountname=</span><span class="default">$username</span><span class="string">)"</span><span class="keyword">);<br /></span><span class="default">$ent</span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">,</span><span class="default">$sr</span><span class="keyword">);<br /></span><span class="default">$ac </span><span class="keyword">= </span><span class="default">$ent</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">"useraccountcontrol"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />if ((</span><span class="default">$ac </span><span class="keyword">&amp; </span><span class="default">2</span><span class="keyword">)==</span><span class="default">2</span><span class="keyword">) </span><span class="default">$status</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; else </span><span class="default">$status</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">ldap_close</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">);<br />return </span><span class="default">$status</span><span class="keyword">; </span><span class="comment">//return current status (1=enabled, 0=disabled)<br /></span><span class="keyword">}   <br /><br /></span><span class="comment">// use this to disable an account:<br />// userchange('john.doe@foo.bar',0,'admin@foo.bar', 'secret','domctrl.foo.bar'); <br />// ..but this to enable it:<br />// userchange('john.doe@foo.bar',1,'admin@foo.bar', 'secret','domctrl.foo.bar'); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="30747">  <div class="votes">
    <div id="Vu30747">
    <a href="/manual/vote-note.php?id=30747&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30747">
    <a href="/manual/vote-note.php?id=30747&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30747" title="100% like this...">
    2
    </div>
  </div>
  <a href="#30747" class="name">
  <strong class="user"><em>goetz at rvs dot uni-hannover dot de</em></strong></a><a class="genanchor" href="#30747"> &para;</a><div class="date" title="2003-03-27 07:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30747">
<div class="phpcode"><code><span class="html">Remember that you can NOT modify the attribute 'objectclass' with ldap_modify! <br /><br />If you use a search result as basis for your changes, be sure to 'unset()' all numbered indices, 'count' indicies AND index 'objectclass' !</span></code></div>
  </div>
 </div>
  <div class="note" id="74268">  <div class="votes">
    <div id="Vu74268">
    <a href="/manual/vote-note.php?id=74268&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74268">
    <a href="/manual/vote-note.php?id=74268&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74268" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74268" class="name">
  <strong class="user"><em>kevin at guarana dot org</em></strong></a><a class="genanchor" href="#74268"> &para;</a><div class="date" title="2007-04-02 06:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74268">
<div class="phpcode"><code><span class="html">If you're seeing confusing "Type or value exists" errors from ldap_modify, the reason could be that you're attempting to add two identical values for a multi-valued attribute.  ie, something like:<br /><br /><span class="default">&lt;?php<br />$le </span><span class="keyword">= array(</span><span class="string">"mail" </span><span class="keyword">=&gt; array(</span><span class="string">"foo@bar.com"</span><span class="keyword">, </span><span class="string">"foo@bar.com"</span><span class="keyword">));<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">ldap_modify</span><span class="keyword">(</span><span class="default">$ldap_link</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$le</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59185">  <div class="votes">
    <div id="Vu59185">
    <a href="/manual/vote-note.php?id=59185&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59185">
    <a href="/manual/vote-note.php?id=59185&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59185" title="no votes...">
    0
    </div>
  </div>
  <a href="#59185" class="name">
  <strong class="user"><em>jmw1982 at gmail dot com</em></strong></a><a class="genanchor" href="#59185"> &para;</a><div class="date" title="2005-11-28 02:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59185">
<div class="phpcode"><code><span class="html">If you're writing a multiple values for an attribute with ldap_modify (), the function will attempt to write all entries in the value array even if those entries are blank.  Setting blank entries to a blank array in the manner used for attribute deletion, ie:<br /><br />$attributes[$attr_name][3] = array ();<br /><br />results in the string "Array" being written to the directory for that value.  The only way I was able to find to do what I wanted - only write the values for the attribute that were submitted on the form - was to check if each attribute had multiple values and unset () blank values, eg:<br /><br />                foreach ($attributes as $key =&gt; $cur_val) {<br />                        if ($cur_val== '') {<br />                                $attributes[$key] = array ();<br />                        }<br />                        if (is_array ($cur_val)) {<br />                                foreach ($cur_val as $mv_key =&gt; $mv_cur_val) {<br />                                        <br />                                        if ($mv_cur_val == '') {<br />                                                unset ($attributes[$key][$mv_key]);<br />                                        }<br />                                        else {<br />                                                $attributes[$key][$mv_key] = $mv_cur_val;                      <br />                                        }<br />                                }<br />                        }<br />                }</span></code></div>
  </div>
 </div>
  <div class="note" id="36792">  <div class="votes">
    <div id="Vu36792">
    <a href="/manual/vote-note.php?id=36792&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36792">
    <a href="/manual/vote-note.php?id=36792&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36792" title="50% like this...">
    0
    </div>
  </div>
  <a href="#36792" class="name">
  <strong class="user"><em>fechner at ponton dot de</em></strong></a><a class="genanchor" href="#36792"> &para;</a><div class="date" title="2003-10-22 12:32"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36792">
<div class="phpcode"><code><span class="html">If you are trying to change the userPassword attribute when using md5 hashes, try the following lines:<br /><br />$new["userPassword"] = '{md5}' . base64_encode(pack('H*', md5($newpass_in_plaintext)));<br />ldap_modify($ds, $dn, $new);</span></code></div>
  </div>
 </div>
  <div class="note" id="33989">  <div class="votes">
    <div id="Vu33989">
    <a href="/manual/vote-note.php?id=33989&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33989">
    <a href="/manual/vote-note.php?id=33989&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33989" title="no votes...">
    0
    </div>
  </div>
  <a href="#33989" class="name">
  <strong class="user"><em>davidsmith at byuNOSPAM dot edu</em></strong></a><a class="genanchor" href="#33989"> &para;</a><div class="date" title="2003-07-12 05:52"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33989">
<div class="phpcode"><code><span class="html">The $entry parameter can be an array of values for an attribute. Just be careful that your array's indices are numerically contiguous. For example, when using this $entry array, ldap_modify will fail with little explanation:<br /><br />   $entry = array( 0 =&gt; 'foo', 2 =&gt; 'bar' );<br /><br />While this one will work just fine:<br /><br />   $entry = array( 0 =&gt; 'foo', 1 =&gt; 'bar' );<br /><br />Hope this helps someone out.</span></code></div>
  </div>
 </div>
  <div class="note" id="33017">  <div class="votes">
    <div id="Vu33017">
    <a href="/manual/vote-note.php?id=33017&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33017">
    <a href="/manual/vote-note.php?id=33017&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33017" title="50% like this...">
    0
    </div>
  </div>
  <a href="#33017" class="name">
  <strong class="user"><em>jpdalbec at ysu dot edu</em></strong></a><a class="genanchor" href="#33017"> &para;</a><div class="date" title="2003-06-13 03:13"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33017">
<div class="phpcode"><code><span class="html">Nick T.'s comment above is out of date.<br />The PHP LDAP interface currently supports direct modification of the DN using the ldap_rename() function.</span></code></div>
  </div>
 </div>
  <div class="note" id="24311">  <div class="votes">
    <div id="Vu24311">
    <a href="/manual/vote-note.php?id=24311&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24311">
    <a href="/manual/vote-note.php?id=24311&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24311" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#24311" class="name">
  <strong class="user"><em>NOSPAMjjhuff at mspin dot net</em></strong></a><a class="genanchor" href="#24311"> &para;</a><div class="date" title="2002-08-12 08:50"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24311">
<div class="phpcode"><code><span class="html">To delete entries:<br /><br />$data["description"] = array();<br />ldap_modify($conn, $dn,$data);</span></code></div>
  </div>
 </div>
  <div class="note" id="12095">  <div class="votes">
    <div id="Vu12095">
    <a href="/manual/vote-note.php?id=12095&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12095">
    <a href="/manual/vote-note.php?id=12095&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12095" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#12095" class="name">
  <strong class="user"><em>tengel at fluid dot com</em></strong></a><a class="genanchor" href="#12095"> &para;</a><div class="date" title="2001-03-21 06:57"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12095">
<div class="phpcode"><code><span class="html">The behaviour of OpenLDAP from 1.x to 2.x changed; in 1.x, when you passed ldap_modify the array, if the value was empty that attribute would be deleted.  In 2.x, you get an "Invalid Syntax" error and the modify fails.
<br />
<br />This requires the ldap_mod_del function; unfortunately, that operation requires the attribute to be deleted have it's *old* value specified -- as you can imagine, if you're taking input from a CGI form, the attribute to be deleted's value is now missing (i.e., the user blanked out that textbox in the form and clicked Submit).
<br />
<br />So, you're in a bit of a conundrum -- you want to delete "empty" form values, but you need their old value to delete them.  There are many ways to handle this, but I chose this approach:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// The first is what to add, the second to remove
<br /></span><span class="default">$entry</span><span class="keyword">=array();
<br /></span><span class="default">$delval</span><span class="keyword">=array();
<br />
<br /></span><span class="comment">// Imagine if you will, $o and $title are
<br />// form fields with text boxes for data
<br /></span><span class="keyword">if(</span><span class="default">$o</span><span class="keyword">!=</span><span class="string">""</span><span class="keyword">) { </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">"o"</span><span class="keyword">]=</span><span class="string">"</span><span class="default">$o</span><span class="string">"</span><span class="keyword">; } else { </span><span class="default">$delval</span><span class="keyword">[]=</span><span class="string">"o"</span><span class="keyword">; }
<br />if(</span><span class="default">$title</span><span class="keyword">!=</span><span class="string">""</span><span class="keyword">) { </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">"title"</span><span class="keyword">]=</span><span class="string">"</span><span class="default">$title</span><span class="string">"</span><span class="keyword">; } else { </span><span class="default">$delval</span><span class="keyword">[]=</span><span class="string">"title"</span><span class="keyword">; }
<br />
<br /></span><span class="comment">// First try the normal modify with $entry
<br />// $ldap, $dn, $BASEDN are all set up earlier
<br /></span><span class="keyword">if (@</span><span class="default">ldap_modify</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$entry</span><span class="keyword">)) {
<br />  </span><span class="comment">// then do the dirty work
<br />  </span><span class="default">$filter </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"(&amp;(uid=%s)(sn=%s))"</span><span class="keyword">,</span><span class="default">$uid</span><span class="keyword">,</span><span class="default">$sn</span><span class="keyword">);
<br />  </span><span class="default">$sres </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$BASEDN</span><span class="keyword">, </span><span class="default">$filter</span><span class="keyword">, </span><span class="default">$delval</span><span class="keyword">);
<br />  </span><span class="default">$delent </span><span class="keyword">= </span><span class="default">ldap_first_entry</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$sres</span><span class="keyword">);
<br />  </span><span class="default">$delarr </span><span class="keyword">= </span><span class="default">ldap_get_attributes</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$delent</span><span class="keyword">);
<br />  </span><span class="default">$findel</span><span class="keyword">=array();
<br />  for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$delarr</span><span class="keyword">[</span><span class="string">"count"</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++) {
<br />    </span><span class="default">$attr </span><span class="keyword">= </span><span class="default">$delarr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />    </span><span class="default">$totl </span><span class="keyword">= </span><span class="default">$delarr</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">][</span><span class="string">"count"</span><span class="keyword">];
<br />    for(</span><span class="default">$z</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$z</span><span class="keyword">&lt;</span><span class="default">$totl</span><span class="keyword">; </span><span class="default">$z</span><span class="keyword">++) {
<br />      if (</span><span class="default">$totl </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">) {
<br />        </span><span class="default">$findel</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">]=</span><span class="default">$delarr</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">][</span><span class="default">$z</span><span class="keyword">];
<br />      } else {
<br />        </span><span class="default">$findel</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">][</span><span class="default">$z</span><span class="keyword">]=</span><span class="default">$delarr</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">][</span><span class="default">$z</span><span class="keyword">];
<br />      }
<br />    }
<br />  }
<br />  if(@</span><span class="default">ldap_mod_del</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$findel</span><span class="keyword">)) {
<br />    print(</span><span class="string">"&lt;H3&gt;Modified Entry!&lt;/H3&gt;\n"</span><span class="keyword">);
<br />    print(</span><span class="string">"&lt;BR&gt;\n"</span><span class="keyword">);
<br />  } else {
<br />    </span><span class="default">$error</span><span class="keyword">=</span><span class="default">ldap_error</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">);
<br />    print(</span><span class="string">"&lt;H3&gt;Attribute Delete Failed!&lt;/H3&gt;\n"</span><span class="keyword">);
<br />    print(</span><span class="string">"&lt;BR&gt;\n(</span><span class="default">$error</span><span class="string">)\n"</span><span class="keyword">);
<br />  }
<br />} else {
<br />  </span><span class="default">$error</span><span class="keyword">=</span><span class="default">ldap_error</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">);
<br />  print(</span><span class="string">"&lt;H3&gt;Modify Failed!&lt;/H3&gt;\n"</span><span class="keyword">);
<br />  print(</span><span class="string">"&lt;BR&gt;\n(</span><span class="default">$error</span><span class="string">)\n"</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="748">  <div class="votes">
    <div id="Vu748">
    <a href="/manual/vote-note.php?id=748&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd748">
    <a href="/manual/vote-note.php?id=748&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V748" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#748" class="name">
  <strong class="user"><em>nickt at powys dot gov dot uk</em></strong></a><a class="genanchor" href="#748"> &para;</a><div class="date" title="1999-04-23 05:23"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom748">
<div class="phpcode"><code><span class="html">Modifying existing LDAP information using ldap_modify()
<br />
<br />The link_identifier must result from a call to connect to the server with authority to update entries, usually requiring an authenticated bind - ie you provide a suitable dn and password in the ldap_bind() call.
<br />
<br />The  dn  must be a single specific dn that exists on the LDAP server.   There is no wildcard mechanism in LDAP to globally change multiple dn entries.   
<br />
<br />The entry array must be in one of two different forms, according to whether just one entry is to be stored in the directory for a particular attribute, or whether multiple entries are to be stored for the attribute.
<br />
<br />Where a single entry is to be stored for an attribute - say just a single email address - then you use the general form
<br />
<br />             <span class="default">&lt;?php $newinfo</span><span class="keyword">[ &lt;</span><span class="default">attribute_name</span><span class="keyword">&gt; ]=</span><span class="string">"whatever" </span><span class="keyword">; </span><span class="default">?&gt;
<br /></span>
<br />for example ...
<br />
<br />             <span class="default">&lt;?php $newinfo</span><span class="keyword">[</span><span class="string">"mail"</span><span class="keyword">]=</span><span class="string">"john@myorg.com" </span><span class="keyword">; </span><span class="default">?&gt;
<br /></span>
<br />Where multiple entries are to be stored for an attribute  -  say a number of email addresses for one person  -  then you use the general form
<br />
<br />             <span class="default">&lt;?php
<br />             $newinfo</span><span class="keyword">[ &lt;</span><span class="default">attribute_name</span><span class="keyword">&gt; ][</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"whatever" </span><span class="keyword">;
<br />             </span><span class="default">$newinfo</span><span class="keyword">[ &lt;</span><span class="default">attribute_name</span><span class="keyword">&gt; ][</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"another" </span><span class="keyword">;
<br />             </span><span class="default">?&gt;
<br /></span>
<br />for example ...
<br />
<br />             <span class="default">&lt;?php
<br />             $newinfo</span><span class="keyword">[</span><span class="string">"mail"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]=</span><span class="string">"johnw@myorg.com" </span><span class="keyword">;
<br />             </span><span class="default">$newinfo</span><span class="keyword">[</span><span class="string">"mail"</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">]=</span><span class="string">"jwaterson@somewhere.org" </span><span class="keyword">;
<br />             </span><span class="default">?&gt;
<br /></span>
<br />Further notes on ldap_modify()
<br />
<br />The modify call leaves entries for all other attributes unaltered.   So if you just want to update the entry for the "mail" attribute, then all that is required is:
<br />
<br />     <span class="default">&lt;?php
<br />     $newinfo</span><span class="keyword">[</span><span class="default">mail</span><span class="keyword">]=</span><span class="string">"nick@county.gov.uk"</span><span class="keyword">;
<br />     </span><span class="default">ldap_modify</span><span class="keyword">(</span><span class="default">$valid_ldaplink</span><span class="keyword">, </span><span class="default">$valid_dn</span><span class="keyword">, </span><span class="default">$newinfo</span><span class="keyword">);
<br />     </span><span class="default">?&gt;
<br /></span>
<br />However, if there were multiple entries for the mail attribute present on the LDAP database when you run the above code, then all the existing mail entries would be deleted and be replaced by the single "mail" entry.
<br />
<br />If you have reason to expect multiple values for a particular attribute (more that one email entry, for example) you should make sure you read all the entries from the ldap server first, and then save a modified array.
<br />
<br />The PHP LDAP interface does not currently support direct modification of the dn.  If the dn needs changing, the only option is to read all entries for the dn and save these to a new, modified, dn before deleting the complete entry for the original dn.</span></code></div>
  </div>
 </div>
  <div class="note" id="74581">  <div class="votes">
    <div id="Vu74581">
    <a href="/manual/vote-note.php?id=74581&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74581">
    <a href="/manual/vote-note.php?id=74581&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74581" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#74581" class="name">
  <strong class="user"><em>php_notes at grumz dot net</em></strong></a><a class="genanchor" href="#74581"> &para;</a><div class="date" title="2007-04-18 06:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74581">
<div class="phpcode"><code><span class="html">Following goetz at rvs dot uni-hannover dot de's comment, it is not exactly true that ldap_modify can't change objectclass. <br /><br />In fact, it's impossible to add an objectclass which is set as STRUCTURAL in the schema description. But you can add an objectclass set as AUXILIARY. See OpenLDAP FAQ below for explanation why :<br /><br /><a href="http://www.openldap.org/faq/data/cache/1341.html" rel="nofollow" target="_blank">http://www.openldap.org/faq/data/cache/1341.html</a><br /><br />For example, if you have an ldap entry of type "device", which is a structural objectclass, named "cn=myNetCard,ou=Networks,dc=example,dc=com", you can do this :<br /><br /><span class="default">&lt;?php<br /><br />$entry</span><span class="keyword">[</span><span class="string">"objectclass"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"device"</span><span class="keyword">;<br /></span><span class="default">$entry</span><span class="keyword">[</span><span class="string">"objectclass"</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"ieee802Device"</span><span class="keyword">; </span><span class="comment">// add an auxiliary objectclass<br /></span><span class="default">$entry</span><span class="keyword">[</span><span class="string">"macAddress"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"aa:bb:cc:dd:ee:ff"</span><span class="keyword">;<br /><br /></span><span class="default">ldap_modify </span><span class="keyword">(</span><span class="default">$cnx</span><span class="keyword">, </span><span class="string">"cn=myNetCard,ou=Networks,dc=example,dc=com"</span><span class="keyword">, </span><span class="default">$entry</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />But this will not work :<br /><br /><span class="default">&lt;?php<br /><br />$entry</span><span class="keyword">[</span><span class="string">"objectclass"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"device"</span><span class="keyword">;<br /></span><span class="default">$entry</span><span class="keyword">[</span><span class="string">"objectclass"</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"ipNetwork"</span><span class="keyword">; </span><span class="comment">// add a structural objectclass<br /></span><span class="default">$entry</span><span class="keyword">[</span><span class="string">"ipNetworkNumber"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"1.2.3.4"</span><span class="keyword">;<br /><br /></span><span class="default">ldap_modify </span><span class="keyword">(</span><span class="default">$cnx</span><span class="keyword">, </span><span class="string">"cn=myNetCard,ou=Networks,dc=example,dc=com"</span><span class="keyword">, </span><span class="default">$entry</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />You will get the following error : "Cannot modify object class"</span></code></div>
  </div>
 </div>
  <div class="note" id="116790">  <div class="votes">
    <div id="Vu116790">
    <a href="/manual/vote-note.php?id=116790&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116790">
    <a href="/manual/vote-note.php?id=116790&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116790" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#116790" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116790"> &para;</a><div class="date" title="2015-03-01 06:52"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116790">
<div class="phpcode"><code><span class="html">I ran into a rather annoying issue when trying to add a user to a usergroup in Active Directory.<br /><br />Active Directory tends to not be particularly happy when you try modifying the "memberOf" attribute (through ldap_mod_add/ldap_mod_replace), and will output a warning/error somewhere along the lines of:<br /><br />Warning: ldap_mod_add(): Modify: Server is unwilling to perform in ...<br /><br />If you want to add a user to a usergroup, you need to add the user as a member of the group, rather than adding to the memberOf attribute of the group:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">ldap_addToGroup</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$group</span><span class="keyword">) {<br />        </span><span class="default">$dn </span><span class="keyword">= </span><span class="string">"CN=</span><span class="default">$group</span><span class="string">,OU=Accounts,DC=DC1,DC=DC2"</span><span class="keyword">; </span><span class="comment">// distinguished name/DN of the group you want to add to<br />        </span><span class="default">$info</span><span class="keyword">[</span><span class="string">"member"</span><span class="keyword">] = </span><span class="string">"CN=</span><span class="default">$username</span><span class="string">,OU=Accounts,DC=DC1,DC=DC2"</span><span class="keyword">; </span><span class="comment">// DN of the user you want to add<br />        </span><span class="keyword">return </span><span class="default">ldap_modify</span><span class="keyword">(</span><span class="default">$ldapconn</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="112887">  <div class="votes">
    <div id="Vu112887">
    <a href="/manual/vote-note.php?id=112887&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112887">
    <a href="/manual/vote-note.php?id=112887&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112887" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#112887" class="name">
  <strong class="user"><em>spam at bilgoraj dot info</em></strong></a><a class="genanchor" href="#112887"> &para;</a><div class="date" title="2013-08-02 10:38"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112887">
<div class="phpcode"><code><span class="html">If You can`t add attribute objectclass to existing object  using ldap_modify - use ldap_mod_add - it works.</span></code></div>
  </div>
 </div>
  <div class="note" id="116789">  <div class="votes">
    <div id="Vu116789">
    <a href="/manual/vote-note.php?id=116789&amp;page=function.ldap-modify&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116789">
    <a href="/manual/vote-note.php?id=116789&amp;page=function.ldap-modify&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116789" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#116789" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116789"> &para;</a><div class="date" title="2015-03-01 06:51"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116789">
<div class="phpcode"><code><span class="html">I ran into a rather annoying issue when trying to add a user to a usergroup in Active Directory.<br /><br />Active Directory tends to not be particularly happy when you try modifying the "memberOf" attribute (through ldap_mod_add/ldap_mod_replace), and will output a warning/error somewhere along the lines of:<br /><br />Warning: ldap_mod_add(): Modify: Server is unwilling to perform in ...<br /><br />If you want to add a user to a usergroup, you need to add the user as a member of the group, rather than adding to the memberOf attribute of the group:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">ldap_addToGroup</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">, </span><span class="default">$group</span><span class="keyword">) {<br />        </span><span class="default">$dn </span><span class="keyword">= </span><span class="string">"CN=</span><span class="default">$group</span><span class="string">,OU=Accounts,DC=DC1,DC=DC2"</span><span class="keyword">; </span><span class="comment">// distinguished name/DN of the group you want to add to<br />        </span><span class="default">$info</span><span class="keyword">[</span><span class="string">"member"</span><span class="keyword">] = </span><span class="string">"CN=</span><span class="default">$username</span><span class="string">,OU=Accounts,DC=DC1,DC=DC2"</span><span class="keyword">; </span><span class="comment">// DN of the user you want to add<br />        </span><span class="keyword">return </span><span class="default">ldap_modify</span><span class="keyword">(</span><span class="default">$ldapconn</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$info</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps someone.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-modify&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-modify.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
