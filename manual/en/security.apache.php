<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installed as an Apache module - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/security.apache.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/security.apache.php">
 <link rel="alternate" href="https://www.php.net/manual/en/security.apache.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/security.php">
 <link rel="prev" href="https://www.php.net/manual/en/security.cgi-bin.shell.php">
 <link rel="next" href="https://www.php.net/manual/en/security.sessions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/security.apache.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/security.apache.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/security.apache.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/security.apache.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/security.apache.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/security.apache.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/security.apache.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/security.apache.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/security.apache.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/security.apache.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/security.apache.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installed as an Apache module" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installed as an Apache module - Manual" />
<meta name="twitter:description" content="Installed as an Apache module" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installed as an Apache module - Manual" />
<meta itemprop="description" content="Installed as an Apache module" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installed as an Apache module" />

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
        <a href="security.sessions.php">
          Session Security &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="security.cgi-bin.shell.php">
          &laquo; Case 4: PHP parser outside of web tree        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='security.php'>Security</a></li>      </ul>
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
            <option value='en/security.apache.php' selected="selected">English</option>
            <option value='de/security.apache.php'>German</option>
            <option value='es/security.apache.php'>Spanish</option>
            <option value='fr/security.apache.php'>French</option>
            <option value='it/security.apache.php'>Italian</option>
            <option value='ja/security.apache.php'>Japanese</option>
            <option value='pt_BR/security.apache.php'>Brazilian Portuguese</option>
            <option value='ru/security.apache.php'>Russian</option>
            <option value='tr/security.apache.php'>Turkish</option>
            <option value='uk/security.apache.php'>Ukrainian</option>
            <option value='zh/security.apache.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="security.apache" class="chapter">
   <h1 class="title">Installed as an Apache module</h1>

   <p class="simpara">
    When <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> is used as an Apache module it inherits Apache&#039;s user
    permissions (typically those of the &quot;nobody&quot; user). This has several
    impacts on security and authorization. For example, if you are using
    <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> to access a database, unless that database has built-in access
    control, you will have to make the database accessible to the
    &quot;nobody&quot; user. This means a malicious script could access and modify
    the database, even without a username and password. It&#039;s entirely
    possible that a web spider could stumble across a database
    administrator&#039;s web page, and drop all of your databases. You can
    protect against this with Apache authorization, or you can design
    your own access model using LDAP, <var class="filename">.htaccess</var> files, etc. and include
    that code as part of your <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> scripts.
   </p>
   <p class="simpara">
    Often, once security is established to the point where the <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> user
    (in this case, the apache user) has very little risk attached to it,
    it is discovered that <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> is now prevented from writing any files
    to user directories. Or perhaps it has been prevented from accessing
    or changing databases. It has equally been secured from writing
    good and bad files, or entering good and bad database transactions.
   </p>
   <p class="simpara">
    A frequent security mistake made at this point is to allow apache
    root permissions, or to escalate apache&#039;s abilities in some other
    way.
   </p>
   <p class="simpara">
    Escalating the Apache user&#039;s permissions to root is extremely
    dangerous and may compromise the entire system, so sudo&#039;ing,
    chroot&#039;ing, or otherwise running as root should not be considered by
    those who are not security professionals.
   </p>
   <p class="simpara">
    There are some simpler solutions. By using
    <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a> you can control and restrict what
    directories are allowed to be used for <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>. You can also set up
    apache-only areas, to restrict all web based activity to non-user,
    or non-system, files.
   </p>
  </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/security/apache.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsecurity.apache%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=security.apache&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.apache.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107654">  <div class="votes">
    <div id="Vu107654">
    <a href="/manual/vote-note.php?id=107654&amp;page=security.apache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107654">
    <a href="/manual/vote-note.php?id=107654&amp;page=security.apache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107654" title="58% like this...">
    27
    </div>
  </div>
  <a href="#107654" class="name">
  <strong class="user"><em>bk 2 at me dot com</em></strong></a><a class="genanchor" href="#107654"> &para;</a><div class="date" title="2012-02-24 05:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107654">
<div class="phpcode"><code><span class="html">doc_root already limits apache/php script folder locations.<br /><br />open_basedir is better used to restrict script access to folders<br />which do NOT contain scripts. Can be a sub-folder of doc_root as in php doc example doc_root/tmp, but better yet in a separate folder tree, like ~user/open_basedir_root/. Harmful scripts could modify other scripts if doc_root (or include_path) and open_basedir overlap.<br />If apache/php can't browse scripts in open_basedir, even if malicious scripts uploaded more bad scripts there, they won't be browse-able (executable). <br /><br />One should also note that the many shell execute functions are effectively a way to bypass open_basedir limits, and such functions should be disabled if security demands strict folder access control. Harmful scripts can do the unix/windows version of "delete */*/*/*" if allowed to execute native os shell commands via those functions. OS Shell commands could similarly bypass redirect restrictions and upload file restrictions by just brute force copying files into the doc_root tree. It would be nice if they could be disabled as a group or class of functions, but it is still possible to disable them one by one if needed for security.<br /><br />PS. currently there is a bug whereby the documented setting of open_basedir to docroot/tmp will not work if any include or require statements are done. Right now include will fail if the included php file is not in BOTH the open_basedir tree and the doc_root+include_path trees. Which is the opposite of safe.<br />This means by any included php file must be in open_basedir, so is vulnerable to harmful scripts and php viruses like Injektor.</span></code></div>
  </div>
 </div>
  <div class="note" id="24152">  <div class="votes">
    <div id="Vu24152">
    <a href="/manual/vote-note.php?id=24152&amp;page=security.apache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24152">
    <a href="/manual/vote-note.php?id=24152&amp;page=security.apache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24152" title="56% like this...">
    16
    </div>
  </div>
  <a href="#24152" class="name">
  <strong class="user"><em>daniel dot eckl at gmx dot de</em></strong></a><a class="genanchor" href="#24152"> &para;</a><div class="date" title="2002-08-08 04:16"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24152">
<div class="phpcode"><code><span class="html">There is a better solution than starting every virtual host in a seperate instance, which is wasting ressources.<br /><br />You can set open_basedir dynamically for every virtual host you have, so every PHP script on a virtual host is jailed to its document root.<br /><br />Example:<br />&lt;VirtualHost www.example.com&gt;<br />  ServerName www.example.com<br />  DocumentRoot /www-home/example.com<br />[...]<br />  &lt;Location /&gt;<br />    php_admin_value open_basedir     \ "/www-home/example.com/:/usr/lib/php/"<br />  &lt;/Location&gt;<br />&lt;/VirtualHost&gt;<br /><br />If you set safe_mode on, then the script can only use binaries in given directories (make a special dir only with the binaries your customers may use).<br /><br />Now no user of a virtual host can read/write/modify the data of another user on your machine.<br /><br />Windseeker</span></code></div>
  </div>
 </div>
  <div class="note" id="126919">  <div class="votes">
    <div id="Vu126919">
    <a href="/manual/vote-note.php?id=126919&amp;page=security.apache&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126919">
    <a href="/manual/vote-note.php?id=126919&amp;page=security.apache&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126919" title="57% like this...">
    5
    </div>
  </div>
  <a href="#126919" class="name">
  <strong class="user"><em>joe</em></strong></a><a class="genanchor" href="#126919"> &para;</a><div class="date" title="2022-03-12 03:59"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126919">
<div class="phpcode"><code><span class="html">It is not useful for ordinary users to have a debate about the lack of security in using PHP without clearly listing step by step methods of resolving the issue. Such methods should be authoritatively provided by PHP and not as a user's opinion, later debated by another user.<br /><br />It is not that I am opposed to debate. This is how we learn as an open-source community.  However, us mere mortals need the gods of PHP to come to conclusions and give us best practices.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=security.apache&amp;repo=en&amp;redirect=https://www.php.net/manual/en/security.apache.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="security.php">Security</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="security.intro.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="security.general.php" title="General considerations">General considerations</a>
                        </li>
                                                <li class="">
                            <a href="security.cgi-bin.php" title="Installed as CGI binary">Installed as CGI binary</a>
                        </li>
                                                <li class="current">
                            <a href="security.apache.php" title="Installed as an Apache module">Installed as an Apache module</a>
                        </li>
                                                <li class="">
                            <a href="security.sessions.php" title="Session Security">Session Security</a>
                        </li>
                                                <li class="">
                            <a href="security.filesystem.php" title="Filesystem Security">Filesystem Security</a>
                        </li>
                                                <li class="">
                            <a href="security.database.php" title="Database Security">Database Security</a>
                        </li>
                                                <li class="">
                            <a href="security.errors.php" title="Error Reporting">Error Reporting</a>
                        </li>
                                                <li class="">
                            <a href="security.variables.php" title="User Submitted Data">User Submitted Data</a>
                        </li>
                                                <li class="">
                            <a href="security.hiding.php" title="Hiding PHP">Hiding PHP</a>
                        </li>
                                                <li class="">
                            <a href="security.current.php" title="Keeping Current">Keeping Current</a>
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
