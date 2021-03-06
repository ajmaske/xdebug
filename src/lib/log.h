/*
   +----------------------------------------------------------------------+
   | Xdebug                                                               |
   +----------------------------------------------------------------------+
   | Copyright (c) 2002-2020 Derick Rethans                               |
   +----------------------------------------------------------------------+
   | This source file is subject to version 1.01 of the Xdebug license,   |
   | that is bundled with this package in the file LICENSE, and is        |
   | available at through the world-wide-web at                           |
   | https://xdebug.org/license.php                                       |
   | If you did not receive a copy of the Xdebug license and are unable   |
   | to obtain it through the world-wide-web, please send a note to       |
   | derick@xdebug.org so we can mail you a copy immediately.             |
   +----------------------------------------------------------------------+
   | Authors: Derick Rethans <derick@xdebug.org>                          |
   +----------------------------------------------------------------------+
 */

#ifndef __XDEBUG_LIBRARY_LOG_H__
#define __XDEBUG_LIBRARY_LOG_H__

#ifdef ZTS
# include "TSRM.h"
#endif

#include "lib.h"

#include "zend.h"
#include "zend_API.h"
#include "compat.h"

#define XLOG_ERR       1
#define XLOG_WARN      3
#define XLOG_COM       5
#define XLOG_INFO      7
#define XLOG_DEBUG    10
#define XLOG_DEFAULT "7" /* as a string, as that's what STD_PHP_INI_ENTRY wants */

#define XLOG_CHAN_LOGFILE  0
#define XLOG_CHAN_DEBUG    1
#define XLOG_CHAN_GCSTATS  2
#define XLOG_CHAN_PROFILE  3
#define XLOG_CHAN_TRACE    4

extern const char* xdebug_log_prefix[11];

void XDEBUG_ATTRIBUTE_FORMAT(printf, 3, 4) xdebug_log(int channel, int log_level, const char *fmt, ...);
void xdebug_log_diagnose_permissions(int channel, const char *directory, const char *filename);

#endif
