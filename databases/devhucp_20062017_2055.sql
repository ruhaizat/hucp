-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 02:54 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devhucp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `data`, `ip_address`, `timestamp`) VALUES
('uu1k8t8fpkgllontct5fjv02bpjlncfq', '__ci_last_regenerate|i:1496054123;', '::1', '1496054277'),
('feifu3dskphjvtir69pehueic1o1f4ip', '__ci_last_regenerate|i:1496054291;', '::1', '1496054291'),
('e0p5rmbbov37ea3mkn7t9q6cqve589ou', '__ci_last_regenerate|i:1496054294;', '::1', '1496054294'),
('qukf0tj4t66sg9n5pfceg6tp51sbmvo5', '__ci_last_regenerate|i:1496054300;', '::1', '1496054300'),
('aekgko4ar0hkbllobm3os077vbk4k1do', '__ci_last_regenerate|i:1496054304;', '::1', '1496054304'),
('m59jl0rnu50at6mtl7h81v8mo6kp1lsi', '__ci_last_regenerate|i:1496054305;', '::1', '1496054305'),
('obr7ee4kdo2ptdvvhte2l8mv9mbbkfp5', '__ci_last_regenerate|i:1496054312;', '::1', '1496054312'),
('2se919cnlg9r1dsrhgi5bbor4r2otjrf', '__ci_last_regenerate|i:1496054326;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496054651'),
('faaumrdegfld49gnqrco6hbcpr3025ph', '__ci_last_regenerate|i:1496054651;', '::1', '1496055017'),
('sr3as9poo1le21ie06um6rrj6c2hodm4', '__ci_last_regenerate|i:1496055018;', '::1', '1496055295'),
('sr0giv7l3q68dpu8eh25f130lvn6o9l5', '__ci_last_regenerate|i:1496055346;', '::1', '1496055601'),
('fil2e7vh4l0gorkr6uka7sjoflkhmabs', '__ci_last_regenerate|i:1496055771;', '::1', '1496056139'),
('glq42bcsaua68pufq1numbfc04j80rvv', '__ci_last_regenerate|i:1496056357;', '::1', '1496056502'),
('30jksjsaqkifj270fkrnen7e97rbprgj', '__ci_last_regenerate|i:1496056722;', '::1', '1496056722'),
('i63ol885cfg7lgala42bgtb8a9i4rd2h', '__ci_last_regenerate|i:1496056738;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1496056738'),
('o3ivt2blthmq07sdfng1q1cqukqdui4i', '__ci_last_regenerate|i:1496058161;', '::1', '1496058415'),
('15jsc1lgumkl82l4faa5bocj8lmqkm9n', '__ci_last_regenerate|i:1496058251;', '::1', '1496058251'),
('s6vh07esi6q90menre98dv9mnm6b942v', '__ci_last_regenerate|i:1496058255;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1496058255'),
('ukitvvis0ptp4ri1f69po92ms04g50mo', '__ci_last_regenerate|i:1496058255;', '::1', '1496058255'),
('mptulqufo90d3ek38egf9s7s1vtnm0k9', '__ci_last_regenerate|i:1496058592;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1496058592'),
('hgqpl081rmfqi42fqq7p6et0rp8ubbsh', '__ci_last_regenerate|i:1496058592;', '::1', '1496058592'),
('luq8ut8l3ife1ln2m15qei8arsghi429', '__ci_last_regenerate|i:1496058638;LoggedUser|a:5:{s:6:"UserID";s:2:"38";s:9:"FirstName";s:4:"Test";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496058939'),
('3ttb97etlt15fl8ngjt2hgbb4rrkebqt', '__ci_last_regenerate|i:1496058940;LoggedUser|a:5:{s:6:"UserID";s:2:"38";s:9:"FirstName";s:4:"Test";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496058940'),
('o3rbhrb4giba43fp9ua4dr902uu2s865', '__ci_last_regenerate|i:1496063302;', '::1', '1496063668'),
('ok6e52926p4hts27cb8kn524hi1trt2s', '__ci_last_regenerate|i:1496063678;', '::1', '1496064185'),
('emqgtt9b070ha3k05ujcm92b9si6gbu2', '__ci_last_regenerate|i:1496064185;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496064399'),
('4fsb95aoeommoquugu4u9b3a9ppibftu', '__ci_last_regenerate|i:1496064587;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496064857'),
('b6d7v0mo70ocgrut1o82kqm79r8d5471', '__ci_last_regenerate|i:1496065023;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496065059'),
('e6v6vgaaee4dl9utgm8ogfcmuppav0je', '__ci_last_regenerate|i:1496065890;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496066003'),
('ruvf76qfmg4joektkcb4t6sdrtbremum', '__ci_last_regenerate|i:1496066387;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496066546'),
('4b874uerl1ouo4chnt3nb3mtu3utseu8', '__ci_last_regenerate|i:1496101246;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496101369'),
('9542b3e0tri5sc1ud0cvg3mmiqriuua5', '__ci_last_regenerate|i:1496102984;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496102988'),
('n4osl24f1mn2csl3022ctgrj2c336pfs', '__ci_last_regenerate|i:1496103329;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496103329'),
('e9gmnvrir9ofui9cl9gpqrrk48lbs9k2', '__ci_last_regenerate|i:1496104278;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496104561'),
('ahvb4t1r31vjc9fgd3pl9ud227em9rk3', '__ci_last_regenerate|i:1496104740;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496104747'),
('pj0508pbricae2g27is9ormc0ffv1icn', '__ci_last_regenerate|i:1496105256;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496105475'),
('oqdq11q5kvvmi59imh15mf7cbvb7cr5h', '__ci_last_regenerate|i:1496105605;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496105805'),
('e3arh1an3j02mjoi7kp5grj8mh30ehs6', '__ci_last_regenerate|i:1496106641;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496106947'),
('rhh8ratu8nvk0pp6mcodio7brhsvvhor', '__ci_last_regenerate|i:1496106947;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:0:"";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496107190'),
('jpmp9fri365qk4fe6gsshfnvdlv8fd68', '__ci_last_regenerate|i:1496107310;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:0:"";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496107597'),
('hpnsjhab9hujee063qir724iec86c27l', '__ci_last_regenerate|i:1496107672;', '::1', '1496108037'),
('tjpbl7gunrjtgjujr3doonshjcvh7hip', '__ci_last_regenerate|i:1496108037;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496108293'),
('agq3hag1rp8j1elr5l9538gk49p4t38q', '__ci_last_regenerate|i:1496108454;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496108730'),
('qtagv5c3p0q30ce9g7mn9gcffdvt61a5', '__ci_last_regenerate|i:1496108891;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496109137'),
('c9re66dku4b38al0jl838634htdmj507', '__ci_last_regenerate|i:1496109210;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496109354'),
('kv1bhveeck7ks6f2pbuvb9rk91g9114l', '__ci_last_regenerate|i:1496109518;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496109716'),
('ffubj0i6a7sijf0emi9r8u79m04ho34l', '__ci_last_regenerate|i:1496109866;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496110007'),
('2ckc1ta05aqilkr19r959dvut3fifvv9', '__ci_last_regenerate|i:1496110294;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496110517'),
('2ba0psj7hvpu0l5ukatjk583j8nrnecq', '__ci_last_regenerate|i:1496112721;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496112721'),
('12iim5p1jg8ovd7ace0tri40q5cre4jq', '__ci_last_regenerate|i:1496115610;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496115624'),
('gsgv548pg91v2fu1l3mvdastjo98edvg', '__ci_last_regenerate|i:1496116814;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496117022'),
('fjjhinfrmqffjgutk8i7lc3rir61bo4j', '__ci_last_regenerate|i:1496117263;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496117524'),
('db40fpgt3a0b3k8u8ivjbnvt8mu76lfu', '__ci_last_regenerate|i:1496118310;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496121690'),
('fa5lp278ktr3oq2k87qu0u6mgbskk1bt', '__ci_last_regenerate|i:1496121845;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496122130'),
('bnj2s5obuqeo4ufhsgv0qtdm63dcct7u', '__ci_last_regenerate|i:1496122321;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496122321'),
('7ifasmc7svhvc6ue499ok71g6o9vgifd', '__ci_last_regenerate|i:1496123665;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496123668'),
('o9qcjt4pkpop8c7mq14riva6uksndjct', '__ci_last_regenerate|i:1496124040;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496124258'),
('j6a8qf2gl11vrnakvbiuebs0ej2or85g', '__ci_last_regenerate|i:1496124536;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496124746'),
('041u6o9t5oi8ejl9hl7ihdnp4gsau2nm', '__ci_last_regenerate|i:1496124890;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496124941'),
('81ap6dj4of7jerda074b2v5clei75b71', '__ci_last_regenerate|i:1496208004;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496208247'),
('09cnsmkielj60mg8egk5idlhj2euvcp2', '__ci_last_regenerate|i:1496208364;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496208665'),
('t4elf6jniq4ak1io56s1tg1tem0ad8jm', '__ci_last_regenerate|i:1496208705;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496208966'),
('e8a1cknvdnm38ee37aq00fcaddjvl9lc', '__ci_last_regenerate|i:1496209053;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496209210'),
('a2m05850bmp90aktrh35cs1ljsuo51hn', '__ci_last_regenerate|i:1496209667;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496209698'),
('s1id710uk8l9g0suriophrqht1b3j6ao', '__ci_last_regenerate|i:1496210544;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496210781'),
('e30912o6m5n8ci4n0idrdif9b4mtk4e0', '__ci_last_regenerate|i:1496210901;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496211200'),
('0p1a5i3ls2br8oqpi5eic7kf58ogf2lp', '__ci_last_regenerate|i:1496211261;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496211321'),
('4p1davt4r78necl09rouqprjl829bj88', '__ci_last_regenerate|i:1496211741;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496212026'),
('0t7ta9j8ms35mtptpuojfvprt1kabbhk', '__ci_last_regenerate|i:1496212089;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496212247'),
('pd6a7er4shkh0fook3foq2mnjhpsa6sg', '__ci_last_regenerate|i:1496212989;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496212989'),
('5onm2lq16goghhg8288b0dsbevg9dhvt', '__ci_last_regenerate|i:1496213819;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496213946'),
('19g53ibqhvg54h0fpikfm2iqffmt2q3b', '__ci_last_regenerate|i:1496214131;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496214152'),
('7sl7616iq9rd22qs2b6erh1gpde2eet4', '__ci_last_regenerate|i:1496214572;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496214851'),
('5q3jkilfa0pgjnisvsolg04f4fda51p4', '__ci_last_regenerate|i:1496214896;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496215182'),
('clnes6no8bmjoebsqebr3qkk4birjfc1', '__ci_last_regenerate|i:1496215264;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496215324'),
('gl8knb8nfrq1msl1pavqlllj3h8c0oq3', '__ci_last_regenerate|i:1496216253;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496216531'),
('h5gf2uvd6i6hq6q0ebrth16g5d6adp5i', '__ci_last_regenerate|i:1496216641;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";N;}', '::1', '1496216832'),
('oben5g96fepgbukf4udq5rl1gjsq40hq', '__ci_last_regenerate|i:1496217290;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496217446'),
('4dmo1gn1ej1e8sehuhjbotph0o63lm4o', '__ci_last_regenerate|i:1496278315;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496278608'),
('9hjdfokvuuavqmd8i6ej8dturcla9aua', '__ci_last_regenerate|i:1496580343;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496580380'),
('g53fmesmqjmob8a12kchaigc9uottjnd', '__ci_last_regenerate|i:1496580670;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496580703'),
('lcuj7ime3jgd0ud2r5l2023fantum0ah', '__ci_last_regenerate|i:1496581190;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496581190'),
('qgsikd2qcfqmqqci64f26he3hseosnfe', '__ci_last_regenerate|i:1496581621;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496581834'),
('laats1418af3r1ai5fau5g30jg13oakg', '__ci_last_regenerate|i:1496582038;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496582307'),
('ud0k08c2i988962q1bvv8fjhu1l0ga6v', '__ci_last_regenerate|i:1496582413;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496582641'),
('fkm6gj06311bke0q2vd3rpcmg7k9sobo', '__ci_last_regenerate|i:1496582745;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496583030'),
('53o4fgtp6up25mlrl6q9l7jvn0h79igc', '__ci_last_regenerate|i:1496583097;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496583333'),
('s5qf8rktd5nbn2fkod44v7l3bgipthfm', '__ci_last_regenerate|i:1496583528;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496583748'),
('8lhbj302fjj94emdlisgempmjtuq6jpt', '__ci_last_regenerate|i:1496583978;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496584264'),
('ptfmvnrsoef09flrm2kcphotsfr9qik4', '__ci_last_regenerate|i:1496584319;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496584615'),
('daff5rsek66fqoe8rpc10c7ehcgdl1vi', '__ci_last_regenerate|i:1496584620;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496584854'),
('jbjfcbqu54rkdns065jlk96u76bul6fq', '__ci_last_regenerate|i:1496585234;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496585506'),
('92bkhjnp14c0ftkpor2n6k60a7gpoh19', '__ci_last_regenerate|i:1496585574;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496585757'),
('dpu6qd5glksg9a3t8e34utr8v3hrfjb0', '__ci_last_regenerate|i:1496585929;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496585929'),
('bq6magmb7v8iqopaq5bb9qgrnctlnla7', '__ci_last_regenerate|i:1496586406;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496586590'),
('3fp41tmhb98gqisd3umi5sjmhslt5cg5', '__ci_last_regenerate|i:1496586744;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496586935'),
('416ndh9f86co04tpjh6j4e0mu5gs0rnv', '__ci_last_regenerate|i:1496587067;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496587264'),
('p8s0hbtqc3cftpeauin6di3bk2qp5qp0', '__ci_last_regenerate|i:1496587389;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496587645'),
('t2499i2evg58g9d5h0go3spd4fgcnbjd', '__ci_last_regenerate|i:1496587750;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496588024'),
('qn6d5mdu255661tc7o2pkkv6lfenbj1c', '__ci_last_regenerate|i:1496588132;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496588201'),
('ve1sg4rtffuojr6ctlo6h8m311iee6pr', '__ci_last_regenerate|i:1496588454;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496588518'),
('dquea29677ljm1inv10olpp1mobjmfc4', '__ci_last_regenerate|i:1496588773;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496588773'),
('e4qn0ni170q485kvhb54j7314qeas3qb', '__ci_last_regenerate|i:1496620065;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496620082'),
('uksi8bi3h0ca7u3uaeg29ouccp4j3k3h', '__ci_last_regenerate|i:1496620374;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496620673'),
('evsb9e4b2p7tk31tpodgihr5tqvd246h', '__ci_last_regenerate|i:1496620901;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496621188'),
('7aj1sj12dj1vp9gkt3va3542kcf0df64', '__ci_last_regenerate|i:1496621209;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496621482'),
('rnhmbqi9kvhggu0r86jo0hvm73qchd4o', '__ci_last_regenerate|i:1496621679;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496621971'),
('steb9l5nb3lrpg4djmg6qsk911aj6hof', '__ci_last_regenerate|i:1496622017;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496622272'),
('oa0gao6ujdev0n8upo32krbs50mm75fv', '__ci_last_regenerate|i:1496622318;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496622510'),
('f4q4biah7iqi7jjbv0i7v2cftd029tvp', '__ci_last_regenerate|i:1496623509;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496623561'),
('qde6v26kbfcl4l3sen66usup6qvde1ha', '__ci_last_regenerate|i:1496666102;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496666226'),
('sii6qr8gsm75f3l66n498mlceklb6qll', '__ci_last_regenerate|i:1496671131;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496671326'),
('jlp200k3g8fmp58evnajelb5cllmemjl', '__ci_last_regenerate|i:1496671435;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496671572'),
('836ve13tkmn2ur4i5fngthj5hgdpsdsf', '__ci_last_regenerate|i:1496671764;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496672059'),
('0g5huv3e74qtme35s5i18j7iinroe3ou', '__ci_last_regenerate|i:1496672900;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496673192'),
('ao91h0jko6o30n7jor4mbietpupppk5k', '__ci_last_regenerate|i:1496673281;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496673578'),
('6pibj0370k0orm60jok8u1op51nvnjd1', '__ci_last_regenerate|i:1496673585;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496673863'),
('27nvo68kv0un4h8l2dpjrdd4pfma8pqs', '__ci_last_regenerate|i:1496673903;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496674069'),
('buuj6uma8o74dpintbous8313pjqc9qc', '__ci_last_regenerate|i:1496674303;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496674580'),
('68f8816som03ufeiib0inkbr474djmkr', '__ci_last_regenerate|i:1496674606;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496674815'),
('d1lickcirugets4egmskaqus5d86ab22', '__ci_last_regenerate|i:1496674963;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496675259'),
('45u7dahsacgpdsmfe3nfbfot7sp7v488', '__ci_last_regenerate|i:1496675266;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496675266'),
('77c4m3sk6ef2kmghsflfn7kuqc8i9bqb', '__ci_last_regenerate|i:1496708534;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496708754'),
('uk94uujsf3sgj5uran0eag1n3a2om59r', '__ci_last_regenerate|i:1496709283;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496709581'),
('tr794b378hhvqdu6fupnbs0jugopu5kh', '__ci_last_regenerate|i:1496709599;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496709816'),
('fltg63uuuui88mvcio6gst01k8r0rs0e', '__ci_last_regenerate|i:1496710766;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496710766'),
('u1fvq11c52cqelnrr0bbqbsoq2caej0d', '__ci_last_regenerate|i:1496711072;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496711322'),
('840o5q25cbhl81fue4umhrdd7ft3dhm2', '__ci_last_regenerate|i:1496711538;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496711737'),
('rsgl08252v1p91fls4nb48e73na4a04v', '__ci_last_regenerate|i:1496711868;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496711875'),
('mmvnnomelqp4rbrt7lrf8t9pop5sui8a', '__ci_last_regenerate|i:1496712839;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496713098'),
('cl2cl1ra2nkmb2qhs3vd612f7rjrrgrl', '__ci_last_regenerate|i:1496713194;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496713220'),
('ku8gruiguomlrjug9seceltboskq9an2', '__ci_last_regenerate|i:1496714017;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496714117'),
('sdgbkfo7v1pjk8g6j66qdrdmldr5k5l7', '__ci_last_regenerate|i:1496722956;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496723208'),
('rkh1gc8s3srrhprn5a7vphuog3j10a15', '__ci_last_regenerate|i:1496723269;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496723554'),
('0s5frlbik1gmdcu5b74ka2atds2r1kpp', '__ci_last_regenerate|i:1496723617;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496723628'),
('5dk213s21ml3f4853mhms4pcqefeh89l', '__ci_last_regenerate|i:1496724282;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496724282'),
('fgr6t44b8i1nu0rgkfccrn77nbnkc0bu', '__ci_last_regenerate|i:1496724704;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496724938'),
('k01ku0qlfi06nmu781f568pvatd37q6s', '__ci_last_regenerate|i:1496725132;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496725321'),
('uhqj2hpvfa430raususj1mhd3s6cpoj0', '__ci_last_regenerate|i:1496725472;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496725505'),
('f30lssdj54b8evs64eu1v9safb5svov8', '__ci_last_regenerate|i:1496726046;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496726046'),
('3skvhq1dqoo6fanad8jalklnpokdlnv9', '__ci_last_regenerate|i:1496726384;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496726670'),
('raodt37d0ng47mg9l9g3aimfurhot5au', '__ci_last_regenerate|i:1496726704;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496726997'),
('b7s8jvau40p1crhueda1o85odo881l40', '__ci_last_regenerate|i:1496727017;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496727121'),
('fac1oqg2ik4ivuj8svjeerfvqk7mntjv', '__ci_last_regenerate|i:1496727393;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496727393'),
('tqnk4ephcj3d6sejj72og36failq0pj5', '__ci_last_regenerate|i:1496727707;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496727992'),
('456n2peupb2d9nprcr9n4mas29ui0sje', '__ci_last_regenerate|i:1496728061;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496728357'),
('0s7e49hqd5dg2la04m4mqls0htgf60dm', '__ci_last_regenerate|i:1496728378;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496728460'),
('8e95ndhdg8f6h1iaoiuamu97qbc4rscv', '__ci_last_regenerate|i:1496728833;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496728974'),
('ckllq4qnm76qk55no766u6be96fpn4p6', '__ci_last_regenerate|i:1496729369;', '::1', '1496729638'),
('ksoprnuao9gv5gd0mmilfo1er6muqq2j', '__ci_last_regenerate|i:1496729721;', '::1', '1496730017'),
('puucsjntur40qpg02kgfh55qpqmspov3', '__ci_last_regenerate|i:1496730049;', '::1', '1496730281'),
('linhb748t7d6li8f8cegp5u2uofe063t', '__ci_last_regenerate|i:1496730422;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496730455'),
('drpa7g627lpraeoqjrodlbfj5bd5sek9', '__ci_last_regenerate|i:1496733151;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1496733151'),
('sklqm4imihok3f0jnif6ovmb65le4hul', '__ci_last_regenerate|i:1497014015;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497014248'),
('6ri545geo81qfb4jjf6c3n99mso35sm2', '__ci_last_regenerate|i:1497014355;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497014628'),
('l4j0l88vp9j7ajsvqadhprsojpjs98dr', '__ci_last_regenerate|i:1497014784;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497015091'),
('t0id81dvcsso7lb859di6st01ms1hsn0', '__ci_last_regenerate|i:1497015091;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497015325'),
('8b1ocathtcre71lvurfvidbkngum2cpg', '__ci_last_regenerate|i:1497015416;LoggedUser|a:5:{s:6:"UserID";s:2:"28";s:9:"FirstName";s:5:"Kenny";s:12:"EmailAddress";s:16:"kenny@kni.com.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497015670'),
('s8e72k4ntllk83hs35mt9ueqet8gf0de', '__ci_last_regenerate|i:1497015752;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497016018'),
('adj076qdpevlmtlj9rkgv3v1p928uo7v', '__ci_last_regenerate|i:1497016169;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497016467'),
('mat9472br6cl6kv8ppcqn3j2j6ei8bjg', '__ci_last_regenerate|i:1497016470;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497016686'),
('63voe504m4pmh84oka1vrc9qackjj5rs', '__ci_last_regenerate|i:1497016978;LoggedUser|a:5:{s:6:"UserID";s:2:"42";s:9:"FirstName";s:3:"Lim";s:12:"EmailAddress";s:19:"limperz@hotmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1497017483'),
('lmhlbmt9e6ch5t3fr4tc9pvi2d7s6aub', '__ci_last_regenerate|i:1497017001;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1497017207'),
('sagiff2omc8m7pm0hk1l4a6io39f5b3m', '__ci_last_regenerate|i:1497017483;', '::1', '1497018817'),
('ctnj753hgcen5u92v3lsaee1bmh80r4j', '__ci_last_regenerate|i:1497018774;', '::1', '1497018774'),
('lmgvc0d2dal5uqq14u4g4623mv8jh24e', '__ci_last_regenerate|i:1497018817;', '::1', '1497018817'),
('61agfue9rvude7cbd3hmhglohor3utf4', '__ci_last_regenerate|i:1497183798;', '::1', '1497184046'),
('m3b4hiadsunqpmebggberb2il1ctl2s8', '__ci_last_regenerate|i:1497184102;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497184400'),
('22rp5rb9bqrhsuu3t3nc62d321d36i1u', '__ci_last_regenerate|i:1497184403;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497184560'),
('gpgep3qah3u6lqr2utm3i4d31ohqlrrn', '__ci_last_regenerate|i:1497184957;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497185249'),
('hbf8d8iui8nnmq0330s7f91jap8175ql', '__ci_last_regenerate|i:1497185415;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497185415'),
('i2cq629hn9gqk7qfr2u93ne55s370a41', '__ci_last_regenerate|i:1497185725;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497185989'),
('nr1iah993a73p6g9587h8b8hucqp7jg5', '__ci_last_regenerate|i:1497186652;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497186905'),
('8s247pg492pk63j7927ks9no400ilupg', '__ci_last_regenerate|i:1497187092;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497187155'),
('gtsps4gtfifbrnooa5575lpctq73duar', '__ci_last_regenerate|i:1497187593;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497187802'),
('t3nf5pkfj5kugqv45asfgue2c5sjpk8m', '__ci_last_regenerate|i:1497187902;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497188152'),
('4mt5ukngp1lq36pcei8vv4eq37q3mveg', '__ci_last_regenerate|i:1497188212;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497188262'),
('ktvbg4q8a4hvsr453mdu274ugsm93no9', '__ci_last_regenerate|i:1497188558;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:9:"Superuser";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497188798'),
('r8793b400u67pvdovh5ou6a20ilto87q', '__ci_last_regenerate|i:1497188859;', '::1', '1497189157'),
('dp1mckcmrpecs0bqpagik2ksdinqkn5d', '__ci_last_regenerate|i:1497189290;', '::1', '1497189426'),
('elmqucuhuvtf8al9bp6lj9recc75sjgd', '__ci_last_regenerate|i:1497189700;LoggedUser|a:5:{s:6:"UserID";s:2:"11";s:9:"FirstName";s:17:"Muhammad Ruhaizat";s:12:"EmailAddress";s:21:"mruhaizat88@gmail.com";s:4:"Type";s:1:"2";s:5:"Group";s:1:"2";}', '::1', '1497189996'),
('1m7j0qj1gtmpbi3u9ghd8377bf9k4brl', '__ci_last_regenerate|i:1497190024;', '::1', '1497190260'),
('k3fcnd383316mfqgqccu4dnmgcdqpsp9', '__ci_last_regenerate|i:1497190555;', '::1', '1497190742'),
('l3i09m55cbim45r3dfur99fmkgvpdltk', '__ci_last_regenerate|i:1497190902;', '::1', '1497191099'),
('iqmgmsfn24g0nv879r3u4itrmrphqreg', '__ci_last_regenerate|i:1497191844;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497192292'),
('snm5uotuevc8j4sfnc760b53crsc930k', '__ci_last_regenerate|i:1497192292;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497192514'),
('cqql3d9nitbv0nmafimi8h29ssei8uvc', '__ci_last_regenerate|i:1497192613;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497192927'),
('6dhsoo0f4760ks1ihh9brskprcs5cn0p', '__ci_last_regenerate|i:1497192961;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497193207'),
('lvkccsi0e81733n36gp27tfde6begm1v', '__ci_last_regenerate|i:1497356128;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497356219'),
('9lvniko8n6mrscncj48tu8tj20ju04nj', '__ci_last_regenerate|i:1497356500;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497356748'),
('q95u1t2a0qd5katvnbmgopf46qeovv5e', '__ci_last_regenerate|i:1497356811;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497357099'),
('r9m32t6nssvvr4ioihlu1onag850asq5', '__ci_last_regenerate|i:1497357143;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497357431'),
('mk9bm3eqb2pvt6k6247qgak0bkocvbvr', '__ci_last_regenerate|i:1497357468;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497357590'),
('c92jbn14kjqneohn78v9ot7oholukv87', '__ci_last_regenerate|i:1497358393;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497358669'),
('fjlq3uaokf96eff2j3nt7q284cbvt9h4', '__ci_last_regenerate|i:1497358802;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497358816'),
('50dsj2tohojd6dtio6vhlgdfibfq3t8f', '__ci_last_regenerate|i:1497359474;LoggedUser|a:5:{s:6:"UserID";s:2:"27";s:9:"FirstName";s:7:"M. Izat";s:12:"EmailAddress";s:31:"myfreelanceprogrammer@gmail.com";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497359779'),
('ino35s5q3ucutcfaep9gbb5alptjsdv2', '__ci_last_regenerate|i:1497359779;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497359935'),
('00606etkut2ge6l2p28ntqd7qjapld2f', '__ci_last_regenerate|i:1497360081;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497360374'),
('j89gsf6fqob8ok6pqp0q262g8qfh7c9v', '__ci_last_regenerate|i:1497360413;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497360558'),
('3e8shpj1sgqe41a3vk7abnjcsmsh90kl', '__ci_last_regenerate|i:1497397092;', '::1', '1497397385'),
('h6bprhigucnlno2lohdg4pr5peqqshg2', '__ci_last_regenerate|i:1497397425;', '::1', '1497397485'),
('pec8kpn2mu1kn5enemjk7o1248o6roi6', '__ci_last_regenerate|i:1497397862;', '::1', '1497398094'),
('b5f3nppo1lrg1r6oknbd5t9i17acverh', '__ci_last_regenerate|i:1497398163;', '::1', '1497398186'),
('qi1eoc90q2df319gma8lel2gdehq3j7r', '__ci_last_regenerate|i:1497398487;', '::1', '1497398752'),
('a89bl6rkk0r8g6iqsf1fh3ajvtdq6nqd', '__ci_last_regenerate|i:1497398883;', '::1', '1497398976'),
('09odrv8hv005da204m3cb6qvfb0ojgpn', '__ci_last_regenerate|i:1497399332;', '::1', '1497399624'),
('je933k5f8bejm4t22js3fh48i7luspb3', '__ci_last_regenerate|i:1497399683;', '::1', '1497399975'),
('j4st7mb0dt9p9kiho69tpbuhlq4gkajd', '__ci_last_regenerate|i:1497400011;', '::1', '1497400310'),
('n3fluognerlsiuu0v2v0njj6l8810uia', '__ci_last_regenerate|i:1497400335;', '::1', '1497400525'),
('0u459nnalgtppcukdvair3isek49vkf3', '__ci_last_regenerate|i:1497401215;', '::1', '1497401215'),
('io4p3m0br5viv1kf4ul4vjt96773be9m', '__ci_last_regenerate|i:1497401689;', '::1', '1497401737'),
('33mluj07ig0s1auf7vj55b5o18i5h98q', '__ci_last_regenerate|i:1497402018;', '::1', '1497402272'),
('p3trfde3o78lpjoctjhclg1fhi8b6ki6', '__ci_last_regenerate|i:1497402377;', '::1', '1497402671'),
('ehao36fivngn2bpoa7fhau1h74j0fbes', '__ci_last_regenerate|i:1497402736;', '::1', '1497402917'),
('ajdcqcie0usitn0sorfaj520skmhtuuc', '__ci_last_regenerate|i:1497403037;', '::1', '1497403332'),
('4q0r4i1r3ja24p7ipupjk5pdjck931dp', '__ci_last_regenerate|i:1497403427;', '::1', '1497403668'),
('tjcafnk69s534e8fcds6i381v3ghgn8r', '__ci_last_regenerate|i:1497403881;', '::1', '1497404053'),
('dl008cglfcs6jhjm2mk3hmtv85c6iut7', '__ci_last_regenerate|i:1497404264;', '::1', '1497404544'),
('vc4j4o9698dvc0u98gtrrdr41hirbisn', '__ci_last_regenerate|i:1497404636;', '::1', '1497404754'),
('hd0qd1i8fgb2h6ap5v73364i75pd40h5', '__ci_last_regenerate|i:1497405079;', '::1', '1497405258'),
('mdk9mdmk807q94cjinbo8drurdn2gb8d', '__ci_last_regenerate|i:1497405442;', '::1', '1497405712'),
('tdph4fe443si01lt6ptfaums7pqjmirt', '__ci_last_regenerate|i:1497405964;', '::1', '1497406257'),
('n0sk98istnsqpuv6tet3rip5ea857p00', '__ci_last_regenerate|i:1497406325;', '::1', '1497406620'),
('oo82omf4pnfrdbc3pgqr1sfoo67o736u', '__ci_last_regenerate|i:1497406663;', '::1', '1497406931'),
('hpee74vee6c7pt6g139qjb0m2s8v4c7m', '__ci_last_regenerate|i:1497407027;', '::1', '1497407297'),
('k5bkd108qjd0l55ujegps863sc1bimh1', '__ci_last_regenerate|i:1497407349;', '::1', '1497407571'),
('81o4854frvk1vg07d3spf3gg70hh8trp', '__ci_last_regenerate|i:1497407859;', '::1', '1497408104'),
('gmh8tv438btmocaafscfhf157t02ajtu', '__ci_last_regenerate|i:1497408184;', '::1', '1497408414'),
('a8uk1jobn5b71rod2qd4k4k6qfbad6uv', '__ci_last_regenerate|i:1497408569;', '::1', '1497408867'),
('fiqickv32o5fgjeaf0pj47cd70k1va64', '__ci_last_regenerate|i:1497408885;', '::1', '1497409182'),
('8443dq2cklpq90fsl49dgfg8n4qcfpe4', '__ci_last_regenerate|i:1497409213;', '::1', '1497409456'),
('gh4a9o73egdua1qiitvn0raiu9ttob0m', '__ci_last_regenerate|i:1497409526;', '::1', '1497409826'),
('pdat5d67v12p714ja846dh952niq905g', '__ci_last_regenerate|i:1497409904;', '::1', '1497410109'),
('5h9bte2pfg2pf26v7ko846l80t7ruovo', '__ci_last_regenerate|i:1497410277;', '::1', '1497410277'),
('ha7tnej6ejhiacden1i1fbarsa9m31of', '__ci_last_regenerate|i:1497410738;', '::1', '1497410948'),
('4odg42aso0ss5gts8cb1nftd49dlu54l', '__ci_last_regenerate|i:1497411110;', '::1', '1497411378'),
('f8mlqlj4f3s2dm6tqk2buig5jfo315ee', '__ci_last_regenerate|i:1497411423;', '::1', '1497411716'),
('trbmrc7ripjs64olb1jm24q4ue884i5k', '__ci_last_regenerate|i:1497411765;', '::1', '1497412064'),
('aem5cd5q3kki3e6mh3qocgrrfmh54j06', '__ci_last_regenerate|i:1497412088;', '::1', '1497412143'),
('j7fdk5nj9but2iu5k379hq5btvjm693a', '__ci_last_regenerate|i:1497412713;', '::1', '1497413008'),
('dv0k0khj2cavvn272gbr3vim8sig3c6b', '__ci_last_regenerate|i:1497413014;', '::1', '1497413258'),
('5kfej1hnev8u00hrh7bn3bfd4ocgoact', '__ci_last_regenerate|i:1497413316;', '::1', '1497413497'),
('1h6mr21gp4he9l2n7p7j3m7uqphik76v', '__ci_last_regenerate|i:1497413730;', '::1', '1497414030'),
('lqqi0lbhk52m1n8hr872dj10ptpthhaj', '__ci_last_regenerate|i:1497414059;', '::1', '1497414238'),
('0atvnd1katnmtefq6smdot1ljos7au8m', '__ci_last_regenerate|i:1497414593;', '::1', '1497414737'),
('ium7t1v582pdva9rmr2scspnnrv0cq0k', '__ci_last_regenerate|i:1497415444;', '::1', '1497415729'),
('s65ep42hch1jhin2rlcai23psc5hl92u', '__ci_last_regenerate|i:1497415748;', '::1', '1497416012'),
('g5no69harrg2p3gk6ovece16jv1orcbg', '__ci_last_regenerate|i:1497416144;', '::1', '1497416434'),
('l3b6vmpuj1q6vipcjcih07i11ed4o07r', '__ci_last_regenerate|i:1497416469;', '::1', '1497416769'),
('7ka2kkj17918djleigfbp842fo9mt3ld', '__ci_last_regenerate|i:1497416816;', '::1', '1497417073'),
('4dj178r99vf7pkjkam26ircnen08uq3h', '__ci_last_regenerate|i:1497417139;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497417354');
INSERT INTO `ci_session` (`id`, `data`, `ip_address`, `timestamp`) VALUES
('54kh3vglt3bjmuc8drp2apvdi7ro9u0g', '__ci_last_regenerate|i:1497417549;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497417737'),
('da4emooq6fthqpa838kfbjao69upen89', '__ci_last_regenerate|i:1497418282;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497418572'),
('c0kcva8hrqv733mkrksgjkn18gj467nt', '__ci_last_regenerate|i:1497418590;', '::1', '1497418899'),
('g7f1k9rh82au2sba04hf691sg4a4p6rq', '__ci_last_regenerate|i:1497418899;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497419174'),
('5uhiesmevtttnpkhkdqr75q7390dkj8c', '__ci_last_regenerate|i:1497419378;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497419650'),
('bh8ghc36qtliljl4n4uqk1ejamvqkqgp', '__ci_last_regenerate|i:1497419746;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497419871'),
('7b8i2l47cdf96poqahvh0125snm24jkk', '__ci_last_regenerate|i:1497420099;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497420356'),
('gvfn6nb4c8uq71rp8ktkruradm7tegn5', '__ci_last_regenerate|i:1497420446;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497420732'),
('do4qftnhds937mhekbvrcl59ri783di9', '__ci_last_regenerate|i:1497420778;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497421013'),
('tuahqp0csnb8r96diqmfrp1rc6ech6iq', '__ci_last_regenerate|i:1497421081;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497421345'),
('ptfomqsk1adfal0hdgnpg3cgh12bci6a', '__ci_last_regenerate|i:1497421394;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497421671'),
('lhtnvj1kqt8gokupsc76stopvnvu3lcj', '__ci_last_regenerate|i:1497421716;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497422005'),
('1tb072eh56nqtm0nq4ebd4jf6alv6hs5', '__ci_last_regenerate|i:1497423370;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497423610'),
('no47gskaae74bpl9s08h4rpfvcu8l5qo', '__ci_last_regenerate|i:1497834208;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497834848'),
('0cg0peldkt4ehbjvos2lgk64qmmk1rej', '__ci_last_regenerate|i:1497834848;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497834989'),
('pp9ki1frkbolnths3mus56no1fo6m7vf', '__ci_last_regenerate|i:1497835601;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497835899'),
('uibsodreja0ia2su7jacq77mk29siv4p', '__ci_last_regenerate|i:1497835918;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497836203'),
('6vmm0nm0p0mkfb0ubhuolk1tnfesregn', '__ci_last_regenerate|i:1497836290;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497836582'),
('93fbok75qi18fdfp5v9qjbjkd19o11ol', '__ci_last_regenerate|i:1497836705;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497836828'),
('13tg5op32olnt4lgd4b6trn2451l0q4v', '__ci_last_regenerate|i:1497837100;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497837122'),
('hk8g3svbpaobpuhhg48245p43e1q77bp', '__ci_last_regenerate|i:1497837422;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497837646'),
('u300h87qh8vtdseck8d4q3h94bm4a8qg', '__ci_last_regenerate|i:1497837760;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497838048'),
('5r0gj4ueic4k3ljnl9lne08ls5jbg09v', '__ci_last_regenerate|i:1497838153;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497838289'),
('9boqpkobtd3rkuun32c1g4780b9i55hb', '__ci_last_regenerate|i:1497840442;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497840739'),
('llc60a8dstb7l19olt3k0pq245t3osos', '__ci_last_regenerate|i:1497840766;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497840847'),
('vtk07nhqi0lnkdlb8chg7qpa1j6aggov', '__ci_last_regenerate|i:1497841499;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497841679'),
('gi48qouojm9ob9kesojl2upa1fn0pia2', '__ci_last_regenerate|i:1497842202;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497842263'),
('1ths89s4kn3rblv9pn9oh1rlu3lb74sl', '__ci_last_regenerate|i:1497842986;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497843355'),
('ha6lfl8uuepo86nbuvd28n02tptpkkh2', '__ci_last_regenerate|i:1497843583;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497843888'),
('83t19q23nue7fettikppk99q3gsm1bsm', '__ci_last_regenerate|i:1497843961;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497844123'),
('n3aqgs84rrjiv0k9efc622l7uk9ebn9s', '__ci_last_regenerate|i:1497844560;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497844863'),
('29vomopmm8ognuhuhh93ackcmcco65h8', '__ci_last_regenerate|i:1497844889;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497845105'),
('s880k8pf9obe9e05mruukvou6m695g0d', '__ci_last_regenerate|i:1497845254;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497845263'),
('uu0v1kdhgoquh1hpslkslpg0742ihl8d', '__ci_last_regenerate|i:1497845686;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497845838'),
('a1chhv2rc5qcbavtle03voq91t5hpfq4', '__ci_last_regenerate|i:1497846819;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497847057'),
('e9oqn04lcgtluti6e8e0v161o8mn7ia3', '__ci_last_regenerate|i:1497848106;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497848267'),
('66vsqiejkmrl1hdapm4pdub7tnc78jek', '__ci_last_regenerate|i:1497849009;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497849184'),
('smth3usqmtr4gnhdet0qvde3ovbrelh0', '__ci_last_regenerate|i:1497849328;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497849621'),
('apimvt4ejst6gqmsk4rqhk6g4onir6q2', '__ci_last_regenerate|i:1497849668;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497849949'),
('4m509d3bok5e21ienmne20q5kpr339ip', '__ci_last_regenerate|i:1497850087;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497850381'),
('sgd1e2tevark01ssu6jpdi1pgu0vi5bp', '__ci_last_regenerate|i:1497850464;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497850743'),
('l4hb2gb4m1t2m2130p8btgoo2abg7h32', '__ci_last_regenerate|i:1497850809;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497851081'),
('2rsornrikue2030kornil5i7jqr9cgct', '__ci_last_regenerate|i:1497851157;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497851459'),
('dmoftkno0tb5rql1cq4gkcu38qdha1cu', '__ci_last_regenerate|i:1497851482;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497851690'),
('ddnh0q303vvertjcdhh5jqplr099hop2', '__ci_last_regenerate|i:1497852770;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497853055'),
('8jbicbi6fak082ncli1torb84o171m7t', '__ci_last_regenerate|i:1497853106;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497853283'),
('oqqfk7nt73on935jsck27p2vstl6g524', '__ci_last_regenerate|i:1497853436;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497853577'),
('0a664f6arg5a1p443eaabvnmnn6er56d', '__ci_last_regenerate|i:1497853842;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497854068'),
('rjdjou18iddhn38hbnpveila8jlh0vi5', '__ci_last_regenerate|i:1497855170;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497855171'),
('ka04nrqqihhl7htqoa2a1nkksmt3u397', '__ci_last_regenerate|i:1497855833;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497856095'),
('78kebkant5kvt1japctdmettjbdfve4v', '__ci_last_regenerate|i:1497856530;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497856758'),
('bsb70b6ud5v4o7660tv3318ou13sfhmc', '__ci_last_regenerate|i:1497856956;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497857235'),
('s3rkjhnuf4q41ol5pvvkofbpt5h5ii1j', '__ci_last_regenerate|i:1497857518;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497857531'),
('t4dpvn4ge0as0vue10i41b7t3oerebkr', '__ci_last_regenerate|i:1497886516;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497886653'),
('i9cr0eempq5vb1rv2jai1bea31almgbi', '__ci_last_regenerate|i:1497886892;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497887138'),
('nth9357ssvgk7i1dh1a1u4dusuq4ngqq', '__ci_last_regenerate|i:1497887229;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497887417'),
('upv9kk1us3ekvvc7ffn34f8i1ianv8i7', '__ci_last_regenerate|i:1497887627;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497887873'),
('8jtn8dp7u41v6dts6p6flnk1qton3due', '__ci_last_regenerate|i:1497888068;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497888083'),
('v9svhiean52oboim8m9c3jei9j70n6lr', '__ci_last_regenerate|i:1497888504;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497888584'),
('u6njuu88qcm5e2omrkji3ngodfts60iu', '__ci_last_regenerate|i:1497889134;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497889409'),
('plukcdsh0ano943n4thscst931iuj60e', '__ci_last_regenerate|i:1497889478;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497889748'),
('7lrgmgbhlm97baqrpad9tpd0o841jemj', '__ci_last_regenerate|i:1497889998;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497889999'),
('u01vsask6bn6mc85u4srf6j9bp8neh1v', '__ci_last_regenerate|i:1497890459;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497890523'),
('n85c2blsgkcmqc8gvnsp14lha2d6i5go', '__ci_last_regenerate|i:1497926994;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497927289'),
('hfcrko5428egscopic9raej2t47tjslu', '__ci_last_regenerate|i:1497927402;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497927546'),
('76c8vcdol2ntqqtlu102ajbg9it83d5g', '__ci_last_regenerate|i:1497927872;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497928025'),
('07dg5u0auu1lrc84fdrmvv3fg0g62c6l', '__ci_last_regenerate|i:1497937434;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497937725'),
('e20h5dbee3enc80rrrjuju7gae9aqf7a', '__ci_last_regenerate|i:1497937742;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497937918'),
('o0q8qf23h65do3kiia5155gfhosbgiqs', '__ci_last_regenerate|i:1497938116;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497938395'),
('ncgu8tis68u7ghbir13kjh4lg3irdim3', '__ci_last_regenerate|i:1497938768;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497939069'),
('a7r2oojlm21elgsdrs0edj16h7108m93', '__ci_last_regenerate|i:1497939086;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497939227'),
('buln3imaqr49fma3pfnr0im22cpoq9e5', '__ci_last_regenerate|i:1497940181;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497940463'),
('uuqmg0kl88us0bn5pg9lj77ni055smaq', '__ci_last_regenerate|i:1497940491;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497940761'),
('qh8rpkuca8do4sipl1rpo8r7kjfgfck2', '__ci_last_regenerate|i:1497940945;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497941236'),
('p3t3c89alfel2smk1rqqcmrodrrf3g48', '__ci_last_regenerate|i:1497941264;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497941560'),
('i0susq715c6j4lgevpof3tbgn9qjomht', '__ci_last_regenerate|i:1497942021;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497942313'),
('fo7l78k4sk7f7ulbj4hqao2d22njfoq3', '__ci_last_regenerate|i:1497942324;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497942493'),
('08pbns8j7sugncupklledngqv5gdujl8', '__ci_last_regenerate|i:1497943903;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497944206'),
('l7rinrsv2db31lbgk3quk6hpotdr6kah', '__ci_last_regenerate|i:1497944206;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497944466'),
('ngr4n3mfnrmc6r8p42ol31jbs8b87kq6', '__ci_last_regenerate|i:1497944557;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497944650'),
('svqpk72nf16a178rus9u4qg8ka27n6e9', '__ci_last_regenerate|i:1497944888;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497945181'),
('isbqhtla9diqjhftmrvonnl4p8tn9mer', '__ci_last_regenerate|i:1497945535;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497945793'),
('ejdrhrf2sv3e98l3a2qpn1qg494a858j', '__ci_last_regenerate|i:1497945859;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497945859'),
('nr6u3jb6lsmv2uhdruulpfruf69imejr', '__ci_last_regenerate|i:1497961186;', '::1', '1497961246'),
('i43crfp6f4cpk59fsqda0iuen2phg9lu', '__ci_last_regenerate|i:1497961536;', '::1', '1497961827'),
('2khbbuabbr08ba6kua8opjtjmvajode7', '__ci_last_regenerate|i:1497961854;', '::1', '1497962121'),
('aclik1jje5bakhesumhcsrupacl807mm', '__ci_last_regenerate|i:1497962170;LoggedUser|a:5:{s:6:"UserID";s:2:"40";s:9:"FirstName";s:6:"User 1";s:12:"EmailAddress";s:21:"user1hucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"2";}', '::1', '1497962466'),
('29508kokqr2vobl131pds4hv07oseti6', '__ci_last_regenerate|i:1497962477;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497962775'),
('b9aqpnef69rljjnit59h7kqvbb3knjgm', '__ci_last_regenerate|i:1497962795;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497963061'),
('phvq96mpq52j1h0ui66rrk08ke8ufo8n', '__ci_last_regenerate|i:1497963113;LoggedUser|a:5:{s:6:"UserID";s:1:"1";s:9:"FirstName";s:13:"Administrator";s:12:"EmailAddress";s:18:"suhucp@ruhaizat.my";s:4:"Type";s:1:"1";s:5:"Group";s:1:"1";}', '::1', '1497963249');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listing`
--

CREATE TABLE IF NOT EXISTS `tbl_listing` (
  `ID` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Brand` varchar(255) DEFAULT NULL,
  `body_style` varchar(255) DEFAULT NULL,
  `Model` varchar(255) NOT NULL,
  `ManufacturingYear` varchar(255) NOT NULL,
  `Transmission` varchar(255) NOT NULL,
  `Specification` varchar(255) NOT NULL,
  `Condition` varchar(255) DEFAULT NULL,
  `Mileage` varchar(255) NOT NULL,
  `SellingPrice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `State` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Description` text NOT NULL,
  `en_cc` varchar(255) DEFAULT NULL,
  `gn_seat_capacity` varchar(255) DEFAULT NULL,
  `Colour` varchar(255) NOT NULL,
  `gn_doors` varchar(255) DEFAULT NULL,
  `gn_assembled` varchar(255) DEFAULT NULL,
  `tm_final_drive_ratio` varchar(255) DEFAULT NULL,
  `tm_gears` varchar(255) DEFAULT NULL,
  `en_stroke` varchar(255) DEFAULT NULL,
  `en_peak_power` varchar(255) DEFAULT NULL,
  `en_engine_type` varchar(255) DEFAULT NULL,
  `en_aspiration` varchar(255) DEFAULT NULL,
  `en_bore` varchar(255) DEFAULT NULL,
  `en_compression_ratio` varchar(255) DEFAULT NULL,
  `en_peak_torque` varchar(255) DEFAULT NULL,
  `en_direct_injection` varchar(255) DEFAULT NULL,
  `en_fuel_type` varchar(255) DEFAULT NULL,
  `dm_length` varchar(255) DEFAULT NULL,
  `dm_height` varchar(255) DEFAULT NULL,
  `dm_width` varchar(255) DEFAULT NULL,
  `dm_wheel_base` varchar(255) DEFAULT NULL,
  `dm_front_thread` varchar(255) DEFAULT NULL,
  `dm_rear_thread` varchar(255) DEFAULT NULL,
  `dm_fuel_tank` varchar(255) DEFAULT NULL,
  `br_front` varchar(255) DEFAULT NULL,
  `br_rear` varchar(255) DEFAULT NULL,
  `sus_front` varchar(255) DEFAULT NULL,
  `sus_rear` varchar(255) DEFAULT NULL,
  `tw_front` varchar(255) DEFAULT NULL,
  `tw_rear` varchar(255) DEFAULT NULL,
  `tw_front_rim` varchar(255) DEFAULT NULL,
  `tw_rear_rim` varchar(255) DEFAULT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `AddedOn` datetime NOT NULL,
  `AddedBy` int(11) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `IsFeatured` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_listing`
--

INSERT INTO `tbl_listing` (`ID`, `Status`, `Brand`, `body_style`, `Model`, `ManufacturingYear`, `Transmission`, `Specification`, `Condition`, `Mileage`, `SellingPrice`, `State`, `Address`, `Description`, `en_cc`, `gn_seat_capacity`, `Colour`, `gn_doors`, `gn_assembled`, `tm_final_drive_ratio`, `tm_gears`, `en_stroke`, `en_peak_power`, `en_engine_type`, `en_aspiration`, `en_bore`, `en_compression_ratio`, `en_peak_torque`, `en_direct_injection`, `en_fuel_type`, `dm_length`, `dm_height`, `dm_width`, `dm_wheel_base`, `dm_front_thread`, `dm_rear_thread`, `dm_fuel_tank`, `br_front`, `br_rear`, `sus_front`, `sus_rear`, `tw_front`, `tw_rear`, `tw_front_rim`, `tw_rear_rim`, `Latitude`, `Longitude`, `AddedOn`, `AddedBy`, `ModifiedOn`, `ModifiedBy`, `IsFeatured`) VALUES
(17, 0, 'Hyundai', 'Sedan', 'Accent', '2006', 'Automatic', 'RX-S', NULL, '', '56200.00', 2, 'Bandar Utama Petaling Jaya Selangor Malaysia', 'testing new form', '1495', '5', '', '4', 'Locally Built', '3.656', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '3.1467185', '101.61190729999998', '2017-06-19 08:13:36', 1, '2017-06-20 08:36:59', 1, 0),
(19, 0, 'Hyundai', 'Sedan', 'Azera', '2006', 'Automatic', 'GLS', NULL, '', '11111.00', 13, 'Bachok Kelantan Malaysia', 'testingf', '3342', '5', '', '4', 'Official Import', '', '5', '83.8', '235', 'Piston', 'Aspirated', '92', '', '304', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4895', '1490', '1865', '2780', '1580', '1565', '75', 'Ventilated Discs', 'Discs', 'Double Wishbone', 'Multiple links', '225/55 R16', '225/55 R16', '16', '16', '6.0476558', '102.39447799999994', '2017-06-20 07:49:02', 1, '0000-00-00 00:00:00', 0, 0),
(20, 1, 'Hyundai', 'Sedan', 'Accent', '1995', 'Automatic', 'GLS', NULL, '', '111.00', 11, 'Kuala Terengganu Terengganu Malaysia', '9876543210', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5.329624', '103.13701420000007', '2017-06-20 07:51:57', 40, '2017-06-20 09:03:24', 1, 1),
(21, 1, 'Hyundai', 'Sedan', 'Accent', '2007', 'Manual', 'RX-S', NULL, '', '44444.00', 7, 'Negeri Sembilan Craft Complex Bandar Seremban Seremban Negeri Sembilan Malaysia', 'yuhuuu', '1495', '5', '', '4', 'Locally Built', '3.842', '5', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '2440', '1435', '1425', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13', '2.725251000000001', '101.94118500000002', '2017-06-20 08:46:42', 40, '2017-06-20 09:05:31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listingimage`
--

CREATE TABLE IF NOT EXISTS `tbl_listingimage` (
  `ID` int(11) NOT NULL,
  `ListingPic` varchar(255) NOT NULL,
  `ListingID` int(11) NOT NULL,
  `AddedOn` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_listingimage`
--

INSERT INTO `tbl_listingimage` (`ID`, `ListingPic`, `ListingID`, `AddedOn`) VALUES
(24, '3.png', 17, '2017-06-20 05:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recentlyviewed`
--

CREATE TABLE IF NOT EXISTS `tbl_recentlyviewed` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ListingID` int(11) NOT NULL,
  `IPAddress` varchar(50) NOT NULL,
  `ViewedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specificationmaster`
--

CREATE TABLE IF NOT EXISTS `tbl_specificationmaster` (
  `ID` int(11) NOT NULL,
  `car_brand` varchar(255) DEFAULT NULL,
  `gs_model` varchar(255) DEFAULT NULL,
  `gs_manu_year` varchar(255) DEFAULT NULL,
  `tm_transmission` varchar(255) DEFAULT NULL,
  `en_capacity` varchar(255) DEFAULT NULL,
  `gs_variant` varchar(255) DEFAULT NULL,
  `body_style` varchar(255) DEFAULT NULL,
  `tm_final_drive_ratio` varchar(255) DEFAULT NULL,
  `tm_gears` varchar(255) DEFAULT NULL,
  `gn_doors` varchar(255) DEFAULT NULL,
  `gn_assembled` varchar(255) DEFAULT NULL,
  `gn_seat_capacity` varchar(255) DEFAULT NULL,
  `en_cc` varchar(255) DEFAULT NULL,
  `en_stroke` varchar(255) DEFAULT NULL,
  `en_peak_power` varchar(255) DEFAULT NULL,
  `en_engine_type` varchar(255) DEFAULT NULL,
  `en_aspiration` varchar(255) DEFAULT NULL,
  `en_bore` varchar(255) DEFAULT NULL,
  `en_compression_ratio` varchar(255) DEFAULT NULL,
  `en_peak_torque` varchar(255) DEFAULT NULL,
  `en_direct_injection` varchar(255) DEFAULT NULL,
  `en_fuel_type` varchar(255) DEFAULT NULL,
  `dm_length` varchar(255) DEFAULT NULL,
  `dm_height` varchar(255) DEFAULT NULL,
  `dm_width` varchar(255) DEFAULT NULL,
  `dm_kerb_weight` varchar(255) DEFAULT NULL,
  `dm_front_thread` varchar(255) DEFAULT NULL,
  `dm_rear_thread` varchar(255) DEFAULT NULL,
  `dm_wheel_base` varchar(255) DEFAULT NULL,
  `dm_fuel_tank` varchar(255) DEFAULT NULL,
  `br_front` varchar(255) DEFAULT NULL,
  `br_rear` varchar(255) DEFAULT NULL,
  `sus_front` varchar(255) DEFAULT NULL,
  `sus_rear` varchar(255) DEFAULT NULL,
  `tw_front` varchar(255) DEFAULT NULL,
  `tw_rear` varchar(255) DEFAULT NULL,
  `tw_front_rim` varchar(255) DEFAULT NULL,
  `tw_rear_rim` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=443 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_specificationmaster`
--

INSERT INTO `tbl_specificationmaster` (`ID`, `car_brand`, `gs_model`, `gs_manu_year`, `tm_transmission`, `en_capacity`, `gs_variant`, `body_style`, `tm_final_drive_ratio`, `tm_gears`, `gn_doors`, `gn_assembled`, `gn_seat_capacity`, `en_cc`, `en_stroke`, `en_peak_power`, `en_engine_type`, `en_aspiration`, `en_bore`, `en_compression_ratio`, `en_peak_torque`, `en_direct_injection`, `en_fuel_type`, `dm_length`, `dm_height`, `dm_width`, `dm_kerb_weight`, `dm_front_thread`, `dm_rear_thread`, `dm_wheel_base`, `dm_fuel_tank`, `br_front`, `br_rear`, `sus_front`, `sus_rear`, `tw_front`, `tw_rear`, `tw_front_rim`, `tw_rear_rim`) VALUES
(1, 'Hyundai', 'Accent', '1995', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Hyundai', 'Accent', '1995', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Hyundai', 'Accent', '1996', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Hyundai', 'Accent', '1996', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Hyundai', 'Accent', '1997', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Hyundai', 'Accent', '1997', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'Hyundai', 'Accent', '1998', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'Hyundai', 'Accent', '1998', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Hyundai', 'Accent', '1999', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Hyundai', 'Accent', '1999', 'Manual', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'Hyundai', 'Accent', '2000', 'Automatic', '1.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Hyundai', 'Accent', '2003', 'Automatic', '1.5', 'L', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Hyundai', 'Accent', '2003', 'Manual', '1.5', 'L', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Hyundai', 'Accent', '2004', 'Automatic', '1.5', 'L', 'Sedan', '4.443', '4', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(15, 'Hyundai', 'Accent', '2004', 'Manual', '1.5', 'L', 'Sedan', '4.443', '5', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(16, 'Hyundai', 'Accent', '2005', 'Automatic', '1.5', 'L', 'Sedan', '4.443', '4', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(17, 'Hyundai', 'Accent', '2005', 'Automatic', '1.5', 'RX-S', 'Sedan', '3.656', '4', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(18, 'Hyundai', 'Accent', '2005', 'Manual', '1.5', 'L', 'Sedan', '4.443', '5', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(19, 'Hyundai', 'Accent', '2005', 'Manual', '1.5', 'RX-S', 'Sedan', '3.842', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(20, 'Hyundai', 'Accent', '2006', 'Automatic', '1.5', 'L', 'Sedan', '4.443', '4', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1670', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(21, 'Hyundai', 'Accent', '2006', 'Automatic', '1.5', 'RX-S', 'Sedan', '3.656', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(22, 'Hyundai', 'Accent', '2006', 'Manual', '1.5', 'L', 'Sedan', '', '5', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1670', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(23, 'Hyundai', 'Accent', '2006', 'Manual', '1.5', 'RX-S', 'Sedan', '3.842', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1670', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(24, 'Hyundai', 'Accent', '2007', 'Automatic', '1.5', 'L', 'Sedan', '4.443', '4', '4', 'Official Import', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '1000', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(25, 'Hyundai', 'Accent', '2007', 'Automatic', '1.5', 'RX-S', 'Sedan', '3.656', '4', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(26, 'Hyundai', 'Accent', '2007', 'Automatic', '1.6', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Leaded', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '195', '195', '', ''),
(27, 'Hyundai', 'Accent', '2007', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1133', '1485', '1475', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(28, 'Hyundai', 'Accent', '2007', 'Manual', '1.5', 'L', 'Sedan', '', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '133', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4200', '1395', '1670', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(29, 'Hyundai', 'Accent', '2007', 'Manual', '1.5', 'RX-S', 'Sedan', '3.842', '5', '4', 'Locally Built', '5', '1495', '83.5', '91', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4260', '1395', '1675', '', '1435', '1425', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '155/80 R13', '155/80 R13', '13', '13'),
(30, 'Hyundai', 'Accent', '2008', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1133', '1485', '1475', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(31, 'Hyundai', 'Accent', '2008', 'Automatic', '1.6', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '195', '195', '', ''),
(32, 'Hyundai', 'Accent', '2009', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1133', '1485', '1475', '2440', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(33, 'Hyundai', 'Accent', '2009', 'Automatic', '1.6', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Leaded', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', '', '195', '195', '', ''),
(34, 'Hyundai', 'Accent', '2010', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '125', 'Multi-Point Injected', 'Petrol - Leaded', '4280', '1470', '1695', '1133', '1485', '1475', '2500', '45', '', '', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(35, 'Hyundai', 'Accent', '2010', 'Automatic', '1.6', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '195', '195', '', ''),
(36, 'Hyundai', 'Accent', '2011', 'Manual', '1.4', '', 'Sedan', '', '5', '4', 'Official Import', '5', '1399', '78.1', '95', 'Piston', 'Aspirated', '75.5', '10', '125', 'Multi-Point Injected', 'Petrol - Leaded', '4280', '1470', '1695', '1133', '1485', '1475', '2500', '45', '', '', 'Macpherson Strut', 'Coil Spring', '', '', '14', '14'),
(37, 'Hyundai', 'Accent', '2011', 'Automatic', '1.6', 'Premium', 'Sedan', '', '4', '4', 'Official Import', '5', '1599', '87', '111', 'Piston', 'Aspirated', '76.5', '10', '145', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4280', '1470', '1695', '1155', '1485', '1475', '2500', '45', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Multiple links', '195', '195', '', ''),
(38, 'Hyundai', 'Atos', '1999', 'Manual', '1', 'GL', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '810', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(39, 'Hyundai', 'Atos', '1999', 'Automatic', '1', 'GL', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '810', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(40, 'Hyundai', 'Atos', '1999', 'Automatic', '1', 'GLS', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'Hyundai', 'Atos', '2000', 'Manual', '1', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'Hyundai', 'Atos', '2000', 'Automatic', '1', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'Hyundai', 'Atos', '2000', 'Automatic', '1', 'GLS', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'Hyundai', 'Atos', '2001', 'Manual', '1', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'Hyundai', 'Atos', '2001', 'Automatic', '1', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'Hyundai', 'Atos', '2001', 'Automatic', '1', 'GLS', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'Hyundai', 'Atos', '2002', 'Manual', '1', 'GL', 'Hatchback', '4.529', '5', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '797', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(48, 'Hyundai', 'Atos', '2002', 'Automatic', '1', 'GL', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '810', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(49, 'Hyundai', 'Atos', '2002', 'Automatic', '1', 'GLS', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '817', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(50, 'Hyundai', 'Atos', '2003', 'Manual', '1', 'GL', 'Hatchback', '4.529', '5', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '797', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(51, 'Hyundai', 'Atos', '2003', 'Automatic', '1', 'GL', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '810', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(52, 'Hyundai', 'Atos', '2003', 'Automatic', '1', 'GLS', 'Hatchback', '4.03', '3', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '817', '1315', '1300', '2380', '35', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '155/70 R13', '155/70 R13', '13', '13'),
(53, 'Hyundai', 'Atos', '2004', 'Manual', '1', 'GL', 'Hatchback', '4.222', '5', '5', 'Locally Built', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '', '1615', '1495', '845', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(54, 'Hyundai', 'Atos', '2004', 'Automatic', '1', 'GL', 'Hatchback', '4.017', '4', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '858', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(55, 'Hyundai', 'Atos', '2004', 'Automatic', '1', 'GLS', 'Hatchback', '4.017', '4', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '858', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(56, 'Hyundai', 'Atos', '2005', 'Manual', '1', 'GL', 'Hatchback', '4.222', '5', '5', 'Locally Built', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '', '1615', '1495', '845', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(57, 'Hyundai', 'Atos', '2005', 'Automatic', '1', 'GL', 'Hatchback', '4.017', '4', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '858', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(58, 'Hyundai', 'Atos', '2005', 'Automatic', '1', 'GLS', 'Hatchback', '4.017', '4', '5', 'Official Import', '5', '999', '73', '54', 'Piston', 'Aspirated', '66', '9.5', '82', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '3495', '1615', '1495', '858', '1315', '1300', '2380', '36', 'Ventilated Discs', 'Drums', 'Macpherson Strut', 'Torsion Beam', '175/60R13', '175/60R13', '13', '13'),
(59, 'Hyundai', 'Atos', '2008', 'Automatic', '1.1', 'GLS', 'Hatchback', '', '', '', '', '', '1100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'Hyundai', 'Avante', '2008', 'Automatic', '2', '', 'Sedan', '', '', '4', '', '', '1998', '', '', '', '', '', '', '', '', 'Petrol - Unleaded (ULP)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 'Hyundai', 'Avante', '2009', 'Automatic', '2', 'X20', 'Sedan', '', '4', '4', 'Locally Built', '4', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4505', '1490', '1775', '', '1529', '1527', '2650', '53', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '205/55 R16', '205/55 R16', '16', '16'),
(62, 'Hyundai', 'Avante', '2010', 'Automatic', '2', 'X20', 'Sedan', '', '4', '4', 'Locally Built', '4', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4505', '1490', '1775', '', '1529', '1527', '2650', '53', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '205/55 R16', '205/55 R16', '16', '16'),
(63, 'Hyundai', 'Azera', '2006', 'Automatic', '3.3', 'GLS', 'Sedan', '', '5', '4', 'Official Import', '5', '3342', '83.8', '235', 'Piston', 'Aspirated', '92', '', '304', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4895', '1490', '1865', '', '1580', '1565', '2780', '75', 'Ventilated Discs', 'Discs', 'Double Wishbone', 'Multiple links', '225/55 R16', '225/55 R16', '16', '16'),
(64, 'Hyundai', 'Azera', '2007', 'Automatic', '3.3', 'GLS', 'Sedan', '', '5', '4', 'Official Import', '5', '3342', '83.8', '235', 'Piston', 'Aspirated', '92', '', '304', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4895', '1490', '1865', '', '1580', '1565', '2780', '75', 'Ventilated Discs', 'Discs', 'Double Wishbone', 'Multiple links', '225/55 R16', '225/55 R16', '16', '16'),
(65, 'Hyundai', 'Coupe', '1996', 'Manual', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(66, 'Hyundai', 'Coupe', '1996', 'Automatic', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(67, 'Hyundai', 'Coupe', '1997', 'Manual', '1.8', '', 'Coupe', '', '5', '2', 'Official Import', '4', '1795', '', '128', 'Piston', 'Aspirated', '', '', '161', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4338', '1313', '1730', '', '', '', '2475', '', 'Ventilated Discs', 'Discs', '', '', '', '', '', ''),
(68, 'Hyundai', 'Coupe', '1997', 'Automatic', '1.8', '', 'Coupe', '', '4', '2', 'Official Import', '4', '1795', '', '128', 'Piston', 'Aspirated', '', '', '161', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4338', '1313', '1730', '', '', '', '2475', '', 'Ventilated Discs', 'Discs', '', '', '', '', '', ''),
(69, 'Hyundai', 'Coupe', '1998', 'Manual', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(70, 'Hyundai', 'Coupe', '1998', 'Automatic', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 'Hyundai', 'Coupe', '1999', 'Automatic', '1.6', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(72, 'Hyundai', 'Coupe', '1999', 'Automatic', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, 'Hyundai', 'Coupe', '1999', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 'Hyundai', 'Coupe', '2000', 'Automatic', '1.8', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 'Hyundai', 'Coupe', '2000', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 'Hyundai', 'Coupe', '2001', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 'Hyundai', 'Coupe', '2002', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'Hyundai', 'Coupe', '2003', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 'Hyundai', 'Coupe', '2004', 'Manual', '2.7', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'Hyundai', 'Coupe', '2004', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 'Hyundai', 'Coupe', '2005', 'Manual', '2.7', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 'Hyundai', 'Coupe', '2005', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 'Hyundai', 'Coupe', '2006', 'Manual', '2.7', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'Hyundai', 'Coupe', '2006', 'Automatic', '2', '', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 'Hyundai', 'Coupe', '2007', 'Automatic', '2', 'GLS', 'Coupe', '', '4', '2', 'Official Import', '', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4395', '1330', '1760', '', '1490', '1490', '2530', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Coil Spring', '205/55 R16', '205/55 R16', '16', '16'),
(86, 'Hyundai', 'Coupe', '2008', 'Automatic', '2', 'GLS', 'Coupe', '', '4', '2', 'Official Import', '', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4395', '1330', '1760', '', '1490', '1490', '2530', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Coil Spring', '205/55 R16', '205/55 R16', '16', '16'),
(87, 'Hyundai', 'Coupe', '2009', 'Automatic', '2', 'GLS', 'Coupe', '', '4', '2', 'Official Import', '', '1975', '93.5', '143', 'Piston', 'Aspirated', '82', '10.1', '186', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4395', '1330', '1760', '', '1490', '1490', '2530', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Coil Spring', '205/55 R16', '205/55 R16', '16', '16'),
(88, 'Hyundai', 'Elantra', '1992', 'Manual', '1.5', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 'Hyundai', 'Elantra', '1992', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 'Hyundai', 'Elantra', '1992', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 'Hyundai', 'Elantra', '1993', 'Manual', '1.5', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 'Hyundai', 'Elantra', '1993', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 'Hyundai', 'Elantra', '1993', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 'Hyundai', 'Elantra', '1994', 'Manual', '1.5', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 'Hyundai', 'Elantra', '1994', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 'Hyundai', 'Elantra', '1994', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 'Hyundai', 'Elantra', '1995', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 'Hyundai', 'Elantra', '1995', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 'Hyundai', 'Elantra', '1996', 'Manual', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 'Hyundai', 'Elantra', '1996', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 'Hyundai', 'Elantra', '1997', 'Manual', '1.6', 'GLS', 'Sedan', '', '5', '4', 'Official Import', '5', '1593', '', '', 'Piston', 'Aspirated', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ventilated Discs', 'Discs', '', '', '', '', '', ''),
(102, 'Hyundai', 'Elantra', '1997', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, 'Hyundai', 'Elantra', '2001', 'Automatic', '1.8', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1795', '', '132', 'Piston', 'Aspirated', '', '', '165', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4495', '1425', '1720', '', '', '', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '', ''),
(104, 'Hyundai', 'Elantra', '2002', 'Automatic', '1.8', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1795', '', '132', 'Piston', 'Aspirated', '', '', '165', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4495', '1425', '1720', '', '', '', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '', ''),
(105, 'Hyundai', 'Elantra', '2003', 'Automatic', '1.8', '', 'Sedan', '', '4', '4', 'Official Import', '5', '1795', '', '132', 'Piston', 'Aspirated', '', '', '165', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4495', '1425', '1720', '', '', '', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '', ''),
(106, 'Hyundai', 'Elantra', '2004', 'Automatic', '1.6', '', 'Sedan', '4.041', '4', '4', 'Official Import', '5', '1599', '87', '105', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '915', '1000', '2610', '45', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(107, 'Hyundai', 'Elantra', '2004', 'Automatic', '1.8', '', 'Sedan', '3.77', '4', '4', 'Official Import', '5', '1795', '85', '122', 'Piston', 'Aspirated', '82', '10.1', '161', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '915', '1000', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(108, 'Hyundai', 'Elantra', '2005', 'Automatic', '1.6', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(109, 'Hyundai', 'Elantra', '2005', 'Automatic', '1.6', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(110, 'Hyundai', 'Elantra', '2005', 'Automatic', '1.8', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(111, 'Hyundai', 'Elantra', '2005', 'Automatic', '1.8', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(112, 'Hyundai', 'Elantra', '2006', 'Automatic', '1.6', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(113, 'Hyundai', 'Elantra', '2006', 'Automatic', '1.6', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(114, 'Hyundai', 'Elantra', '2006', 'Automatic', '1.8', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(115, 'Hyundai', 'Elantra', '2006', 'Automatic', '1.8', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(116, 'Hyundai', 'Elantra', '2007', 'Automatic', '1.8', 'GL', 'Sedan', '4.041', '4', '4', 'Locally Built', '5', '1599', '87', '103', 'Piston', 'Aspirated', '76.5', '10.1', '143', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '14', '14'),
(117, 'Hyundai', 'Elantra', '2007', 'Automatic', '1.8', 'GLS', 'Sedan', '3.77', '4', '4', 'Locally Built', '5', '1795', '85', '132', 'Piston', 'Aspirated', '82', '10.1', '168', 'Multi-Point Injected', 'Petrol - Unleaded (ULP)', '4525', '1425', '1720', '', '1485', '1475', '2610', '55', 'Ventilated Discs', 'Discs', 'Macpherson Strut', 'Multiple links', '', '', '15', '15'),
(118, 'Hyundai', 'Elantra', '2008', 'Automatic', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(119, 'Hyundai', 'Elantra', '2008', 'Automatic', '1.8', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(120, 'Hyundai', 'Elantra', '2008', 'Automatic', '2', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(121, 'Hyundai', 'Elantra', '2008', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(122, 'Hyundai', 'Elantra', '2009', 'Automatic', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(123, 'Hyundai', 'Elantra', '2009', 'Automatic', '1.8', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(124, 'Hyundai', 'Elantra', '2009', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(125, 'Hyundai', 'Elantra', '2010', 'Automatic', '1.6', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(126, 'Hyundai', 'Elantra', '2011', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(127, 'Hyundai', 'Elantra', '2012', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(128, 'Hyundai', 'Elantra', '2012', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(129, 'Hyundai', 'Elantra', '2012', 'Manual', '1.6', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(130, 'Hyundai', 'Elantra', '2013', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(131, 'Hyundai', 'Elantra', '2013', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(132, 'Hyundai', 'Elantra', '2013', 'Manual', '1.6', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(133, 'Hyundai', 'Elantra', '2014', 'Automatic', '1.6', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(134, 'Hyundai', 'Elantra', '2014', 'Automatic', '1.6', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(135, 'Hyundai', 'Elantra', '2014', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(136, 'Hyundai', 'Elantra', '2014', 'Automatic', '1.8', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(137, 'Hyundai', 'Elantra', '2014', 'Manual', '1.6', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(138, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.6', 'EX', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(139, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.6', 'EX Plus', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(140, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.6', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(141, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.6', 'EX Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(142, 'Hyundai', 'Elantra', '2015', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(143, 'Hyundai', 'Elantra', '2016', 'Automatic', '1.6', 'EX', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(144, 'Hyundai', 'Elantra', '2016', 'Automatic', '1.6', 'EX Plus', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(145, 'Hyundai', 'Elantra', '2016', 'Automatic', '1.6', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(146, 'Hyundai', 'Elantra', '2016', 'Automatic', '1.8', 'Premium', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(147, 'Hyundai', 'Elantra', '2017', 'Automatic', '1.6', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(148, 'Hyundai', 'Elantra', '2017', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(149, 'Hyundai', 'Elantra', '2017', 'Automatic', '2', 'Dynamic', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(150, 'Hyundai', 'Genesis', '2015', 'Automatic', '3.8', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(151, 'Hyundai', 'Genesis', '2016', 'Automatic', '3.8', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(152, 'Hyundai', 'Genesis', '2017', 'Automatic', '3.8', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(153, 'Hyundai', 'Getz', '2003', 'Automatic', '1.3', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(154, 'Hyundai', 'Getz', '2003', 'Automatic', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(155, 'Hyundai', 'Getz', '2004', 'Automatic', '1.3', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(156, 'Hyundai', 'Getz', '2004', 'Automatic', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(157, 'Hyundai', 'Getz', '2005', 'Automatic', '1.1', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(158, 'Hyundai', 'Getz', '2005', 'Automatic', '1.3', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(159, 'Hyundai', 'Getz', '2005', 'Automatic', '1.4', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(160, 'Hyundai', 'Getz', '2005', 'Automatic', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(161, 'Hyundai', 'Getz', '2005', 'Manual', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(162, 'Hyundai', 'Getz', '2006', 'Automatic', '1.3', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(163, 'Hyundai', 'Getz', '2006', 'Automatic', '1.4', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(164, 'Hyundai', 'Getz', '2006', 'Automatic', '1.6', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(165, 'Hyundai', 'Getz', '2006', 'Manual', '1.4', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(166, 'Hyundai', 'Getz', '2007', 'Automatic', '1.4', 'GL', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(167, 'Hyundai', 'Getz', '2007', 'Manual', '1.4', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(168, 'Hyundai', 'Getz', '2008', 'Automatic', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(169, 'Hyundai', 'Getz', '2008', 'Manual', '1.4', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(170, 'Hyundai', 'Getz', '2009', 'Automatic', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(171, 'Hyundai', 'Getz', '2009', 'Manual', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(172, 'Hyundai', 'Getz', '2010', 'Automatic', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(173, 'Hyundai', 'Getz', '2010', 'Manual', '1.4', 'SE', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(174, 'Hyundai', 'Grand Starex', '2008', 'Automatic', '2.5', 'VGT', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(175, 'Hyundai', 'Grand Starex', '2008', 'Manual', '2.5', '', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(176, 'Hyundai', 'Grand Starex', '2009', 'Automatic', '2.5', 'VGT', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(177, 'Hyundai', 'Grand Starex', '2009', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(178, 'Hyundai', 'Grand Starex', '2010', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(179, 'Hyundai', 'Grand Starex', '2011', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(180, 'Hyundai', 'Grand Starex', '2012', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(181, 'Hyundai', 'Grand Starex', '2013', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(182, 'Hyundai', 'Grand Starex', '2014', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(183, 'Hyundai', 'Grand Starex', '2015', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(184, 'Hyundai', 'Grand Starex', '2016', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(185, 'Hyundai', 'Grand Starex', '2017', 'Automatic', '2.5', 'Royale', 'Van', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(186, 'Hyundai', 'Granduer XG250', '2003', 'Automatic', '2.5', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(187, 'Hyundai', 'Granduer XG250', '2004', 'Automatic', '2.5', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(188, 'Hyundai', 'i10', '2008', 'Automatic', '1.1', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(189, 'Hyundai', 'i10', '2009', 'Automatic', '1.1', 'Inspired', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(190, 'Hyundai', 'i10', '2009', 'Manual', '1.1', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(191, 'Hyundai', 'i10', '2010', 'Automatic', '1.1', 'Inspired', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(192, 'Hyundai', 'i10', '2010', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(193, 'Hyundai', 'i10', '2011', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194, 'Hyundai', 'i10', '2011', 'Automatic', '1.1', 'Inspired', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(195, 'Hyundai', 'i10', '2011', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(196, 'Hyundai', 'i10', '2012', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `tbl_specificationmaster` (`ID`, `car_brand`, `gs_model`, `gs_manu_year`, `tm_transmission`, `en_capacity`, `gs_variant`, `body_style`, `tm_final_drive_ratio`, `tm_gears`, `gn_doors`, `gn_assembled`, `gn_seat_capacity`, `en_cc`, `en_stroke`, `en_peak_power`, `en_engine_type`, `en_aspiration`, `en_bore`, `en_compression_ratio`, `en_peak_torque`, `en_direct_injection`, `en_fuel_type`, `dm_length`, `dm_height`, `dm_width`, `dm_kerb_weight`, `dm_front_thread`, `dm_rear_thread`, `dm_wheel_base`, `dm_fuel_tank`, `br_front`, `br_rear`, `sus_front`, `sus_rear`, `tw_front`, `tw_rear`, `tw_front_rim`, `tw_rear_rim`) VALUES
(197, 'Hyundai', 'i10', '2012', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(198, 'Hyundai', 'i10', '2013', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(199, 'Hyundai', 'i10', '2013', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(200, 'Hyundai', 'i10', '2014', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(201, 'Hyundai', 'i10', '2014', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(202, 'Hyundai', 'i10', '2015', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(203, 'Hyundai', 'i10', '2015', 'Automatic', '1.1', 'Hatchback', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(204, 'Hyundai', 'i10', '2015', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(205, 'Hyundai', 'i10', '2016', 'Automatic', '1.1', 'Epsilon', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(206, 'Hyundai', 'i10', '2016', 'Automatic', '1.2', 'Kappa', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(207, 'Hyundai', 'i10 Kappa', '2012', 'Automatic', '1.2', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(208, 'Hyundai', 'i10 Kappa', '2015', 'Automatic', '1.3', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(209, 'Hyundai', 'i30', '2009', 'Automatic', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(210, 'Hyundai', 'i30', '2009', 'Automatic', '2', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(211, 'Hyundai', 'i30', '2009', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(212, 'Hyundai', 'i30', '2010', 'Automatic', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(213, 'Hyundai', 'i30', '2010', 'Automatic', '2', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(214, 'Hyundai', 'i30', '2010', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(215, 'Hyundai', 'i30', '2014', 'Automatic', '1.8', 'Sport', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(216, 'Hyundai', 'i30', '2014', 'Automatic', '1.8', 'Executive', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(217, 'Hyundai', 'i30', '2015', 'Automatic', '1.8', 'Sport', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(218, 'Hyundai', 'i30', '2015', 'Automatic', '1.8', 'Executive', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(219, 'Hyundai', 'i40', '2013', 'Automatic', '2', 'GDI', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(220, 'Hyundai', 'i40', '2014', 'Automatic', '2', 'GDI', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(221, 'Hyundai', 'i40', '2015', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(222, 'Hyundai', 'IONIQ', '2016', 'Automatic', '1.6', 'Hybrid', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(223, 'Hyundai', 'IONIQ', '2017', 'Automatic', '1.6', 'Hybrid', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(224, 'Hyundai', 'Matrix', '2000', 'Automatic', '1.6', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(225, 'Hyundai', 'Matrix', '2001', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(226, 'Hyundai', 'Matrix', '2002', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(227, 'Hyundai', 'Matrix', '2002', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(228, 'Hyundai', 'Matrix', '2003', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(229, 'Hyundai', 'Matrix', '2003', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(230, 'Hyundai', 'Matrix', '2003', 'Manual', '1.6', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(231, 'Hyundai', 'Matrix', '2004', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(232, 'Hyundai', 'Matrix', '2004', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(233, 'Hyundai', 'Matrix', '2004', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(234, 'Hyundai', 'Matrix', '2005', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(235, 'Hyundai', 'Matrix', '2005', 'Automatic', '1.8', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(236, 'Hyundai', 'Matrix', '2005', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(237, 'Hyundai', 'Matrix', '2006', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(238, 'Hyundai', 'Matrix', '2006', 'Automatic', '1.8', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(239, 'Hyundai', 'Matrix', '2006', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(240, 'Hyundai', 'Matrix', '2007', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(241, 'Hyundai', 'Matrix', '2007', 'Automatic', '1.8', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(242, 'Hyundai', 'Matrix', '2007', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(243, 'Hyundai', 'Matrix', '2008', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(244, 'Hyundai', 'Matrix', '2008', 'Automatic', '1.8', 'GLA', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(245, 'Hyundai', 'Matrix', '2008', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(246, 'Hyundai', 'Matrix', '2009', 'Automatic', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(247, 'Hyundai', 'Matrix', '2009', 'Manual', '1.6', 'GL', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(248, 'Hyundai', 'Matrix', '2010', 'Automatic', '1.6', 'Hatchback', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(249, 'Hyundai', 'MD Elantra', '2015', 'Automatic', '1.8', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(250, 'Hyundai', 'Roadrunner', '2015', 'Manual', '4', 'Coaster', 'Bus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(251, 'Hyundai', 'Santa FE', '2001', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(252, 'Hyundai', 'Santa FE', '2002', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(253, 'Hyundai', 'Santa FE', '2003', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(254, 'Hyundai', 'Santa FE', '2004', 'Automatic', '2.4', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(255, 'Hyundai', 'Santa FE', '2004', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(256, 'Hyundai', 'Santa FE', '2005', 'Automatic', '2.4', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(257, 'Hyundai', 'Santa FE', '2005', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(258, 'Hyundai', 'Santa FE', '2007', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(259, 'Hyundai', 'Santa FE', '2007', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(260, 'Hyundai', 'Santa FE', '2008', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(261, 'Hyundai', 'Santa FE', '2008', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(262, 'Hyundai', 'Santa FE', '2009', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(263, 'Hyundai', 'Santa FE', '2009', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(264, 'Hyundai', 'Santa FE', '2010', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(265, 'Hyundai', 'Santa FE', '2010', 'Automatic', '2.4', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(266, 'Hyundai', 'Santa FE', '2010', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(267, 'Hyundai', 'Santa FE', '2011', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(268, 'Hyundai', 'Santa FE', '2011', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(269, 'Hyundai', 'Santa FE', '2012', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(270, 'Hyundai', 'Santa FE', '2012', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(271, 'Hyundai', 'Santa FE', '2013', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(272, 'Hyundai', 'Santa FE', '2013', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(273, 'Hyundai', 'Santa FE', '2013', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(274, 'Hyundai', 'Santa FE', '2013', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(275, 'Hyundai', 'Santa FE', '2014', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(276, 'Hyundai', 'Santa FE', '2014', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(277, 'Hyundai', 'Santa FE', '2014', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(278, 'Hyundai', 'Santa FE', '2015', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(279, 'Hyundai', 'Santa FE', '2015', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(280, 'Hyundai', 'Santa FE', '2015', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(281, 'Hyundai', 'Santa FE', '2015', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(282, 'Hyundai', 'Santa FE', '2016', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(283, 'Hyundai', 'Santa FE', '2016', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(284, 'Hyundai', 'Santa FE', '2016', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(285, 'Hyundai', 'Santa FE', '2017', 'Automatic', '2.2', 'CRDi', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(286, 'Hyundai', 'Santa FE', '2017', 'Automatic', '2.4', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(287, 'Hyundai', 'Santa FE', '2017', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(288, 'Hyundai', 'Scoupe', '1990', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(289, 'Hyundai', 'Scoupe', '1990', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(290, 'Hyundai', 'Scoupe', '1991', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(291, 'Hyundai', 'Scoupe', '1991', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(292, 'Hyundai', 'Scoupe', '1992', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(293, 'Hyundai', 'Scoupe', '1992', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(294, 'Hyundai', 'Scoupe', '1993', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(295, 'Hyundai', 'Scoupe', '1993', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(296, 'Hyundai', 'Scoupe', '1994', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(297, 'Hyundai', 'Scoupe', '1994', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(298, 'Hyundai', 'Scoupe', '1995', 'Automatic', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(299, 'Hyundai', 'Scoupe', '1995', 'Manual', '1.5', 'LS', 'Coupe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(300, 'Hyundai', 'Sonata', '1991', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(301, 'Hyundai', 'Sonata', '1991', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(302, 'Hyundai', 'Sonata', '1992', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(303, 'Hyundai', 'Sonata', '1992', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(304, 'Hyundai', 'Sonata', '1993', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(305, 'Hyundai', 'Sonata', '1993', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(306, 'Hyundai', 'Sonata', '1994', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(307, 'Hyundai', 'Sonata', '1994', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(308, 'Hyundai', 'Sonata', '1995', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(309, 'Hyundai', 'Sonata', '1995', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(310, 'Hyundai', 'Sonata', '1996', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(311, 'Hyundai', 'Sonata', '1996', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(312, 'Hyundai', 'Sonata', '1997', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(313, 'Hyundai', 'Sonata', '1997', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(314, 'Hyundai', 'Sonata', '1998', 'Automatic', '2', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(315, 'Hyundai', 'Sonata', '1998', 'Manual', '1.8', 'GL', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(316, 'Hyundai', 'Sonata', '2000', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(317, 'Hyundai', 'Sonata', '2001', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(318, 'Hyundai', 'Sonata', '2002', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(319, 'Hyundai', 'Sonata', '2003', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(320, 'Hyundai', 'Sonata', '2003', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(321, 'Hyundai', 'Sonata', '2004', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(322, 'Hyundai', 'Sonata', '2004', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(323, 'Hyundai', 'Sonata', '2005', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(324, 'Hyundai', 'Sonata', '2005', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(325, 'Hyundai', 'Sonata', '2006', 'Automatic', '2', 'NF', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(326, 'Hyundai', 'Sonata', '2006', 'Automatic', '2.4', 'NF', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(327, 'Hyundai', 'Sonata', '2007', 'Automatic', '2', 'NF', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(328, 'Hyundai', 'Sonata', '2007', 'Automatic', '2.4', 'NF', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(329, 'Hyundai', 'Sonata', '2008', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(330, 'Hyundai', 'Sonata', '2008', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(331, 'Hyundai', 'Sonata', '2009', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(332, 'Hyundai', 'Sonata', '2009', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(333, 'Hyundai', 'Sonata', '2010', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(334, 'Hyundai', 'Sonata', '2010', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(335, 'Hyundai', 'Sonata', '2011', 'Automatic', '2', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(336, 'Hyundai', 'Sonata', '2011', 'Automatic', '2.4', '', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(337, 'Hyundai', 'Sonata', '2012', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(338, 'Hyundai', 'Sonata', '2012', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(339, 'Hyundai', 'Sonata', '2012', 'Automatic', '2', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(340, 'Hyundai', 'Sonata', '2012', 'Automatic', '2.4', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(341, 'Hyundai', 'Sonata', '2012', 'Automatic', '2.4', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(342, 'Hyundai', 'Sonata', '2013', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(343, 'Hyundai', 'Sonata', '2013', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(344, 'Hyundai', 'Sonata', '2013', 'Automatic', '2', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(345, 'Hyundai', 'Sonata', '2013', 'Automatic', '2.4', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(346, 'Hyundai', 'Sonata', '2013', 'Automatic', '2.4', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(347, 'Hyundai', 'Sonata', '2014', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(348, 'Hyundai', 'Sonata', '2014', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(349, 'Hyundai', 'Sonata', '2014', 'Automatic', '2', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(350, 'Hyundai', 'Sonata', '2014', 'Automatic', '2.4', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(351, 'Hyundai', 'Sonata', '2014', 'Automatic', '2.4', 'Sport', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(352, 'Hyundai', 'Sonata', '2015', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(353, 'Hyundai', 'Sonata', '2015', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(354, 'Hyundai', 'Sonata', '2016', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(355, 'Hyundai', 'Sonata', '2016', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(356, 'Hyundai', 'Sonata', '2017', 'Automatic', '2', 'Elegance', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(357, 'Hyundai', 'Sonata', '2017', 'Automatic', '2', 'Executive', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(358, 'Hyundai', 'Starex', '2015', 'Automatic', '2.5', '', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(359, 'Hyundai', 'Starex', '2014', 'Automatic', '2.5', '', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(360, 'Hyundai', 'Terracan', '2002', 'Automatic', '3.5', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(361, 'Hyundai', 'Trajet', '1999', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(362, 'Hyundai', 'Trajet', '2000', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(363, 'Hyundai', 'Trajet', '2000', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(364, 'Hyundai', 'Trajet', '2000', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(365, 'Hyundai', 'Trajet', '2001', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(366, 'Hyundai', 'Trajet', '2001', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(367, 'Hyundai', 'Trajet', '2001', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(368, 'Hyundai', 'Trajet', '2002', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(369, 'Hyundai', 'Trajet', '2002', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(370, 'Hyundai', 'Trajet', '2002', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(371, 'Hyundai', 'Trajet', '2003', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(372, 'Hyundai', 'Trajet', '2003', 'Automatic', '2.5', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(373, 'Hyundai', 'Trajet', '2003', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(374, 'Hyundai', 'Trajet', '2004', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(375, 'Hyundai', 'Trajet', '2004', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(376, 'Hyundai', 'Trajet', '2005', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(377, 'Hyundai', 'Trajet', '2005', 'Automatic', '2', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(378, 'Hyundai', 'Trajet', '2006', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(379, 'Hyundai', 'Trajet', '2006', 'Automatic', '2', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(380, 'Hyundai', 'Trajet', '2006', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(381, 'Hyundai', 'Trajet', '2007', 'Automatic', '2', 'GL', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(382, 'Hyundai', 'Trajet', '2007', 'Automatic', '2', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(383, 'Hyundai', 'Trajet', '2007', 'Automatic', '2.7', 'GLS', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(384, 'Hyundai', 'Trajet', '2008', 'Automatic', '2.7', '', 'MPV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(385, 'Hyundai', 'Tranz', '2015', 'Manual', '4', '', 'Design Bus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(386, 'Hyundai', 'Tucson', '2004', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(387, 'Hyundai', 'Tucson', '2005', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(388, 'Hyundai', 'Tucson', '2005', 'Automatic', '2.7', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(389, 'Hyundai', 'Tucson', '2006', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(390, 'Hyundai', 'Tucson', '2006', 'Automatic', '2.7', 'GLS', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(391, 'Hyundai', 'Tucson', '2007', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(392, 'Hyundai', 'Tucson', '2008', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(393, 'Hyundai', 'Tucson', '2009', 'Automatic', '2', '', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(394, 'Hyundai', 'Tucson', '2010', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(395, 'Hyundai', 'Tucson', '2010', 'Automatic', '2', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(396, 'Hyundai', 'Tucson', '2010', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(397, 'Hyundai', 'Tucson', '2011', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(398, 'Hyundai', 'Tucson', '2011', 'Automatic', '2', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(399, 'Hyundai', 'Tucson', '2011', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(400, 'Hyundai', 'Tucson', '2012', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(401, 'Hyundai', 'Tucson', '2012', 'Automatic', '2', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(402, 'Hyundai', 'Tucson', '2012', 'Automatic', '2', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(403, 'Hyundai', 'Tucson', '2012', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(404, 'Hyundai', 'Tucson', '2012', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(405, 'Hyundai', 'Tucson', '2013', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(406, 'Hyundai', 'Tucson', '2013', 'Automatic', '2', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(407, 'Hyundai', 'Tucson', '2013', 'Automatic', '2', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(408, 'Hyundai', 'Tucson', '2013', 'Automatic', '2.4', 'Premium', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(409, 'Hyundai', 'Tucson', '2013', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(410, 'Hyundai', 'Tucson', '2014', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(411, 'Hyundai', 'Tucson', '2014', 'Automatic', '2', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(412, 'Hyundai', 'Tucson', '2014', 'Automatic', '2', 'Sport', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(413, 'Hyundai', 'Tucson', '2014', 'Automatic', '2.4', 'Executive Plus', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(414, 'Hyundai', 'Tucson', '2015', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(415, 'Hyundai', 'Tucson', '2015', 'Automatic', '2', 'Executive', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(416, 'Hyundai', 'Tucson', '2015', 'Automatic', '2', 'Sport', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(417, 'Hyundai', 'Tucson', '2016', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(418, 'Hyundai', 'Tucson', '2016', 'Automatic', '2', 'Executive', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(419, 'Hyundai', 'Tucson', '2017', 'Automatic', '1.6', 'Turbo', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(420, 'Hyundai', 'Tucson', '2017', 'Automatic', '2', 'Elegance', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(421, 'Hyundai', 'Tucson', '2017', 'Automatic', '2', 'Executive', 'SUV', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(422, 'Hyundai', 'Veloster', '2012', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(423, 'Hyundai', 'Veloster', '2012', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(424, 'Hyundai', 'Veloster', '2013', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(425, 'Hyundai', 'Veloster', '2013', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(426, 'Hyundai', 'Veloster', '2014', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(427, 'Hyundai', 'Veloster', '2014', 'Manual', '1.6', '', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(428, 'Hyundai', 'Veloster', '2015', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(429, 'Hyundai', 'Veloster', '2015', 'Automatic', '1.6', 'Turbo', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(430, 'Hyundai', 'Veloster', '2016', 'Automatic', '1.6', 'Premium', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(431, 'Hyundai', 'Veloster', '2016', 'Automatic', '1.6', 'Turbo', 'Hatchback', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(432, 'Hyundai', 'XG', '2001', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(433, 'Hyundai', 'XG', '2001', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(434, 'Hyundai', 'XG', '2002', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(435, 'Hyundai', 'XG', '2002', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(436, 'Hyundai', 'XG', '2003', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(437, 'Hyundai', 'XG', '2003', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(438, 'Hyundai', 'XG', '2004', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(439, 'Hyundai', 'XG', '2004', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(440, 'Hyundai', 'XG', '2005', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(441, 'Hyundai', 'XG', '2005', 'Automatic', '3', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(442, 'Hyundai', 'XG', '2006', 'Automatic', '2.5', 'GLS', 'Sedan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`ID`, `Name`) VALUES
(1, 'Kuala Lumpur'),
(2, 'Selangor'),
(3, 'Johor'),
(4, 'Penang'),
(5, 'Perak'),
(6, 'Kedah'),
(7, 'Negeri Sembilan'),
(8, 'Pahang'),
(9, 'Sabah'),
(10, 'Sarawak'),
(11, 'Terengganu'),
(12, 'Melaka'),
(13, 'Kelantan'),
(14, 'Perlis'),
(15, 'Putrajaya'),
(16, 'Labuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `ID` int(11) NOT NULL,
  `Type` int(11) DEFAULT NULL,
  `Group` int(11) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(5000) DEFAULT NULL,
  `Salutation` varchar(50) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(50) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `AddedOn` datetime DEFAULT NULL,
  `AddedBy` int(11) DEFAULT NULL,
  `ModifiedOn` datetime DEFAULT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `FBUserID` varchar(255) DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `IdentityCardNo` varchar(255) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `ProfilePic` varchar(255) NOT NULL,
  `State` int(11) NOT NULL,
  `MembershipType` varchar(255) NOT NULL,
  `Latitude` varchar(255) NOT NULL,
  `Longitude` varchar(255) NOT NULL,
  `MobileVerification` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Type`, `Group`, `Username`, `Password`, `Salutation`, `FirstName`, `LastName`, `MobileNo`, `EmailAddress`, `Status`, `AddedOn`, `AddedBy`, `ModifiedOn`, `ModifiedBy`, `FBUserID`, `LastLogin`, `IdentityCardNo`, `Address`, `ProfilePic`, `State`, `MembershipType`, `Latitude`, `Longitude`, `MobileVerification`) VALUES
(1, 1, 1, 'su', '$2a$08$nFHGkaIbEleYhJifzhhEE.lG8.pX3KmWy3ESxo95s6wb9fR.f0QqO', NULL, 'Administrator', 'Administrator', '+60127872389', 'suhucp@ruhaizat.my', 2, '2017-03-01 00:00:00', 2017, NULL, NULL, NULL, '2017-06-20 14:43:04', '880805-01-5137', 'Malaysian Institute of Road Safety Research (MIROS) Jalan TKS 1 Taman Kajang Sentral Kajang Selangor Malaysia', 'ejen.jpg', 2, 'Premium', '2.9773322', '101.79753519999997', 1),
(10, NULL, 2, 'mruhaizat88@gmail.com', '$2a$08$xlebgSdW7cZeqOHrbe12JuEn6TcCL8JXfeiKhQ6x.iivw6O5j5jZ6', NULL, 'Muhammad Ruhaizat', 'Abd Ghani', '', 'me@ruhaizat.my', 2, '2017-05-01 00:00:00', NULL, NULL, NULL, NULL, '2017-05-21 11:35:11', '', 'Pangsapuri Angkasa Indah Kajang Jalan Angkasa Indah 2a Taman Angkasa Indah Kajang Selangor Malaysia', 'me_bio.jpg', 2, 'Basic', '3.0001045', '101.79944150000006', 0),
(11, 2, 2, NULL, NULL, NULL, 'Muhammad Ruhaizat', 'Abd Ghani', '+60127872389', 'mruhaizat88@gmail.com', 2, '2017-05-01 00:00:00', NULL, NULL, NULL, NULL, '2017-06-11 16:10:06', '888888-88-8888', 'Ibrahim Maju Restaurant Jalan Saga Emas 8A Taman Saga Emas Kajang Selangor Malaysia', 'https://scontent.xx.fbcdn.net/v/t1.0-1/12669527_10208832951326298_8714415375291058518_n.jpg?oh=bde87423175c1cf9888abd03ebbcc101&oe=59DCF68C', 2, 'Basic', '2.9977952', '101.79856489999997', 0),
(27, 1, 2, NULL, '$2a$08$WJKQsICtKQVAaavZ63xy5.4Qy79bo9J0S2a4r4d3AEN.mx2KmtgJy', NULL, 'M. Izat', 'A. Ghani', '', 'myfreelanceprogrammer@gmail.com', 2, '2017-05-24 09:21:50', NULL, NULL, NULL, NULL, '2017-05-24 09:22:14', '1234', 'Malaysian Institute of Road Safety Research (MIROS) Jalan TKS 1 Taman Kajang Sentral Kajang Selangor Malaysia', 'Safer2Schools_Logo2.png', 2, 'Basic', '2.9773322', '101.79753519999997', 0),
(28, 1, 2, NULL, '$2a$08$X3KQrBvW/1UWzRoUhuy7gOUnSlu8uUyoItxe5FsYlh5r29SwalSgC', NULL, 'Kenny', 'Lim', '0163046229', 'kenny@kni.com.my', 2, '2017-05-28 01:04:38', NULL, NULL, NULL, NULL, '2017-05-28 16:21:33', '88', 'Aman Heights Condominium Taman Bukit Serdang Seri Kembangan Selangor Malaysia', 'person-021.jpg', 1, 'Basic', '3.0266654', '101.69214009999996', 0),
(29, 2, 2, NULL, NULL, NULL, 'Muhammad Ruhaizat', 'Abd Ghani', NULL, 'undefined', 2, '2017-05-29 08:09:52', NULL, NULL, NULL, NULL, '2017-05-29 12:27:42', '', '', 'https://scontent.xx.fbcdn.net/v/t1.0-1/12669527_10208832951326298_8714415375291058518_n.jpg?oh=c26fc01bdb3654edc38102f351b02c59&oe=59B5698C', 0, 'Basic', '', '', 0),
(40, 1, 2, NULL, '$2a$08$.YRr9eNbCXDmdriYga.rR.1JTwmkvrqCSn4XFoS8dMOOTGdyyGaZi', NULL, 'User 1', 'HUCP', '60127872389', 'user1hucp@ruhaizat.my', 2, '2017-05-29 15:15:47', NULL, NULL, NULL, NULL, '2017-06-20 14:37:51', '000000-00-0000', 'Tanjung Malim Perak Malaysia', 'NgopiUni.png', 5, 'Basic', '3.705841499999999', '101.50491629999999', 1),
(41, 1, 2, NULL, '$2a$08$IZI/wPfS9.d4w7bozQ2HnepAGuDvDX1Uu6R2szLnLTM24oVLPgU5K', NULL, NULL, NULL, NULL, 'user2hucp@ruhaizat.my', 1, '2017-06-05 15:10:32', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic', '', '', 0),
(42, 2, 2, NULL, NULL, NULL, 'Lim', 'Kenny', NULL, 'limperz@hotmail.com', 2, '2017-06-09 16:11:09', NULL, NULL, NULL, NULL, '2017-06-09 16:11:23', '', '', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c50.50.621.621/p720x720/942106_10152436871396686_117385609_n.jpg?oh=cc0e6a0e3f76a0e0ac9e77f64c50d864&oe=59A3B3BA', 0, 'Basic', '', '', 0),
(43, 1, 2, NULL, '$2a$08$R/R5st8jqH0RXHd2YpJOC.yMP5EPBbXxmMgCprvGIqA1dC/MTCJwC', NULL, NULL, NULL, NULL, 'user3hucp@ruhaizat.my', 1, '2017-06-13 15:18:34', NULL, NULL, NULL, NULL, NULL, '', '', 'default.jpg', 0, 'Basic', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifyemail`
--

CREATE TABLE IF NOT EXISTS `tbl_verifyemail` (
  `ID` int(11) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Token` varchar(100) NOT NULL,
  `IsVerify` int(11) NOT NULL,
  `ExpiryDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifyemail`
--

INSERT INTO `tbl_verifyemail` (`ID`, `EmailAddress`, `UserID`, `Token`, `IsVerify`, `ExpiryDate`) VALUES
(10, 'myfreelanceprogrammer@gmail.com', 24, 'FD27YNxWHU1u0KfgzCGpOeQ3VEsaXMIb9dnlqLRkcT45Amw8vr', 0, '2017-05-27 00:00:00'),
(11, 'myfreelanceprogrammer@gmail.com', 25, 'FVyQcAl3NCEznYMdXeKPrjBkv4hx0g1JD5tfHoWGI9OpiRwSqb', 0, '2017-05-27 00:00:00'),
(12, 'myfreelanceprogrammer@gmail.com', 26, 'qHlVez4ASm1GnZcPYLCWQa0p3KNf5UsRrI6JhokOtTMvF2idDx', 0, '2017-05-27 00:00:00'),
(13, 'myfreelanceprogrammer@gmail.com', 27, 'aBhmiqGueP3Z0R5TSEofxdNJVv4rYkUlg61wOLyQAIsn9cW7Cz', 1, '2017-05-27 00:00:00'),
(14, 'kenny@kni.com.my', 28, 'Jrqgf8v1C0blwINnskHGmFAcexDBET3oOM964hyQSWUP7KjdVa', 1, '2017-05-31 00:00:00'),
(38, 'user1hucp@ruhaizat.my', 40, 'TnCzxP1iH93EZKDg5wQfMUJoyNSOWGtus7BY2qIvp6kblRae0r', 1, '2017-06-01 00:00:00'),
(39, 'user2hucp@ruhaizat.my', 41, '3VvAtq5KLE2FHNXkO0RrWaQCPfsznTM4Gh7YmwxIoJBie1juUl', 0, '2017-06-07 15:10:33'),
(40, 'user3hucp@ruhaizat.my', 43, '8mfeaLhJjpI9ukHWFgdTcCsyYlOXVNqQA4U2Z0PnB37oMbEvwK', 0, '2017-06-16 15:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifymobile`
--

CREATE TABLE IF NOT EXISTS `tbl_verifymobile` (
  `ID` int(11) NOT NULL,
  `MobileNo` varchar(255) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Token` varchar(10) NOT NULL,
  `IsVerify` int(11) NOT NULL,
  `ExpiryDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifymobile`
--

INSERT INTO `tbl_verifymobile` (`ID`, `MobileNo`, `UserID`, `Token`, `IsVerify`, `ExpiryDate`) VALUES
(1, '0123456789', 40, '909283', 0, '2017-06-03 07:24:06'),
(2, '0123456789', 40, '819350', 0, '2017-06-03 07:26:06'),
(3, '0123456789', 40, '534221', 0, '2017-06-03 07:27:16'),
(4, '0123456789', 40, '507989', 0, '2017-06-03 07:29:51'),
(5, '0123456789', 40, '926137', 0, '2017-06-03 07:30:37'),
(6, '0123456789', 40, '207069', 0, '2017-06-03 07:31:05'),
(7, '0123456789', 40, '892741', 0, '2017-06-03 07:31:47'),
(8, '0123456789', 40, '319338', 0, '2017-06-03 07:34:49'),
(9, '0123456789', 40, '667876', 0, '2017-06-03 07:36:06'),
(10, '0123456789', 40, '913804', 0, '2017-06-03 07:37:35'),
(11, '0123456789', 40, '276306', 0, '2017-06-03 07:38:00'),
(12, '0123456789', 40, '783700', 0, '2017-06-03 07:39:19'),
(13, '0123456789', 40, '687117', 1, '2017-06-03 07:47:50'),
(14, '0123456789', 40, '119277', 0, '2017-06-03 08:02:26'),
(15, '0123456789', 40, '796454', 0, '2017-06-03 08:02:48'),
(16, '0123456789', 40, '964598', 0, '2017-06-03 08:05:56'),
(17, '0123456789', 40, '595874', 0, '2017-06-03 08:09:43'),
(18, '0123456789', 40, '941466', 0, '2017-06-03 08:10:38'),
(19, '0123456789', 40, '954626', 0, '2017-06-03 08:13:08'),
(20, '0123456789', 40, '783472', 0, '2017-06-03 08:15:16'),
(21, '0123456789', 40, '508834', 0, '2017-06-03 08:22:41'),
(22, '0123456789', 40, '177669', 0, '2017-06-03 08:23:07'),
(23, '0123456789', 40, '123574', 0, '2017-06-03 08:24:04'),
(24, '0123456789', 40, '938864', 0, '2017-06-03 08:24:55'),
(25, '0123456789', 40, '187026', 0, '2017-06-03 08:25:42'),
(26, '0123456789', 40, '492073', 0, '2017-06-03 08:26:41'),
(27, '0123456789', 40, '909478', 0, '2017-06-03 08:27:06'),
(28, '0123456789', 40, '388415', 0, '2017-06-03 08:28:12'),
(29, '+60127872389', 40, '162961', 0, '2017-06-03 09:10:48'),
(30, '60127872389', 40, '679934', 1, '2017-06-03 09:11:11'),
(31, '60127872389', 40, '200408', 0, '2017-06-03 09:12:43'),
(32, '60127872389', 40, '182120', 0, '2017-06-03 09:14:58'),
(33, '60127872389', 40, '418830', 0, '2017-06-03 09:15:54'),
(34, '60127872389', 40, '704262', 0, '2017-06-03 09:16:12'),
(35, '60127872389', 40, '525527', 0, '2017-06-03 09:19:18'),
(36, '60127872389', 40, '396087', 0, '2017-06-03 09:19:22'),
(37, '60127872389', 40, '922788', 0, '2017-06-03 09:19:24'),
(38, '60127872389', 40, '560950', 0, '2017-06-03 09:19:41'),
(39, '60127872389', 40, '207971', 0, '2017-06-03 09:19:42'),
(40, '60127872389', 40, '751778', 0, '2017-06-03 09:21:05'),
(41, '60127872389', 40, '304895', 0, '2017-06-03 09:21:07'),
(42, '60127872389', 40, '968687', 0, '2017-06-03 09:21:14'),
(43, '60127872389', 40, '189819', 0, '2017-06-03 09:21:54'),
(44, '60127872389', 40, '488719', 0, '2017-06-03 09:21:55'),
(45, '60127872389', 40, '951230', 0, '2017-06-03 09:22:03'),
(46, '60127872389', 40, '743827', 0, '2017-06-03 09:37:35'),
(47, '60127872389', 40, '218848', 0, '2017-06-03 09:37:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_listing`
--
ALTER TABLE `tbl_listing`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_listingimage`
--
ALTER TABLE `tbl_listingimage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_recentlyviewed`
--
ALTER TABLE `tbl_recentlyviewed`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_specificationmaster`
--
ALTER TABLE `tbl_specificationmaster`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_verifyemail`
--
ALTER TABLE `tbl_verifyemail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_verifymobile`
--
ALTER TABLE `tbl_verifymobile`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_listing`
--
ALTER TABLE `tbl_listing`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_listingimage`
--
ALTER TABLE `tbl_listingimage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_recentlyviewed`
--
ALTER TABLE `tbl_recentlyviewed`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_specificationmaster`
--
ALTER TABLE `tbl_specificationmaster`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=443;
--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_verifyemail`
--
ALTER TABLE `tbl_verifyemail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_verifymobile`
--
ALTER TABLE `tbl_verifymobile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
