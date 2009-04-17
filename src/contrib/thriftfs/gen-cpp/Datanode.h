/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
#ifndef Datanode_H
#define Datanode_H

#include <TProcessor.h>
#include "hdfs_types.h"

namespace hadoop { namespace api {

class DatanodeIf {
 public:
  virtual ~DatanodeIf() {}
  virtual void readBlock(BlockData& _return, const Block& block, const int64_t offset, const int32_t length) = 0;
};

class DatanodeNull : virtual public DatanodeIf {
 public:
  virtual ~DatanodeNull() {}
  void readBlock(BlockData& /* _return */, const Block& /* block */, const int64_t /* offset */, const int32_t /* length */) {
    return;
  }
};

class Datanode_readBlock_args {
 public:

  Datanode_readBlock_args() : offset(0), length(0) {
  }

  virtual ~Datanode_readBlock_args() throw() {}

  Block block;
  int64_t offset;
  int32_t length;

  struct __isset {
    __isset() : block(false), offset(false), length(false) {}
    bool block;
    bool offset;
    bool length;
  } __isset;

  bool operator == (const Datanode_readBlock_args & rhs) const
  {
    if (!(block == rhs.block))
      return false;
    if (!(offset == rhs.offset))
      return false;
    if (!(length == rhs.length))
      return false;
    return true;
  }
  bool operator != (const Datanode_readBlock_args &rhs) const {
    return !(*this == rhs);
  }

  bool operator < (const Datanode_readBlock_args & ) const;

  uint32_t read(apache::thrift::protocol::TProtocol* iprot);
  uint32_t write(apache::thrift::protocol::TProtocol* oprot) const;

};

class Datanode_readBlock_pargs {
 public:


  virtual ~Datanode_readBlock_pargs() throw() {}

  const Block* block;
  const int64_t* offset;
  const int32_t* length;

  uint32_t write(apache::thrift::protocol::TProtocol* oprot) const;

};

class Datanode_readBlock_result {
 public:

  Datanode_readBlock_result() {
  }

  virtual ~Datanode_readBlock_result() throw() {}

  BlockData success;
  IOException err;

  struct __isset {
    __isset() : success(false), err(false) {}
    bool success;
    bool err;
  } __isset;

  bool operator == (const Datanode_readBlock_result & rhs) const
  {
    if (!(success == rhs.success))
      return false;
    if (!(err == rhs.err))
      return false;
    return true;
  }
  bool operator != (const Datanode_readBlock_result &rhs) const {
    return !(*this == rhs);
  }

  bool operator < (const Datanode_readBlock_result & ) const;

  uint32_t read(apache::thrift::protocol::TProtocol* iprot);
  uint32_t write(apache::thrift::protocol::TProtocol* oprot) const;

};

class Datanode_readBlock_presult {
 public:


  virtual ~Datanode_readBlock_presult() throw() {}

  BlockData* success;
  IOException err;

  struct __isset {
    __isset() : success(false), err(false) {}
    bool success;
    bool err;
  } __isset;

  uint32_t read(apache::thrift::protocol::TProtocol* iprot);

};

class DatanodeClient : virtual public DatanodeIf {
 public:
  DatanodeClient(boost::shared_ptr<apache::thrift::protocol::TProtocol> prot) :
    piprot_(prot),
    poprot_(prot) {
    iprot_ = prot.get();
    oprot_ = prot.get();
  }
  DatanodeClient(boost::shared_ptr<apache::thrift::protocol::TProtocol> iprot, boost::shared_ptr<apache::thrift::protocol::TProtocol> oprot) :
    piprot_(iprot),
    poprot_(oprot) {
    iprot_ = iprot.get();
    oprot_ = oprot.get();
  }
  boost::shared_ptr<apache::thrift::protocol::TProtocol> getInputProtocol() {
    return piprot_;
  }
  boost::shared_ptr<apache::thrift::protocol::TProtocol> getOutputProtocol() {
    return poprot_;
  }
  void readBlock(BlockData& _return, const Block& block, const int64_t offset, const int32_t length);
  void send_readBlock(const Block& block, const int64_t offset, const int32_t length);
  void recv_readBlock(BlockData& _return);
 protected:
  boost::shared_ptr<apache::thrift::protocol::TProtocol> piprot_;
  boost::shared_ptr<apache::thrift::protocol::TProtocol> poprot_;
  apache::thrift::protocol::TProtocol* iprot_;
  apache::thrift::protocol::TProtocol* oprot_;
};

class DatanodeProcessor : virtual public apache::thrift::TProcessor {
 protected:
  boost::shared_ptr<DatanodeIf> iface_;
  virtual bool process_fn(apache::thrift::protocol::TProtocol* iprot, apache::thrift::protocol::TProtocol* oprot, std::string& fname, int32_t seqid);
 private:
  std::map<std::string, void (DatanodeProcessor::*)(int32_t, apache::thrift::protocol::TProtocol*, apache::thrift::protocol::TProtocol*)> processMap_;
  void process_readBlock(int32_t seqid, apache::thrift::protocol::TProtocol* iprot, apache::thrift::protocol::TProtocol* oprot);
 public:
  DatanodeProcessor(boost::shared_ptr<DatanodeIf> iface) :
    iface_(iface) {
    processMap_["readBlock"] = &DatanodeProcessor::process_readBlock;
  }

  virtual bool process(boost::shared_ptr<apache::thrift::protocol::TProtocol> piprot, boost::shared_ptr<apache::thrift::protocol::TProtocol> poprot);
  virtual ~DatanodeProcessor() {}
};

class DatanodeMultiface : virtual public DatanodeIf {
 public:
  DatanodeMultiface(std::vector<boost::shared_ptr<DatanodeIf> >& ifaces) : ifaces_(ifaces) {
  }
  virtual ~DatanodeMultiface() {}
 protected:
  std::vector<boost::shared_ptr<DatanodeIf> > ifaces_;
  DatanodeMultiface() {}
  void add(boost::shared_ptr<DatanodeIf> iface) {
    ifaces_.push_back(iface);
  }
 public:
  void readBlock(BlockData& _return, const Block& block, const int64_t offset, const int32_t length) {
    uint32_t sz = ifaces_.size();
    for (uint32_t i = 0; i < sz; ++i) {
      if (i == sz - 1) {
        ifaces_[i]->readBlock(_return, block, offset, length);
        return;
      } else {
        ifaces_[i]->readBlock(_return, block, offset, length);
      }
    }
  }

};

}} // namespace

#endif
