--TEST--
Test for xdebug.max_nesting_level (default) [1]
--INI--
xdebug.max_stack_frames=-1
xdebug.collect_params=3
xdebug.mode=develop
xdebug.show_local_vars=0
xdebug.max_nesting_level=256
--FILE--
<?php
function foo($a)
{
	foo($a+1);
}
foo(0);
?>
--EXPECTF--
Fatal error: Uncaught Error: Maximum function nesting level of '256' reached, aborting! in %smax_nesting_level-001.php on line 2

Error: Maximum function nesting level of '256' reached, aborting! in %smax_nesting_level-001.php on line 2

Call Stack:
%w%f %w%d   1. {main}() %smax_nesting_level-001.php:0
%w%f %w%d   2. foo(0) %smax_nesting_level-001.php:6
%w%f %w%d   3. foo(1) %smax_nesting_level-001.php:4
%w%f %w%d   4. foo(2) %smax_nesting_level-001.php:4
%w%f %w%d   5. foo(3) %smax_nesting_level-001.php:4
%w%f %w%d   6. foo(4) %smax_nesting_level-001.php:4
%w%f %w%d   7. foo(5) %smax_nesting_level-001.php:4
%w%f %w%d   8. foo(6) %smax_nesting_level-001.php:4
%w%f %w%d   9. foo(7) %smax_nesting_level-001.php:4
%w%f %w%d  10. foo(8) %smax_nesting_level-001.php:4
%w%f %w%d  11. foo(9) %smax_nesting_level-001.php:4
%w%f %w%d  12. foo(10) %smax_nesting_level-001.php:4
%w%f %w%d  13. foo(11) %smax_nesting_level-001.php:4
%w%f %w%d  14. foo(12) %smax_nesting_level-001.php:4
%w%f %w%d  15. foo(13) %smax_nesting_level-001.php:4
%w%f %w%d  16. foo(14) %smax_nesting_level-001.php:4
%w%f %w%d  17. foo(15) %smax_nesting_level-001.php:4
%w%f %w%d  18. foo(16) %smax_nesting_level-001.php:4
%w%f %w%d  19. foo(17) %smax_nesting_level-001.php:4
%w%f %w%d  20. foo(18) %smax_nesting_level-001.php:4
%w%f %w%d  21. foo(19) %smax_nesting_level-001.php:4
%w%f %w%d  22. foo(20) %smax_nesting_level-001.php:4
%w%f %w%d  23. foo(21) %smax_nesting_level-001.php:4
%w%f %w%d  24. foo(22) %smax_nesting_level-001.php:4
%w%f %w%d  25. foo(23) %smax_nesting_level-001.php:4
%w%f %w%d  26. foo(24) %smax_nesting_level-001.php:4
%w%f %w%d  27. foo(25) %smax_nesting_level-001.php:4
%w%f %w%d  28. foo(26) %smax_nesting_level-001.php:4
%w%f %w%d  29. foo(27) %smax_nesting_level-001.php:4
%w%f %w%d  30. foo(28) %smax_nesting_level-001.php:4
%w%f %w%d  31. foo(29) %smax_nesting_level-001.php:4
%w%f %w%d  32. foo(30) %smax_nesting_level-001.php:4
%w%f %w%d  33. foo(31) %smax_nesting_level-001.php:4
%w%f %w%d  34. foo(32) %smax_nesting_level-001.php:4
%w%f %w%d  35. foo(33) %smax_nesting_level-001.php:4
%w%f %w%d  36. foo(34) %smax_nesting_level-001.php:4
%w%f %w%d  37. foo(35) %smax_nesting_level-001.php:4
%w%f %w%d  38. foo(36) %smax_nesting_level-001.php:4
%w%f %w%d  39. foo(37) %smax_nesting_level-001.php:4
%w%f %w%d  40. foo(38) %smax_nesting_level-001.php:4
%w%f %w%d  41. foo(39) %smax_nesting_level-001.php:4
%w%f %w%d  42. foo(40) %smax_nesting_level-001.php:4
%w%f %w%d  43. foo(41) %smax_nesting_level-001.php:4
%w%f %w%d  44. foo(42) %smax_nesting_level-001.php:4
%w%f %w%d  45. foo(43) %smax_nesting_level-001.php:4
%w%f %w%d  46. foo(44) %smax_nesting_level-001.php:4
%w%f %w%d  47. foo(45) %smax_nesting_level-001.php:4
%w%f %w%d  48. foo(46) %smax_nesting_level-001.php:4
%w%f %w%d  49. foo(47) %smax_nesting_level-001.php:4
%w%f %w%d  50. foo(48) %smax_nesting_level-001.php:4
%w%f %w%d  51. foo(49) %smax_nesting_level-001.php:4
%w%f %w%d  52. foo(50) %smax_nesting_level-001.php:4
%w%f %w%d  53. foo(51) %smax_nesting_level-001.php:4
%w%f %w%d  54. foo(52) %smax_nesting_level-001.php:4
%w%f %w%d  55. foo(53) %smax_nesting_level-001.php:4
%w%f %w%d  56. foo(54) %smax_nesting_level-001.php:4
%w%f %w%d  57. foo(55) %smax_nesting_level-001.php:4
%w%f %w%d  58. foo(56) %smax_nesting_level-001.php:4
%w%f %w%d  59. foo(57) %smax_nesting_level-001.php:4
%w%f %w%d  60. foo(58) %smax_nesting_level-001.php:4
%w%f %w%d  61. foo(59) %smax_nesting_level-001.php:4
%w%f %w%d  62. foo(60) %smax_nesting_level-001.php:4
%w%f %w%d  63. foo(61) %smax_nesting_level-001.php:4
%w%f %w%d  64. foo(62) %smax_nesting_level-001.php:4
%w%f %w%d  65. foo(63) %smax_nesting_level-001.php:4
%w%f %w%d  66. foo(64) %smax_nesting_level-001.php:4
%w%f %w%d  67. foo(65) %smax_nesting_level-001.php:4
%w%f %w%d  68. foo(66) %smax_nesting_level-001.php:4
%w%f %w%d  69. foo(67) %smax_nesting_level-001.php:4
%w%f %w%d  70. foo(68) %smax_nesting_level-001.php:4
%w%f %w%d  71. foo(69) %smax_nesting_level-001.php:4
%w%f %w%d  72. foo(70) %smax_nesting_level-001.php:4
%w%f %w%d  73. foo(71) %smax_nesting_level-001.php:4
%w%f %w%d  74. foo(72) %smax_nesting_level-001.php:4
%w%f %w%d  75. foo(73) %smax_nesting_level-001.php:4
%w%f %w%d  76. foo(74) %smax_nesting_level-001.php:4
%w%f %w%d  77. foo(75) %smax_nesting_level-001.php:4
%w%f %w%d  78. foo(76) %smax_nesting_level-001.php:4
%w%f %w%d  79. foo(77) %smax_nesting_level-001.php:4
%w%f %w%d  80. foo(78) %smax_nesting_level-001.php:4
%w%f %w%d  81. foo(79) %smax_nesting_level-001.php:4
%w%f %w%d  82. foo(80) %smax_nesting_level-001.php:4
%w%f %w%d  83. foo(81) %smax_nesting_level-001.php:4
%w%f %w%d  84. foo(82) %smax_nesting_level-001.php:4
%w%f %w%d  85. foo(83) %smax_nesting_level-001.php:4
%w%f %w%d  86. foo(84) %smax_nesting_level-001.php:4
%w%f %w%d  87. foo(85) %smax_nesting_level-001.php:4
%w%f %w%d  88. foo(86) %smax_nesting_level-001.php:4
%w%f %w%d  89. foo(87) %smax_nesting_level-001.php:4
%w%f %w%d  90. foo(88) %smax_nesting_level-001.php:4
%w%f %w%d  91. foo(89) %smax_nesting_level-001.php:4
%w%f %w%d  92. foo(90) %smax_nesting_level-001.php:4
%w%f %w%d  93. foo(91) %smax_nesting_level-001.php:4
%w%f %w%d  94. foo(92) %smax_nesting_level-001.php:4
%w%f %w%d  95. foo(93) %smax_nesting_level-001.php:4
%w%f %w%d  96. foo(94) %smax_nesting_level-001.php:4
%w%f %w%d  97. foo(95) %smax_nesting_level-001.php:4
%w%f %w%d  98. foo(96) %smax_nesting_level-001.php:4
%w%f %w%d  99. foo(97) %smax_nesting_level-001.php:4
%w%f %w%d 100. foo(98) %smax_nesting_level-001.php:4
%w%f %w%d 101. foo(99) %smax_nesting_level-001.php:4
%w%f %w%d 102. foo(100) %smax_nesting_level-001.php:4
%w%f %w%d 103. foo(101) %smax_nesting_level-001.php:4
%w%f %w%d 104. foo(102) %smax_nesting_level-001.php:4
%w%f %w%d 105. foo(103) %smax_nesting_level-001.php:4
%w%f %w%d 106. foo(104) %smax_nesting_level-001.php:4
%w%f %w%d 107. foo(105) %smax_nesting_level-001.php:4
%w%f %w%d 108. foo(106) %smax_nesting_level-001.php:4
%w%f %w%d 109. foo(107) %smax_nesting_level-001.php:4
%w%f %w%d 110. foo(108) %smax_nesting_level-001.php:4
%w%f %w%d 111. foo(109) %smax_nesting_level-001.php:4
%w%f %w%d 112. foo(110) %smax_nesting_level-001.php:4
%w%f %w%d 113. foo(111) %smax_nesting_level-001.php:4
%w%f %w%d 114. foo(112) %smax_nesting_level-001.php:4
%w%f %w%d 115. foo(113) %smax_nesting_level-001.php:4
%w%f %w%d 116. foo(114) %smax_nesting_level-001.php:4
%w%f %w%d 117. foo(115) %smax_nesting_level-001.php:4
%w%f %w%d 118. foo(116) %smax_nesting_level-001.php:4
%w%f %w%d 119. foo(117) %smax_nesting_level-001.php:4
%w%f %w%d 120. foo(118) %smax_nesting_level-001.php:4
%w%f %w%d 121. foo(119) %smax_nesting_level-001.php:4
%w%f %w%d 122. foo(120) %smax_nesting_level-001.php:4
%w%f %w%d 123. foo(121) %smax_nesting_level-001.php:4
%w%f %w%d 124. foo(122) %smax_nesting_level-001.php:4
%w%f %w%d 125. foo(123) %smax_nesting_level-001.php:4
%w%f %w%d 126. foo(124) %smax_nesting_level-001.php:4
%w%f %w%d 127. foo(125) %smax_nesting_level-001.php:4
%w%f %w%d 128. foo(126) %smax_nesting_level-001.php:4
%w%f %w%d 129. foo(127) %smax_nesting_level-001.php:4
%w%f %w%d 130. foo(128) %smax_nesting_level-001.php:4
%w%f %w%d 131. foo(129) %smax_nesting_level-001.php:4
%w%f %w%d 132. foo(130) %smax_nesting_level-001.php:4
%w%f %w%d 133. foo(131) %smax_nesting_level-001.php:4
%w%f %w%d 134. foo(132) %smax_nesting_level-001.php:4
%w%f %w%d 135. foo(133) %smax_nesting_level-001.php:4
%w%f %w%d 136. foo(134) %smax_nesting_level-001.php:4
%w%f %w%d 137. foo(135) %smax_nesting_level-001.php:4
%w%f %w%d 138. foo(136) %smax_nesting_level-001.php:4
%w%f %w%d 139. foo(137) %smax_nesting_level-001.php:4
%w%f %w%d 140. foo(138) %smax_nesting_level-001.php:4
%w%f %w%d 141. foo(139) %smax_nesting_level-001.php:4
%w%f %w%d 142. foo(140) %smax_nesting_level-001.php:4
%w%f %w%d 143. foo(141) %smax_nesting_level-001.php:4
%w%f %w%d 144. foo(142) %smax_nesting_level-001.php:4
%w%f %w%d 145. foo(143) %smax_nesting_level-001.php:4
%w%f %w%d 146. foo(144) %smax_nesting_level-001.php:4
%w%f %w%d 147. foo(145) %smax_nesting_level-001.php:4
%w%f %w%d 148. foo(146) %smax_nesting_level-001.php:4
%w%f %w%d 149. foo(147) %smax_nesting_level-001.php:4
%w%f %w%d 150. foo(148) %smax_nesting_level-001.php:4
%w%f %w%d 151. foo(149) %smax_nesting_level-001.php:4
%w%f %w%d 152. foo(150) %smax_nesting_level-001.php:4
%w%f %w%d 153. foo(151) %smax_nesting_level-001.php:4
%w%f %w%d 154. foo(152) %smax_nesting_level-001.php:4
%w%f %w%d 155. foo(153) %smax_nesting_level-001.php:4
%w%f %w%d 156. foo(154) %smax_nesting_level-001.php:4
%w%f %w%d 157. foo(155) %smax_nesting_level-001.php:4
%w%f %w%d 158. foo(156) %smax_nesting_level-001.php:4
%w%f %w%d 159. foo(157) %smax_nesting_level-001.php:4
%w%f %w%d 160. foo(158) %smax_nesting_level-001.php:4
%w%f %w%d 161. foo(159) %smax_nesting_level-001.php:4
%w%f %w%d 162. foo(160) %smax_nesting_level-001.php:4
%w%f %w%d 163. foo(161) %smax_nesting_level-001.php:4
%w%f %w%d 164. foo(162) %smax_nesting_level-001.php:4
%w%f %w%d 165. foo(163) %smax_nesting_level-001.php:4
%w%f %w%d 166. foo(164) %smax_nesting_level-001.php:4
%w%f %w%d 167. foo(165) %smax_nesting_level-001.php:4
%w%f %w%d 168. foo(166) %smax_nesting_level-001.php:4
%w%f %w%d 169. foo(167) %smax_nesting_level-001.php:4
%w%f %w%d 170. foo(168) %smax_nesting_level-001.php:4
%w%f %w%d 171. foo(169) %smax_nesting_level-001.php:4
%w%f %w%d 172. foo(170) %smax_nesting_level-001.php:4
%w%f %w%d 173. foo(171) %smax_nesting_level-001.php:4
%w%f %w%d 174. foo(172) %smax_nesting_level-001.php:4
%w%f %w%d 175. foo(173) %smax_nesting_level-001.php:4
%w%f %w%d 176. foo(174) %smax_nesting_level-001.php:4
%w%f %w%d 177. foo(175) %smax_nesting_level-001.php:4
%w%f %w%d 178. foo(176) %smax_nesting_level-001.php:4
%w%f %w%d 179. foo(177) %smax_nesting_level-001.php:4
%w%f %w%d 180. foo(178) %smax_nesting_level-001.php:4
%w%f %w%d 181. foo(179) %smax_nesting_level-001.php:4
%w%f %w%d 182. foo(180) %smax_nesting_level-001.php:4
%w%f %w%d 183. foo(181) %smax_nesting_level-001.php:4
%w%f %w%d 184. foo(182) %smax_nesting_level-001.php:4
%w%f %w%d 185. foo(183) %smax_nesting_level-001.php:4
%w%f %w%d 186. foo(184) %smax_nesting_level-001.php:4
%w%f %w%d 187. foo(185) %smax_nesting_level-001.php:4
%w%f %w%d 188. foo(186) %smax_nesting_level-001.php:4
%w%f %w%d 189. foo(187) %smax_nesting_level-001.php:4
%w%f %w%d 190. foo(188) %smax_nesting_level-001.php:4
%w%f %w%d 191. foo(189) %smax_nesting_level-001.php:4
%w%f %w%d 192. foo(190) %smax_nesting_level-001.php:4
%w%f %w%d 193. foo(191) %smax_nesting_level-001.php:4
%w%f %w%d 194. foo(192) %smax_nesting_level-001.php:4
%w%f %w%d 195. foo(193) %smax_nesting_level-001.php:4
%w%f %w%d 196. foo(194) %smax_nesting_level-001.php:4
%w%f %w%d 197. foo(195) %smax_nesting_level-001.php:4
%w%f %w%d 198. foo(196) %smax_nesting_level-001.php:4
%w%f %w%d 199. foo(197) %smax_nesting_level-001.php:4
%w%f %w%d 200. foo(198) %smax_nesting_level-001.php:4
%w%f %w%d 201. foo(199) %smax_nesting_level-001.php:4
%w%f %w%d 202. foo(200) %smax_nesting_level-001.php:4
%w%f %w%d 203. foo(201) %smax_nesting_level-001.php:4
%w%f %w%d 204. foo(202) %smax_nesting_level-001.php:4
%w%f %w%d 205. foo(203) %smax_nesting_level-001.php:4
%w%f %w%d 206. foo(204) %smax_nesting_level-001.php:4
%w%f %w%d 207. foo(205) %smax_nesting_level-001.php:4
%w%f %w%d 208. foo(206) %smax_nesting_level-001.php:4
%w%f %w%d 209. foo(207) %smax_nesting_level-001.php:4
%w%f %w%d 210. foo(208) %smax_nesting_level-001.php:4
%w%f %w%d 211. foo(209) %smax_nesting_level-001.php:4
%w%f %w%d 212. foo(210) %smax_nesting_level-001.php:4
%w%f %w%d 213. foo(211) %smax_nesting_level-001.php:4
%w%f %w%d 214. foo(212) %smax_nesting_level-001.php:4
%w%f %w%d 215. foo(213) %smax_nesting_level-001.php:4
%w%f %w%d 216. foo(214) %smax_nesting_level-001.php:4
%w%f %w%d 217. foo(215) %smax_nesting_level-001.php:4
%w%f %w%d 218. foo(216) %smax_nesting_level-001.php:4
%w%f %w%d 219. foo(217) %smax_nesting_level-001.php:4
%w%f %w%d 220. foo(218) %smax_nesting_level-001.php:4
%w%f %w%d 221. foo(219) %smax_nesting_level-001.php:4
%w%f %w%d 222. foo(220) %smax_nesting_level-001.php:4
%w%f %w%d 223. foo(221) %smax_nesting_level-001.php:4
%w%f %w%d 224. foo(222) %smax_nesting_level-001.php:4
%w%f %w%d 225. foo(223) %smax_nesting_level-001.php:4
%w%f %w%d 226. foo(224) %smax_nesting_level-001.php:4
%w%f %w%d 227. foo(225) %smax_nesting_level-001.php:4
%w%f %w%d 228. foo(226) %smax_nesting_level-001.php:4
%w%f %w%d 229. foo(227) %smax_nesting_level-001.php:4
%w%f %w%d 230. foo(228) %smax_nesting_level-001.php:4
%w%f %w%d 231. foo(229) %smax_nesting_level-001.php:4
%w%f %w%d 232. foo(230) %smax_nesting_level-001.php:4
%w%f %w%d 233. foo(231) %smax_nesting_level-001.php:4
%w%f %w%d 234. foo(232) %smax_nesting_level-001.php:4
%w%f %w%d 235. foo(233) %smax_nesting_level-001.php:4
%w%f %w%d 236. foo(234) %smax_nesting_level-001.php:4
%w%f %w%d 237. foo(235) %smax_nesting_level-001.php:4
%w%f %w%d 238. foo(236) %smax_nesting_level-001.php:4
%w%f %w%d 239. foo(237) %smax_nesting_level-001.php:4
%w%f %w%d 240. foo(238) %smax_nesting_level-001.php:4
%w%f %w%d 241. foo(239) %smax_nesting_level-001.php:4
%w%f %w%d 242. foo(240) %smax_nesting_level-001.php:4
%w%f %w%d 243. foo(241) %smax_nesting_level-001.php:4
%w%f %w%d 244. foo(242) %smax_nesting_level-001.php:4
%w%f %w%d 245. foo(243) %smax_nesting_level-001.php:4
%w%f %w%d 246. foo(244) %smax_nesting_level-001.php:4
%w%f %w%d 247. foo(245) %smax_nesting_level-001.php:4
%w%f %w%d 248. foo(246) %smax_nesting_level-001.php:4
%w%f %w%d 249. foo(247) %smax_nesting_level-001.php:4
%w%f %w%d 250. foo(248) %smax_nesting_level-001.php:4
%w%f %w%d 251. foo(249) %smax_nesting_level-001.php:4
%w%f %w%d 252. foo(250) %smax_nesting_level-001.php:4
%w%f %w%d 253. foo(251) %smax_nesting_level-001.php:4
%w%f %w%d 254. foo(252) %smax_nesting_level-001.php:4
%w%f %w%d 255. foo(253) %smax_nesting_level-001.php:4
%w%f %w%d 256. foo(254) %smax_nesting_level-001.php:4
