-- membuat database dengan mana data-mahasiswa
CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL
);


INSERT INTO `siswa` (`id`, `nis`, `nama`, `alamat`, `jurusan`) VALUES
(1, '1111111', 'Sabrina Lydia', 'Medan', 'IPA'),
(2, '1111112', 'Zelda Elma', 'Balige', 'IPS'),
(3, '1111113', 'Dewi Mardani', 'Kaltim', 'Bahasa');

ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);


ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3
COMMIT;
