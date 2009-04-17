/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */

#import <Cocoa/Cocoa.h>

#import <TProtocol.h>
#import <TApplicationException.h>
#import <TProtocolUtil.h>


@interface ThriftHandle : NSObject {
  int64_t __id;

  BOOL __id_isset;
}

- (id) initWithId: (int64_t) id;

- (void) read: (id <TProtocol>) inProtocol;
- (void) write: (id <TProtocol>) outProtocol;

- (int64_t) id;
- (void) setId: (int64_t) id;
- (BOOL) idIsSet;

@end

@interface Pathname : NSObject {
  NSString * __pathname;

  BOOL __pathname_isset;
}

- (id) initWithPathname: (NSString *) pathname;

- (void) read: (id <TProtocol>) inProtocol;
- (void) write: (id <TProtocol>) outProtocol;

- (NSString *) pathname;
- (void) setPathname: (NSString *) pathname;
- (BOOL) pathnameIsSet;

@end

@interface FileStatus : NSObject {
  NSString * __path;
  int64_t __length;
  BOOL __isdir;
  int16_t __block_replication;
  int64_t __blocksize;
  int64_t __modification_time;
  NSString * __permission;
  NSString * __owner;
  NSString * __group;

  BOOL __path_isset;
  BOOL __length_isset;
  BOOL __isdir_isset;
  BOOL __block_replication_isset;
  BOOL __blocksize_isset;
  BOOL __modification_time_isset;
  BOOL __permission_isset;
  BOOL __owner_isset;
  BOOL __group_isset;
}

- (id) initWithPath: (NSString *) path length: (int64_t) length isdir: (BOOL) isdir block_replication: (int16_t) block_replication blocksize: (int64_t) blocksize modification_time: (int64_t) modification_time permission: (NSString *) permission owner: (NSString *) owner group: (NSString *) group;

- (void) read: (id <TProtocol>) inProtocol;
- (void) write: (id <TProtocol>) outProtocol;

- (NSString *) path;
- (void) setPath: (NSString *) path;
- (BOOL) pathIsSet;

- (int64_t) length;
- (void) setLength: (int64_t) length;
- (BOOL) lengthIsSet;

- (BOOL) isdir;
- (void) setIsdir: (BOOL) isdir;
- (BOOL) isdirIsSet;

- (int16_t) block_replication;
- (void) setBlock_replication: (int16_t) block_replication;
- (BOOL) block_replicationIsSet;

- (int64_t) blocksize;
- (void) setBlocksize: (int64_t) blocksize;
- (BOOL) blocksizeIsSet;

- (int64_t) modification_time;
- (void) setModification_time: (int64_t) modification_time;
- (BOOL) modification_timeIsSet;

- (NSString *) permission;
- (void) setPermission: (NSString *) permission;
- (BOOL) permissionIsSet;

- (NSString *) owner;
- (void) setOwner: (NSString *) owner;
- (BOOL) ownerIsSet;

- (NSString *) group;
- (void) setGroup: (NSString *) group;
- (BOOL) groupIsSet;

@end

@interface BlockLocation : NSObject {
  NSArray * __hosts;
  NSArray * __names;
  int64_t __offset;
  int64_t __length;

  BOOL __hosts_isset;
  BOOL __names_isset;
  BOOL __offset_isset;
  BOOL __length_isset;
}

- (id) initWithHosts: (NSArray *) hosts names: (NSArray *) names offset: (int64_t) offset length: (int64_t) length;

- (void) read: (id <TProtocol>) inProtocol;
- (void) write: (id <TProtocol>) outProtocol;

- (NSArray *) hosts;
- (void) setHosts: (NSArray *) hosts;
- (BOOL) hostsIsSet;

- (NSArray *) names;
- (void) setNames: (NSArray *) names;
- (BOOL) namesIsSet;

- (int64_t) offset;
- (void) setOffset: (int64_t) offset;
- (BOOL) offsetIsSet;

- (int64_t) length;
- (void) setLength: (int64_t) length;
- (BOOL) lengthIsSet;

@end

@interface MalformedInputException : NSException {
  NSString * __message;

  BOOL __message_isset;
}

- (id) initWithMessage: (NSString *) message;

- (void) read: (id <TProtocol>) inProtocol;
- (void) write: (id <TProtocol>) outProtocol;

- (NSString *) message;
- (void) setMessage: (NSString *) message;
- (BOOL) messageIsSet;

@end

@interface ThriftIOException : NSException {
  NSString * __message;

  BOOL __message_isset;
}

- (id) initWithMessage: (NSString *) message;

- (void) read: (id <TProtocol>) inProtocol;
- (void) write: (id <TProtocol>) outProtocol;

- (NSString *) message;
- (void) setMessage: (NSString *) message;
- (BOOL) messageIsSet;

@end

@protocol ThriftHadoopFileSystem <NSObject>
- (void) setInactivityTimeoutPeriod: (int64_t) periodInSeconds;  // throws TException
- (void) shutdown: (int32_t) status;  // throws TException
- (ThriftHandle *) create: (Pathname *) path;  // throws ThriftIOException *, TException
- (ThriftHandle *) createFile: (Pathname *) path : (int16_t) mode : (BOOL) overwrite : (int32_t) bufferSize : (int16_t) block_replication : (int64_t) blocksize;  // throws ThriftIOException *, TException
- (ThriftHandle *) open: (Pathname *) path;  // throws ThriftIOException *, TException
- (ThriftHandle *) append: (Pathname *) path;  // throws ThriftIOException *, TException
- (BOOL) write: (NSString *) data : (ThriftHandle *) handle;  // throws ThriftIOException *, TException
- (NSString *) read: (int32_t) size : (int64_t) offset : (ThriftHandle *) handle;  // throws ThriftIOException *, TException
- (BOOL) close: (ThriftHandle *) out;  // throws ThriftIOException *, TException
- (BOOL) rm: (Pathname *) path : (BOOL) recursive;  // throws ThriftIOException *, TException
- (BOOL) rename: (Pathname *) path : (Pathname *) dest;  // throws ThriftIOException *, TException
- (BOOL) mkdirs: (Pathname *) path;  // throws ThriftIOException *, TException
- (BOOL) exists: (Pathname *) path;  // throws ThriftIOException *, TException
- (FileStatus *) stat: (Pathname *) path;  // throws ThriftIOException *, TException
- (NSArray *) listStatus: (Pathname *) path;  // throws ThriftIOException *, TException
- (void) chmod: (Pathname *) path : (int16_t) mode;  // throws ThriftIOException *, TException
- (void) chown: (Pathname *) path : (NSString *) owner : (NSString *) group;  // throws ThriftIOException *, TException
- (void) setReplication: (Pathname *) path : (int16_t) replication;  // throws ThriftIOException *, TException
- (NSArray *) getFileBlockLocations: (Pathname *) path : (int64_t) start : (int64_t) length;  // throws ThriftIOException *, TException
@end

@interface ThriftHadoopFileSystemClient : NSObject <ThriftHadoopFileSystem> {
  id <TProtocol> inProtocol;
  id <TProtocol> outProtocol;
}
- (id) initWithProtocol: (id <TProtocol>) protocol;
- (id) initWithInProtocol: (id <TProtocol>) inProtocol outProtocol: (id <TProtocol>) outProtocol;
@end

@interface hadoopfsConstants {
}
@end
