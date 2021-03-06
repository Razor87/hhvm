<?hh
// generated by idl-to-hni.php

/* Starts xhprof profiling. For details on how to use this function, please
 * refer to http://mirror.facebook.net/facebook/xhprof/doc.html.
 * @param int $flags - One of those XHPROF_FLAGS_ constant to specify what to
 * profile.
 * @param array $args - Extra argument to reserve for future use.
 */
<<__HipHopSpecific, __Native>>
function xhprof_enable(int $flags = 0,
                       array $args = []): void;

/* Ends and reports xhprof profiling result. For details on how to use this
 * function, please refer to
 * http://mirror.facebook.net/facebook/xhprof/doc.html.
 * @return mixed - Profile result.
 */
<<__HipHopSpecific, __Native>>
function xhprof_disable(): mixed;

/* Starts xhprof network I/O profiling.
 */
<<__HipHopSpecific, __Native>>
function xhprof_network_enable(): void;

/* Ends and reports xhprof network I/O profiling result.
 * @return mixed - Profile result.
 */
<<__HipHopSpecific, __Native>>
function xhprof_network_disable(): mixed;

/* Starts an artificial frame. Together with xhprof_frame_end(), this times
 * one block of code execution as if it were a function call, allowing people
 * to define arbitrary function boundaries. Prefer to use XhprofFrame
 * classobjects instead of calling this function directly.
 * @param string $name - The "virtual" function's name.
 */
<<__HipHopSpecific, __Native("NoInjection")>>
function xhprof_frame_begin(string $name): void;

/* Ends an artificial frame that xhprof_frame_begin() started. One has to make
 * sure there are no exceptions in between these two calls, as otherwise, it
 * may report incorrect timings. Also, xhprof_frame_begin() and
 * xhprof_frame_end() have to be paired up really well, so not to interfere
 * with regular function's profiling, unless that's the intention. Prefer to
 * use XhprofFrame classobjects instead of calling this function directly.
 */
<<__HipHopSpecific, __Native("NoInjection")>>
function xhprof_frame_end(): void;

/* Starts sampling based xhprof profiling. For details on how to use this
 * function, please refer to
 * http://mirror.facebook.net/facebook/xhprof/doc.html.
 */
<<__HipHopSpecific, __Native>>
function xhprof_sample_enable(): void;

/* Ends sampling based xhprof profiling. For details on how to use this
 * function, please refer to
 * http://mirror.facebook.net/facebook/xhprof/doc.html.
 * @return mixed
 */
<<__HipHopSpecific, __Native>>
function xhprof_sample_disable(): mixed;

/* Set a callback function to be called whenever a function is entered or
 * exited. Takes 3 args, the function name, the mode (enter or exit), and an
 * array describing the frame.
 * @param mixed $callback - Profiler function to call or null to disable
 */
<<__HipHopSpecific, __Native>>
function fb_setprofile(mixed $callback): void;
